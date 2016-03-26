<?php $title = "B-MS / INF2"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BMSCourse();

//Organisation
$c->semester("Wintersemester 2013/14", "Winter semester 2013/14");
$c->name("Informatik 2 (INF2)","Computer Science 2 (INF2)");
$c->type("Vorlesung und Labor", "lecture and laboratory");
$c->dozent("Prof. Dr. Norbert Witt");
//Content
$c->topic("TODO",
          "TODO");
//$c->languages("");
//$c->technologies("");
//$c->tools("");
//$c->ide("");
//Grade
$tmp = $rcl->lang(" (zusammen mit ", " (together with ").internStr("/haw/bms/13ss/INF1/","Informatik 1","Computer Science 1").")";
$c->cp("9".$tmp);
$c->pruefung("Klausur", "written test");
$c->grade("1.0".$tmp);

$c->printCourseInfo();
?>

<?php include("/rcl/www/rcl/include2.php"); ?>
