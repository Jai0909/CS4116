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
        <h3 class="percentage">
      
        <?php
include 'connection.php';

session_start();
$user_id = $_GET['user_id'];
$sql = "SELECT *  FROM Job WHERE JOB_ID = $user_id.";
$result = mysqli_query($conn,$sql);
$resultnum = mysqli_num_rows($result);
if($resultnum > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		echo "JOB_ID:- ".$row['JOB_ID'];
	}
}
$conn->close();
?></h3>
<h3 class="percentage">
      
        <?php
include 'connection.php';

session_start();
$user_id = $_GET['user_id'];
$sql = "SELECT *  FROM Job WHERE JOB_ID = $user_id.";
$result = mysqli_query($conn,$sql);
$resultnum = mysqli_num_rows($result);
if($resultnum > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		echo "ORG_ID:- ".$row['ORG_ID'];
	}
}
$conn->close();
?></h3>
			<h3 class="percentage">
      
        <?php
include 'connection.php';

session_start();
$user_id = $_GET['user_id'];
$sql = "SELECT *  FROM Job WHERE JOB_ID = $user_id.";
$result = mysqli_query($conn,$sql);
$resultnum = mysqli_num_rows($result);
if($resultnum > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		echo "JOB TITLE:- ".$row['TITLE'];
	}
}
$conn->close();
?></h3>
<?php
include 'connection.php';

session_start();
$user_id = $_GET['user_id'];
$sql = "SELECT *  FROM Job WHERE JOB_ID = $user_id.";
$result = mysqli_query($conn,$sql);
$resultnum = mysqli_num_rows($result);
if($resultnum > 0) {
	while($row = mysqli_fetch_assoc($result)) {?>
    <a href="admindeljob.php?user_id=<?php echo $row['JOB_ID']; ?>" class="btn btn-danger">DELETE</a>
    <?php
	}
}
$conn->close();
?>
          </div>

          <div class="games">
            <div class="cards">
            <h3 class="percentage">Job Small Description</h3><br>
            <p class="percentage">
        <?php
include 'connection.php';

session_start();
$user_id = $_GET['user_id'];
$sql = "SELECT *  FROM Job WHERE JOB_ID = $user_id.";
$result = mysqli_query($conn,$sql);
$resultnum = mysqli_num_rows($result);
if($resultnum > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		echo $row['SMALL_DESC'];
	}
}
$conn->close();
?></p>
            <h3 class="percentage">Job Large Description</h3><br>
            <p class="percentage">
        <?php
include 'connection.php';

session_start();
$user_id = $_GET['user_id'];
$sql = "SELECT *  FROM Job WHERE JOB_ID = $user_id.";
$result = mysqli_query($conn,$sql);
$resultnum = mysqli_num_rows($result);
if($resultnum > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		echo $row['LARGE_DESC'];
	}
}
$conn->close();
?></p>
                <h3 class="percentage">Skills Required</h3><br>
				<p class="percentage"><?php
include 'connection.php';

$user_id = $_GET['user_id'];
$sql = "SELECT *  FROM Job_Skills WHERE JOB_ID = $user_id";
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
				<h3 class="percentage">Organization</h3>
				<p class="percentage"><?php
include 'connection.php';
$user_id = $_GET['user_id'];
$sql = "SELECT Organization.ORGANIZATION FROM Job INNER JOIN Organization ON Job.ORG_ID = Organization.ORG_ID WHERE Job.JOB_ID =$user_id";
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
          </div>
    </section>
</div>
<div class="circle1"></div>
<div class="circle2"></div>	 
</body>
</html>
