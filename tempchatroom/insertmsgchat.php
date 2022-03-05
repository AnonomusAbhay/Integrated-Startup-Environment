<?php 
 
    

    session_start();
 
    if(isset($_SESSION['Id'])){
        include_once "../connection.php";
        $outgoing_id = $_SESSION['Id'];
        $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);
        if(!empty($message)){
            $sql = mysqli_query($conn, "INSERT INTO `messages`( `incomingmsgid`, `outgoingmsgid`, `msg`)
                                        VALUES ({$incoming_id}, {$outgoing_id}, '{$message}')") or die();
            
        }
    }else{
         echo "<script> alert('Cannot run query');
         window.location.href='sign-up.php';</script>";
    }


    
?>