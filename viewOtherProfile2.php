<?php require 'sessionAuthenticator.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Profile</title>
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
<div class="container">
    <section class="glass">
        <div class="dashboard">
			<h1 class="percentage">Profile</h1>
			<h3 class="percentage">
      
        <?php
include 'connection.php';

session_start();
$user_id = $_GET['user_id'];
$sql = "SELECT *  FROM User WHERE USER_ID = $user_id.";
$result = mysqli_query($conn,$sql);
$resultnum = mysqli_num_rows($result);
if($resultnum > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		echo $row['NAME'];
	}
}
$conn->close();
?></h3>	<!-- To be read from database -->
			<h3 class="percentage"><?php
include 'connection.php';

$user_id = $_GET['user_id'];
$sql = "SELECT *  FROM User WHERE USER_ID = $user_id.";
$result = mysqli_query($conn,$sql);
$resultnum = mysqli_num_rows($result);
if($resultnum > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		echo $row['DOB'];
	}
}
$conn->close();
?></h3> 	<!-- To be read from database -->
			<h3 class="percentage"><?php
include 'connection.php';

$user_id = $_GET['user_id'];
$sql = "SELECT *  FROM User WHERE USER_ID = $user_id.";
$result = mysqli_query($conn,$sql);
$resultnum = mysqli_num_rows($result);
if($resultnum > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		echo $row['GENDER'];
	}
}
$conn->close();
?></h3>		<!-- To be read from database -->
			<h3 class="percentage"><?php
include 'connection.php';

$user_id = $_GET['user_id'];
$sql = "SELECT *  FROM User WHERE USER_ID = $user_id.";
$result = mysqli_query($conn,$sql);
$resultnum = mysqli_num_rows($result);
if($resultnum > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		echo $row['MOBILE'];
	}
}
$conn->close();
?></h3> 	<!-- To be read from database -->
			<h4 class="percentage"><?php
include 'connection.php';

$user_id = $_GET['user_id'];
$sql = "SELECT *  FROM User WHERE USER_ID = $user_id.";
$result = mysqli_query($conn,$sql);
$resultnum = mysqli_num_rows($result);
if($resultnum > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		echo $row['ADDRESS'];
	}
}
$conn->close();
?>
</h4> <!-- To be read from database -->
<div><?php
include 'connection.php';
$user_id = $_GET['user_id'];
$sql = "SELECT *  FROM User WHERE USER_ID = $user_id.";
$result = mysqli_query($conn,$sql);
$user_data = mysqli_fetch_assoc($result);?>
<a href="report_1.php?user_id=<?php echo $user_data['USER_ID']; ?>" class="btn btn-danger">Report</a>
</div>

          </div>
          <div class="games">
            <div class="cards">
            <?php
include 'connection.php';
$user_id = $_GET['user_id'];
$sql = "SELECT *  FROM User WHERE USER_ID =$user_id";
$result = mysqli_query($conn,$sql);
$resultnum = mysqli_num_rows($result);
if($resultnum > 0) {
	while($row = mysqli_fetch_assoc($result)) {
         ?><img style="width: 40%; height: 45%" src= "res/<?=$row['IMAGE']?>" alt="Profile"><?php
	}
}
$conn->close();
?>
                <h3 class="percentage">Skills list</h3><br>
				<p class="percentage"><?php
include 'connection.php';

$user_id = $_GET['user_id'];
$sql = "SELECT *  FROM User_Skills WHERE USER_ID = $user_id";
$result = mysqli_query($conn,$sql);
$columns = array();
while ($column = mysqli_fetch_field($result)) {
    $columns[] = $column->name;
    unset($columns[0]);
}

// loop through result set
$matches = array();
while ($row = mysqli_fetch_assoc($result)) {
    // loop through columns and check column value
    foreach ($columns as $column) {
        if ($row[$column] == 1) {
            $matches[] = array('column_name' => $column);
        }
    }
}

// display results
foreach ($matches as $match) {
    echo $match['column_name']."<br>";
}

$conn->close();
?></p> <!-- To be read from database -->
				<h3 class="percentage">Current Gig</h3>
				<?php
include 'connection.php';
$user_id = $_GET['user_id'];
$sql = "SELECT Work_Exp.TITLE,Work_Exp.START_DATE,Work_Exp.DESCRIPTION,Organization.ORGANIZATION FROM Work_Exp INNER JOIN Organization ON Work_Exp.ORG_ID = Organization.ORG_ID WHERE Work_Exp.USER_ID =$user_id";
$result = mysqli_query($conn,$sql);
// get column names
$columns = array();
while ($column = mysqli_fetch_field($result)) {
    $columns[] = $column->name;
}

// loop through result set
$matches = array();
while ($row = mysqli_fetch_assoc($result)) {
    // loop through columns and check column value
    ?> <a href="viewOtherProfileOrg2.php?user_id=<?php echo $row['ORG_ID']; ?>" class="btn btn-success">View Employer</a><p class="percentage"><br><p class="percentage"><?php
    foreach ($columns as $column) {
        $matches[] = array('column_name' => $column, 'value' => $row[$column]);
    }
}

// display results
foreach ($matches as $match) {
    echo $match['column_name'] . " : " . $match['value'] . "<br>";
}
$conn->close();
?><p> <!-- To be read from database -->
              </div>
                <h3 class="percentage">Education</h3>
				<p class="percentage"><?php
include 'connection.php';
$user_id = $_GET['user_id'];
$sql = "SELECT *  FROM Education WHERE USER_ID =$user_id";
$result = mysqli_query($conn,$sql);
// get column names
$columns = array();
while ($column = mysqli_fetch_field($result)) {
    $columns[] = $column->name;
    unset($columns[0]);
    unset($columns[1]);
}

// loop through result set
$matches = array();
while ($row = mysqli_fetch_assoc($result)) {
    // loop through columns and check column value
    foreach ($columns as $column) {
        $matches[] = array('column_name' => $column, 'value' => $row[$column]);
    }
}

// display results
foreach ($matches as $match) {
    echo $match['column_name'] . " : " . $match['value'] . "<br>";
}
$conn->close();
?><p> <!-- To be read from database -->
              
            
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
