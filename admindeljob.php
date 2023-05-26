<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin</title>
  <link rel="icon" type="image/x-icon" href="TrebbleLogo">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: rgb(36, 36, 36);">
<div><a href="logout.php" style="font-size: large; color: Yellow"><i class="bi bi-lock-fill"></i>Log Out</a></div>
<?php
include 'connection.php';
$user_id = $_GET['user_id'];
$sql = "DELETE FROM Job WHERE JOB_ID = $user_id";
if($conn->query($sql)){
    header("Location: admindisplay.php");
}
?>
</body>
</html>