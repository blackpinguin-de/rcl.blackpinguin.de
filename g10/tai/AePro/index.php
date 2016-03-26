<?php $title = "TAI / AePro"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new TAICourse();

//Organisation
$c->semester("2006-08 &ndash; 2007-07");
$c->name("Anwendungsentwicklung Programmierung (AePro)","Application Development Programming (AePro)");
$c->type("Klassenunterricht", "Frontal instruction");
$c->dozent("Frau S. Schmitz", "Ms. S. Schmitz");
//Content
$c->topic("TODO",
          "TODO");
$c->languages("C++");
//$c->technologies("");
//$c->tools("");
$c->ide("Borland C++Builder 6.0");
//Grade
$c->pruefung("Klausuren", "written tests");
$c->grade("99% (1.1), 98% (1.1), 100% (1.0), 97% (1.2)");

$c->printCourseInfo();
?>

<?php include("/rcl/www/rcl/include2.php"); ?>
