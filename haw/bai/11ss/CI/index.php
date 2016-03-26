<?php $title = "B-AI / CI"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BAICourse();

//Organisation
$c->semester("Sommersemester 2011", "Summer semester 2011");
$c->name("Compiler und Interpreter (CI)","Compilers and Interpreters (CI)");
$c->type("Vorlesung und Praktikum", "lecture and practical training");
$c->dozent("Prof. Dr. Michael Neitzke");
//Content
$c->topic("(Wiederholung) Lexikalische-Analyse: Scanner und Parser, Symboltabelle","(Repitition) Lexical analysis: Scanner and Parser, symbol table");
$c->topic("(Wiederholung) Parsen: top-down, bottom-up, Tiefen-/Breitensuche, LL(1), Parsing-Tabellen, First-/Follow-Mengen mit ε","(Repitition) Parsing: top-down, bottom-up, depth-/breadth-first-search, LL(k), parsing tables, first/follow sets");

$c->topic("Greibach-Normalform (GNF), Definite Clause Grammars (DCG) in Prolog, Rekursiver Abstieg, (Erweiterte) Backus-Naur-Form (BNF & EBNF), Domain Specific Languages (DSL)",
          "Greibach normal form (GNF), Definite Clause Grammars (DCG) in Prolog, Recursive Descent, (Extended) Backus-Naur Form (BNF & EBNF), Domain Specific Languages (DSL)");
$c->topic("Zwischencode: Zwei-/Drei-Adress-Code, Parsebaum, Abstrakter Syntaxbaum (AST), Semantische Regeln / Aktionen",
          "Intermediate language: two-/three-address code, Parse tree, Abstract syntax tree (AST), semantic rules / actions");
$c->topic("ANTLR: semantische/syntaktische Aktionen, Erzeugung und Transformation von AST, String Templates",
          "ANTLR: semantic/syntactic actions, AST creation and transformation, String Templates");
$c->topic("Parsen: LL(1), LL(2), LL(k), Strong-LL, Full-LL, LL(*), LR(0), LR(1), LR(k), LALR(1), SLR(1)",
          "Parsing: LL(1), LL(2), LL(k), Strong-LL, Full-LL, LL(*), LR(0), LR(1), LR(k), LALR(1), SLR(1)");
$c->topic("semantische/syntaktische Prädikate, ACTION- und GOTO-Tabellen",
          "semantic/syntactic predicates, ACTION and GOTO tables");
$c->topic("Praktikum: ANTLR, DSL, AST, Choco Constraint Solver, String Templates",
          "Practical training: ANTLR, DSL, AST, Choco Constraint Solver, String Templates");
$c->languages("Java");
$c->technologies("ANTLR, Choco Constraint Solver");
//$c->tools("");
$c->ide("ANTLRWorks, Eclipse");
//Grade
$c->cp("6");
$c->pruefung("Klausur", "written test");
$c->grade("13 LP (1-)");

$c->printCourseInfo();
?>

<?php include("/rcl/www/rcl/include2.php"); ?>
