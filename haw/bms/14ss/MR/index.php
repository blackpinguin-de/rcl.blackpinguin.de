<?php $title = "B-MS / MR"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BMSCourse();

//Organisation
$c->semester("Sommersemester 2014", "Summer semester 2014");
$c->name("Medienrecht (MR)","Media Law (MR)");
$c->type("Vorlesung", "lecture");
$c->dozent("RA Frank C. Biethahn");
//Content
$c->topic("TODO",
          "TODO");
//$c->languages("");
//$c->technologies("");
//$c->tools("");
//$c->ide("");
//Grade
$tmp = $rcl->lang(" (zusammen mit ", " (together with ").internStr("/haw/bms/14ws/PRAE/","Präsentations- und Kommunikationsfertigkeiten","Presentation and Communication Skills").")";
$c->cp("6".$tmp);
$c->pruefung("Klausur", "written test");
$c->grade("bestanden","passed");

$c->printCourseInfo();
?>

<?php include("/rcl/www/rcl/include2.php"); ?>
