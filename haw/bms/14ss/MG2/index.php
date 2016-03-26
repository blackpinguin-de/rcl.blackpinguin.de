<?php $title = "B-MS / MG2"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BMSCourse();

//Organisation
$c->semester("Sommersemester 2014", "Summer semester 2014");
$c->name("Mediengestaltung 2 (MG2)","Media Design 2 (MG2)");
$c->type("Vorlesung", "lecture");
$c->dozent("Prof. Gunther Rehfeld");
//Content
$c->topic("Zielgruppen, Marktpositionierung, Sinus-Milieus, kulturelle Unterschiede, Werbung",
          "Target audience, market positioning, sinus milieus, cultural differences, advertising");
$c->topic("Bildwahrnehmung, Immersion, Emotion, Semiotik, Etymologie",
          "Image perception, immersion, emotion, semiotics, etymology");
$c->topic("Medium, Kommunikation, Information, Systemtheorie",
          "Medium, communication, information, system theory");
//Grade
$tmp = internStr("/haw/bms/14ss/CA/","Camera Acting");
$c->cp("6 (zusammen mit ".$tmp.")", "6 (together with ".$tmp.")");
$botz = internStr("/proj/BrainOfTehZwarm/","Brain of teh Zwarm");
$doc = pdfStr("BotZ_doc2.pdf", "Dokumentation", "documentation", "222&nbsp;KiB");
$c->pruefung("Präsentation und $doc der Erweiterungen von ".$botz, "Presentation and $doc about the extensions of ".$botz);
$c->grade("bestanden","passed");

$c->printCourseInfo();
?>

<p>
<?php if($rcl->lang === "de") { ?>
Im Rahmen dieses Kurses wurde das Spiel <?php intern("/proj/BrainOfTehZwarm/","Brain of teh Zwarm"); ?> aus <?php intern("/haw/bms/13ws/MG1/","Mediengestaltung 1"); ?> erweitert.
<?php } else { ?>
The game <?php intern("/proj/BrainOfTehZwarm/","Brain of teh Zwarm"); ?> from <?php intern("/haw/bms/13ws/MG1/","Media Design 1"); ?> was extended as part of this course.
<?php } ?>
</p>

<?php include("/rcl/www/rcl/include2.php"); ?>
