<?php require 'sessionAuthenticator.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
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

<div id="navbar" style="z-index: 17;">
<nav class ="navbar-dark">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="orgHome.php" style="color: black; font-size: x-large;">Trebble</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="orgHome.php" style="font-size: large; color: black;"><i class="bi bi-house-door-fill"></i>Home</a></li>
      <li><a href="post_Job.php" style="font-size: large; color: black;"><i class="bi bi-briefcase-fill"></i>Post Job</a></li>
      <li><a href="jobs.php" style="font-size: large; color: black"><i class="bi bi-briefcase"></i>Jobs</a></li>
      <li><a href="org_profile.php" style="font-size: large; color: black"><i class="bi bi-person-fill"></i>Profile</a></li>
      <li><a href="logout.php" style="font-size: large; color: black"><i class="bi bi-lock-fill"></i>Log Out</a></li>
    </ul>
    <form class="navbar-form navbar-right" action="search2.php" method ="post">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <input type="radio" class="form-check-input1" id="user" name="type" value="user">
        <label class="form-check-label" for="radio1">User</label>
        <input type="radio" class="form-check-input2" id="org" name="type" value="org">
        <label class="form-check-label" for="radio2">Organization</label>
        <input type="radio" class="form-check-input3" id="job" name="type" value="job">
        <label class="form-check-label" for="radio3">Job</label>
        <input type="radio" class="form-check-input3" id="skill" name="type" value="skill">
        <label class="form-check-label" for="radio3">Skill</label>
          <button class="btn btn-default" type="submit" name="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
    </form>
  </div>
</nav>
</div>
  <p style="font-size: 18px; line-height: 1.9; text-transform: uppercase; text-decoration: none; background: #ffd04f; padding: 5px 20px; display: inline-block;       color: black; margin-top: 15px; border-radius: 5px; text-align: center; margin-bottom: 2%; margin-left:45%;">Users</p>
   <?php
   include 'connection.php';
            $sql = "Select * FROM User";
            $result = $conn->query($sql); 
            if ($result) {
                if (mysqli_num_rows($result)>0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        if(($row['FLAG_1'] == 0 and $row['FLAG_2'] == 0 and $row['FLAG_3'] == 0) or ($row['FLAG_1'] == 0 and $row['FLAG_2'] == 0 and $row['FLAG_3'] == 1) or ($row['FLAG_1'] == 0 and $row['FLAG_2'] == 1 and $row['FLAG_3'] == 0) or ($row['FLAG_1'] == 0 and $row['FLAG_2'] == 1 and $row['FLAG_3'] == 1) or ($row['FLAG_1'] == 1 and $row['FLAG_2'] == 0 and $row['FLAG_3'] == 0) or ($row['FLAG_1'] == 1 and $row['FLAG_2'] == 0 and $row['FLAG_3'] == 1) or ($row['FLAG_1'] == 1 and $row['FLAG_2'] == 1 and $row['FLAG_3'] == 0)){?>
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
                        <div class="job-entry"><h2><?php echo $row['NAME'];?></h2>
                       <a href="viewOtherProfile2.php?user_id=<?php echo $row['USER_ID']; ?>" class="btn btn-default">View Profile</a>
</div><?php
                    } 
            }
            }
            }
            ?>
              <p style="font-size: 18px; line-height: 1.9; text-transform: uppercase; text-decoration: none; background: #ffd04f; padding: 5px 20px; display: inline-block;       color: black; margin-top: 15px; border-radius: 5px; text-align: center; margin-bottom: 2%; margin-left:45%;">Organizations</p>
   <?php
   include 'connection.php';
            $sql = "Select * FROM Organization";
            $result = $conn->query($sql); 
            if ($result) {
                if (mysqli_num_rows($result)>0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        if(($row['FLAG_1'] == 0 and $row['FLAG_2'] == 0 and $row['FLAG_3'] == 0) or ($row['FLAG_1'] == 0 and $row['FLAG_2'] == 0 and $row['FLAG_3'] == 1) or ($row['FLAG_1'] == 0 and $row['FLAG_2'] == 1 and $row['FLAG_3'] == 0) or ($row['FLAG_1'] == 0 and $row['FLAG_2'] == 1 and $row['FLAG_3'] == 1) or ($row['FLAG_1'] == 1 and $row['FLAG_2'] == 0 and $row['FLAG_3'] == 0) or ($row['FLAG_1'] == 1 and $row['FLAG_2'] == 0 and $row['FLAG_3'] == 1) or ($row['FLAG_1'] == 1 and $row['FLAG_2'] == 1 and $row['FLAG_3'] == 0)){?>
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
                        <div class="job-entry"><h2><?php echo $row['ORGANIZATION'];?></h2>
                       <a href="viewOtherProfileOrg2.php?user_id=<?php echo $row['ORG_ID']; ?>" class="btn btn-default">View Profile</a>
</div><?php
                    } 
            }
            }
            }
            ?>
<script>
    window.onscroll = function() {myFunction()};
    
    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;
    
    function myFunction() {
      if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
      } else {
        navbar.classList.remove("sticky");
      }
    }
    </script>
</body>
</html>
