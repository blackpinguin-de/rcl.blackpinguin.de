<?php $title = "B-AI / AI"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BAICourse();

//Organisation
$c->semester("Wintersemester 2011/12", "Winter semester 2011/12");
$c->name("Architektur von Informationssystemen (AI)","Architecture of information systems (AI)");
$c->type("Vorlesung und Praktikum", "lecture and practical training");
$c->dozent("Prof. Dr. Stefan Sarstedt");
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
$c->grade("15 LP (1+)");

$c->printCourseInfo();
?>

<?php include("/rcl/www/rcl/include2.php"); ?>
