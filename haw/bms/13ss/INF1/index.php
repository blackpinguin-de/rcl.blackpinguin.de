<?php $title = "B-MS / INF1"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BMSCourse();

//Organisation
$c->semester("Sommersemester 2013", "Summer semester 2013");
$c->name("Informatik 1 (INF1)","Computer Science 1 (INF1)");
$c->type("Vorlesung und Labor", "lecture and laboratory");
$c->dozent("Daniel Heid");
//Content
$c->topic("TODO",
          "TODO");
//$c->languages("");
//$c->technologies("");
//$c->tools("");
//$c->ide("");
//Grade
$tmp = $rcl->lang(" (zusammen mit ", " (together with ").internStr("/haw/bms/13ws/INF2/","Informatik 2","Computer Science 2").")";
$c->cp("9".$tmp);
$c->pruefung("Klausur", "written test");
$c->grade("1.0".$tmp);

$c->printCourseInfo();
?>

<?php include("/rcl/www/rcl/include2.php"); ?>
