<?php $title = "TAI / AeSQL"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new TAICourse();

//Organisation
$c->semester("2007-08 &ndash; 2008-07");
$c->name("Anwendungsentwicklung SQL (AeSQL)","Application Development SQL (AeSQL)");
$c->type("Klassenunterricht", "Frontal instruction");
$c->dozent("Frau S. Schmitz", "Ms. S. Schmitz");
//Content
$c->topic("TODO",
          "TODO");
$c->languages("SQL");
$c->technologies("MySQL, ERM");
$c->tools("MySQL-Front");
$c->ide("Borland C++Builder 6.0");
//Grade
$c->pruefung("Klausuren", "written tests");
$c->grade("95% (1.3), 95% (1.3), 100% (1.0)");

$c->printCourseInfo();
?>

<?php include("/rcl/www/rcl/include2.php"); ?>
