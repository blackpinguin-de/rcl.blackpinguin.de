<?php $title = "B-MS / P1"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BMSCourse();

//Organisation
$c->semester("Sommersemester 2013", "Summer semester 2013");
$c->name("Programmieren 1 (P1)","Programming 1 (P1)");
$c->type("Vorlesung", "lecture");
$c->dozent("Prof. Dr. Andreas Plaß");
//Content
$c->topic("TODO",
          "TODO");
//$c->languages("");
//$c->technologies("");
//$c->tools("");
//$c->ide("");
//Grade
$c->cp("6");
$c->pruefung("Klausur", "written test");
$c->grade("1.0");

$c->printCourseInfo();
?>

<?php include("/rcl/www/rcl/include2.php"); ?>
