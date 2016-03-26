<?php $title = "B-MS / AV"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BMSCourse();

//Organisation
$c->semester("Sommersemester 2013", "Summer semester 2013");
$c->name("Audio-Video-Technik (AV)","Audio-Video-Technology (AV)");
$c->type("Vorlesung", "lecture");
$c->dozent("Christina Becker");
//Content
$c->topic("TODO",
          "TODO");
//$c->languages("");
//$c->technologies("");
//$c->tools("");
//$c->ide("");
//Grade
$tmp = $rcl->lang(" (zusammen mit ", " (together with ").internStr("/haw/bms/13ss/KT/","Kommunikationstechnik","Communication Technology").")";
$c->cp("6".$tmp);
$c->pruefung("Klausur", "written test");
$c->grade("1.0".$tmp);

$c->printCourseInfo();
?>

<?php include("/rcl/www/rcl/include2.php"); ?>
