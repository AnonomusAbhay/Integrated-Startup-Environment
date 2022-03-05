<?php
include 'connection.php';
if(isset($_POST["signup"]))
{


// REGISTRATION

    $user_exist ="SELECT * FROM `login_signup` WHERE `Uname`='$_POST[username]' OR `Email`='$_POST[email]' ";
    $result=mysqli_query($conn,$user_exist);
    if($result){
         if(mysqli_num_rows($result)>0){
            $result_fetch=mysqli_fetch_assoc($result);
            if($result_fetch['Uname']==$_POST['username']){
                 echo "<script> alert('Username Already taken');
         window.location.href='sign-up.php';</script>";
            }
              else{
                     echo "<script> alert('Email Already taken');
         window.location.href='sign-up.php';</script>";
         }
         }
         else{
          $password=password_hash($_POST['pass'],PASSWORD_BCRYPT);
             $qurey="INSERT INTO `login_signup`( `Fullname`, `Uname`, `Email`, `password`, `Role`) VALUES ('$_POST[fullname]','$_POST[username]','$_POST[email]','$password','$_POST[role]')";
             if(mysqli_query($conn,$qurey)){
               
                  echo "<script> alert('Registraction Successfull');
                  window.location.href='index.php';
                  </script>";
             }
             else{
                  echo "<script> alert('Cannot  run query')
                  window.location.href='sign-up.php';</script>";
             }
            }
       
    }
    else{
         echo "<script> alert('Cannot run query');
         window.location.href='sign-up.php';</script>";
    }
}




session_start();
//     FOr login
    if(isset($_POST['loginu'])){
         
         $qurey = "SELECT * FROM `login_signup` WHERE `Uname`='$_POST[loginusername]'";
         
        $result= mysqli_query($conn,$qurey);
        if($result){
          if(mysqli_num_rows($result)==1){
             $result_fetch=mysqli_fetch_assoc($result);
             //function to verify encrypted password 
           
             if(password_verify($_POST['loginpass'],$result_fetch['password']))
             {
               $_SESSION['logged_in'] =true;
               $_SESSION['Id']=$result_fetch['Id'];
               $_SESSION['username']=$result_fetch['Uname'];
               echo"<script> 
                  alert('session julala');
                   window.location.href='index.php';</script>";
              

             }else
             {
                 echo "<script> alert('Incorrect password ');
                  window.location.href='sign-up.php';</script>";

             }
          }else{
               echo "<script> alert('Username not registered ');
                  window.location.href='sign-up.php';</script>";
          }

        }else{
               echo "<script> alert('Cannot  run query');
                  window.location.href='sign-up.php';</script>";
        }

    }

?>