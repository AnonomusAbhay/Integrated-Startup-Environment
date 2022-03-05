<?php
include('connection.php');
$sql="SELECT * FROM `login_signup`";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
    echo"$row[Uname]";
    $username=$row['Uname'];
    echo"
 <a href='tempchatroom/chatroomdesign.php?Id= ".$row['Id']." ' ><input type='submit' name='chatbtn' class='chatbtn' value='chat' /></a> "."<br>";



}
?>
     
