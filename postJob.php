<?php
session_start();
//adding new job to database
include 'connection.php';
if ($_SERVER["REQUEST_METHOD"] === "POST") {

if ($_SESSION["user_id"]!= null){
$query = "INSERT INTO Job (ORG_ID, TITLE, SMALL_DESC, LARGE_DESC) VALUES (?,?,?,?)";
$stmt = $conn->prepare($query);
$stmt->bind_param("isss", $org, $title, $sDesc, $lDesc);
$title = $_POST['jobTitle'];
$sDesc = $_POST['shortDesc'];
$lDesc = $_POST['longDesc'];
$org = $_SESSION["user_id"];
if (!$stmt->execute()) {
    echo $stmt->error;
}
$query2 = "INSERT INTO Job_Skills(JOB_ID, GUITAR, BASS, SYNTHESIZER, VOICE, DRUMS, DOUBLE_BASS, CELLO, VIOLIN, VIOLA, TRUMPET, TROMBONE, SAXAPHONE, FRENCH_HORN, TUBA, CLARINET, FLUTE, RECORDER, TIN_WHISTLE, BASSOON, MARIMBA, XYLOPHONE, HARP, BODHRAN, ACCORDION, PICCOLO, UKULELE, MOUTH_ORGAN, SITAR, BANJO, MANDOLIN, HARMONIUM, TABLA, SOUND_ENGINEER, BAND_CREW, MANAGER, PRODUCER, MIXER, DJ, COMPOSER, WRITER) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
$stmt2 = $conn->prepare($query2);
$job_id = $conn->insert_id;
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
$stmt2->bind_param("iiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii", $job_id, $guitar, $bass, $synthesizer, $voice, $drums, $double_bass, $cello, $violin, $viola, $trumpet, $trombone, $saxaphone, $french_horn, $tuba, $clarinet, $flute, $recorder, $tin_whistle, $basoon, $marimba, $xylophone, $harp, $bodhran, $accordion, $piccolo, $ukuele, $mouth_organ, $sitar, $banjo, $mandolin, $harmonium, $tabla, $sound_engineer, $band_crew, $manager, $producer, $mixer, $dj, $composer, $writer);
    $stmt2->execute();
}
else {
    echo "error";
}
header('location: orgHome.php');
$conn->close();
}
?>