<?php 
// Establish a database connection
if ($_SERVER["REQUEST_METHOD"] === "POST") {
include 'connection.php';
$title = $_POST['title'];
$Name = $_POST['org'];
$sDate = date('Y-m-d', strtotime($_POST['startDate']));
$eDate = date('Y-m-d', strtotime($_POST['endDate']));
$desc = $_POST['desc'];
$user_id = $_GET['user_id'];
$org = 0;
$sql = "SELECT *  FROM Organization";
$result = mysqli_query($conn,$sql);
$resultnum = mysqli_num_rows($result);
if($resultnum > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        if($row['ORGANIZATION'] === $Name){
            $org = $org + $row['ORG_ID'];
        }
    }
}
$sql1 = "SELECT *  FROM Work_Exp WHERE USER_ID =$user_id";
$result1 = mysqli_query($conn,$sql1);
$resultnum1 = mysqli_num_rows($result1);
if($resultnum1 > 0) {
	while($row1 = mysqli_fetch_assoc($result1)) {
		if($row1['USER_ID'] == $user_id){
            $sql1 = "UPDATE Work_Exp SET TITLE='$title',ORG_ID='$org',START_DATE='$sDate',END_DATE='$eDate',DESCRIPTION='$desc' WHERE USER_ID = $user_id";
            if($conn->query($sql1)){
                header("Location: admindisplay.php");
            }
        else{
            $sql2 = "INSERT INTO Work_Exp (USER_ID,TITLE,ORG_ID, START_DATE, END_DATE, DESCRIPTION) VALUES ($user_id,'$title','$org','$sDate','$eDate','$desc')";
            if($conn->query($sql2)){
                header("Location: admindisplay.php");
            }
        }  
        }
	}
}
}
?>
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
        <form method="post">
        <div style="margin:50px;">
            <h2>Work Information</h2>
            <input type="text" class="form-control" id="inputTitle" name="title" aria-describedby="titleHelp" placeholder="Enter Title">
                    <small id="titleHelp" class="form-text text-muted"></small><br>
            <label for="org">Choose an Organization</label>
  <select id="org" name="org">
  <?php
include 'connection.php';

session_start();
$sql3 = "SELECT * FROM Organization";
$result3 = mysqli_query($conn,$sql3);
$resultnum3 = mysqli_num_rows($result3);
if($resultnum3 > 0) {
	while($row2= mysqli_fetch_assoc($result3)) {?>
		<option value=<?php echo $row2['ORGANIZATION']?>><?php echo $row2['ORGANIZATION']?></option><?php
	}
}
$conn->close();
?>
  </select>
                    <small id="sNameHelp" class="form-text text-muted"></small><br>
            <input type="date" class="form-control" id="inputStartDate" name="startDate" aria-describedby="startHelp" placeholder="Enter Start Date">
                    <small id="startHelp" class="form-text text-muted"></small><br>
            <input type="date" class="form-control" id="inputEndDate" name="endDate" aria-describedby="endHelp" placeholder="Enter End Date">
                    <small id="endHelp" class="form-text text-muted"></small><br>
            <input type="text" class="form-control" id="inputdesc" name="desc" aria-describedby="gradeHelp" placeholder="Describe Your Work">
                    <small id="gradeHelp" class="form-text text-muted"></small><br>
                    <button type="submit" class="btn btn-success btn-lg">Confirm</button>
        </div>
        </form>
    </section>
</div>
<div class="circle1"></div>
<div class="circle2"></div>

</body>
</html>
