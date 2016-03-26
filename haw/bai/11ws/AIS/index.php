<?php $title = "B-AI / AIS"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BAICourse();

//Organisation
$c->semester("Wintersemester 2011/12", "Winter semester 2011/12");
$c->name("Angewandte Informatik Seminar (AIS)","Applied Computer Science Seminar (AIS)");
$c->type("Seminar");
$c->dozent("Prof. Dr. Michael Neitzke");
//Content
$ais = internStr("/proj/AIS/","KI-Simulation in Computerspielen","Simulation of AI in Computer Games");
$c->topic("Aufgabe: Selbständige Recherche, Aufbereitung und Präsentation eines frei wählbaren Themas der Künstlichen Intelligenz",
          "Task: Independent research, prepatation and presentation of an elective Artificial Intelligence topic");
$c->topic("Mein Thema: $ais",
          "My Topic: $ais");
$c->topic("Themen von Kommilitonen: Text Mining, Information Retrieval, Information Extraction, Part-of-Speech Tagging, Koreferenzanalyse, Hidden Markov Modelle, Ontologien, Opinion Mining",
          "Topics of other students: Text Mining, Information Retrieval, Information Extraction, Part-of-Speech Tagging, Coreference analysis, Hidden Markov Models, Ontology, Opinion Mining");

//Grade
$c->cp("3");
$c->pruefung("Referat", "Presentation");
$c->grade("bestanden", "passed");

$c->printCourseInfo();
?>

<?php include("/rcl/www/rcl/include2.php"); ?>
