<?php $title = "B-MS / MG1"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BMSCourse();

//Organisation
$c->semester("Wintersemester 2013/14", "Winter semester 2013/14");
$c->name("Mediengestaltung 1 (MG1)","Media Design 1 (MG1)");
$c->type("Vorlesung", "lecture");
$c->dozent("Prof. Ralf Hebecker");
//Content
$c->topic("Recherche",
          "Research");
$c->topic("Projektplanung",
          "Project planning");
$c->topic("Budgetierung",
          "Budgeting");
//$c->languages("");
//$c->technologies("");
//$c->tools("");
//$c->ide("");
//Grade
$c->cp("6 (zusammen mit ".internStr("/haw/bms/13ws/KG2/","Künstlerische Gestaltung 2").")", "6 (together with ".internStr("/haw/bms/13ws/KG2/","Artistic Design 2").")");
$botz = internStr("/proj/BrainOfTehZwarm/","Brain of teh Zwarm");
$presi = pdfStr("BotZ_slides.pdf", "Präsentation", "Presentation", "480&nbsp;KiB");
$doc = externStr("https://wiki.blackpinguin.de/index.php/Brain_of_teh_Zwarm","Dokumentation","documentation");
$c->pruefung("$presi und $doc von ".$botz, "$presi and $doc of ".$botz);
$c->grade("bestanden","passed");

$c->printCourseInfo();
?>

<p>
<?php if($rcl->lang === "de") { ?>
Im Rahmen dieses Kurses wurde das Spiel <?php intern("/proj/BrainOfTehZwarm/","Brain of teh Zwarm"); ?> entwickelt.
<?php } else { ?>
The game <?php intern("/proj/BrainOfTehZwarm/","Brain of teh Zwarm"); ?> was developed as part of this course.
<?php } ?>
</p>

<?php include("/rcl/www/rcl/include2.php"); ?>
