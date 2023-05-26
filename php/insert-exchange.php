<?php 
    session_start();
    if(isset($_SESSION['user_id'])){
        include_once "config.php";
        $outgoing_id = $_SESSION['user_id'];
        $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);
        if(!empty($message)){
            $sql = mysqli_query($conn, "INSERT INTO Messages (SENT_FROM_USER, SENT_TO_USER, CONTENT)
                                        VALUES ({$incoming_id}, {$outgoing_id}, '{$message}')") or die();
        }
        
    }    
?>