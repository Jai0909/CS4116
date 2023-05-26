<?php 
// Establish a database connection
include 'connection.php';
include'login.php';
$title = $_POST['title'];
$Name = $_POST['sName'];
$sDate = date('Y-m-d', strtotime($_POST['startDate']));
$eDate = date('Y-m-d', strtotime($_POST['endDate']));
$grade = $_POST['grade'];
$desc = $_POST['desc'];
$id = $_SESSION['user_id'];
$sql = "SELECT *  FROM Education WHERE USER_ID =".$_SESSION["user_id"].";";
$result = mysqli_query($conn,$sql);
$resultnum = mysqli_num_rows($result);
if($resultnum > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		if($row['USER_ID'] == $id){
            $sql1 = "UPDATE Education SET TITLE='$title',SCHOOL_NAME='$Name',START_DATE='$sDate',END_DATE='$eDate',DESCRIPTION='$desc',GRADE='$grade' WHERE USER_ID = $id";
            if($conn->query($sql1)){
                header("Location: profile.php");
            }
        }
        else{
            $sql2 = "INSERT INTO Education (USER_ID, TITLE, SCHOOL_NAME, START_DATE, END_DATE, DESCRIPTION, GRADE) VALUES ($id,'$title','$Name','$sDate','$eDate','$desc','$grade')";
            if($conn->query($sql2)){
                header("Location: profile.php");
            }
        }
	}
}

?>
