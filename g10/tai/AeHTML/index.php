<?php $title = "TAI / AeHTML"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new TAICourse();

//Organisation
$c->semester("2007-08 &ndash; 2008-07");
$c->name("Anwendungsentwicklung HTML (AeHTML)","Application Development HTML (AeHTML)");
$c->type("Klassenunterricht", "Frontal instruction");
$c->dozent("Herr Hans Jürgen Albert", "Mr. Hans Jürgen Albert");
//Content
$c->topic("HTML4: Grundgerüst, Farben, Schriften, Listen, Bilder, Hyperlinks, Tabellen, Formulare",
          "HTML4: Structure, Colors, Fonts, Lists, Images, Hyperlinks, Tables, Forms");
$c->topic("CSS2: Selektoren, Rangordnung, Vererbung, Schriften, Listen, Textausrichtung, Ränder, Farben, Hintergrundbilder, Positionierung",
          "CSS2: Selectors, Hierarchy, Inheritance, Fonts, Lists, Text Alignment, Borders, Colors, Background Images, Positioning");
$c->topic("JavaScript: Bedingte Anweisungen, Zeichenketten, Operatoren, Schleifen, Funktionen, Felder, Objekte, Ereignisse",
          "JavaScript: Conditional Statements, Strings, Operators, Loops, Functions, Arrays, Objects, Events");
$c->languages("HTML, CSS, JavaScript");
$c->technologies("Server2Go (Apache, PHP, MySQL)");
//$c->tools("");
//$c->ide("");
//Grade
$c->pruefung("Klausuren", "written tests");
$c->grade("97% (1.2), 100% (1.0), 90% (1.6)");

$c->printCourseInfo();
?>

<p>
<?php if($rcl->lang === "de") { ?>
Im Laufe dieses Faches wurde die Webseite <?php intern("/proj/GameZ4you/","GameZ4you"); ?> als Gruppenarbeit entwickelt.
<?php } else { ?>
<?php intern("/proj/GameZ4you/","GameZ4you"); ?> was developed during this course in a group.
<?php } ?>
</p>

<?php include("/rcl/www/rcl/include2.php"); ?>
