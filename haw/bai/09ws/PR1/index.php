<?php $title = "B-AI / PR1"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BAICourse();

//Organisation
$c->semester("Wintersemester 2009/10", "Winter semester 2009/10");
$c->name("Programmieren 1 (PR1) und Praktikum Programmieren 1 (PRP1)", "Programming 1 (PR1) and Programming 1 Practice (PRP1)");
$c->type("Vorlesung und Praktikum", "lecture and practical training");
$c->dozent("Prof. Dr. Michael Böhm");
//Content
$c->topic("Instruktionszyklus, Compiler und Interpreter, Speicherzugriff", "Instruction cycle, compiler and interpreters, memory mapping");
$c->topic("Literale, Konstanten, Variablen, Referenzen, (im-)mutable Objekte","literals, constants, variables, references, (im-)mutable objects");
$c->topic("Prädikate, Funktionen, Methoden, anonyme Funktionen, Pre-/In-/Postfixnotation", "Predicates, functions, methods, anonymous functions, pre-/in-/postfix notation");
$c->topic("Spezifikation: Ein-/Ausgabeverhalten, Datentypen und Wertebereiche, Vor-/Nachbedingungen, Seiteneffekte", "Contracts: in-/output behavior, (co-)domain, pre-/postconditions, side effects");
$c->topic("Objektorientierte Programmierung: Klassen und Objekte, Vererbung, Polymorphie, Mixins","Object-oriented programming: classes and objects, inheritance, polymorphism, mixins");
$c->topic("Ordnungs- und Äquivalenzrelationen sowie Hashfunktionen", "Order theory, equivalence relations and hash functions");
$c->topic("Iteration und Rekursion", "Iteration and recursion");
$c->topic("Datenstrukturen: Listen, Bäume, Felder, assoziative Felder", "Data structures: lists, trees, arrays, associative arrays");
$c->topic("Entwurfsmuster: Kompositum, Fabrikmethode, Lazy Loading","Design patterns: composite, factory method, lazy loading");
$c->languages("Ruby");
//$c->technologies("");
//$c->tools("");
$c->ide("Eclipse");
//Grade
$c->cp("9 und 3", "9 and 3");
$c->pruefung("Klausur und Programmieren am Computer", "written test and programming at a computer");
$c->grade("13 LP (1-) und 14 LP (1)", "13 LP (1-) and 14 LP (1)");

$c->printCourseInfo();
?>

<?php include("/rcl/www/rcl/include2.php"); ?>
