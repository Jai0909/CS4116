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
        <div class="dashboard">
        <form action="edit_profile.php" method="post" enctype="multipart/form-data">
			<h1 class="percentage">Profile</h1>	
			<div class="form-group">
			<label for="inputName"></label>
				<input type="name" class="form-control" id="inputName" name="name" aria-describedby="nameHelp" placeholder="Enter Name" required>
				<small id="nameHelp" class="form-text text-muted"></small>
			</div>	<!-- To be read from database -->
			<div class="form-group">
			<label for="inputSex"></label>
				<input type="sex" class="form-control" id="inputSex" name="sex" aria-describedby="sexHelp" placeholder="Enter Sex"required>
				<small id="sexHelp" class="form-text text-muted"></small>
			</div>	<!-- To be read from database -->
			<div class="form-group">
			<label for="inputPhone"></label>
				<input type="phone" class="form-control" id="inputPhone" name="phone" aria-describedby="PhoneHelp" placeholder="Enter Phone Number"required>
				<small id="PhoneHelp" class="form-text text-muted"></small>
			</div>	<!-- To be read from database -->
			<div class="form-group">
			<label for="inputName"></label>
				<input type="address" class="form-control" id="inputAdress" name="address" aria-describedby="addressHelp" placeholder="Enter Address" required>
				<small id="nameHelp" class="form-text text-muted"></small>
			</div>	<!-- To be read from database -->
            <div class="form-group">
            <label for="inputName"></label>
				<input type="file" name="image">
				<small id="nameHelp" class="form-text text-muted"></small>
			</div>	<!-- To be read from database -->
			  <button type="submit" class="btn btn-success btn-lg">Confirm</button>
		</form>	
          </div>
          <div class="games">
            <div class="cards">
                <h3 class="percentage">Skills list</h3><br>
                <button onclick="document.location='edit_Skills.php'">Edit Skills</button>
				<h3 class="percentage">Current Gig</h3>
				<button onclick="document.location='editWork.php'">Edit Gig</button>
		
				</div>
                <h3 class="percentage">Education</h3>
                <button onclick="document.location='editEdu.php'">Edit Education</button>
              </div>
            </div>
          </div>
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
