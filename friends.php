<?php require 'sessionAuthenticator.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Friends</title>
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

<div id="navbar" style="z-index: 17;">
<nav class ="navbar-dark" style="margin-bottom: 20px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php" style="color: black; font-size: x-large;">Trebble</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
    <li class="active"><a href="home.php" style="font-size: large; color: black;"><i class="bi bi-house-door-fill"></i>Home</a></li>
      <li><a href="friends.php" style="font-size: large; color: black;"><i class="bi bi-people-fill"></i>Friends</a></li>
      <li><a href="users.php" style="font-size: large; color: black"><i class="bi bi-chat-left-dots-fill"></i>Messages</a></li>
      <li><a href="profile.php" style="font-size: large; color: black"><i class="bi bi-person-fill"></i>Profile</a></li>
      <li><a href="logout.php" style="font-size: large; color: black"><i class="bi bi-lock-fill"></i>Log Out</a></li>
    </ul>
    <form class="navbar-form navbar-right" action="search.php" method ="post">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <input type="radio" class="form-check-input1" id="user" name="type" value="user">
        <label class="form-check-label" for="radio1">User</label>
        <input type="radio" class="form-check-input2" id="org" name="type" value="org">
        <label class="form-check-label" for="radio2">Organization</label>
        <input type="radio" class="form-check-input3" id="job" name="type" value="job">
        <label class="form-check-label" for="radio3">Job</label>
        <input type="radio" class="form-check-input3" id="skill" name="type" value="skill">
        <label class="form-check-label" for="radio3">Skill</label>
          <button class="btn btn-default" type="submit" name="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
    </form>
  </div>
</nav>
</div>
<script>
    window.onscroll = function() {myFunction()};
    
    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;
    
    function myFunction() {
      if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
      } else {
        navbar.classList.remove("sticky");
      }
    }
    </script>

<?php
include 'connection.php';
$id = $_SESSION['user_id'];
$sql3 = "SELECT * FROM Friend WHERE USER_ID_1 = $id || USER_ID_2 = $id";
$result2 = mysqli_query($conn,$sql3); 
  while($row = mysqli_fetch_assoc($result2)) {?> 
  <style>
    /* Custom CSS styles for the feed */
    .job-entry {
      background-color: #989c99;
      border: 1px solid #ccc;
      padding: 10px;
      margin-left: 15%;
      margin-right: 15%;
      margin-bottom: 10px;
      border-radius: 5px;
    }
  </style><?php if ($row["USER_ID_1"] == $id){
      $user_id_2 = $row['USER_ID_2'];
      $sql4 = "SELECT Friend.USER_ID_1,User.NAME, User.FLAG_1, User.FLAG_2, User.FLAG_3 FROM Friend INNER JOIN User ON Friend.USER_ID_2 = User.USER_ID WHERE User.USER_ID = $user_id_2";
$result3 = mysqli_query($conn,$sql4); 
  while($row1 = mysqli_fetch_assoc($result3)) {
      if(($row1['FLAG_1'] == 0 and $row1['FLAG_2'] == 0 and $row1['FLAG_3'] == 0) or ($row1['FLAG_1'] == 0 and $row1['FLAG_2'] == 0 and $row1['FLAG_3'] == 1) or ($row1['FLAG_1'] == 0 and $row1['FLAG_2'] == 1 and $row1['FLAG_3'] == 0) or ($row1['FLAG_1'] == 0 and $row1['FLAG_2'] == 1 and $row1['FLAG_3'] == 1) or ($row1['FLAG_1'] == 1 and $row1['FLAG_2'] == 0 and $row1['FLAG_3'] == 0) or ($row1['FLAG_1'] == 1 and $row1['FLAG_2'] == 0 and $row1['FLAG_3'] == 1) or ($row1['FLAG_1'] == 1 and $row1['FLAG_2'] == 1 and $row1['FLAG_3'] == 0)){
      ?>
  <div class="job-entry">
  <h2><?php echo $row1['NAME'];?></h2>
      <a href="viewOtherProfile.php?user_id=<?php echo $row['USER_ID_2']; ?>" class="btn btn-success">View Profile</a>
    
</div><?php
  
  }
  }
  }
  else{
            $user_id_1 = $row['USER_ID_1'];
      $sql5 = "SELECT Friend.USER_ID_2,User.NAME,User.FLAG_1, User.FLAG_2, User.FLAG_3 FROM Friend INNER JOIN User ON Friend.USER_ID_1 = User.USER_ID WHERE User.USER_ID = $user_id_1";
$result4 = mysqli_query($conn,$sql5); 
  while($row2 = mysqli_fetch_assoc($result3)) {
      if(($row2['FLAG_1'] == 0 and $row2['FLAG_2'] == 0 and $row2['FLAG_3'] == 0) or ($row2['FLAG_1'] == 0 and $row2['FLAG_2'] == 0 and $row2['FLAG_3'] == 1) or ($row2['FLAG_1'] == 0 and $row2['FLAG_2'] == 1 and $row2['FLAG_3'] == 0) or ($row2['FLAG_1'] == 0 and $row2['FLAG_2'] == 1 and $row2['FLAG_3'] == 1) or ($row2['FLAG_1'] == 1 and $row2['FLAG_2'] == 0 and $row2['FLAG_3'] == 0) or ($row2['FLAG_1'] == 1 and $row2['FLAG_2'] == 0 and $row2['FLAG_3'] == 1) or ($row2['FLAG_1'] == 1 and $row2['FLAG_2'] == 1 and $row2['FLAG_3'] == 0)){
      ?>
  <div class="job-entry">
  <h2><?php echo $row1['NAME'];?></h2>
      <a href="viewOtherProfile.php?user_id=<?php echo $row['USER_ID_2']; ?>" class="btn btn-success">View Profile</a>
    
</div><?php
  
  }
  }
  }
  }
?>
</body>
</html>
