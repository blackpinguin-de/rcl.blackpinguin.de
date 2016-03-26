<?php $title = "B-MS / PRG"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BMSCourse();

//Organisation
$c->semester("Sommersemester 2013", "Summer semester 2013");
$c->name("Einführung in das Programmieren (PRG)","Programming Introduction (PRG)");
$c->type("Vorlesung", "lecture");
$c->dozent("Dipl.-Inform. Björn Jensen");
//Content
$c->topic("TODO",
          "TODO");
//$c->languages("");
//$c->technologies("");
//$c->tools("");
//$c->ide("");
//Grade
$c->cp("6 (zusammen mit ".internStr("/haw/bms/13ss/MAN/","Management")." und ".internStr("/haw/bms/13ss/Proj1/","Projekt 1").")", "6 (together with ".internStr("/haw/bms/13ss/MAN/","Management")." and ".internStr("/haw/bms/13ss/Proj1/","Project 1").")");
$c->pruefung("Hausaufgaben", "homework assignments");
$c->grade("bestanden","passed");

$c->printCourseInfo();
?>

<?php include("/rcl/www/rcl/include2.php"); ?>
