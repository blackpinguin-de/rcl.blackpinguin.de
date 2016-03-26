<?php $title = "B-MS / MAN"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BMSCourse();

//Organisation
$c->semester("Sommersemester 2013", "Summer semester 2013");
$c->name("Management (MAN)");
$c->type("Vorlesung", "lecture");
$c->dozent("Prof. Dr. Johannes Ludwig");
//Content
$c->topic("TODO",
          "TODO");
//$c->languages("");
//$c->technologies("");
//$c->tools("");
//$c->ide("");
//Grade
$c->cp("6 (zusammen mit ".internStr("/haw/bms/13ss/PRG/","Einführung in das Programmieren")." und ".internStr("/haw/bms/13ss/Proj1/","Projekt 1").")", "6 (together with ".internStr("/haw/bms/13ss/PRG/","Programming Introduction")." and ".internStr("/haw/bms/13ss/Proj1/","Project 1").")");
$c->pruefung("Klausur", "written test");
$c->grade("bestanden","passed");

$c->printCourseInfo();
?>

<?php include("/rcl/www/rcl/include2.php"); ?>
