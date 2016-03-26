<?php $title = "B-MS / CA"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BMSCourse();

//Organisation
$c->semester("Sommersemester 2014", "Summer semester 2014");
$c->name("Camera Actiong (CA)");
$c->type("Labor", "laboratory");
$c->dozent("Prof. Wolfgang Willaschek");
//Content
//$c->languages("");
//$c->technologies("");
//$c->tools("");
//$c->ide("");
//Grade
$tmp = internStr("/haw/bms/14ss/MG2/","Mediengestaltung 2","Media Design 2");
$c->cp("6 (zusammen mit ".$tmp.")", "6 (together with ".$tmp.")");
$gef = internStr("/proj/Gefahrengebiete/","Gefahrengebiete");
$c->pruefung("Arbeit an ".$gef, "Work on ".$gef);
$c->grade("bestanden","passed");

$c->printCourseInfo();
?>

<p>
<?php if($rcl->lang === "de") { ?>
Im Rahmen dieses Kurses wurde der Kurzfilm <?php intern("/proj/Gefahrengebiete/","Gefahrengebiete"); ?> als Gruppenarbeit erstellt.
<?php } else { ?>
The short film <?php intern("/proj/Gefahrengebiete/","Gefahrengebiete"); ?> was made in a group as part of this course.
<?php } ?>
</p>

<?php include("/rcl/www/rcl/include2.php"); ?>
