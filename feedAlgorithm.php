<?php
session_start();
include 'connection.php';

$sql = "SELECT * FROM User_Skills WHERE USER_ID =".$_SESSION["user_id"].";";

$andWhereClause = "";
$andFirst = true;

$result = mysqli_query($conn,$sql);
$resultnum = mysqli_num_rows($result);
if($resultnum == 1) {
	if($row = mysqli_fetch_assoc($result)) {
		if ($row['GUITAR'] == 1) {
			if (!$andFirst) {
				$andWhereClause = $andWhereClause." AND ";
			} else {
				$andFirst = false;
			}
			$andWhereClause = $andWhereClause."Job_Skills.GUITAR = 1";
		}
        if ($row['BASS'] == 1) {
			if (!$andFirst) {
				$andWhereClause = $andWhereClause." AND ";
			} else {
				$andFirst = false;
			}
			$andWhereClause = $andWhereClause."Job_Skills.BASS = 1";
		}
        if ($row['SYNTHESIZER'] == 1) {
			if (!$andFirst) {
				$andWhereClause = $andWhereClause." AND ";
			} else {
				$andFirst = false;
			}
			$andWhereClause = $andWhereClause."Job_Skills.SYNTHESIZER = 1";
		}
        if ($row['VOICE'] == 1) {
			if (!$andFirst) {
				$andWhereClause = $andWhereClause." AND ";
			} else {
				$andFirst = false;
			}
			$andWhereClause = $andWhereClause."Job_Skills.VOICE = 1";
		}
        if ($row['DRUMS'] == 1) {
			if (!$andFirst) {
				$andWhereClause = $andWhereClause." AND ";
			} else {
				$andFirst = false;
			}
			$andWhereClause = $andWhereClause."Job_Skills.DRUMS = 1";
		}
        if ($row['DOUBLE_BASS'] == 1) {
			if (!$andFirst) {
				$andWhereClause = $andWhereClause." AND ";
			} else {
				$andFirst = false;
			}
			$andWhereClause = $andWhereClause."Job_Skills.DOUBLE_BASS = 1";
		}
        if ($row['CELLO'] == 1) {
			if (!$andFirst) {
				$andWhereClause = $andWhereClause." AND ";
			} else {
				$andFirst = false;
			}
			$andWhereClause = $andWhereClause."Job_Skills.CELLO = 1";
		}
        if ($row['VIOLIN'] == 1) {
			if (!$andFirst) {
				$andWhereClause = $andWhereClause." AND ";
			} else {
				$andFirst = false;
			}
			$andWhereClause = $andWhereClause."Job_Skills.VIOLIN = 1";
		}
        if ($row['VIOLA'] == 1) {
			if (!$andFirst) {
				$andWhereClause = $andWhereClause." AND ";
			} else {
				$andFirst = false;
			}
			$andWhereClause = $andWhereClause."Job_Skills.VIOLA = 1";
		}
        if ($row['TRUMPET'] == 1) {
			if (!$andFirst) {
				$andWhereClause = $andWhereClause." AND ";
			} else {
				$andFirst = false;
			}
			$andWhereClause = $andWhereClause."Job_Skills.TRUMPET = 1";
		}
        if ($row['TROMBONE'] == 1) {
			if (!$andFirst) {
				$andWhereClause = $andWhereClause." AND ";
			} else {
				$andFirst = false;
			}
			$andWhereClause = $andWhereClause."Job_Skills.TROMBONE = 1";
		}
        if ($row['SAXAPHONE'] == 1) {
			if (!$first) {
				$andWhereClause = $andWhereClause." AND ";
			} else {
				$andFirst = false;
			}
			$andWhereClause = $andWhereClause."Job_Skills.SAXAPHONE = 1";
		}
        if ($row['FRENCH_HORN'] == 1) {
			if (!$andFirst) {
				$andWhereClause = $andWhereClause." AND ";
			} else {
				$andFirst = false;
			}
			$andWhereClause = $andWhereClause."Job_Skills.FRENCH_HORN = 1";
		}
        if ($row['TUBA'] == 1) {
			if (!$andFirst) {
				$andWhereClause = $andWhereClause." AND ";
			} else {
				$andFirst = false;
			}
			$andWhereClause = $andWhereClause."Job_Skills.TUBA = 1";
		}
        if ($row['CLARINET'] == 1) {
			if (!$andFirst) {
				$andWhereClause = $andWhereClause." AND ";
			} else {
				$andFirst = false;
			}
			$andWhereClause = $andWhereClause."Job_Skills.CLARINET = 1";
		}
        if ($row['FLUTE'] == 1) {
			if (!$andFirst) {
				$andWhereClause = $andWhereClause." AND ";
			} else {
				$andFirst = false;
			}
			$andWhereClause = $andWhereClause."Job_Skills.FLUTE = 1";
		}
        if ($row['RECORDER'] == 1) {
			if (!$andFirst) {
				$andWhereClause = $andWhereClause." AND ";
			} else {
				$andFirst = false;
			}
			$andWhereClause = $andWhereClause."Job_Skills.RECORDER = 1";
		}
        if ($row['TIN_WHISTLE'] == 1) {
			if (!$andFirst) {
				$andWhereClause = $andWhereClause." AND ";
			} else {
				$andFirst = false;
			}
			$andWhereClause = $andWhereClause."Job_Skills.TIN_WHISTLE = 1";
		}
        if ($row['FRENCH_HORN'] == 1) {
			if (!$andFirst) {
				$andWhereClause = $andWhereClause." AND ";
			} else {
				$andFirst = false;
			}
			$andWhereClause = $andWhereClause."Job_Skills.FRENCH_HORN = 1";
		}
        if ($row['BASSOON'] == 1) {
			if (!$andFirst) {
				$andWhereClause = $andWhereClause." AND ";
			} else {
				$andFirst = false;
			}
			$andWhereClause = $andWhereClause."Job_Skills.BASSOON = 1";
		}
        if ($row['MARIMBA'] == 1) {
			if (!$andFirst) {
				$andWhereClause = $andWhereClause." AND ";
			} else {
				$andFirst = false;
			}
			$andWhereClause = $andWhereClause."Job_Skills.MARIMBA = 1";
		}
        if ($row['XYLOPHONE'] == 1) {
			if (!$andFirst) {
				$andWhereClause = $andWhereClause." AND ";
			} else {
				$andFirst = false;
			}
			$andWhereClause = $andWhereClause."Job_Skills.XYLOPHONE = 1";
		}
        if ($row['HARP'] == 1) {
			if (!$andFirst) {
				$andWhereClause = $andWhereClause." AND ";
			} else {
				$andFirst = false;
			}
			$andWhereClause = $andWhereClause."Job_Skills.HARP = 1";
		}
        if ($row['BODHRAN'] == 1) {
			if (!$andFirst) {
				$andWhereClause = $andWhereClause." AND ";
			} else {
				$andFirst = false;
			}
			$andWhereClause = $andWhereClause."Job_Skills.BODHRAN = 1";
		}
        if ($row['ACCORDION'] == 1) {
			if (!$andFirst) {
				$andWhereClause = $andWhereClause." AND ";
			} else {
				$andFirst = false;
			}
			$andWhereClause = $andWhereClause."Job_Skills.ACCORDION = 1";
		}
        if ($row['PICCOLO'] == 1) {
			if (!$andFirst) {
				$andWhereClause = $andWhereClause." AND ";
			} else {
				$andFirst = false;
			}
			$andWhereClause = $andWhereClause."Job_Skills.PICCOLO = 1";
		}
        if ($row['UKULELE'] == 1) {
			if (!$andFirst) {
				$andWhereClause = $andWhereClause." AND ";
			} else {
				$andFirst = false;
			}
			$andWhereClause = $andWhereClause."Job_Skills.UKULELE = 1";
		}
        if ($row['MOUTH_ORGAN'] == 1) {
			if (!$andFirst) {
				$andWhereClause = $andWhereClause." AND ";
			} else {
				$andFirst = false;
			}
			$andWhereClause = $andWhereClause."Job_Skills.MOUTH_ORGAN = 1";
		}
        if ($row['SITAR'] == 1) {
			if (!$andFirst) {
				$andWhereClause = $andWhereClause." AND ";
			} else {
				$andFirst = false;
			}
			$andWhereClause = $andWhereClause."Job_Skills.SITAR = 1";
		}
        if ($row['BANJO'] == 1) {
			if (!$andFirst) {
				$andWhereClause = $andWhereClause." AND ";
			} else {
				$andFirst = false;
			}
			$andWhereClause = $andWhereClause."Job_Skills.BANJO = 1";
		}
        if ($row['MANDOLIN'] == 1) {
			if (!$andFirst) {
				$andWhereClause = $andWhereClause." AND ";
			} else {
				$andFirst = false;
			}
			$andWhereClause = $andWhereClause."Job_Skills.MANDOLIN = 1";
		}
        if ($row['HARMONIUM'] == 1) {
			if (!$andFirst) {
				$andWhereClause = $andWhereClause." AND ";
			} else {
				$andFirst = false;
			}
			$andWhereClause = $andWhereClause."Job_Skills.HARMONIUM = 1";
		}
        if ($row['TABLA'] == 1) {
			if (!$andFirst) {
				$andWhereClause = $andWhereClause." AND ";
			} else {
				$andFirst = false;
			}
			$andWhereClause = $andWhereClause."Job_Skills.TABLA = 1";
		}
        if ($row['SOUND_ENGINEER'] == 1) {
			if (!$andFirst) {
				$andWhereClause = $andWhereClause." AND ";
			} else {
				$andFirst = false;
			}
			$andWhereClause = $andWhereClause."Job_Skills.SOUND_ENGINEER = 1";
		}
        if ($row['BAND_CREW'] == 1) {
			if (!$andFirst) {
				$andWhereClause = $andWhereClause." AND ";
			} else {
				$andFirst = false;
			}
			$andWhereClause = $andWhereClause."Job_Skills.BAND_CREW = 1";
		}
        if ($row['MANAGER'] == 1) {
			if (!$andFirst) {
				$andWhereClause = $andWhereClause." AND ";
			} else {
				$andFirst = false;
			}
			$andWhereClause = $andWhereClause."Job_Skills.MANAGER = 1";
		}
        if ($row['PRODUCER'] == 1) {
			if (!$andFirst) {
				$andWhereClause = $andWhereClause." AND ";
			} else {
				$andFirst = false;
			}
			$andWhereClause = $andWhereClause."Job_Skills.PRODUCER = 1";
		}
        if ($row['MIXER'] == 1) {
			if (!$andFirst) {
				$andWhereClause = $andWhereClause." AND ";
			} else {
				$andFirst = false;
			}
			$andWhereClause = $andWhereClause."Job_Skills.MIXER = 1";
		}
        if ($row['DJ'] == 1) {
			if (!$andFirst) {
				$andWhereClause = $andWhereClause." AND ";
			} else {
				$andFirst = false;
			}
			$andWhereClause = $andWhereClause."Job_Skills.DJ = 1";
		}
        if ($row['COMPOSER'] == 1) {
			if (!$andFirst) {
				$andWhereClause = $andWhereClause." AND ";
			} else {
				$andFirst = false;
			}
			$andWhereClause = $andWhereClause."Job_Skills.COMPOSER = 1";
		}
        if ($row['WRITER'] == 1) {
			if (!$andFirst) {
				$andWhereClause = $andWhereClause." AND ";
			} else {
				$andFirst = false;
			}
			$andWhereClause = $andWhereClause."Job_Skills.WRITER = 1";
		}
	} else {
		// Cannot fetch data
	}
} else {
	// User not found
}

