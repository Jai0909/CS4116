<?php
    session_start();
    include "config.php";
    $outgoing_id = $_SESSION['user_id'];
    $sql = "SELECT * FROM User WHERE NOT USER_ID = {$outgoing_id}";
    $query = mysqli_query($conn, $sql);
    $output = "";
    if(mysqli_num_rows($query) == 0){
        $output .= "No users are available to chat";
    }elseif(mysqli_num_rows($query) > 0){
        include "data.php";
    }
    echo $output;
?>