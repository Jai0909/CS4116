<?php require 'sessionAuthenticator.php' ?>
<?php
include 'connection.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Search</title>
  <link rel="icon" type="image/x-icon" href="TrebbleLogo">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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
  </style>

</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: rgb(36, 36, 36);">

<div id="navbar" style="z-index: 17;">
<nav class ="navbar-dark" style="margin-bottom: 20px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php" style="color: black; font-size: x-large;">Trebble</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="orgHome.php" style="font-size: large; color: black;"><i class="bi bi-house-door-fill"></i>Home</a></li>
      <li><a href="post_Job.php" style="font-size: large; color: black;"><i class="bi bi-briefcase-fill"></i>Post Job</a></li>
      <li><a href="jobs.php" style="font-size: large; color: black"><i class="bi bi-briefcase"></i>Jobs</a></li>
      <li><a href="org_profile.php" style="font-size: large; color: black"><i class="bi bi-person-fill"></i>Profile</a></li>
      <li><a href="logout.php" style="font-size: large; color: black"><i class="bi bi-lock-fill"></i>Log Out</a></li>
    </ul>
    <form class="navbar-form navbar-right" method ="post">
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
            <?php
            $user_id = $_SESSION["user_id"];
if (isset($_POST['submit'])) {
    $search = $_POST['search'];
    $type = $_POST['type'];
    if(isset($type)){
        if($type != 'org' and $type != 'job' and $type != 'skill'){
            $sql = "Select * from User where NAME like '%$search%' AND USER_ID != $user_id";
            $result = $conn->query($sql); 
            if ($result) {
                if (mysqli_num_rows($result)>0) {
                    $columns = array();
while ($column = mysqli_fetch_field($result)) {
    $columns[] = $column->name;
}
                    while ($row = mysqli_fetch_assoc($result)) {
                        if(($row['FLAG_1'] == 0 and $row['FLAG_2'] == 0 and $row['FLAG_3'] == 0) or ($row['FLAG_1'] == 0 and $row['FLAG_2'] == 0 and $row['FLAG_3'] == 1) or ($row['FLAG_1'] == 0 and $row['FLAG_2'] == 1 and $row['FLAG_3'] == 0) or ($row['FLAG_1'] == 0 and $row['FLAG_2'] == 1 and $row['FLAG_3'] == 1) or ($row['FLAG_1'] == 1 and $row['FLAG_2'] == 0 and $row['FLAG_3'] == 0) or ($row['FLAG_1'] == 1 and $row['FLAG_2'] == 0 and $row['FLAG_3'] == 1) or ($row['FLAG_1'] == 1 and $row['FLAG_2'] == 1 and $row['FLAG_3'] == 0)){
                        ?> <div class="job-entry"><h2><?php echo $row['NAME'];?></h2>
                        <a href="viewOtherProfile2.php?user_id=<?php echo $row['USER_ID']; ?>" class="btn btn-default">View Profile</a>
</div><?php
                    }
                    }
                } 
            }
        }
        else if($type != 'user' and $type != 'job' and $type != 'skill'){
            $sql1 = "Select * from Organization where ORGANIZATION like '%$search%'";
            $result1 = $conn->query($sql1); 
            if ($result1) {
                if (mysqli_num_rows($result1)>0) {
                    while ($row1 = mysqli_fetch_assoc($result1)) {
                        if(($row1['FLAG_1'] == 0 and $row1['FLAG_2'] == 0 and $row1['FLAG_3'] == 0) or ($row1['FLAG_1'] == 0 and $row1['FLAG_2'] == 0 and $row1['FLAG_3'] == 1) or ($row1['FLAG_1'] == 0 and $row1['FLAG_2'] == 1 and $row1['FLAG_3'] == 0) or ($row1['FLAG_1'] == 0 and $row1['FLAG_2'] == 1 and $row1['FLAG_3'] == 1) or ($row1['FLAG_1'] == 1 and $row1['FLAG_2'] == 0 and $row1['FLAG_3'] == 0) or ($row1['FLAG_1'] == 1 and $row1['FLAG_2'] == 0 and $row1['FLAG_3'] == 1) or ($row1['FLAG_1'] == 1 and $row1['FLAG_2'] == 1 and $row1['FLAG_3'] == 0)){
                        ?><div class="job-entry"><h2><?php echo $row1['ORGANIZATION'];?></h2>
                       <a href="viewOtherProfileOrg2.php?user_id=<?php echo $row1['ORG_ID']; ?>" class="btn btn-default">View Profile</a>
</div><?php
                    }
                }
                } 
            }
    }
        else if($type != 'org' and $type != 'user' and $type != 'skill'){
            $sql = "Select * from Job where TITLE like '%$search%'";
            $result = $conn->query($sql); 
            if ($result) {
                if (mysqli_num_rows($result)>0) {
                    $columns = array();
while ($column = mysqli_fetch_field($result)) {
    $columns[] = $column->name;
}
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?> <div class="job-entry"><h2><?php echo $row['TITLE'];?></h2>
                        <p><?php echo $row['SMALL_DESC'];?></p>
                        <a href="viewJob2.php?user_id=<?php echo $row['JOB_ID']; ?>" class="btn btn-default">View Job</a>
</div><?php
                    }
                } 
        }
        }
        else if($type != 'org' and $type != 'user' and $type != 'job'){
include 'connection.php';

$sql = "Select Job.JOB_ID,Job.TITLE,Job_Skills.GUITAR, Job_Skills.BASS, Job_Skills.SYNTHESIZER, Job_Skills.VOICE, Job_Skills.DRUMS, Job_Skills.DOUBLE_BASS, CELLO, Job_Skills.VIOLIN, Job_Skills.VIOLA, Job_Skills.TRUMPET, Job_Skills.TROMBONE, Job_Skills.SAXAPHONE, Job_Skills.FRENCH_HORN, Job_Skills.TUBA, Job_Skills.CLARINET, Job_Skills.FLUTE, Job_Skills.RECORDER, Job_Skills.TIN_WHISTLE, Job_Skills.BASSOON, Job_Skills.MARIMBA, Job_Skills.XYLOPHONE, Job_Skills.HARP, Job_Skills.BODHRAN, Job_Skills.ACCORDION, Job_Skills.PICCOLO, Job_Skills.UKULELE, Job_Skills.MOUTH_ORGAN, Job_Skills.SITAR, Job_Skills.BANJO, Job_Skills.MANDOLIN, Job_Skills.HARMONIUM, Job_Skills.TABLA, Job_Skills.SOUND_ENGINEER, Job_Skills.BAND_CREW, Job_Skills.MANAGER, Job_Skills.PRODUCER, Job_Skills.MIXER, Job_Skills.DJ, Job_Skills.COMPOSER, Job_Skills.WRITER from Job inner join Job_Skills on Job.JOB_ID =  Job_Skills.JOB_ID";
$result = $conn->query($sql); 
            if ($result) {
                if (mysqli_num_rows($result)>0) {
                    $columns = array();
while ($column = mysqli_fetch_field($result)) {
    $columns[] = $column->name;
}
$matches = array();
                    while ($row = mysqli_fetch_assoc($result)) {
                        foreach ($columns as $column) {
        if ($row[$column] == 1 and $column == strtoupper($search)) {
            ?> <div class="job-entry"><h2><?php echo $row['TITLE'];?></h2>
            <p><?php echo $row['SMALL_DESC'];?></p>
                        <a href="viewJob2.php?user_id=<?php echo $row['JOB_ID']; ?>" class="btn btn-default">View Job</a>
</div><?php
                    }
            }
    }

}
}
        }
    }
}

?>
</body> 
</html>