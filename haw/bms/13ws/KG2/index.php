<?php $title = "B-MS / KG2"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BMSCourse();

//Organisation
$c->semester("Wintersemester 2013/14", "Winter semester 2013/14");
$c->name("Künstlerische Gestaltung 2 (KG2)","Artistic Design 2 (KG2)");
$c->type("Vorlesung", "lecture");
$c->dozent("Prof. Wolfgang Willaschek ".$rcl->lang("und","and")." Prof. Hans-Jörg Kapp");
//Content
$c->topic("TODO",
          "TODO");
//$c->languages("");
//$c->technologies("");
//$c->tools("");
//$c->ide("");
//Grade
$c->cp("6 (zusammen mit ".internStr("/haw/bms/13ws/MG1/","Mediengestaltung 1").")", "6 (together with ".internStr("/haw/bms/13ws/MG1/","Media Design 1").")");
$c->pruefung("Hausarbeit", "term paper");
$c->grade("1.3");

$c->printCourseInfo();
?>

<?php include("/rcl/www/rcl/include2.php"); ?>
