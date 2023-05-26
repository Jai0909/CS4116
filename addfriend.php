<?php
include 'connection.php';

session_start();
$user_id_1 = $_SESSION["user_id"];
$user_id_2 = $_GET["user_id"];
$sql2 = "INSERT INTO Friend (USER_ID_1, USER_ID_2) VALUES ($user_id_1, $user_id_2)";
    if($conn->query($sql2)){
                header("Location: home.php");
            }

$conn->close();
?>