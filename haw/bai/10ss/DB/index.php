<?php $title = "B-AI / DB"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BAICourse();

//Organisation
$c->semester("Sommersemester 2010", "Summer semester 2010");
$c->name("Datenbanken (DB)", "Databases (DB)");
$c->type("Vorlesung und Praktikum", "lecture and practical training");
$c->dozent("Prof. Dr. Thomas Thiel-Clemen");
//Content
$c->topic("DB, DBS, DBMS, ANSI-SPARC-Architektur, JDBC, Geoinformationssysteme (GIS)",
          "DB, DBS, DBMS, ANSI-SPARC Architecture, JDBC, geographic information systems (GIS)");
$c->topic("Modelle, ERM, UML (Klassen), Relationenmodell",
          "Models, ERM, UML (class), relational model");
$c->topic("Entwurf, Beziehungen, Rekursion, Sicherheitsmodelle, Zugriffsrechte, Prepared Statements, Prozeduren und Funktionen",
          "DB design, relationships, recursion, security models, access control, prepared statements, procedures and functions");
$c->topic("Anfragesprachen: Projektion, Selektion, Kreuzprodukt, Verbund, Umbenennung",
          "Query languages: projection, selection, cartesian product, join, rename");
$c->topic("SQL: create/drop/alter table, primary/foreign/unique key, select from where group order, cross/natural/inner/outer/left/right join, (inline) view, insert/update/delete, create user/role, grant/revoke");
$c->topic("Anomalien, funktionale Abhängigkeiten, transitive Hülle, Dekomposition, 1NF, 2NF, 3NF, Transaktionen, AKID-Eigenschaften",
          "Anomalies, functional dependencies, transitive closure, decomposition, 1NF, 2NF, 3NF, transactions, ACID properties");
$c->topic(externStr("http://slideshare.net/titanoboa/couchdb-nosql-4403384","Gastvortrag")." von Dr. Kerstin Puschke über NoSQL, CouchDB und REST",
          externStr("http://slideshare.net/titanoboa/couchdb-nosql-4403384","Guest lecture")." by Dr. Kerstin Puschke about NoSQL, CouchDB and REST");

$c->languages("SQL, Java, LaTeX, UML");
$c->technologies("Oracle DB, GIS, ERM, JDBC, pst-uml");
$c->tools("StarUML, Microsoft Visio");
$c->ide("Eclipse, Oracle SQL Developer");
//Grade
$c->cp("6");
$c->pruefung("Klausur", "written test");
$c->grade("12 LP (2+)");

$c->printCourseInfo();
?>

<p>
<?php if($rcl->lang === "de") { ?>
Im Rahmen des Praktikums wurde die Anwendung <?php intern("/proj/GeoTweet/","GeoTweet"); ?> entwickelt.
<?php } else { ?>
The program <?php intern("/proj/GeoTweet/","GeoTweet"); ?> was developed for the practical training.
<?php } ?>
</p>

<?php include("/rcl/www/rcl/include2.php"); ?>
