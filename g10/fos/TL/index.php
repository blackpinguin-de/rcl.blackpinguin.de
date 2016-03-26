<?php $title = "FOS / TL"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new TAICourse();

$mdm = internStr("/proj/MauDauMau/","Mau Dau Mau");

//Organisation
$c->semester("2008-08 &ndash; 2009-04");
$c->name("Techniklehre (TL)","Technical Education (TL)");
$c->type("Klassenunterricht", "Frontal instruction");
$c->dozent("Herr Brunkhorst", "Mr. Brunkhorst");
//Content
$c->topic("Elektrotechnik, Operationsverstärker, Motoren, Optokoppler",
          "Electrical engineering, Operational amplifier, Motors, Opto-isolator");
$c->topic("Velleman VM110 USB Board K8055D, Ampelsteuerung, TTL",
          "Velleman VM110 USB Board K8055D, Traffic signals system, TTL");
$c->topic("Delphi 6, GUI-Komponenten, DLLs, Hardware I/O",
          "Delphi 6, GUI widgets, DLLs, Hardware I/O");
//$c->topic("Techniklehre: Schaltpläne, Struktogramme, Flußdiagramme",
//          "");
$c->languages("Delphi");
//$c->technologies("Server2Go (Apache, PHP, MySQL)");
//$c->tools("");
//$c->ide("");
//Grade
$c->pruefung("3 Klausuren und Projektarbeit an $mdm", "3 written tests and project work on $mdm");
$c->grade("100% (1.0), 100% (1.0), 100% (1.0), 100% (1.0)");

$c->printCourseInfo();
?>

<p>
<?php if($rcl->lang === "de") { ?>
Im Laufe dieses Faches wurde das Spiel <?php intern("/proj/MauDauMau/","Mau Dau Mau"); ?> entwickelt.
<?php } else { ?>
The game <?php intern("/proj/MauDauMau/","Mau Dau Mau"); ?> was developed during this course.
<?php } ?>
</p>

<?php include("/rcl/www/rcl/include2.php"); ?>
