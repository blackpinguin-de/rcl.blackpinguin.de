<?php $title = "B-AI / AD"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BAICourse();

//Organisation
$c->semester("Wintersemester 2010/11", "Winter semester 2010/11");
$c->name("Algorithmen und Datenstrukturen (AD)", "Algorithms and Data Structures (AD)");
$c->type("Vorlesung und Praktikum", "lecture and practical training");
$c->dozent("Prof. Dr. Friedrich Esser");
//Content
$c->topic("Programmierparadigmen, funktionale Programmierung, dynamisches/statisches Typsystem",
          "Programming paradigms, functional programming, dynamic/static type system");
$c->topic("Datentypen, Widening/Narrowing, API, Abstract Data Types (ADT)",
          "Data types, Widening/Narrowing, API, Abstract Data Types (ADT)");
$c->topic("Rekursion, Endrekursion, partielle Funktionen, referenzielle Transparenz, Seiteneffekte, (im)mutability",
          "Recursion, Tail recursion, Partial functions, Referential transparency, side effects, (im)mutability");
$c->topic("Landau-Notation, Komplexitätsklassen, Komplexitätsanalyse, Laufzeit vs. Speicher, P / NP",
          "Big O notation, Complexity classes, Complexity analysis, Running time vs. Memory, P / NP");
$c->topic("Ko-/ Kontra-/Invarianz, Funktionen höherer Ordnung, anonyme Funktionen, Heuristiken",
          "Co-/Contra-/Invariance, Higher-order functions, Anonymous functions, Heuristics");
$c->topic("Ordnungen, Comparable, Iterable, Traversieren, Sortieren: Stabilität, QuickSort, InsertionSort, MergeSort, HeapSort",
          "Orders, Comparable, Iterable, Traversing, Sorting: stable, Quick sort, Insertion sort, Merge sort, Heap sort");
$c->topic("Datenstrukturen: Felder, n-dimensionale Felder, dynamische Felder, verkettete Listen, Stapelspeicher, Warteschlange, Deque, Graphen, Bäume, Heaps",
          "Data Structures: Arrays, n-dimensional Arrays, Dynamic Arrays, Linked Lists, Stacks, Queues, Dequeues, Graphs, Trees, Heaps");
$c->topic("Collection-Methoden (Scala): exists, forall, count, find, sort, filter, partition, map, fold, reduce",
          "Collection methods (Scala): exists, forall, count, find, sort, filter, partition, map, fold, reduce");
$c->languages("Java, (Scala)");
$c->technologies("Swing, JGraphX");
//$c->tools("");
$c->ide("Eclipse, NetBeans");
//Grade
$c->cp("6");
$c->pruefung("Klausur", "written test");
$c->grade("12 LP (2+)");

$c->printCourseInfo();
?>

<a href="aco.png" style="width: 30%; float: left; margin-right: 10px; margin-top: 10px;"><img src="aco.thumb.png" alt="TSP/ACO Screenshot" title="TSP/ACO Screenshot" style="width: 100%; height: auto;" /></a>

<p>
<?php if($rcl->lang === "de") { ?>
Für das Praktikum wurden Java-Programme für folgende Anwendungen implementiert:
Intervallarithmetik, Multi-Intervalle, Produktionsplanung, Problem des Handlungsreisenden (TSP) durch Ameisenalgorithmus (ACO), Entscheidungsbäume
<?php } else { ?>
The folowing applications were developed in Java for the practical training:
Interval arithmetic, Multi-interval arithmetic, Job ordering, Traveling Salesman Problem (TSP) with Ant Colony Optimization (ACO), CSV decision trees
<?php } ?>
</p>

<div style="clear: both;"></div>

<?php include("/rcl/www/rcl/include2.php"); ?>
