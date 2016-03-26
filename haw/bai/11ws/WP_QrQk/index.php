<?php $title = "B-AI / WP2:QrQk"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BAICourse();

//Organisation
$c->semester("Wintersemester 2011/12", "Winter semester 2011/12");
$c->name("Wahlpflichtfach 2: Quantenrechner und Quantenkryptographie (WP2:QrQk)","Compulsory elective 2: Quantum computers and quantum cryptography (WP2:QrQk)");
$c->type("Vorlesung und Praktikum", "lecture and practical training");
$c->dozent("Prof. Dr. Thomas Canzler");
//Content
$c->topic(pdfStr("QrQk.pdf","Kursbeschreibung","Course Description", "182&nbsp;KiB"));
$c->topic("TODO",
          "TODO");
//$c->languages("");
//$c->technologies("");
//$c->tools("");
//$c->ide("");
//Grade
$c->cp("6");
$c->pruefung("Klausur", "written test");
$c->grade("15 LP (1+)");

$c->printCourseInfo();
?>

<?php include("/rcl/www/rcl/include2.php"); ?>