$sql2 = "SELECT * FROM Job INNER JOIN Job_Skills ON Job.JOB_ID = Job_Skills.JOB_ID WHERE ".$andWhereClause;




$whereClause = "";
$first = true;
$result2 = mysqli_query($conn,$sql);
$resultnum2 = mysqli_num_rows($result2);
if($resultnum2 == 1) {
	if($row = mysqli_fetch_assoc($result2)) {
		if ($row['GUITAR'] == 1) {
			if (!$first) {
				$whereClause = $whereClause." OR ";
			} else {
				$first = false;
			}
			$whereClause = $whereClause."Job_Skills.GUITAR = 1";
		}
        if ($row['BASS'] == 1) {
			if (!$first) {
				$whereClause = $whereClause." OR ";
			} else {
				$first = false;
			}
			$whereClause = $whereClause."Job_Skills.BASS = 1";
		}
        if ($row['SYNTHESIZER'] == 1) {
			if (!$first) {
				$whereClause = $whereClause." OR ";
			} else {
				$first = false;
			}
			$whereClause = $whereClause."Job_Skills.SYNTHESIZER = 1";
		}
        if ($row['VOICE'] == 1) {
			if (!$first) {
				$whereClause = $whereClause." OR ";
			} else {
				$first = false;
			}
			$whereClause = $whereClause."Job_Skills.VOICE = 1";
		}
        if ($row['DRUMS'] == 1) {
			if (!$first) {
				$whereClause = $whereClause." OR ";
			} else {
				$first = false;
			}
			$whereClause = $whereClause."Job_Skills.DRUMS = 1";
		}
        if ($row['DOUBLE_BASS'] == 1) {
			if (!$first) {
				$whereClause = $whereClause." OR ";
			} else {
				$first = false;
			}
			$whereClause = $whereClause."Job_Skills.DOUBLE_BASS = 1";
		}
        if ($row['CELLO'] == 1) {
			if (!$first) {
				$whereClause = $whereClause." OR ";
			} else {
				$first = false;
			}
			$whereClause = $whereClause."Job_Skills.CELLO = 1";
		}
        if ($row['VIOLIN'] == 1) {
			if (!$first) {
				$whereClause = $whereClause." OR ";
			} else {
				$first = false;
			}
			$whereClause = $whereClause."Job_Skills.VIOLIN = 1";
		}
        if ($row['VIOLA'] == 1) {
			if (!$first) {
				$whereClause = $whereClause." OR ";
			} else {
				$first = false;
			}
			$whereClause = $whereClause."Job_Skills.VIOLA = 1";
		}
        if ($row['TRUMPET'] == 1) {
			if (!$first) {
				$whereClause = $whereClause." OR ";
			} else {
				$first = false;
			}
			$whereClause = $whereClause."Job_Skills.TRUMPET = 1";
		}
        if ($row['TROMBONE'] == 1) {
			if (!$first) {
				$whereClause = $whereClause." OR ";
			} else {
				$first = false;
			}
			$whereClause = $whereClause."Job_Skills.TROMBONE = 1";
		}
        if ($row['SAXAPHONE'] == 1) {
			if (!$first) {
				$whereClause = $whereClause." OR ";
			} else {
				$first = false;
			}
			$whereClause = $whereClause."Job_Skills.SAXAPHONE = 1";
		}
        if ($row['FRENCH_HORN'] == 1) {
			if (!$first) {
				$whereClause = $whereClause." OR ";
			} else {
				$first = false;
			}
			$whereClause = $whereClause."Job_Skills.FRENCH_HORN = 1";
		}
        if ($row['TUBA'] == 1) {
			if (!$first) {
				$whereClause = $whereClause." OR ";
			} else {
				$first = false;
			}
			$whereClause = $whereClause."Job_Skills.TUBA = 1";
		}
        if ($row['CLARINET'] == 1) {
			if (!$first) {
				$whereClause = $whereClause." OR ";
			} else {
				$first = false;
			}
			$whereClause = $whereClause."Job_Skills.CLARINET = 1";
		}
        if ($row['FLUTE'] == 1) {
			if (!$first) {
				$whereClause = $whereClause." OR ";
			} else {
				$first = false;
			}
			$whereClause = $whereClause."Job_Skills.FLUTE = 1";
		}
        if ($row['RECORDER'] == 1) {
			if (!$first) {
				$whereClause = $whereClause." OR ";
			} else {
				$first = false;
			}
			$whereClause = $whereClause."Job_Skills.RECORDER = 1";
		}
        if ($row['TIN_WHISTLE'] == 1) {
			if (!$first) {
				$whereClause = $whereClause." OR ";
			} else {
				$first = false;
			}
			$whereClause = $whereClause."Job_Skills.TIN_WHISTLE = 1";
		}
        if ($row['FRENCH_HORN'] == 1) {
			if (!$first) {
				$whereClause = $whereClause." OR ";
			} else {
				$first = false;
			}
			$whereClause = $whereClause."Job_Skills.FRENCH_HORN = 1";
		}
        if ($row['BASSOON'] == 1) {
			if (!$first) {
				$whereClause = $whereClause." OR ";
			} else {
				$first = false;
			}
			$whereClause = $whereClause."Job_Skills.BASSOON = 1";
		}
        if ($row['MARIMBA'] == 1) {
			if (!$first) {
				$whereClause = $whereClause." OR ";
			} else {
				$first = false;
			}
			$whereClause = $whereClause."Job_Skills.MARIMBA = 1";
		}
        if ($row['XYLOPHONE'] == 1) {
			if (!$first) {
				$whereClause = $whereClause." OR ";
			} else {
				$first = false;
			}
			$whereClause = $whereClause."Job_Skills.XYLOPHONE = 1";
		}
        if ($row['HARP'] == 1) {
			if (!$first) {
				$whereClause = $whereClause." OR ";
			} else {
				$first = false;
			}
			$whereClause = $whereClause."Job_Skills.HARP = 1";
		}
        if ($row['BODHRAN'] == 1) {
			if (!$first) {
				$whereClause = $whereClause." OR ";
			} else {
				$first = false;
			}
			$whereClause = $whereClause."Job_Skills.BODHRAN = 1";
		}
        if ($row['ACCORDION'] == 1) {
			if (!$first) {
				$whereClause = $whereClause." OR ";
			} else {
				$first = false;
			}
			$whereClause = $whereClause."Job_Skills.ACCORDION = 1";
		}
        if ($row['PICCOLO'] == 1) {
			if (!$first) {
				$whereClause = $whereClause." OR ";
			} else {
				$first = false;
			}
			$whereClause = $whereClause."Job_Skills.PICCOLO = 1";
		}
        if ($row['UKULELE'] == 1) {
			if (!$first) {
				$whereClause = $whereClause." OR ";
			} else {
				$first = false;
			}
			$whereClause = $whereClause."Job_Skills.UKULELE = 1";
		}
        if ($row['MOUTH_ORGAN'] == 1) {
			if (!$first) {
				$whereClause = $whereClause." OR ";
			} else {
				$first = false;
			}
			$whereClause = $whereClause."Job_Skills.MOUTH_ORGAN = 1";
		}
        if ($row['SITAR'] == 1) {
			if (!$first) {
				$whereClause = $whereClause." OR ";
			} else {
				$first = false;
			}
			$whereClause = $whereClause."Job_Skills.SITAR = 1";
		}
        if ($row['BANJO'] == 1) {
			if (!$first) {
				$whereClause = $whereClause." OR ";
			} else {
				$first = false;
			}
			$whereClause = $whereClause."Job_Skills.BANJO = 1";
		}
        if ($row['MANDOLIN'] == 1) {
			if (!$first) {
				$whereClause = $whereClause." OR ";
			} else {
				$first = false;
			}
			$whereClause = $whereClause."Job_Skills.MANDOLIN = 1";
		}
        if ($row['HARMONIUM'] == 1) {
			if (!$first) {
				$whereClause = $whereClause." OR ";
			} else {
				$first = false;
			}
			$whereClause = $whereClause."Job_Skills.HARMONIUM = 1";
		}
        if ($row['TABLA'] == 1) {
			if (!$first) {
				$whereClause = $whereClause." OR ";
			} else {
				$first = false;
			}
			$whereClause = $whereClause."Job_Skills.TABLA = 1";
		}
        if ($row['SOUND_ENGINEER'] == 1) {
			if (!$first) {
				$whereClause = $whereClause." OR ";
			} else {
				$first = false;
			}
			$whereClause = $whereClause."Job_Skills.SOUND_ENGINEER = 1";
		}
        if ($row['BAND_CREW'] == 1) {
			if (!$first) {
				$whereClause = $whereClause." OR ";
			} else {
				$first = false;
			}
			$whereClause = $whereClause."Job_Skills.BAND_CREW = 1";
		}
        if ($row['MANAGER'] == 1) {
			if (!$first) {
				$whereClause = $whereClause." OR ";
			} else {
				$first = false;
			}
			$whereClause = $whereClause."Job_Skills.MANAGER = 1";
		}
        if ($row['PRODUCER'] == 1) {
			if (!$first) {
				$whereClause = $whereClause." OR ";
			} else {
				$first = false;
			}
			$whereClause = $whereClause."Job_Skills.PRODUCER = 1";
		}
        if ($row['MIXER'] == 1) {
			if (!$first) {
				$whereClause = $whereClause." OR ";
			} else {
				$first = false;
			}
			$whereClause = $whereClause."Job_Skills.MIXER = 1";
		}
        if ($row['DJ'] == 1) {
			if (!$first) {
				$whereClause = $whereClause." OR ";
			} else {
				$first = false;
			}
			$whereClause = $whereClause."Job_Skills.DJ = 1";
		}
        if ($row['COMPOSER'] == 1) {
			if (!$first) {
				$whereClause = $whereClause." OR ";
			} else {
				$first = false;
			}
			$whereClause = $whereClause."Job_Skills.COMPOSER = 1";
		}
        if ($row['WRITER'] == 1) {
			if (!$first) {
				$whereClause = $whereClause." OR ";
			} else {
				$first = false;
			}
			$whereClause = $whereClause."Job_Skills.WRITER = 1";
		}
	} else {
		// Cannot fetch data
	}
} else {
	// User not found
}

