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
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: rgb(36, 36, 36);">
<div><a href="logout.php" style="font-size: large; color: Yellow"><i class="bi bi-lock-fill"></i>Log Out</a></div>
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
		echo "USER_ID:- ".$row['USER_ID'];
	}
}
$conn->close();
?></h3>	<!-- To be read from database -->
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
		echo "PASSWORD:- ".$row['PASSWORD'];
	}
}
$conn->close();
?></h3>	<!-- To be read from database -->
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
		echo "EMAIL:- ".$row['EMAIL'];
	}
}
$conn->close();
?></h3>	<!-- To be read from database -->
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
		echo "NAME:- ".$row['NAME'];
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
		echo "DOB:- ".$row['DOB'];
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
		echo "GENDER:- ".$row['GENDER'];
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
		echo "MOBILE:- ".$row['MOBILE'];
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
		echo "ADDRESS:- ".$row['ADDRESS'];
	}
}
$conn->close();
?>
</h4> <!-- To be read from database -->
<h4 class="percentage"><?php
include 'connection.php';

$user_id = $_GET['user_id'];
$sql = "SELECT *  FROM User WHERE USER_ID = $user_id.";
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
$sql = "SELECT *  FROM User WHERE USER_ID = $user_id.";
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
$sql = "SELECT *  FROM User WHERE USER_ID = $user_id.";
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
$sql = "SELECT *  FROM User WHERE USER_ID = $user_id.";
$result = mysqli_query($conn,$sql);
$resultnum = mysqli_num_rows($result);
if($resultnum > 0) {
	while($row = mysqli_fetch_assoc($result)) {?>
    <a href="admineditProfile.php?user_id=<?php echo $row['USER_ID']; ?>" class="btn btn-success">EDIT PROFILE</a>
    <?php
	}
}
$conn->close();
?>
<?php
include 'connection.php';

session_start();
$user_id = $_GET['user_id'];
$sql = "SELECT *  FROM User WHERE USER_ID = $user_id.";
$result = mysqli_query($conn,$sql);
$resultnum = mysqli_num_rows($result);
if($resultnum > 0) {
	while($row = mysqli_fetch_assoc($result)) {?>
    <a href="admindel.php?user_id=<?php echo $row['USER_ID']; ?>" class="btn btn-danger">DELETE</a>
    <?php
	}
}
$conn->close();
?>
<?php
include 'connection.php';

$user_id = $_GET['user_id'];
$sql = "SELECT *  FROM User WHERE USER_ID = $user_id.";
$result = mysqli_query($conn,$sql);
$resultnum = mysqli_num_rows($result);
if($resultnum > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		if($row['FLAG_1']== 1 or $row['FLAG_2']== 1 or $row['FLAG_3']== 1){
            $query = "UPDATE User SET FLAG_1=0,  FLAG_2=0, FLAG_3=0 WHERE USER_ID = $user_id";
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
				<h3 class="percentage">Current gigs</h3>
				<p class="percentage"><?php
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
</body>
</html>
