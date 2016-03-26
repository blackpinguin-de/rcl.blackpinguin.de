<?php $title = "B-MS / INF3"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BMSCourse();

//Organisation
$c->semester("Wintersemester 2013/14", "Winter semester 2013/14");
$c->name("Informatik 3 (INF3) + Elektronik","Computer Science 3 (INF3) + Electronics");
$c->type("Vorlesung und Labor", "lecture and laboratory");
$c->dozent("Dipl.-Ing. Michael Berens");
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
$c->grade("1.0");

$c->printCourseInfo();
?>

<?php include("/rcl/www/rcl/include2.php"); ?>
