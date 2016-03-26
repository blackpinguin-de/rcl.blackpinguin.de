<?php $title = "B-MS / KG1"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BMSCourse();

//Organisation
$c->semester("Sommersemester 2013", "Summer semester 2013");
$c->name("Künstlerische Gestaltung 1 (KG1)","Artistic Design 1 (KG1)");
$c->type("Vorlesung", "lecture");
$c->dozent("Lars Reimer");
//Content
$c->topic("TODO",
          "TODO");
//$c->languages("");
//$c->technologies("");
//$c->tools("");
//$c->ide("");
//Grade
$c->cp("6 (zusammen mit ".internStr("/haw/bms/13ss/GEST/","Gestaltung").")", "6 (together with ".internStr("/haw/bms/13ss/GEST/","Design").")");
$c->pruefung("Präsentation mit schriftlicher Ausarbeitung", "Presentation with written composition");
$c->grade("1.7");

$c->printCourseInfo();
?>

<?php include("/rcl/www/rcl/include2.php"); ?>
