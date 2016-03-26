<?php $title = "B-AI / WP1:SG"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BAICourse();

//Organisation
$c->semester("Sommersemester 2011", "Summer semester 2011");
$c->name("Wahlpflichtfach 1: Serious Games (WP1:SG)","Compulsory elective 1: Serious Games (WP1:SG)");
$c->type("Vorlesung und Praktikum", "lecture and practical training");
$c->dozent("Prof. Dr. Thomas Thiel-Clemen");
//Content
$c->topic(pdfStr("Serious_Games.pdf","Kursbeschreibung","Course Description", "420&nbsp;KiB"));
$c->topic("Analyse menschlichen Verhaltens, Informationswahrnehmung, Usability",
          "Analysis of human behavior, Information perception, Usability");
$c->topic("Psychologische Spieleentwicklung (NPCs, Flow, UI, Autonomie, Schwierigkeitsgrad, Komplexität)",
          "Psychological Game Development (NPCs, flow, UI, autonomy, difficulty, complexity)");
$c->topic("Gruppenübungen: Analyse eines Serious Games, Analyse des Unglücks bei der Loveparade 2010",
          "Group exercises: Analysis of a Serious Game, Analysis of the Love Parade disaster 2010");
$c->topic("Systemmodell, Systemgrößen, Rückkoplungsschleifen, Simulationsgleichungen",
          "System model, System variable, Feedback loops, Simulation equations");
//$c->languages("");
//$c->technologies("");
//$c->tools("");
//$c->ide("");
//Grade
$c->cp("6");
$c->pruefung("Klausur", "written test");
$c->grade("11 LP (2)");

$c->printCourseInfo();
?>

<p>
<?php if($rcl->lang === "de") { ?>
Im Rahmen des Praktikums wurde das Spiel <?php intern("/proj/Simrgy/","Sim'rgy"); ?> als Gruppenarbeit entwickelt.
<?php } else { ?>
The game <?php intern("/proj/Simrgy/","Sim'rgy"); ?> was developed in a group for the practical training.
<?php } ?>
</p>

<?php include("/rcl/www/rcl/include2.php"); ?>
