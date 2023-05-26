<?php
include 'connection.php';

session_start();
$org_id = $_SESSION["user_id"];
$job_id = $_GET["user_id"];
$sql2 = "DELETE FROM Job WHERE JOB_ID = $job_id AND ORG_ID = $org_id ";
    if($conn->query($sql2)){
                header("Location: orgHome.php");
            }

$conn->close();
?>