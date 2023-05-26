<?php
include 'connection.php';

session_start();
$user_id_1 = $_SESSION["user_id"];
$user_id_2 = $_GET["user_id"];
$sql2 = "DELETE FROM Friend WHERE (USER_ID_1 = $user_id_1 AND USER_ID_2 = $user_id_2) || (USER_ID_2 = $user_id_1 AND USER_ID_1 = $user_id_2)";
    if($conn->query($sql2)){
                header("Location: home.php");
            }

$conn->close();
?>