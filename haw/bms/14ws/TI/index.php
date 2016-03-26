<?php $title = "B-MS / TI"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BMSCourse();

//Organisation
$c->semester("Wintersemester 2014/15", "Winter semester 2014/15");
$c->name("Theoretische Informatik (TI)", "Theoretical Computer Science (TI)");
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
$c->cp("6");
$c->pruefung("Klausur", "written test");
$c->grade("1.0");

$c->printCourseInfo();
?>

<?php include("/rcl/www/rcl/include2.php"); ?>
