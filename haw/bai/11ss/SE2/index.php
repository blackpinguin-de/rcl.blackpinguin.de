<?php $title = "B-AI / SE2"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BAICourse();

//Organisation
$c->semester("Sommersemester 2011", "Summer semester 2011");
$c->name("Software Engineering 2 (SE2)");
$c->type("Vorlesung und Praktikum", "lecture and practical training");
$c->dozent("Prof. Dr. Olaf Zukunft");
//Content
$c->topic("Projektleitung, Projekttypen, Rollen",
          "Project management, project types, roles");
$c->topic("Meetings, Agenda, Protokolle, Kundengespräche, Kommunikation",
          "Meetings, agenda, protocols, customer dialogs, communication");
$c->topic("Projektablauf, Angebotserstellung, Projektplanung, Projektstrukturplan (PSP), Aufwandsschätzung (CoCoMo, Function Point), Terminplanung (GANTT-Diagramme, MPM-Netzplantechnik, Meilensteine), Ressourcenplanung, Projektdurchführung (Controlling, Budgetierung)",
          "Project workflow, offer creation, project planing, work breakdown structure (WBS), effort estimate (CoCoMo, Function Point), scheduling (Gantt charts, metra potential method, milestones), resource management, project execution (controlling, budgeting)");
$c->topic("Risikomanagement, Software-Qualität (Merkmale, Metriken, Maßnahmen), Komplexität (McCabe, Halstead), Qualitätssicherung (Review, Code-Inspektion, Walkthroughs, Codeanalyse, Tests), Capability Maturity Model Integrated (CMMI), Konfigurationsverwaltung (Version, Change, Build, Release)",
          "Risk management, software quality (characteristics, metrics, actions), complexity (McCabe, Halstead), quality assurance (review, code inspection, walkthroughs, code analysis, tests), Capability Maturity Model Integrated (CMMI), configuration management (version, change, build, release)");
$c->topic("Exkursion zu Capgemini",
          "Excursion to Capgemini");
$c->topic("Gastvortrag von Sunato GmbH über Cloud Computing",
          "Guest lecture by Sunato GmbH about cloud computing");
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

<p>
<?php if($rcl->lang === "de") { ?>
Im Rahmen des Praktikums wurde der <?php intern("/proj/MarketChecker/","Market Checker"); ?> als Gruppenarbeit entwickelt.
<?php } else { ?>
The <?php intern("/proj/MarketChecker/","Market Checker"); ?> was developed in a group for the practical training.
<?php } ?>
</p>

<?php include("/rcl/www/rcl/include2.php"); ?>
