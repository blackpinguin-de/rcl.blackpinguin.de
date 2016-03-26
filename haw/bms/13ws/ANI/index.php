<?php $title = "B-MS / ANI"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BMSCourse();

//Organisation
$c->semester("Wintersemester 2013/14", "Winter semester 2013/14");
$c->name("Animation (ANI)");
$c->type("Vorlesung", "lecture");
$c->dozent("Prof. Dr. Norbert Witt");
//Content
$c->topic("Animation, Biovision Hierarchy, Motion Capturing (MoCap)");
$c->topic("Anfertigen von Drehbuch und Storyboard für eine Filmsequenz zum Thema \"Flying Angel / Superhero\" mit dem Titel \"Mächte des Jenseits\"",
          "Writing and drawing of a screenplay and storyboard for a video sequence to the topic \"Flying Angel / Superhero\"");
$c->topic("Aufnahmen der Animationen im MoCap-Studio",
          "Recording the animations in the MoCap studio");
//$c->languages("");
$c->technologies("Motion Capturing, OptiTrack");
$c->tools("ARENA, Blender");
//$c->ide("");
//Grade
$tmp = $rcl->lang(" (zusammen mit ", " (together with ").internStr("/haw/bms/13ws/VS/","Virtuelle Systeme","Augmented Reality").")";
$c->cp("6".$tmp);
$presi = pdfStr("ANI_slides.pdf","Präsentation","Presentation", "1.3&nbsp;MiB");
$doc = pdfStr("ANI_doc.pdf","schritlicher Ausarbeitung","written composition", "4.5&nbsp;MiB");
$c->pruefung("$presi mit $doc", "$presi with $doc");
$c->grade("1.7".$tmp);

$c->printCourseInfo();

$video = externStr("http://www.youtube.com/watch?v=q5r-q6owLpU","Video");
?>

<p>
<?php if($rcl->lang === "de") { ?>
Es war nur Aufgabe dieses Kurses als Gruppe die MoCap-Aufnahmen für das Video anzufertigen und nicht das Video zu rendern.
Das Rendern war geplant für den Kurs <?php intern("/haw/bms/14ws/IMP/","Image Processing")?>, welcher aber dann von einem anderem Dozenten übernommen wurde.
</p><p>Ein Dummy-Rendering für die Animation von Szene 3 kann in diesem <?= $video ?> betrachtet werden.
<?php } else { ?>
It was only part of this course to create the MoCap recordings for the video as a group and not to render it.
Rendering was sheduled for the <?php intern("/haw/bms/14ws/IMP/","Image Processing")?> course, but that course was taken over by another lecturer.
</p><p>A dummy rendering for the animation of scene 3 can be viewed in this <?= $video ?>.
<?php } ?>
</p>

<?php include("/rcl/www/rcl/include2.php"); ?>
