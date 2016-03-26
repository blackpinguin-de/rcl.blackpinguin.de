<?php $title = "B-AI / LB"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BAICourse();

//Organisation
$c->semester("Sommersemester 2010", "Summer semester 2010");
$c->name("Logik und Berechenbarkeit (LB)", "Logic and Computation (LB)");
$c->type("Vorlesung und Praktikum", "lecture and practical training");
$c->dozent("Prof. Dr. Christoph Klauck");
//Content
$c->topic("Logik: Syntax, Semantik, Äquivalenzumformungen, Wahrheitstabellen, kon-/disjunktive Normalform, Erfüllbarkeit, Resolations-/Tableaukalküle, Unifikation, Resolution",
          "Logic: syntax, semantics, equivalence transformations, truth tables, con-/disjunctive normal form, satisfiability, resolution/tableau calculus, unification, resolution");
$c->topic("Logiken: Aussagenlogik, Hornlogik, Prädikatenlogik, Partielle Logik, Modale Logik, Temporale Logik, Dynamische Logik",
          "Logics: Propositional calculus, horn logic, predicate logic, partial logic, modal logic, temporal logic, dynamic logic");
$c->topic("Prolog: Fakten/Regeln/Fragen, Backtracking, Cut, Open/Closed World Assumption, Unifikation, Resolution",
          "Prolog: facts/rules/queries, backtracking, cut, open/closed world assumption, unification, resolution");
$c->topic("Berechenbarkeit: Turing-Maschine, Loop, While, Goto",
          "Computability: Turing machine, Loop, While, Goto");
$c->topic("Entscheidbar, semi-entscheidbar, rekursiv aufzählbar, Halteproblem, Landau-Notation, Komplexitätsklassen P und NP, NP-vollständig",
          "decidable, semidecidable, recursively enumerable, halting problem, big O notation, complexity classes P and NP, NP-complete");
$c->languages("Prolog, TeX");
//$c->technologies("");
//$c->tools("");
$c->ide("SWI-Prolog");
//Grade
$c->cp("6");
$c->pruefung("Klausur", "written test");
$c->grade("10 LP (2-)");

$c->printCourseInfo();
?>

<?php include("/rcl/www/rcl/include2.php"); ?>