$sql3 = "SELECT * FROM Job INNER JOIN Job_Skills ON Job.JOB_ID = Job_Skills.JOB_ID WHERE ".$whereClause;
$result1 = mysqli_query($conn,$sql2);
$result2 = mysqli_query($conn,$sql3);
if (mysqli_num_rows($result1) > 0) {?>
  <p style="font-size: 18px; line-height: 1.9; text-transform: uppercase; text-decoration: none; background: #ffd04f; padding: 5px 20px; display: inline-block;       color: black; margin-top: 15px; border-radius: 5px; text-align: center; margin-bottom: 2%; margin-left:45%;">Exact Match!</p>
  <?php
  $myArray = array(); 
  while($row = mysqli_fetch_assoc($result1)) {
      $myArray[] = $row['JOB_ID']?> 
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
  <div class="job-entry">
      <h2><?php echo $row['TITLE'];?></h2>
      <p><?php echo $row['SMALL_DESC'];?></p>
      <a href="viewJob.php?user_id=<?php echo $row['JOB_ID']; ?>" class="btn btn-warning" style="color: black;">View Job</a>
    
</div><?php
  }
} else {
}
if (mysqli_num_rows($result2) > 0) {
  ?>
  <p style="font-size: 18px; line-height: 1.9; text-transform: uppercase; text-decoration: none; background: #ffd04f; padding: 5px 20px; display: inline-block;       color: black; margin-top: 15px; border-radius: 5px; text-align: center; margin-bottom: 2%; margin-left:45%; margin-top: 5%;">Common Match...</p>
  <?php
  
  while($row = mysqli_fetch_assoc($result2)) {
      //prevents duplicates in output display
    if(is_array($myArray) && in_array($row['JOB_ID'], $myArray)){
        continue; //skip current entry
    }
      ?>
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
  <div class="job-entry">
      <h2><?php echo $row['TITLE'];?></h2>
      <p><?php echo $row['SMALL_DESC'];?></p>
      <a href="viewJob.php?user_id=<?php echo $row['JOB_ID']; ?>" class="btn btn-warning" style="color: black;">View Job</a>
</div><?php
  }
} else {
}
?>