<?php $title = "B-MS / M+W"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BMSCourse();

//Organisation
$c->semester("Sommersemester 2013", "Summer semester 2013");
$c->name("Medien + Wirtschaft (M+W)","Media Economics (M+W)");
$c->type("Vorlesung", "lecture");
$c->dozent("Hardy Dreier");
//Content
$c->topic("TODO",
          "TODO");
//$c->languages("");
//$c->technologies("");
//$c->tools("");
//$c->ide("");
//Grade
$c->cp("6");
$c->pruefung("Präsentation mit schriftlicher Ausarbeitung", "Presentation with written composition");
$c->grade("1.3");

$c->printCourseInfo();
?>

<?php include("/rcl/www/rcl/include2.php"); ?>
