<?php 
    session_start();
     if(isset($_SESSION['Id'])){
       include_once "../connection.php";
        $outgoing_id = $_SESSION['Id'];
        $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
        $output = "";
        $sql = "SELECT * FROM messages LEFT JOIN `login_signup` ON `login_signup`.Id = messages.outgoingmsgid
                WHERE (outgoingmsgid = {$outgoing_id} AND incomingmsgid = {$incoming_id})
                OR (outgoingmsgid = {$incoming_id} AND incomingmsgid = {$outgoing_id}) ORDER BY msgid";
        $query = mysqli_query($conn, $sql);
    
        if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_assoc($query)){
                if($row['outgoingmsgid'] === $outgoing_id){
                    $output .=  '<div class="outmsgboxright">
                                    <div class="msgboxright">
                                       <h5>'. $row['msg'] .'</h5>
                                    </div>
                                </div>' ;

                }else{
                    $output .=  '<div class="msgboxleft"><h5>'.$row['msg'].'</h5></div>' ; 
                                             }
            }
        }else{
            $output .= '<div class="text">No messages are available. Once you send message they will appear here.</div>';
        }
        echo $output;
    }else{
        header("location: ../login_signup.php");
    }

?>