<?php $title = "TAI / AeOffice"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new TAICourse();

//Organisation
$c->semester("2006-08 &ndash; 2007-07");
$c->name("Anwendungsentwicklung Office (AeOffice)","Application Development Office (AeOffice)");
$c->type("Klassenunterricht", "Frontal instruction");
$c->dozent("Herr Joachim Federau","Mr. Joachim Federau");
//Content
$c->topic("TODO",
          "TODO");
$c->languages("VBA");
$c->technologies("Makros");
$c->tools("Microsoft Word, Microsoft Excel, Microsoft Access");
//$c->ide("");
//Grade
$c->pruefung("Klausuren", "written tests");
$c->grade("93% (1.4), 82% (2.3), 91% (1.5), 94% (1.3), 100% (1.0), 100% (1.0)");

$c->printCourseInfo();
?>

<?php include("/rcl/www/rcl/include2.php"); ?>
