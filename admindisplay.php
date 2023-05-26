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
<p style="font-size: 18px; line-height: 1.9; text-transform: uppercase; text-decoration: none; background: #ffd04f; padding: 5px 20px; display: inline-block;       color: black; margin-top: 15px; border-radius: 5px; text-align: center; margin-bottom: 2%; margin-left:45%;">Users</p>
<?php
include 'connection.php';
$sql1 = "SELECT * FROM User";
$result1 = mysqli_query($conn,$sql1);
if (mysqli_num_rows($result1) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result1)) {?>
  <style>
    /* Custom CSS styles for the feed */
    .job-entry {
      background-color: #989c99;
      border: 1px solid #ccc;
      padding: 10px;
      margin-left: 15%;
      margin-right: 15%;
      margin-bottom: 10px;
      border-radius: 5px;
    }
  </style>
  <div class="job-entry">
      <h2><?php echo "USER ID ".$row['USER_ID']."";?></h2>
      <p><?php echo "NAME ".$row['NAME']."";?></p>
      <a href="adminprofile.php?user_id=<?php echo $row['USER_ID']; ?>" class="btn btn-default">View Profile</a>
</div><?php
  }
}?><p style="font-size: 18px; line-height: 1.9; text-transform: uppercase; text-decoration: none; background: #ffd04f; padding: 5px 20px; display: inline-block;       color: black; margin-top: 15px; border-radius: 5px; text-align: center; margin-bottom: 2%; margin-left:45%;">Organizations</p><?php
$sql2 = "SELECT * FROM Organization";
$result2 = mysqli_query($conn,$sql2);
if (mysqli_num_rows($result2) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result2)) {?>
  <style>
    /* Custom CSS styles for the feed */
    .job-entry {
      background-color: #989c99;
      border: 1px solid #ccc;
      padding: 10px;
      margin-left: 15%;
      margin-right: 15%;
      margin-bottom: 10px;
      border-radius: 5px;
    }
  </style>
  <div class="job-entry">
      <h2><?php echo "ORG ID ".$row['ORG_ID']."";?></h2>
      <p><?php echo "NAME ".$row['ORGANIZATION']."";?></p>
      <a href="adminprofileorg.php?user_id=<?php echo $row['ORG_ID']; ?>" class="btn btn-default">View Profile</a>
</div><?php
  }
}?><p style="font-size: 18px; line-height: 1.9; text-transform: uppercase; text-decoration: none; background: #ffd04f; padding: 5px 20px; display: inline-block;       color: black; margin-top: 15px; border-radius: 5px; text-align: center; margin-bottom: 2%; margin-left:45%;">Jobs</p><?php
$sql3 = "SELECT * FROM Job";
$result3 = mysqli_query($conn,$sql3);
if (mysqli_num_rows($result2) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result3)) {?>
  <style>
    /* Custom CSS styles for the feed */
    .job-entry {
      background-color: #989c99;
      border: 1px solid #ccc;
      padding: 10px;
      margin-left: 15%;
      margin-right: 15%;
      margin-bottom: 10px;
      border-radius: 5px;
    }
  </style>
  <div class="job-entry">
      <h2><?php echo "JOB ID ".$row['JOB_ID']."";?></h2>
      <p><?php echo "ORG ID ".$row['ORG_ID']."";?></p>
      <a href="adminprofilejob.php?user_id=<?php echo $row['JOB_ID']; ?>" class="btn btn-default">View Job</a>
</div><?php
  }
}
?>
</body>
</html>
