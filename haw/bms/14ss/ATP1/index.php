<?php $title = "B-MS / ATP1"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BMSCourse();

//Organisation
$c->semester("Sommersemester 2014", "Summer semester 2014");
$c->name("Wahlpflichtmodul Audio-Video: Audiotechnik und -produktion 1 (ATP1)","Compulsory Elective Audio-Video: Audio Technology and Audio Production 1 (ATP1)");
$c->type("Vorlesung", "lecture");
$c->dozent("Prof. Dr. Eva Wilk");
//Content
$c->topic("TODO",
          "TODO");
//$c->languages("");
//$c->technologies("");
//$c->tools("");
//$c->ide("");
//Grade
$c->cp("5");
$c->pruefung("Klausur", "written test");
$c->grade("1.3");

$c->printCourseInfo();
?>

<?php include("/rcl/www/rcl/include2.php"); ?>
