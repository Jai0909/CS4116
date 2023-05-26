<?php 
// Establish a database connection
include 'connection.php';
include 'login.php';
$name = $_POST['orgName'];
$phone = $_POST['orgPhone'];
$address = $_POST['orgAddress'];
$id = $_SESSION['user_id'];
$sql = "SELECT *  FROM Organization WHERE ORG_ID =".$_SESSION["user_id"].";";
$result = mysqli_query($conn,$sql);
$resultnum = mysqli_num_rows($result);
if($resultnum > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		if($row['ORG_ID'] == $id){
            $sql1 = "UPDATE Organization SET ORGANIZATION='$name',TELEPHONE='$phone',ADDRESS='$address' WHERE ORG_ID = $id";
            if($conn->query($sql1)){
                header("Location: org_profile.php");
            }
        }
        else{
            $sql2 = "INSERT INTO Organization (ORG_ID, ORGANIZATION,TELEPHONE, ADDRESS) VALUES ($id,'$name','$phone','$address')";
            if($conn->query($sql2)){
                header("Location: org_profile.php");
            }
        }
	}
}
?>