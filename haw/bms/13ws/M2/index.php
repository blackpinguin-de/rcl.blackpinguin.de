<?php $title = "B-MS / M2"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BMSCourse();

//Organisation
$c->semester("Wintersemester 2013/14", "Winter semester 2013/14");
$c->name("Mathematik 2 (M2)","Mathematics 2 (M2)");
$c->type("Vorlesung", "lecture");
$c->dozent("Prof. Dr. Edmund Weitz");
//Content
$c->topic("TODO",
          "TODO");
//$c->languages("");
//$c->technologies("");
//$c->tools("");
//$c->ide("");
//Grade
$c->cp("9");
$c->pruefung("Klausur", "written test");
$c->grade("4.0");

$c->printCourseInfo();
?>

<?php include("/rcl/www/rcl/include2.php"); ?>
