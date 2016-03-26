<?php $title = "B-MS / MOSY"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BMSCourse();

//Organisation
$c->semester("Sommersemester 2014", "Summer semester 2014");
$c->name("Wahlpflichtmodul Technik: Mobile Systeme (MOSY)","Compulsory Elective Technology: Mobile Systems (MOSY)");
$c->type("Vorlesung", "lecture");
$c->dozent("Prof. Dr. Andreas Plaß");
//Content
$c->topic("TODO",
          "TODO");
//$c->languages("");
//$c->technologies("");
//$c->tools("");
//$c->ide("");
//Grade
$c->cp("6");
$swsd = internStr("/proj/SindWirSchonDa/","Sind wir schon da?", "Are we there yet?");
$doc = pdfStr("SWSD_doc.pdf","Dokumentation","documentation","813&nbsp;KiB");

$c->pruefung("Arbeit an und $doc von ".$swsd, "work on and $doc of ".$swsd);
$c->grade("1.0");

$c->printCourseInfo();
?>

<p>
<?php if($rcl->lang === "de") { ?>
Im Rahmen dieses Kurses wurde die App <?php intern("/proj/SindWirSchonDa/","Sind wir schon da?"); ?> entwickelt.
<?php } else { ?>
The app <?php intern("/proj/SindWirSchonDa/","Are we there yet?"); ?> was developed as part of this course.
<?php } ?>
</p>

<?php include("/rcl/www/rcl/include2.php"); ?>
