<?php $title = "B-MS / GEST"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BMSCourse();

//Organisation
$c->semester("Sommersemester 2013", "Summer semester 2013");
$c->name("Gestaltung (GEST)","Design (GEST)");
$c->type("Vorlesung", "lecture");
$c->dozent("Prof. Ralf Hebecker");
//Content
$c->topic("TODO",
          "TODO");
//$c->languages("");
//$c->technologies("");
//$c->tools("");
//$c->ide("");
//Grade
$c->cp("6 (zusammen mit ".internStr("/haw/bms/13ss/KG1/","Künstlerische Gestaltung 1").")", "6 (together with ".internStr("/haw/bms/13ss/KG1/","Artistic Design 1").")");
$c->pruefung("Hausarbeit", "term paper");
$c->grade("bestanden","passed");

$c->printCourseInfo();
?>

<?php include("/rcl/www/rcl/include2.php"); ?>
