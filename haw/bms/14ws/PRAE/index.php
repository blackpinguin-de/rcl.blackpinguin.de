<?php $title = "B-MS / PRÄ"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BMSCourse();

//Organisation
$c->semester("Wintersemester 2014/15", "Winter semester 2014/15");
$c->name("Präsentations- und Kommunikationsfertigkeiten (PRÄ)","Presentation and Communication Skills (PRÄ)");
$c->type("Vorlesung", "lecture");
$c->dozent("Dr. Almut Neumann");
//Content
$c->topic("TODO",
          "TODO");
//$c->languages("");
//$c->technologies("");
//$c->tools("");
//$c->ide("");
//Grade
$tmp = $rcl->lang(" (zusammen mit ", " (together with ").internStr("/haw/bms/14ss/MR/","Medienrecht","Media Law").")";
$c->cp("6".$tmp);
$c->pruefung("Präsentation", "presentation");
$c->grade("bestanden","passed");

$c->printCourseInfo();
?>

<?php include("/rcl/www/rcl/include2.php"); ?>
