<?php $title = "B-AI / Proj:LA"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BAICourse();

//Organisation
$c->semester("Wintersemester 2011/12", "Winter semester 2011/12");
$c->name("Projekt: Lernende Agenten (Proj:LA)","Project: Learning Agents (Proj:LA)");
$c->type("Projekt", "Project");
$c->dozent("Prof. Dr. Michael Neitzke");
//Content
$c->topic(pdfStr("Lernende_Agenten.pdf","Kursbeschreibung","Course Description", "123&nbsp;KiB"));
$vg = internStr("/proj/RLVierGewinnt/","RL: Vier Gewinnt","RL: Connect Four");
$c->topic("Arbeit an dem Semestergruppen-übergreifenden Projekt $vg",
          "Working on the project $vg");
$c->languages("Java");
$c->technologies("JADE, Verstärkendes Lernen, Q-Learning, SARSA, Temporal difference learning",
                 "JADE, Reinforcment Learning, Q-Learning, SARSA, Temporal difference learning");
//$c->tools("");
$c->ide("Eclipse");
//Grade
$c->cp("9");
//$c->pruefung("Projekt", "Project");
$c->grade("bestanden", "passed");

$c->printCourseInfo();
?>

<?php include("/rcl/www/rcl/include2.php"); ?>
