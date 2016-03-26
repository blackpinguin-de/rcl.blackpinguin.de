<?php $title = "B-AI / MG"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BAICourse();

//Organisation
$c->semester("Wintersemester 2009/10", "Winter semester 2009/10");
$c->name("Grundlagen der Mathematik (MG)", "Mathematic Basics (MG)");
$c->type("Vorlesung und Übungen", "lecture and excercises");
$c->dozent("Prof. Dr. Julia Padberg");
//Content
$c->topic("Mengenlehre", "Set theory");
$c->topic("Relationen und Abbildungen", "Relations and functions");
$c->topic("Aussagen- und Prädikatenlogik", "Propositional calculus and predicate logic");
$c->topic("Beweisstrategien, insbesondere Induktion", "Mathematical proofs, particularly by induction");
$c->topic("Vektoren und Matrizen", "Vectors and matrices");
$c->topic("Algebraische Strukturen (Monoid, Gruppe, Körper)","Algebraic structures (Monoid, Group, Field)");
$c->topic("K-Vektorräume, lineare Abbildungen und lineare Gleichungssysteme","F-vector space, linear maps and linear equations");
$c->topic("Kombinatorik und Stochastik", "Combinatorics and Stochastic");

//$c->languages("");
//$c->technologies("");
//$c->tools("");
//$c->ide("");
//Grade
$c->cp("6");
$c->pruefung("Klausur", "written test");
$c->grade("12 LP (2+)");

$c->printCourseInfo();
?>

<?php include("/rcl/www/rcl/include2.php"); ?>
