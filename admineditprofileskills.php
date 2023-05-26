<?php
session_start();
//adding new job to database
include 'connection.php';
if ($_SERVER["REQUEST_METHOD"] === "POST") {
$user_id = $_GET['user_id'];
$guitar = 0;
$bass = 0;
$synthesizer = 0;
$voice = 0;
$drums = 0;
$double_bass = 0;
$cello = 0;
$violin = 0;
$viola = 0;
$trumpet = 0;
$trombone = 0;
$saxaphone = 0;
$french_horn = 0;
$tuba = 0;
$clarinet = 0;
$flute = 0;
$recorder = 0;
$tin_whistle = 0;
$basoon = 0;
$marimba = 0;
$xylophone = 0;
$harp = 0;
$bodhran = 0;
$accordion = 0;
$piccolo = 0;
$ukuele = 0;
$mouth_organ = 0;
$sitar = 0;
$banjo = 0;
$mandolin = 0;
$harmonium = 0;
$tabla = 0;
$sound_engineer = 0;
$band_crew = 0;
$manager = 0;
$producer = 0;
$mixer = 0;
$dj = 0;
$composer = 0;
$writer = 0;
$instrument = $_POST['instrument'];
$sql = "SELECT *  FROM User_Skills WHERE USER_ID =$user_id";
$result = mysqli_query($conn,$sql);
$resultnum = mysqli_num_rows($result);
if($resultnum > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		if($row['USER_ID'] == $user_id){
            $stmt1 = $conn->prepare("UPDATE User_Skills SET GUITAR=?,BASS=?,SYNTHESIZER=?,VOICE=?,DRUMS=?,DOUBLE_BASS=?,CELLO=?,VIOLIN=?,VIOLA=?,TRUMPET=?,TROMBONE=?,SAXAPHONE=?,FRENCH_HORN=?,TUBA=?,CLARINET=?,FLUTE=?,RECORDER=?,TIN_WHISTLE=?,BASSOON=?,MARIMBA=?,XYLOPHONE=?,HARP=?,BODHRAN=?,ACCORDION=?,PICCOLO=?,UKULELE=?,MOUTH_ORGAN=?,SITAR=?,BANJO=?,MANDOLIN=?,HARMONIUM=?,TABLA=?,SOUND_ENGINEER=?,BAND_CREW=?,MANAGER=?,PRODUCER=?,MIXER=?,DJ=?,COMPOSER=?,WRITER=? WHERE USER_ID=?");
            if(in_array("Guitar",$instrument)){
    $guitar = 1;
}
if(in_array("Bass",$instrument)){
    $bass = 1;
}
if(in_array("Synthesizer",$instrument)){
    $synthesizer = 1;
}
if(in_array("Voice",$instrument)){
    $voice = 1;
}
if(in_array("Drums",$instrument)){
    $drums = 1;
}
if(in_array("Double Bass",$instrument)){
    $double_bass = 1;
}
if(in_array("Cello",$instrument)){
    $cello = 1;
}
if(in_array("Violin",$instrument)){
    $violin = 1;
}
if(in_array("Viola",$instrument)){
    $viola = 1;
}
if(in_array("Trumpet",$instrument)){
    $trumpet = 1;
}
if(in_array("Trombone",$instrument)){
    $trombone = 1;
}
if(in_array("Saxaphone",$instrument)){
    $saxaphone = 1;
}
if(in_array("French Horn",$instrument)){
    $french_horn = 1;
}
if(in_array("Tuba",$instrument)){
    $tuba = 1;
}
if(in_array("Clarinet",$instrument)){
    $clarinet = 1;
}
if(in_array("Flute",$instrument)){
    $flute = 1;
}
if(in_array("Recorder",$instrument)){
    $recorder = 1;
}
if(in_array("Tin Whistle",$instrument)){
    $tin_whistle = 1;
}
if(in_array("Bassoon",$instrument)){
    $basoon = 1;
}
if(in_array("Marimba",$instrument)){
    $marimba = 1;
}
if(in_array("Xylophone",$instrument)){
    $xylophone = 1;
}
if(in_array("Harp",$instrument)){
    $harp = 1;
}
if(in_array("Bodhrán",$instrument)){
    $bodhran = 1;
}
if(in_array("Accordion",$instrument)){
    $accordion = 1;
}
if(in_array("Piccolo",$instrument)){
    $piccolo = 1;
}
if(in_array("Ukulele",$instrument)){
    $ukuele = 1;
}
if(in_array("Mouth Organ",$instrument)){
    $mouth_organ = 1;
}
if(in_array("Sitar",$instrument)){
    $sitar = 1;
}
if(in_array("Banjo",$instrument)){
    $banjo = 1;
}
if(in_array("Mandolin",$instrument)){
    $mandolin = 1;
}
if(in_array("Harmonium",$instrument)){
    $harmonium = 1;
}
if(in_array("Tabla",$instrument)){
    $tabla = 1;
}
if(in_array("Sound Engineer",$instrument)){
    $sound_engineer = 1;
}
if(in_array("Band Crew",$instrument)){
    $band_crew = 1;
}
if(in_array("Manager",$instrument)){
    $manager = 1;
}
if(in_array("Producer",$instrument)){
    $producer = 1;
}
if(in_array("Mixer",$instrument)){
    $mixer = 1;
}
if(in_array("DJ",$instrument)){
    $dj = 1;
}
if(in_array("Composer",$instrument)){
    $composer = 1;
}
if(in_array("Writer",$instrument)){
    $writer = 1;
}
$stmt1->bind_param("iiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii", $guitar, $bass, $synthesizer, $voice, $drums, $double_bass, $cello, $violin, $viola, $trumpet, $trombone, $saxaphone, $french_horn, $tuba, $clarinet, $flute, $recorder, $tin_whistle, $basoon, $marimba, $xylophone, $harp, $bodhran, $accordion, $piccolo, $ukuele, $mouth_organ, $sitar, $banjo, $mandolin, $harmonium, $tabla, $sound_engineer, $band_crew, $manager, $producer, $mixer, $dj, $composer, $writer,$user_id);
$stmt1->execute();
            header("Location: admindisplay.php");
        }
        else{
            $stmt2 = $conn->prepare("INSERT INTO User_Skills(USER_ID, GUITAR, BASS, SYNTHESIZER, VOICE, DRUMS, DOUBLE_BASS, CELLO, VIOLIN, VIOLA, TRUMPET, TROMBONE, SAXAPHONE, FRENCH_HORN, TUBA, CLARINET, FLUTE, RECORDER, TIN_WHISTLE, BASSOON, MARIMBA, XYLOPHONE, HARP, BODHRAN, ACCORDION, PICCOLO, UKULELE, MOUTH_ORGAN, SITAR, BANJO, MANDOLIN, HARMONIUM, TABLA, SOUND_ENGINEER, BAND_CREW, MANAGER, PRODUCER, MIXER, DJ, COMPOSER, WRITER) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
if(in_array("Guitar",$instrument)){
    $guitar = 1;
}
if(in_array("Bass",$instrument)){
    $bass = 1;
}
if(in_array("Synthesizer",$instrument)){
    $synthesizer = 1;
}
if(in_array("Voice",$instrument)){
    $voice = 1;
}
if(in_array("Drums",$instrument)){
    $drums = 1;
}
if(in_array("Double Bass",$instrument)){
    $double_bass = 1;
}
if(in_array("Cello",$instrument)){
    $cello = 1;
}
if(in_array("Violin",$instrument)){
    $violin = 1;
}
if(in_array("Viola",$instrument)){
    $viola = 1;
}
if(in_array("Trumpet",$instrument)){
    $trumpet = 1;
}
if(in_array("Trombone",$instrument)){
    $trombone = 1;
}
if(in_array("Saxaphone",$instrument)){
    $saxaphone = 1;
}
if(in_array("French Horn",$instrument)){
    $french_horn = 1;
}
if(in_array("Tuba",$instrument)){
    $tuba = 1;
}
if(in_array("Clarinet",$instrument)){
    $clarinet = 1;
}
if(in_array("Flute",$instrument)){
    $flute = 1;
}
if(in_array("Recorder",$instrument)){
    $recorder = 1;
}
if(in_array("Tin Whistle",$instrument)){
    $tin_whistle = 1;
}
if(in_array("Bassoon",$instrument)){
    $basoon = 1;
}
if(in_array("Marimba",$instrument)){
    $marimba = 1;
}
if(in_array("Xylophone",$instrument)){
    $xylophone = 1;
}
if(in_array("Harp",$instrument)){
    $harp = 1;
}
if(in_array("Bodhrán",$instrument)){
    $bodhran = 1;
}
if(in_array("Accordion",$instrument)){
    $accordion = 1;
}
if(in_array("Piccolo",$instrument)){
    $piccolo = 1;
}
if(in_array("Ukulele",$instrument)){
    $ukuele = 1;
}
if(in_array("Mouth Organ",$instrument)){
    $mouth_organ = 1;
}
if(in_array("Sitar",$instrument)){
    $sitar = 1;
}
if(in_array("Banjo",$instrument)){
    $banjo = 1;
}
if(in_array("Mandolin",$instrument)){
    $mandolin = 1;
}
if(in_array("Harmonium",$instrument)){
    $harmonium = 1;
}
if(in_array("Tabla",$instrument)){
    $tabla = 1;
}
if(in_array("Sound Engineer",$instrument)){
    $sound_engineer = 1;
}
if(in_array("Band Crew",$instrument)){
    $band_crew = 1;
}
if(in_array("Manager",$instrument)){
    $manager = 1;
}
if(in_array("Producer",$instrument)){
    $producer = 1;
}
if(in_array("Mixer",$instrument)){
    $mixer = 1;
}
if(in_array("DJ",$instrument)){
    $dj = 1;
}
if(in_array("Composer",$instrument)){
    $composer = 1;
}
if(in_array("Writer",$instrument)){
    $writer = 1;
}
$stmt2->bind_param("iiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii", $user_id, $guitar, $bass, $synthesizer, $voice, $drums, $double_bass, $cello, $violin, $viola, $trumpet, $trombone, $saxaphone, $french_horn, $tuba, $clarinet, $flute, $recorder, $tin_whistle, $basoon, $marimba, $xylophone, $harp, $bodhran, $accordion, $piccolo, $ukuele, $mouth_organ, $sitar, $banjo, $mandolin, $harmonium, $tabla, $sound_engineer, $band_crew, $manager, $producer, $mixer, $dj, $composer, $writer);
$stmt2->execute();
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
        <div style="width: 40%; float: left;">
            <form method="post">
        <div style="width: 40%; float: left; margin-left: 30px;">
            <h2 style="margin-bottom: 20px;">Skills</h2>
                    <div style="float: left; width: 200%;">
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Guitar">
                    <label class="form-check-label">Guitar</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Bass">
                    <label class="form-check-label">Bass</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Synthesizer">
                    <label class="form-check-label">Synthesizer</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Voice">
                    <label class="form-check-label">Voice</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Drums">
                    <label class="form-check-label">Drums</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Double Bass">
                    <label class="form-check-label">Double Bass</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Cello">
                    <label class="form-check-label">Cello</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Violin">
                    <label class="form-check-label">Violin</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Viola">
                    <label class="form-check-label">Viola</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Trumpet">
                    <label class="form-check-label">Trumpet</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Trombone">
                    <label class="form-check-label">Trombone</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Saxaphone">
                    <label class="form-check-label">Saxaphone</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="French Horn">
                    <label class="form-check-label">French Horn</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Tuba">
                    <label class="form-check-label">Tuba</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Flute">
                    <label class="form-check-label">Flute</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Recorder">
                    <label class="form-check-label">Recorder</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Tin Whistle">
                    <label class="form-check-label">Tin Whistle</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Bassoon">
                    <label class="form-check-label">Bassoon</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Marimba">
                    <label class="form-check-label">Marimba</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Xylophone">
                    <label class="form-check-label">Xylophone</label><br></div>
                    <div style="float: left; width: 200%;">
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Harp">
                    <label class="form-check-label">Harp</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Bodhrán">
                    <label class="form-check-label">Bodhrán</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Accordion">
                    <label class="form-check-label">Accordion</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Piccolo">
                    <label class="form-check-label">Piccolo</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Ukulele">
                    <label class="form-check-label">Ukulele</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Mouth Organ">
                    <label class="form-check-label">Mouth Organ</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Sitar">
                    <label class="form-check-label">Sitar</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Banjo">
                    <label class="form-check-label">Banjo</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Mandolin">
                    <label class="form-check-label">Mandolin</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Harmonium">
                    <label class="form-check-label">Harmonium</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Tabla">
                    <label class="form-check-label">Tabla</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Sound Engineer">
                    <label class="form-check-label">Sound Engineer</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Band Crew">
                    <label class="form-check-label">Band Crew</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Manager">
                    <label class="form-check-label">Manager</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Producer">
                    <label class="form-check-label">Producer</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Mixer">
                    <label class="form-check-label">Mixer</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="DJ">
                    <label class="form-check-label">DJ</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Composer">
                    <label class="form-check-label">Composer</label><br>
                    <input class="form-check-input" type="checkbox" name="instrument[ ]" value="Writer">
                    <label class="form-check-label">Writer</label><br>
        </div>
        <button type="submit" style="float: right;" class="btn btn-success btn-lg">Confirm</button>
        </form>
        </div>
    </section>
</div>
<div class="circle1"></div>
<div class="circle2"></div>
</body>
</html>
