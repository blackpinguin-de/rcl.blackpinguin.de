<?php $title = "B-MS / AVPRG"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BMSCourse();

//Organisation
$c->semester("Wintersemester 2014/15", "Winter semester 2014/15");
$c->name("Wahlpflichtmodul Audio-Video: Audio-Video-Programmierung (AVPRG)","Compulsory Elective Audio-Video: Audio-Video-Programming (AVPRG)");
$c->type("Vorlesung", "lecture");
$c->dozent("Prof. Dr. Andreas Plaß");
//Content
$c->topic("OpenCV, Video Capture",
          "OpenCV, Video Capture");
$c->topic("C++-Einführung, OOP, Call By Reference / Value / Pointer, Speicherverwaltung, Intelligente Zeiger, Qt Signals und Slots",
          "C++ Introduction, OOP, Memory Management, Call By Reference / Value / Pointer, Smart Pointer, Qt Signals and Slots");
$c->topic("Farbmodelle (RGBA, HSV), Farbmischung, Graustufenbilder, Binärbilder",
          "Color Models (RGBA, HSV), Color Mixture, Grayscale Images, Binary Images");
$c->topic("Bildanalyse: Schwerpunktberechnung, Region Labelling, Konturerkennung, Color Keying",
          "Image Analysis: Balance Point Calculation, Region Labelling, Edge Detection, Color Keying");
$c->topic("Bildmanipulation: Zeichnen, Morpholigische Operationen (Erosion, Dilation, Opening, Closing), Median Filter",
          "Image Manipulation: Drawing, Morphological Operations (Erosion, Dilation, Opening, Closing), Median Filter");
$c->topic("Gruppenpräsentation (Thema: Leap Motion)",
          "Group presentation (subject: Leap Motion)");
$c->languages("C++");
$c->technologies("Qt 5, OpenCV, Color Keying, ".$rcl->lang("Gestenerkennung", "Gesture recognition"));
$c->ide("Qt Creator");
//Grade
$c->cp("5");
$sg = internStr("/proj/SonicGuessture/","Sonic Guessture");
$doc = pdfStr("SonicGuessture_doc.pdf", "Dokumentation", "documentation", "2.1&nbsp;MiB");
$c->pruefung("Arbeit an und $doc von ".$sg,
             "work on, and $doc of ".$sg);
$c->grade("1.0");

$c->printCourseInfo();
?>

<a href="hand_big.png" style="width: 30%; float: left; margin-right: 10px; margin-top: 10px;"><img src="hand_thumb.jpg" alt="Hand" title="<?=$rcl->lang("Gestenerkennung", "Gesture recognition");?>" style="width: 100%; height: auto;" /></a>

<p>
<?php if($rcl->lang === "de") { ?>
Im Rahmen dieses Kurses wurde das Spiel <?php intern("/proj/SonicGuessture/","Sonic Guessture"); ?> entwickelt.
<?php } else { ?>
The game <?php intern("/proj/SonicGuessture/","Sonic Guessture"); ?> was developed as part of this course.
<?php } ?>
</p>


<div style="clear: both;"></div>

<?php include("/rcl/www/rcl/include2.php"); ?>
