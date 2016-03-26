<?php $title = "B-AI / GI"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BAICourse();

//Organisation
$c->semester("Wintersemester 2009/10", "Winter semester 2009/10");
$c->name("Grundlagen der Informatik (GI)", "Computer Science Basics (GI)");
$c->type("Vorlesung und Übungen", "lecture and excercises");
$c->dozent("Prof. Dr. Kai von Luck");
//Content
$c->topic("Arten und Anwendungsbereiche von Computern", "Computer types and their usages");
$c->topic("Geschichte von Computern und Open Source", "History of computers and open source");
$c->topic("Geschichte der Informatik", "History of computer science");
$c->topic("Überblick der Informatik-Fachbereiche und kurze Einführung", "Overview of computer science areas and brief introductions");
$c->topic("Ausführliche Einführung in Prolog", "Detailed Prolog introduction");
$c->topic("Gastvortrag von Prof. Dr. Guido Pfeiffer über Fortran und Lisp", "Guest lecture by Prof. Dr. Guido Pfeiffer about Fortran and Lisp");
$c->languages("Prolog, (Fortran), (Lisp)");
//$c->technologies("");
//$c->tools("");
$c->ide("SWI-Prolog");
//Grade
$c->cp("6");
$c->pruefung("Klausur", "written test");
$c->grade("12 LP (2+)");

$c->printCourseInfo();
?>

<?php include("/rcl/www/rcl/include2.php"); ?>
