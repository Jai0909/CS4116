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
<div class="container">
    <section class="glass">
        <div class="dashboard">
			<h1 class="percentage">Profile</h1>
            <h3 class="percentage">
      
        <?php
include 'connection.php';

session_start();
$user_id = $_GET['user_id'];
$sql = "SELECT *  FROM Organization WHERE ORG_ID = $user_id.";
$result = mysqli_query($conn,$sql);
$resultnum = mysqli_num_rows($result);
if($resultnum > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		echo "ORG_ID:- ".$row['ORG_ID'];
	}
}
$conn->close();
?></h3>		<!-- To be read from database -->
            <h3 class="percentage">
      
        <?php
include 'connection.php';

session_start();
$user_id = $_GET['user_id'];
$sql = "SELECT *  FROM Organization WHERE ORG_ID = $user_id.";
$result = mysqli_query($conn,$sql);
$resultnum = mysqli_num_rows($result);
if($resultnum > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		echo "PASSWORD:- ".$row['PASSWORD'];
	}
}
$conn->close();
?></h3>		<!-- To be read from database -->
			<h3 class="percentage">
      
        <?php
include 'connection.php';

session_start();
$user_id = $_GET['user_id'];
$sql = "SELECT *  FROM Organization WHERE ORG_ID = $user_id.";
$result = mysqli_query($conn,$sql);
$resultnum = mysqli_num_rows($result);
if($resultnum > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		echo "EMAIL:- ".$row['EMAIL'];
	}
}
$conn->close();
?></h3>		<!-- To be read from database -->
            <h3 class="percentage">
      
        <?php
include 'connection.php';

session_start();
$user_id = $_GET['user_id'];
$sql = "SELECT *  FROM Organization WHERE ORG_ID = $user_id.";
$result = mysqli_query($conn,$sql);
$resultnum = mysqli_num_rows($result);
if($resultnum > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		echo "NAME:- ".$row['ORGANIZATION'];
	}
}
$conn->close();
?></h3>		<!-- To be read from database -->
			<h3 class="percentage"><?php
include 'connection.php';

$user_id = $_GET['user_id'];
$sql = "SELECT *  FROM Organization WHERE ORG_ID = $user_id.";
$result = mysqli_query($conn,$sql);
$resultnum = mysqli_num_rows($result);
if($resultnum > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		echo "TELEPHONE:- ".$row['TELEPHONE'];
	}
}
$conn->close();
?></h3> 	<!-- To be read from database -->
			<h4 class="percentage"><?php
include 'connection.php';

$user_id = $_GET['user_id'];
$sql = "SELECT *  FROM Organization WHERE ORG_ID = $user_id.";
$result = mysqli_query($conn,$sql);
$resultnum = mysqli_num_rows($result);
if($resultnum > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		echo "ADDRESS:- ".$row['ADDRESS'];
	}
}
$conn->close();
?>
</h4> <!-- To be read from database -->
<h4 class="percentage"><?php
include 'connection.php';

$user_id = $_GET['user_id'];
$sql = "SELECT *  FROM Organization WHERE ORG_ID = $user_id.";
$result = mysqli_query($conn,$sql);
$resultnum = mysqli_num_rows($result);
if($resultnum > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		echo "FLAG_1:- ".$row['FLAG_1'];
	}
}
$conn->close();
?>
</h4> <!-- To be read from database -->
<h4 class="percentage"><?php
include 'connection.php';

$user_id = $_GET['user_id'];
$sql = "SELECT *  FROM Organization WHERE ORG_ID = $user_id.";
$result = mysqli_query($conn,$sql);
$resultnum = mysqli_num_rows($result);
if($resultnum > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		echo "FLAG_2:- ".$row['FLAG_2'];
	}
}
$conn->close();
?>
</h4> <!-- To be read from database -->
<h4 class="percentage"><?php
include 'connection.php';

$user_id = $_GET['user_id'];
$sql = "SELECT *  FROM Organization WHERE ORG_ID = $user_id.";
$result = mysqli_query($conn,$sql);
$resultnum = mysqli_num_rows($result);
if($resultnum > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		echo "FLAG_3:- ".$row['FLAG_3'];
	}
}
$conn->close();
?>
</h4> <!-- To be read from database -->
<div>
<form method="post">
<button type="submit" class="btn btn-warning">UNBLOCK</button></form>
<?php
include 'connection.php';

session_start();
$user_id = $_GET['user_id'];
$sql = "SELECT *  FROM Organization WHERE ORG_ID = $user_id.";
$result = mysqli_query($conn,$sql);
$resultnum = mysqli_num_rows($result);
if($resultnum > 0) {
	while($row = mysqli_fetch_assoc($result)) {?>
    <a href="admineditprofileorg.php?user_id=<?php echo $row['ORG_ID']; ?>" class="btn btn-success">EDIT PROFILE</a>
    <?php
	}
}
$conn->close();
?>
<?php
include 'connection.php';

session_start();
$user_id = $_GET['user_id'];
$sql = "SELECT *  FROM Organization WHERE ORG_ID = $user_id.";
$result = mysqli_query($conn,$sql);
$resultnum = mysqli_num_rows($result);
if($resultnum > 0) {
	while($row = mysqli_fetch_assoc($result)) {?>
    <a href="admindelorg.php?user_id=<?php echo $row['ORG_ID']; ?>" class="btn btn-danger">DELETE</a>
    <?php
	}
}
$conn->close();
?>
<?php
include 'connection.php';

$user_id = $_GET['user_id'];
$sql = "SELECT *  FROM Organization WHERE ORG_ID = $user_id.";
$result = mysqli_query($conn,$sql);
$resultnum = mysqli_num_rows($result);
if($resultnum > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		if($row['FLAG_1']== 1 or $row['FLAG_2']== 1 or $row['FLAG_3']== 1){
            $query = "UPDATE Organization SET FLAG_1=0,  FLAG_2=0, FLAG_3=0 WHERE ORG_ID = $user_id";
            $conn->query($query);
        }
	}
}
$conn->close();
?>
</div>

          </div>
          <div class="games">
            <div class="cards">
              
            
          </div>
    </section>
</div>
<div class="circle1"></div>
<div class="circle2"></div>
			 
</body>
</html>
