<?php $title = "B-AI / GKA"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BAICourse();

//Organisation
$c->semester("Wintersemester 2010/11", "Winter semester 2010/11");
$c->name("Graphentheoretische Konzepte und Algorithmen (GKA)", "Graph Theory (GKA)");
$c->type("Vorlesung und Praktikum", "lecture and practical training");
$c->dozent("Prof. Dr. Julia Padberg");
//Content
$c->topic("Graphen: (un-)gerichtet, gemischt, gewichtet, einfach, vollständig, Multi-, Teil-, Unter-, Konflikt-, bipartit, planar",
          "Graphs: (un-)directed, mixed, weighted, simple, complete, multi-, sub-, induced, conflict, bipartite, planar");
$c->topic("Isomorphie, Grad, Adjazenzmatrizen, Adjazenzlisten, Inzidenzmatrizen",
          "Isomorphism, degree, adjacency matrixes, adjacency lists, incidence matrixes");
$c->topic("Wege, Kreise, Zusammenhangskomponenten, Schnitte, Landau-Notation",
          "Paths, cycles, connected components, cut, big O notation");
$c->topic("kürzeste Wege: Breitensuche, Dijkstra-Algorithmus, A*-Algorithmus",
          "Shortest paths: breadth-first search, Dijkstra's algorithm, A*-algorithm");
$c->topic("Knotenfärbung: chromatische Zahl, Greedy-Algorithmus, ColorFirst-Algorithmus, Breitensuche",
          "Vertex coloring: chromatic number, greedy coloring, ColorFirst algorithm, breadth-first search");
$c->topic("Bäume, Wälder, Wurzelbäume, Binäre Bäume, Suchbäume, AVL-Bäume, minimale Spannbäume, Kruskal-Algorithmus",
          "Trees, Forests, rootet trees, binary trees, search trees, AVL trees, minimum spanning tree, Kruskal's algorithm");
$c->topic("Netzwerke, Flüsse, maximale Flüsse, Algorithmus von Ford und Fulkerson",
          "Networks, flow networks, maximum flows, Ford-Fulkerson algorithm");
$c->topic("Paarungen, Eulertour/-kreis, Algorithmus von Fleury, Hamiltonwege/-kreise, Problem des Handlungsreisenden",
          "Matchings, eulerian tour/cycle, Fleury's algorithm, Hamiltonian paths/cycles, travelling salesman problem");
$c->topic("Graphersetzungssysteme, Graphgrammatiken, Graphmorphismen, Komposition, Beispiele: Flussdiagramme, Turingmaschine",
          "Graph transformation systems, graph grammars, graph homomorphisms, composition, examples: flowcharts, Turing machines");
$c->topic("Petri-Netze: Stellen/Transitions-Netze, S/T-Netze mit Kapazitäten, Prädikats/Ereignis-System",
          "Petri nets: place/transition nets, P/T nets with capacities, condition/event nets");
$c->languages("Java");
$c->technologies("JUnit, SVN, GNU Savannah");
//$c->tools("");
$c->ide("Eclipse");
//Grade
$c->cp("6");
$c->pruefung("Klausur", "written test");
$c->grade("9 LP (3+)");

$c->printCourseInfo();
?>

<?php include("/rcl/www/rcl/include2.php"); ?>
