<?php $title = "B-AI / WP3:ITS"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BAICourse();

//Organisation
$c->semester("Sommersemester 2012", "Summer semester 2012");
$c->name("Wahlpflichtfach 3: IT-Sicherheit (WP3:ITS)","Compulsory elective 3: IT Security (WP3:ITS)");
$c->type("Vorlesung und Praktikum", "lecture and practical training");
$c->dozent("Dr.-Ing. Meiko Jensen (in Vertretung für Prof. Dr. Dirk Westhoff)", "Dr.-Ing. Meiko Jensen (on behalf of Prof. Dr. Dirk Westhoff)");
//Content
$c->topic(pdfStr("IT-Sicherheit.pdf","Kursbeschreibung","Course Description", "70&nbsp;KiB"));
$c->topic("TODO",
          "TODO");
//$c->languages("");
//$c->technologies("");
//$c->tools("");
//$c->ide("");
//Grade
$c->cp("6");
$c->pruefung("Klausur", "written test");
$c->grade("13 LP (1-)");

$c->printCourseInfo();
?>

<?php include("/rcl/www/rcl/include2.php"); ?>
