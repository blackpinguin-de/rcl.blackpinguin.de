<?php $title = "B-MS / VS"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BMSCourse();

//Organisation
$c->semester("Wintersemester 2013/14", "Winter semester 2013/14");
$c->name("Vituelle Systeme (VS)", "Augmented Reality (VS)");
$c->type("Vorlesung", "lecture");
$c->dozent("Prof. Dr. Roland Greule");
//Content
$c->topic("TODO",
          "TODO");
//$c->languages("");
//$c->technologies("");
//$c->tools("");
//$c->ide("");
//Grade
$tmp = $rcl->lang(" (zusammen mit ", " (together with ").internStr("/haw/bms/13ws/ANI/","Animation").")";
$c->cp("6".$tmp);
$c->pruefung("Präsentation mit schritlicher Ausarbeitung", "Presentation with written composition");
$c->grade("1.7".$tmp);

$c->printCourseInfo();
?>

<?php include("/rcl/www/rcl/include2.php"); ?>
