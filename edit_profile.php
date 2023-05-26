<?php 
// Establish a database connection
include 'connection.php';
include 'login.php';
$name = $_POST['name'];
$sex = $_POST['sex'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$image = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];
$img_ex = pathinfo($image, PATHINFO_EXTENSION);
$img_ex_lc = strtolower($img_ex);
$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
$img_upload_path = 'res/'.$new_img_name;
move_uploaded_file($tmp_name, $img_upload_path);
$id = $_SESSION['user_id'];
$sql = "SELECT *  FROM User WHERE USER_ID =".$_SESSION["user_id"].";";
$result = mysqli_query($conn,$sql);
$resultnum = mysqli_num_rows($result);
if($resultnum > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		if($row['USER_ID'] == $id){
            $sql1 = "UPDATE User SET NAME='$name',GENDER='$sex',MOBILE='$phone',ADDRESS='$address', IMAGE='$new_img_name'WHERE USER_ID = $id";
            if($conn->query($sql1)){
                header("Location: profile.php");
            }
        }
        else{
            $sql2 = "INSERT INTO User (USER_ID, NAME, GENDER, MOBILE, ADDRESS, IMAGE) VALUES ($id,'$name','$sex','$phone','$address','$new_img_name')";
            if($conn->query($sql2)){
                header("Location: profile.php");
            }
        }
	}
}
?>
