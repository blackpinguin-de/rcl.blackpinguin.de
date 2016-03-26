<?php $title = "B-AI / WP4:Scala"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BAICourse();

//Organisation
$c->semester("Wintersemester 2012/13", "Winter semester 2012/13");
$c->name("Wahlpflichtfach 4: Scala (WP4:Scala)", "Compulsory elective 4: Scala (WP4:Scala)");
$c->type("Vorlesung und Praktikum", "lecture and practical training");
$c->dozent("Prof. Dr. Friedrich Esser");
//Content
$c->topic(pdfStr("Scala.pdf","Kursbeschreibung","Course Description", "131&nbsp;KiB"));
$c->topic("TODO",
          "TODO");
//$c->languages("");
//$c->technologies("");
//$c->tools("");
//$c->ide("");
//Grade
$c->cp("0/6");
$c->pruefung("Klausur", "written test");
$foot = $rcl->newFootStr($rcl->lang(
    "Ich habe die Teilnahme an dem Kurs abgebrochen, weil mir von Kommilitonen physiche Gewalt angedroht wurde.<br/>Meine Teilnahme an der Klausur hätte möglicherweise ihre Note und/oder die Wahrscheinlichkeit ihres Bestehens verringert.",
    "I cancelled this course, because my fellow students threatened to physically harm me. My attendance on the written test might have impacted their grade negatively and/or might have reduced their chance to pass the course."));
$c->grade("abgebrochen".$foot,
          "cancelled".$foot);

$c->printCourseInfo();
?>

<?php include("/rcl/www/rcl/include2.php"); ?>
