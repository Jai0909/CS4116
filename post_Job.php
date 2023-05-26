<?php require 'sessionAuthenticator.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Post Job</title>
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
      <a class="navbar-brand" href="orgHome.html" style="color: black; font-size: x-large;">Trebble</a>
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
<div class="container">
    <section class="glass">
        <div style="width: 40%; float: left;">
            <h2 style="padding: 30px;">Job Details</h2>
            <form action="postJob.php" method="post">
            <input style="padding: 30px; margin: 10px;" type="text" class="form-control" id="jobTitle" name="jobTitle" aria-describedby="titleHelp" placeholder="Enter Job Title" required>
				<small id="titleHelp" class="form-text text-muted"></small>
            <input style="padding: 30px; margin: 10px;" type="text" class="form-control" id="shortDesc" name="shortDesc" aria-describedby="titleHelp" placeholder="Enter Short Description" required>
				<small id="titleHelp" class="form-text text-muted"></small>
            <input style="padding: 30px; margin: 10px;" type="text" class="form-control" id="longDesc" name="longDesc" aria-describedby="titleHelp" placeholder="Enter Long Description" required>
				<small id="titleHelp" class="form-text text-muted"></small>
        <div style="width: 40%; float: left; margin-left: 30px;">
            <h2 style="margin-bottom: 20px;">Skills</h2>
                    <div style="float: left; width: 200%;">
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Guitar">
                    <label class="form-check-label">Guitar</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Bass">
                    <label class="form-check-label">Bass</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Synthesizer">
                    <label class="form-check-label">Synthesizer</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Voice">
                    <label class="form-check-label">Voice</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Drums">
                    <label class="form-check-label">Drums</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Double Bass">
                    <label class="form-check-label">Double Bass</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Cello">
                    <label class="form-check-label">Cello</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Violin">
                    <label class="form-check-label">Violin</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Viola">
                    <label class="form-check-label">Viola</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Trumpet">
                    <label class="form-check-label">Trumpet</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Trombone">
                    <label class="form-check-label">Trombone</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Saxaphone">
                    <label class="form-check-label">Saxaphone</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="French Horn">
                    <label class="form-check-label">French Horn</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Tuba">
                    <label class="form-check-label">Tuba</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Flute">
                    <label class="form-check-label">Flute</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Recorder">
                    <label class="form-check-label">Recorder</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Tin Whistle">
                    <label class="form-check-label">Tin Whistle</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Bassoon">
                    <label class="form-check-label">Bassoon</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Marimba">
                    <label class="form-check-label">Marimba</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Xylophone">
                    <label class="form-check-label">Xylophone</label><br></div>
                    <div style="float: left; width: 200%;">
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Harp">
                    <label class="form-check-label">Harp</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Bodhrán">
                    <label class="form-check-label">Bodhrán</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Accordion">
                    <label class="form-check-label">Accordion</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Piccolo">
                    <label class="form-check-label">Piccolo</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Ukulele">
                    <label class="form-check-label">Ukulele</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Mouth Organ">
                    <label class="form-check-label">Mouth Organ</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Sitar">
                    <label class="form-check-label">Sitar</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Banjo">
                    <label class="form-check-label">Banjo</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Mandolin">
                    <label class="form-check-label">Mandolin</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Harmonium">
                    <label class="form-check-label">Harmonium</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Tabla">
                    <label class="form-check-label">Tabla</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Sound Engineer">
                    <label class="form-check-label">Sound Engineer</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Band Crew">
                    <label class="form-check-label">Band Crew</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Manager">
                    <label class="form-check-label">Manager</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Producer">
                    <label class="form-check-label">Producer</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Mixer">
                    <label class="form-check-label">Mixer</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="DJ">
                    <label class="form-check-label">DJ</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Composer">
                    <label class="form-check-label">Composer</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Writer">
                    <label class="form-check-label">Writer</label><br>
        </div>
        <button type="submit" style="float: right;" class="btn btn-success btn-lg">Confirm</button>
        </form>
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
