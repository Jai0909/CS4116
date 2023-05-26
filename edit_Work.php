<?php 
// Establish a database connection
include 'connection.php';
include'login.php';
$title = $_POST['title'];
$Name = $_POST['org'];
$sDate = date('Y-m-d', strtotime($_POST['startDate']));
$eDate = date('Y-m-d', strtotime($_POST['endDate']));
$desc = $_POST['desc'];
$id = $_SESSION['user_id'];
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
$sql1 = "SELECT *  FROM Work_Exp WHERE USER_ID =".$_SESSION["user_id"].";";
$result1 = mysqli_query($conn,$sql1);
$resultnum1 = mysqli_num_rows($result1);
if($resultnum1 > 0) {
	while($row = mysqli_fetch_assoc($result1)) {
		if($row['USER_ID'] == $id){
            $sql1 = "UPDATE Work_Exp SET TITLE='$title',ORG_ID='$org',START_DATE='$sDate',DESCRIPTION='$desc' WHERE USER_ID = $id";
            if($conn->query($sql1)){
                header("Location: profile.php");
            }
        else{
            $sql2 = "INSERT INTO Work_Exp (USER_ID,TITLE,ORG_ID, START_DATE,DESCRIPTION) VALUES ($id,'$title','$org','$sDate', '$desc')";
            if($conn->query($sql2)){
                header("Location: profile.php");
            }
        }  
        }
	}
}
?>
