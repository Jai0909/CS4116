<?php require 'sessionAuthenticator.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Profile</title>
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
      <a class="navbar-brand" href="home.php" style="color: black; font-size: x-large;">Trebble</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="home.php" style="font-size: large; color: black;"><i class="bi bi-house-door-fill"></i>Home</a></li>
      <li><a href="friends.php" style="font-size: large; color: black;"><i class="bi bi-people-fill"></i>Friends</a></li>
      <li><a href="users.php" style="font-size: large; color: black"><i class="bi bi-chat-left-dots-fill"></i>Messages</a></li>
      <li><a href="profile.php" style="font-size: large; color: black"><i class="bi bi-person-fill"></i>Profile</a></li>
      <li><a href="logout.php" style="font-size: large; color: black"><i class="bi bi-lock-fill"></i>Log Out</a></li>
    </ul>
    <form class="navbar-form navbar-right" action="search.php" method ="post">
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
<div class="container">
    <section class="glass">
        <form action="edit_Work.php" method="post">
        <div style="margin:50px;">
            <h2>Work Information</h2>
            <input type="text" class="form-control" id="inputTitle" name="title" aria-describedby="titleHelp" placeholder="Enter Title" required>
                    <small id="titleHelp" class="form-text text-muted"></small><br>
            <label for="org">Choose an Organization</label>
  <select id="org" name="org">
  <?php
include 'connection.php';

session_start();
$sql = "SELECT * FROM Organization";
$result = mysqli_query($conn,$sql);
$resultnum = mysqli_num_rows($result);
if($resultnum > 0) {
	while($row = mysqli_fetch_assoc($result)) {?>
		<option value=<?php echo $row['ORGANIZATION']?>><?php echo $row['ORGANIZATION']?></option><?php
	}
}
$conn->close();
?>
  </select>
                    <small id="sNameHelp" class="form-text text-muted"></small><br>
            <input type="date" class="form-control" id="inputStartDate" name="startDate" aria-describedby="startHelp" placeholder="Enter Start Date" required>
                    <small id="startHelp" class="form-text text-muted"></small><br>
            <input type="text" class="form-control" id="inputdesc" name="desc" aria-describedby="gradeHelp" placeholder="Describe Your Work" required>
                    <small id="gradeHelp" class="form-text text-muted"></small><br>
                    <button type="submit" class="btn btn-success btn-lg">Confirm</button>
        </div>
        </form>
    </section>
</div>
<div class="circle1"></div>
<div class="circle2"></div>

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
