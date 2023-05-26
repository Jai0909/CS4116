<?php 
// Establish a database connection
include 'connection.php';
$name = $_POST['name'];
$sex = $_POST['sex'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$dob = date('Y-m-d', strtotime($_POST['dob']));
$image = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];
$img_ex = pathinfo($image, PATHINFO_EXTENSION);
$img_ex_lc = strtolower($img_ex);
$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
$img_upload_path = 'res/'.$new_img_name;
move_uploaded_file($tmp_name, $img_upload_path);
$user_id = $_GET['user_id'];
$sql = "SELECT *  FROM User WHERE USER_ID =$user_id";
$result = mysqli_query($conn,$sql);
$resultnum = mysqli_num_rows($result);
if($resultnum > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		if($row['USER_ID'] == $id){
            $sql1 = "UPDATE User SET NAME='$name',GENDER='$sex',MOBILE='$phone',ADDRESS='$address', IMAGE='$new_img_name', EMAIL='$email', PASSWORD='$pwd', DOB='$dob' WHERE USER_ID = $user_id";
            if($conn->query($sql1)){
                header("Location: admindisplay.php");
            }
        }
        else{
            $sql2 = "INSERT INTO User (USER_ID, NAME, GENDER, MOBILE, ADDRESS, IMAGE, EMAIL, PASSWORD, DOB) VALUES ($user_id,'$name','$sex','$phone','$address','$new_img_name','$email','$pwd', '$dob')";
            if($conn->query($sql2)){
                header("Location: admindisplay.php");
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
        <div class="dashboard">
        <form method="post" enctype="multipart/form-data">
			<h1 class="percentage">Profile</h1>	
			<div class="form-group">
			<label for="inputName"></label>
				<input type="name" class="form-control" id="inputName" name="name" aria-describedby="nameHelp" placeholder="Enter Name">
				<small id="nameHelp" class="form-text text-muted"></small>
			</div>	<!-- To be read from database -->
			<div class="form-group">
			<label for="inputSex"></label>
				<input type="sex" class="form-control" id="inputSex" name="sex" aria-describedby="sexHelp" placeholder="Enter Sex">
				<small id="sexHelp" class="form-text text-muted"></small>
			</div>	<!-- To be read from database -->
			<div class="form-group">
			<label for="inputPhone"></label>
				<input type="phone" class="form-control" id="inputPhone" name="phone" aria-describedby="PhoneHelp" placeholder="Enter Phone Number">
				<small id="PhoneHelp" class="form-text text-muted"></small>
			</div>	<!-- To be read from database -->
			<div class="form-group">
			<label for="inputName"></label>
				<input type="address" class="form-control" id="inputAdress" name="address" aria-describedby="addressHelp" placeholder="Enter Address">
				<small id="nameHelp" class="form-text text-muted"></small>
			</div>	<!-- To be read from database -->
            			<div class="form-group">
			<label for="inputName"></label>
				<input type="address" class="form-control" id="inputEmail" name="email" aria-describedby="addressHelp" placeholder="Enter Email">
				<small id="nameHelp" class="form-text text-muted"></small>
			</div>	<!-- To be read from database -->
            			<div class="form-group">
			<label for="inputName"></label>
				<input type="address" class="form-control" id="inputPassword" name="pwd" aria-describedby="addressHelp" placeholder="Enter Password">
				<small id="nameHelp" class="form-text text-muted"></small>
			</div>	<!-- To be read from database -->
            			<div class="form-group">
                        <label>DOB</label>
                        <input type="date" name = "dob">
				<small id="nameHelp" class="form-text text-muted"></small>
			</div>	<!-- To be read from database -->
            <div class="form-group">
            <label for="inputName"></label>
				<input type="file" name="image">
				<small id="nameHelp" class="form-text text-muted"></small>
			</div>	<!-- To be read from database -->
			  <button type="submit" class="btn btn-success btn-lg">Confirm</button>
		</form>	
          </div>
          <div class="games">
            <div class="cards">
                <h3 class="percentage">Skills list</h3><br>
                <?php
include 'connection.php';

session_start();
$user_id = $_GET['user_id'];
$sql = "SELECT *  FROM User WHERE USER_ID = $user_id.";
$result = mysqli_query($conn,$sql);
$resultnum = mysqli_num_rows($result);
if($resultnum > 0) {
	while($row = mysqli_fetch_assoc($result)) {?>
    <a href="admineditprofileskills.php?user_id=<?php echo $row['USER_ID']; ?>" class="btn btn-success">EDIT SKILLS</a>
    <?php
	}
}
$conn->close();
?>
				<h3 class="percentage">Past gigs</h3>
				<?php
include 'connection.php';

session_start();
$user_id = $_GET['user_id'];
$sql = "SELECT *  FROM User WHERE USER_ID = $user_id.";
$result = mysqli_query($conn,$sql);
$resultnum = mysqli_num_rows($result);
if($resultnum > 0) {
	while($row = mysqli_fetch_assoc($result)) {?>
    <a href="admineditprofilework.php?user_id=<?php echo $row['USER_ID']; ?>" class="btn btn-success">EDIT PAST EXPERIENCES</a>
    <?php
	}
}
$conn->close();
?>
				</div>
                <h3 class="percentage">Education</h3>
                <?php
include 'connection.php';

session_start();
$user_id = $_GET['user_id'];
$sql = "SELECT *  FROM User WHERE USER_ID = $user_id.";
$result = mysqli_query($conn,$sql);
$resultnum = mysqli_num_rows($result);
if($resultnum > 0) {
	while($row = mysqli_fetch_assoc($result)) {?>
    <a href="admineditprofileedu.php?user_id=<?php echo $row['USER_ID']; ?>" class="btn btn-success">EDIT EDUCATION</a>
    <?php
	}
}
$conn->close();
?>
              </div>
            </div>
          </div>
    </section>
</div>
<div class="circle1"></div>
<div class="circle2"></div>
</body>
</html>
