<?php include("/rcl/www/funktionen.php"); ?>
<?php $title = $rcl->lang("Impressum", "Legal Infos");  $path = "/legal"; ?>
<?php include("include1.php"); ?>

<?php $rcl->impressum(); ?>

<?php if(false) if($rcl->lang == "de"){ ?>
<p>
Notenberechnungen und Übersetzungen aus dem Deutschem ins Englische wurden von mir selbst nach bestem Wissen durchgeführt.
Insbesondere bei den Bezeichnungen der Schulformen gelten ausschließlich die deutschen Bezeichnungen aufgrund der international stark unterschiedlichen Schulsysteme.
Die berechneten Durchschnittsnoten der beiden Studiengänge sind entsprechend der jeweiligen Studien- und Prüfungsordnung gewichtet.
</p>
<?php } else { ?>
<p>
I have done grade calculations and translations from german to english by myself.
Therefore only the german terms are reliable. In particular kinds of education are not internationally compatible due to different educational systems.
Calculated average grades from both studies are weighted according to the academic regulations.
GPA 4.0 and GPA 5.0 are for comparison only, they're not official assessments<?php $rcl->newFoot("The german grading system usually goes from 1 (best) to 6 (worst)."); ?>.
</p>
<?php } ?>

<?php include("include2.php"); ?>
