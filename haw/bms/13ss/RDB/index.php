<?php $title = "B-MS / RDB"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BMSCourse();

//Organisation
$c->semester("Sommersemester 2013", "Summer semester 2013");
$c->name("Relationale Datenbanken (RDB)","Relational Databases (RDB)");
$c->type("Vorlesung", "lecture");
$c->dozent("Prof. Dr. Norbert Witt");
//Content
$c->topic("TODO",
          "TODO");
//$c->languages("");
//$c->technologies("");
//$c->tools("");
//$c->ide("");
//Grade
$c->cp("6");
$c->pruefung("Klausur", "written test");
$c->grade("1.0");

$c->printCourseInfo();
?>

<p>
<?php if($rcl->lang === "de") { ?>
Im Rahmen dieses Kurses wurde der Online-Shop <?php intern("/proj/MinimalisticShop/","Minimalistic Shop"); ?> entwickelt.
<?php } else { ?>
The online marketplace <?php intern("/proj/MinimalisticShop/","Minimalistic Shop"); ?> was developed as part of this course.
<?php } ?>
</p>

<?php include("/rcl/www/rcl/include2.php"); ?>
