<?php 
// Establish a database connection
if ($_SERVER["REQUEST_METHOD"] === "POST") {
include 'connection.php';
$title = $_POST['title'];
$Name = $_POST['sName'];
$sDate = date('Y-m-d', strtotime($_POST['startDate']));
$eDate = date('Y-m-d', strtotime($_POST['endDate']));
$grade = $_POST['grade'];
$desc = $_POST['desc'];
$id = $_GET['user_id'];
$sql = "SELECT *  FROM Education WHERE USER_ID =$id";
$result = mysqli_query($conn,$sql);
$resultnum = mysqli_num_rows($result);
if($resultnum > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		if($row['USER_ID'] == $id){
            $sql1 = "UPDATE Education SET TITLE='$title',SCHOOL_NAME='$Name',START_DATE='$sDate',END_DATE='$eDate',DESCRIPTION='$desc',GRADE='$grade' WHERE USER_ID = $id";
            if($conn->query($sql1)){
                header("Location: admindisplay.php");
            }
        }
        else{
            $sql2 = "INSERT INTO Education (USER_ID, TITLE, SCHOOL_NAME, START_DATE, END_DATE, DESCRIPTION, GRADE) VALUES ($id,'$title','$Name','$sDate','$eDate','$desc','$grade')";
            if($conn->query($sql2)){
                header("Location: admindisplay.php");
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
            <h2>Education Information</h2>
            <input type="text" class="form-control" id="inputTitle" name="title" aria-describedby="titleHelp" placeholder="Enter Title">
                    <small id="titleHelp" class="form-text text-muted"></small><br>
            <input type="text" class="form-control" id="inputSName" name="sName" aria-describedby="sNameHelp" placeholder="Enter School Name">
                    <small id="sNameHelp" class="form-text text-muted"></small><br>
            <input type="date" class="form-control" id="inputStartDate" name="startDate" aria-describedby="startHelp" placeholder="Enter Start Date">
                    <small id="startHelp" class="form-text text-muted"></small><br>
            <input type="date" class="form-control" id="inputEndDate" name="endDate" aria-describedby="endHelp" placeholder="Enter End Date">
                    <small id="endHelp" class="form-text text-muted"></small><br>
            <input type="text" class="form-control" id="inputGrade" name="grade" aria-describedby="gradeHelp" placeholder="Enter Grade">
                    <small id="gradeHelp" class="form-text text-muted"></small><br>
            <input type="text" class="form-control" id="inputdesc" name="desc" aria-describedby="gradeHelp" placeholder="Describe Your Education">
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
