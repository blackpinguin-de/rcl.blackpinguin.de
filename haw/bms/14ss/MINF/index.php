<?php $title = "B-MS / MINF"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BMSCourse();

//Organisation
$c->semester("Sommersemester 2014", "Summer semester 2014");
$c->name("Wahlpflichtmodul Technik: Ausgewählte Themen der Medieninformatik (MINF)", "Compulsory Elective Technology: Selected Topics of Media Computer Science (MINF)");
$c->type("Vorlesung", "lecture");
$c->dozent("Prof. Dr. Edmund Weitz");
//Content
$c->topic("TODO",
          "TODO");
//$c->languages("");
//$c->technologies("");
//$c->tools("");
//$c->ide("");
//Grade
$c->cp("6");
$dheap = internStr("/proj/dHeap/","dHeap Visualisierung","dHeap visualization");
$c->pruefung("mündliche Prüfung über ".$dheap, "oral examination about ".$dheap);
$c->grade("1.0");

$c->printCourseInfo();
?>

<p>
<?php if($rcl->lang === "de") { ?>
Im Rahmen dieses Kurses wurde die Webseite <?php intern("/proj/dHeap/","dHeap Visualisierung"); ?> entwickelt.
<?php } else { ?>
The website <?php intern("/proj/dHeap/","dHeap visualization"); ?> was developed as part of this course.
<?php } ?>
</p>

<?php include("/rcl/www/rcl/include2.php"); ?>
