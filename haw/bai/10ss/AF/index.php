<?php $title = "B-AI / AF"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BAICourse();

//Organisation
$c->semester("Sommersemester 2010", "Summer semester 2010");
$c->name("Automatentheorie und Formale Sprachen (AF)", "Automata Theory and Formal Languages (AF)");
$c->type("Vorlesung und Übungen", "lecture and excercises");
$c->dozent("Prof. Dr. Michael Neitzke");
//Content
$c->topic("Alphabet, Wörter, formale Sprachen","Alphabet, words, formal languages");
$c->topic("Endliche Automaten: DEA, NEA, ε-NEA, Mealy, Moore, Umwandeln, Minimieren","Finite-state automata: DFA, NFA, ε-NFA, Mealy, Moore, conversion, minimization");
$c->topic("Reguläre Ausdrücke: Umwandlung von/zu EA","Regular expressions: conversion from/to FSA");
$c->topic("Reguläre Sprachen: Pumping-Lemma, Abgeschlossenheit, Äquivalenz","Regular languages: pumping lemma, closure, equivalence");
$c->topic("Formale Grammatiken: Ableiten, Parsebäume, Mehrdeutigkeiten beseitigen","Formal grammars: derivation, parse trees, removing ambiguity");
$c->topic("Kellerautomaten: PDA, DPDA","Pushdown Automata: PDA, DPDA");
$c->topic("Chomsky-Hierarchie, Abzählbarkeit, Aufzählbarkeit, Entscheidbarkeit, Halteproblem","Chomsky hierarchy, countable, recursively enumerable, decidable, halting problem");
$c->topic("Lexikalische-Analyse: Scanner und Parser, Symboltabelle, JFlex","Lexical analysis: Scanner and Parser, symbol table, JFlex");
$c->topic("Parsen: top-down, bottom-up, Tiefen-/Breitensuche, LL(1), Parsing-Tabellen, First-/Follow-Mengen mit ε","Parsing: top-down, bottom-up, depth-/breadth-first-search, LL(k), parsing tables, first/follow sets");
//$c->languages(".*");
//$c->technologies("JFlex");
$c->tools("JFLAP");
//$c->ide("");
//Grade
$c->cp("6");
$c->pruefung("Klausur", "written test");
$c->grade("14 LP (1)");

$c->printCourseInfo();
?>

<?php include("/rcl/www/rcl/include2.php"); ?>
