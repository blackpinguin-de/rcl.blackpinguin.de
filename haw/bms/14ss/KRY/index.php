<?php $title = "B-MS / KRY"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BMSCourse();

//Organisation
$c->semester("Sommersemester 2014", "Summer semester 2014");
$c->name("Kryptografie (KRY)","Cryptography (KRY)");
$c->type("Vorlesung", "lecture");
$c->dozent("Prof. Dr. Nils Martini");
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
