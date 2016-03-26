<?php $title = "B-MS / Proj1"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BMSCourse();

//Organisation
$c->semester("Sommersemester 2013", "Summer semester 2013");
$c->name("Projekt 1 (Proj1)","Project 1 (Proj1)");
$c->type("Projekt", "Project");
$c->dozent("Dipl.-Inform. Björn Jensen");
//$c->languages("");
//$c->technologies("");
//$c->tools("");
//$c->ide("");
//Grade
$c->cp("6 (zusammen mit ".internStr("/haw/bms/13ss/PRG/","Einführung in das Programmieren")." und ".internStr("/haw/bms/13ss/MAN/","Management").")", "6 (together with ".internStr("/haw/bms/13ss/PRG/","Programming Introduction")." and ".internStr("/haw/bms/13ss/MAN/","Management").")");
$doc = pdfStr("DSOM_AI_doc.pdf", "Dokumentation", "documentation", "1.1&nbsp;MiB");
$c->pruefung("Software Entwicklung, Präsentation und $doc", "Software development, presentation and $doc");
$c->grade("bestanden","passed");

$c->printCourseInfo();
?>

<p>
<?php if($rcl->lang === "de") { ?>
In diesem Projekt wurde das Spiel <?php intern("/proj/DarkSideOfMorra/","Dark Side Of Morra"); ?> als Gruppenarbeit entwickelt.
<?php } else { ?>
The game <?php intern("/proj/DarkSideOfMorra/","Dark Side Of Morra"); ?> was developed at this project in a group.
<?php } ?>
</p>

<?php include("/rcl/www/rcl/include2.php"); ?>
