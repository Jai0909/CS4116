<?php 
// Establish a database connection
include 'connection.php';
$name = $_POST['orgName'];
$phone = $_POST['orgPhone'];
$address = $_POST['orgAddress'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$id = $_GET['user_id'];
$sql = "SELECT *  FROM Organization WHERE ORG_ID =$id";
$result = mysqli_query($conn,$sql);
$resultnum = mysqli_num_rows($result);
if($resultnum > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		if($row['ORG_ID'] == $id){
            $sql1 = "UPDATE Organization SET ORGANIZATION='$name',TELEPHONE='$phone',ADDRESS='$address', EMAIL='$email', PASSWORD='$pwd' WHERE ORG_ID = $id";
            if($conn->query($sql1)){
                header("Location: admindisplay.php");
            }
        }
        else{
            $sql2 = "INSERT INTO Organization (ORG_ID, ORGANIZATION,TELEPHONE, ADDRESS, EMAIL, PASSWORD) VALUES ($id,'$name','$phone','$address','$email','$pwd')";
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
        <form action="orgeditprofile.php" method="post">
			<h1 class="percentage">Organisation Profile</h1>	
			<div class="form-group">
			<label for="inputName"></label>
				<input type="orgname" class="form-control" id="inputName" name="orgName" aria-describedby="orgnameHelp" placeholder="Enter Name">
				<small id="orgnameHelp" class="form-text text-muted"></small>
			</div>	<!-- To be read from database -->
			<div class="form-group">
			<label for="inputPhone"></label>
				<input type="orgPhone" class="form-control" id="inputOrgPhone" name="orgPhone" aria-describedby="orgPhoneHelp" placeholder="Enter New Number">
				<small id="orgPhoneHelp" class="form-text text-muted"></small>
			</div>	<!-- To be read from database -->
			<div class="form-group">
			<label for="inputOrgAddress"></label>
				<input type="address" class="form-control" id="inputorgAddress" name="orgAddress" aria-describedby="orgAddressHelp" placeholder="Enter Address">
				<small id="orgAddressHelp" class="form-text text-muted"></small>
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
			  <button type="submit" class="btn btn-success btn-lg">Confirm</button>
		</form>	
          </div>
          <div class="games">
            <div class="cards">
            </div>
          </div>
    </section>
</div>
</body>
</html>
