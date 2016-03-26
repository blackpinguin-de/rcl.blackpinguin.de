<?php $title = "B-MS / MG3"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BMSCourse();

//Organisation
$c->semester("Wintersemester 2014/15", "Winter semester 2014/15");
$c->name("Wahlpflichtmodul Gestaltung: Mediengestaltung 3 (MG3)","Compulsory Elective Design: Media Design 3 (MG3)");
$c->type("Vorlesung", "lecture");
$c->dozent("Prof. Gunther Rehfeld ".$rcl->lang("und","and")." Simone Lücking");
//Content
$c->topic("Kunstgeschichte, Renaissance, Barock, Klassizismus, Romantik, Realismus, Impressionismus, Expressionismus, Surrealismus",
          "History of Art, Renaissance, Baroque, Neoclassicism, Romanticism, Realism, Impressionism, Expressionism, Surrealism");
$kh = externStr("http://hamburger-kunsthalle.de/","Hamburger Kunsthalle");
$c->topic("Exkursion in die $kh am 2014-10-29",
          "Excursion to the $kh (Art Museum) on 2014-10-29");
$c->topic("Malerei, Fotografie, Film, Games, Medienwandel, Etymologie, Animation",
          "Painting, Photography, Film, Games, Media Shift, Etymology, Animation");
$c->topic("Corporate Design, Typografie, Logos, Web Design",
          "Corporate Design, Typography, Logos, Web Design");
$c->topic("Spiel, Illusion, Spieltheorie, Spieldesign, Spieler, Ziele, Belohnung, Leveldesign, Genres, Regeln, Balancing, Game Loop, Dramaturgie, Monetarisierung",
          "Game, Illusion, Game Theory, Game Design, Gamer, Goals, Rewards, Level Design, Genre, Rules, Balancing, Game Loop, Dramaturgy, Monetization");
$dd = externStr("http://daedalic.de/","Daedalic Entertainment");
$c->topic("Gastvortrag von Jan \"Poki\" Müller-Michaelis von $dd am 2015-01-20 über Spieldramaturgie, zusammen mit einem Gruppen-Workshop um dramaturgische Spielideen zu entwickeln",
          "Guest lecture by Jan \"Poki\" Müller-Michaelis from $dd on 2015-01-20 about games dramaturgy, together with an group workshop to devise dramaturgical game ideas");
$c->topic("Seh- und Zeichenübungen, Animationsübung, Website Redesign, Brettspiel Analyse, Game Design Übung",
          "Looking and Drawing Exercise, Animation Exercise, Website Redesign, Board Game Analysis, Game Design Exercise");
$c->topic("Projektvorstellung, Besprechung und Feedback der Projekte, Zwischenpräsentationen, Abschlusspräsentationen",
          "Project Pitch, Discussions and feedback about the projects, Intermediate Presentation, Final Presentation");
//$c->languages("");
//$c->technologies("");
//$c->tools("");
//$c->ide("");
//Grade
$c->cp("10");
$dspd = internStr("/proj/DeathStarPD/","Death Star PD");
$doc = pdfStr("DeathStarPD_doc.pdf", "Dokumentation", "documentation", "1.1&nbsp;MiB");
$c->pruefung("Arbeit an, Präsentation über und $doc von ".$dspd, "work on, presentation about, and $doc of ".$dspd);
$c->grade("1.0");

$c->printCourseInfo();
?>

<p>
<?php if($rcl->lang === "de") { ?>
Im Rahmen dieses Kurses wurde das Spiel <?php intern("/proj/DeathStarPD/","Death Star PD"); ?> als Gruppenarbeit entwickelt.
<?php } else { ?>
The game <?php intern("/proj/DeathStarPD/","Death Star PD"); ?> was developed as part of this course in a group.
<?php } ?>
</p>

<?php include("/rcl/www/rcl/include2.php"); ?>
