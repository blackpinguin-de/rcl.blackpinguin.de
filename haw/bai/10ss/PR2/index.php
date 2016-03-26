<?php $title = "B-AI / PR2"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BAICourse();

//Organisation
$c->semester("Sommersemester 2010", "Summer semester 2010");
$c->name("Programmieren 2 (PR2) und Praktikum Programmieren 2 (PRP2)", "Programming 2 (PR2) and Programming 2 Practice (PRP2)");
$c->type("Vorlesung und Praktikum", "lecture and practical training");
$c->dozent("Prof. Dr. Michael Böhm");
//Content
$c->topic("Ruby vs. Java");
$c->topic("JVM, Java-Compiler, Java-Bytecode, Java-Interpreter", "JVM, Java compiler, Java bytecode, Java interpreter");
$c->topic("dynamisches vs. statisches Typsystem, Casting, Typprüfung, Autoboxing", "Dynamic vs. static type system, Casting, Type checking, Autoboxing");
$c->topic("Äquivalenz: Wertgleichheit, Objektreferenz, Objektidentität, equals/compareTo/hashCode", "Equivalence: Value, Object reference, Object identity, equals/compareTo/hashCode");
$c->topic("Pakete, Methodensignaturen, Datenkapselung", "Packages, Method signatures, Encapsulation");
$c->topic("Exceptions, Interfaces, Generics, Listener, Collections");
$c->topic("wechselseitige Rekursion, strukturelle Rekursion, Endrekursion, Umwandeln zu Iteration", "Mutual recursion, Structural recursion, Tail recursion, Tail call elimination");
$c->topic("Entwurfsmuster: Fliegengewicht, Wrapper, Model-View-Controller, Beobachter, Strategie, Dekorierer, Iterator", "Design patterns: Flyweight, Wrapper, Model-view-controller, Observer, Strategy, Decorator, Iterator");
$c->languages("Java, (Ruby)");
$c->technologies("Swing, JGame");
//$c->tools("");
$c->ide("Netbeans");
//Grade
$c->cp("4,5 und 1,5", "4.5 and 1.5");
$c->pruefung("Klausur und Programmieren am Computer", "written test and programming at a computer");
$c->grade("14 LP (1) und 14 LP (1)", "14 LP (1) and 14 LP (1)");

$c->printCourseInfo();
?>

<a href="prp2.png" style="width: 30%; float: left; margin-right: 10px; margin-top: 10px;"><img src="prp2.png" alt="Screenshot" title="Screenshot" style="width: 100%; height: auto;" /></a>

<p>
<?php if($rcl->lang === "de") { ?>
Für das Praktikum wurde eine simple Schiffahrtssimulation mit Ladung in der JGame-Engine entwickelt.
<?php } else { ?>
A simple ship simulation with cargo that uses the JGame engine was developed for the practical training.
<?php } ?>
</p>

<div style="clear: both;"></div>

<?php include("/rcl/www/rcl/include2.php"); ?>
