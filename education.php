<?php include_once("/rcl/www/funktionen.php"); ?>
<?php $title = $rcl->lang("Ausbildung", "Education");  $path = "/education"; ?>
<?php include("include1.php"); ?>

<style type="text/css" scoped="scoped">
table#education > tbody > tr > th { white-space: nowrap; padding-right: 10px; vertical-align: top; font-weight: normal; }
</style>

<table id="education">

<thead><tr><th><?php echo $rcl->lang("Schule", "School"); ?></th></tr></thead>

<tbody><?php
(new MTSCourse())->printTableEntry();
(new SPRCourse())->printTableEntry();
(new TAICourse())->printTableEntry();
(new FOSCourse())->printTableEntry();
?></tbody>

<tbody><tr><td style="height: 1em;"></td></tr></tbody>
<thead><tr><th><?php echo $rcl->lang("Studium", "Studies"); ?></th></tr></thead>

<tbody><?php
(new BAICourse())->printTableEntry($rcl->lang("165&nbsp;CP, Notendurchschnitt: 1.26", "165&nbsp;CP, Weighted Average Grade: 1.26"));
(new BMSCourse())->printTableEntry($rcl->lang("152&nbsp;CP, Notendurchschnitt: 1.27", "152&nbsp;CP, Weighted Average Grade: 1.27"));
?></tbody>

<tbody><tr><td style="height: 1em;"></td></tr></tbody>
<thead><tr><th><?php echo $rcl->lang("Praktika", "Internships"); ?></th></tr></thead>

<tbody>
<?php if($rcl->lang === "de") { ?>
<tr>  <th>2004-08</th>  <td><?php privatea("/internships/Stilke/", "Stilke Buch- und Zeitschriftenhandelsgesellschaft GmbH"); ?>, Einzelhandelskaufmann</td>  </tr>
<tr>  <th>2005-02</th>  <td><?php privatea("/internships/Reset/", "Reset Grafische Medien GmbH"); ?>, Mediengestalter für Digital- und Printmedien</td>  </tr>
<tr>  <th>2007-10 &ndash; 2007-11</th>  <td><?php privatea("/internships/KOGS/","Arbeitsbereich Kognitive Systeme");?> des <?php extern("https://www.inf.uni-hamburg.de/","Fachbereiches Informatik"); ?> der <?php extern("https://www.uni-hamburg.de/","Universität Hamburg"); ?>, inklusive einwöchigem <?php extern("https://www.inf.uni-hamburg.de/studies/prospective-students/schnupperstudium.html","Schnupperstudium"); ?> in der Projektgruppe Asymmetrische Verschlüsselung</td>  </tr>
<?php } else { ?>
<tr>  <th>2004-08</th>  <td><?php privatea("/internships/Stilke/", "Stilke Buch- und Zeitschriftenhandelsgesellschaft GmbH"); ?> (trading company for books and magazines), salesman</td>  </tr>
<tr>  <th>2005-02</th>  <td><?php privatea("/internships/Reset/", "Reset Grafische Medien GmbH"); ?>, digital and print media designer</td>  </tr>
<tr>  <th>2007-10 &ndash; 2007-11</th>  <td><?php privatea("/internships/KOGS/","Cognitive Systems Laboratory"); ?>, <?php extern("https://www.inf.uni-hamburg.de/","Department of Informatics"); ?><?php $rcl->newFoot("'Informatics' is a bad translation for the german word 'Informatik', because the german word means Computer Science and not the different academic field of Informatics. But sadly, the Universität Hamburg decided to use 'Department of Informatics' as its official translation."); ?>, <?php extern("https://www.uni-hamburg.de/","Universität Hamburg"); ?> (University of Hamburg), internship and an one-week <?php extern("https://www.inf.uni-hamburg.de/studies/prospective-students/schnupperstudium.html","trial study"); ?> with the project topic: asymmetric encryption</td>  </tr>
<?php } ?>
</tbody>

<tbody><tr><td style="height: 1em;"></td></tr></tbody>
<thead><tr><th><?php echo $rcl->lang("Zertifikate", "Certificates"); ?></th></tr></thead>

<tbody>
<tr>  <th>2010-01-10</th>  <td>Certified <?php extern("https://cacert.org/", "CAcert"); ?> Assurer - <?php pdf("Anhang/20100110_CAcert.pdf","Zertifikat","Certificate", "68&nbsp;KiB"); ?></td>  </tr>
<tr>  <th>2012-12-04</th>  <td><?php extern("https://www.coursera.org/course/progfun", "Functional Programming Principles in Scala"); ?> - <?php pdf("Anhang/20121204_FunctionalProgramming.pdf", "Leistungsnachweis", "Statement of Accomplishment", "295&nbsp;KiB"); ?></td>  </tr>
<tr>  <th>2014-01-21</th>  <td><?php extern("https://www.coursera.org/course/reactive", "Principles of Reactive Programming"); ?> - <?php pdf("Anhang/20140121_ReactiveProgramming.pdf", "Leistungsnachweis", "Statement of Accomplishment", "85&nbsp;KiB"); ?></td>  </tr>
</tbody>


</table>


<p>
<script type="text/javascript" src="/scripts/grades.js"></script>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
lang = '<?php echo $rcl->lang; ?>';
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(function(){createChart(); drawChart();});
</script>
<?php if($rcl->lang === "de") { ?>
<h4 class="c">Diagramm: Notendurschnitt über die Zeit
<?php $rcl->newFoot("Die Fehlerbalken bis 2009 stellen die Ungenauigkeit der Zeugnis-Bewertungsskala dar, die dadurch entsteht, dass Noten ohne + und - eingetragen werden. Ab 2009 stellen die Fehlerbalken das Intervall zwischen bester und schlechtester noch zu erreichender Endnote dar.<br/><br/>Sterne heben Abschluss- oder Abgangszeugnisse hervor."); ?>
<noscript><?php $rcl->newFoot("<div class='l'>Grün: Notendurchschnitt ohne Sport
<br/>Rot: Notendurchschnitt mit Sport
<br/>Tipp: JavaScript aktivieren, um interaktiv auf die einzelnen Datenpunkte dieses Diagrammes zuzugreifen.</div>"); ?></noscript>
</h4>
<noscript><img src="/img/grades.de.png" alt="Diagram: Notendurchschnitte über die Jahre" style="width:100%;" /></noscript>
<div class="jsonly" id="grades" style="width:100%; height:35vw;"></div>
<?php } else { ?>
<h4 class="c">Diagram: average grade over time
<?php $rcl->newFoot("The error bars until 2009 represent the uncertainty due to the usage of plain integers in repord cards without the common + and - suffixes for ⅓ grade differences. Since 2010 the error bars represent the interval between the best and the worst final grade that is still possible.<br/><br/>Stars are highlighting Leaving Certificates or Certificates of Attendance."); ?>
<noscript><?php $rcl->newFoot("<span class='l'>Red: average grade with P.E.
<br/>Green: average grade without P.E.
<br/>Cyan: GPA 4.0 without P.E.
<br/>Magenta: GPA 5.0 without P.E.
<br/>Tip: activate JavaScript to access the data of this diagram interactively.
</span>"); ?></noscript>
</h4>
<noscript><img src="/img/grades.en.png" alt="Diagram: average grade over time" style="width:100%;" /></noscript>
<div class="jsonly" id="grades" style="width:100%; height:40vw;"></div>
<?php } ?>
</p>

<?php include("include2.php"); ?>
