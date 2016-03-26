<?php $title = "Realschule"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new SPRCourse();
if($rcl->lang === "de")
    $c->_school .= $rcl->newFootStr("Die Schule Sportplatzring wurde 2010 mit der Gesamtschule Stellingen zusammengelegt und heißt seitdem ".externStr("https://de.wikipedia.org/wiki/Stadtteilschule_Stellingen#Geschichte", "Stadtteilschule Stellingen").".");
else
    $c->_school .= $rcl->newFootStr("When 'Schule Sportplatzring' was merged with 'Gesamtschule Stellingen' in 2010 it was renamed to ".externStr("https://de.wikipedia.org/wiki/Stadtteilschule_Stellingen#Geschichte", "Stadtteilschule Stellingen").".");
$c->printCoursesHeader();
?>
<table class="courses">
    <thead>
    <?php if($rcl->lang === "de") { ?>
    <tr>  <th>Modul</th>  <th>Note</th>  </tr>
    <?php } else { ?>
    <tr>  <th>Course</th>  <th>Grade<?php $rcl->newFoot("The grading system goes from 1 (best) to 6 (worst)."); ?></th>  </tr>
    <?php } ?>
    </thead>

    <tbody>
    <?php if($rcl->lang === "de") { ?>
    <tr>  <td class="l">Deutsch</td>  <td>2</td>  </tr>
    <tr>  <td class="l">Geschichte / Politik</td>  <td>3</td>  </tr>
    <tr>  <td class="l">Religion / Ethik</td>  <td>4</td>  </tr>
    <tr>  <td class="l">Englisch</td>  <td>3</td>  </tr>
    <tr>  <td class="l">Mathematik</td>  <td>2</td>  </tr>
    <tr>  <td class="l">Biologie</td>  <td>3<?php $rcl->newFoot("Biologie fand zuletzt im 9. Schuljahr statt und geht nicht in die Durchschnittsnote ein."); ?></td>  </tr>
    <tr>  <td class="l">Physik</td>  <td>2</td>  </tr>
    <tr>  <td class="l">Chemie</td>  <td>2</td>  </tr>
    <tr>  <td class="l">Sport</td>  <td>3</td>  </tr>
    <tr>  <td class="l">Arbeitslehre</td>  <td>4</td>  </tr>
    <tr>  <td class="l">Informatik</td>  <td>1<?php $rcl->newFoot("Informatik fand zuletzt im 7. Schuljahr statt und geht nicht in die Durchschnittsnote ein.<br/>Nicht zu verwechseln mit dem Alternativkurs Informatik.<br/>Das Fach Informatik war für alle verpflichtend, der Alternativkurs war eine Alternative zur zweiten Fremdsprache."); ?></td>  </tr>
    <tr>  <td class="l">Elektronik</td>  <td>1</td>  </tr>
    <tr>  <td class="l">Wahlpflichtfach: Musik</td>  <td>3</td>  </tr>
    <tr>  <td class="l">Wahlpflichtfach: Alternativkurs Informatik</td>  <td>2</td>  </tr>
    <tr>  <td class="l">Wahlpflichtfach: Alternativkurs Natur</td>  <td>2</td>  </tr>
    <?php } else { ?>
    <tr>  <td class="l">German</td>  <td>2</td>  </tr>
    <tr>  <td class="l">History / Politics</td>  <td>3</td>  </tr>
    <tr>  <td class="l">Religion / Ethics</td>  <td>4</td>  </tr>
    <tr>  <td class="l">English</td>  <td>3</td>  </tr>
    <tr>  <td class="l">Mathematics</td>  <td>2</td>  </tr>
    <tr>  <td class="l">Biology</td>  <td>3<?php $rcl->newFoot("Biology was last held in the 9th school year. Not included in the average grade."); ?></td>  </tr>
    <tr>  <td class="l">Physics</td>  <td>2</td>  </tr>
    <tr>  <td class="l">Chemistry</td>  <td>2</td>  </tr>
    <tr>  <td class="l">Physical Education</td>  <td>3</td>  </tr>
    <tr>  <td class="l">Work theory</td>  <td>4</td>  </tr>
    <tr>  <td class="l">Computer science</td>  <td>1<?php $rcl->newFoot("Computer science (Informatik) was last held in the 7th school year and is not included in the average grade.<br/>Not to be confused with the 'Alternativkurs Informatik' (alternative computer science course).<br/>Computer science was obligatory for all, but the 'Alternativkurs Informatik' was an alternative to a second foreign language."); ?></td>  </tr>
    <tr>  <td class="l">Electronics</td>  <td>1</td>  </tr>
    <tr>  <td class="l">Compulsory Elective: Music</td>  <td>3</td>  </tr>
    <tr>  <td class="l">Compulsory Elective: alternative computer science course</td>  <td>2</td>  </tr>
    <tr>  <td class="l">Compulsory Elective: alternative nature course</td>  <td>2</td>  </tr>
    <?php } ?>
    </tbody>

    <?php if($rcl->lang === "de") { ?>
    <tr>  <td class="r">Durchschnitt:</td>  <th>2.5</th>  </tr>
    <?php } else { ?>
    <tr>  <td class="r">Average:</td>  <th>2.500</th>  </tr>
    <tr>  <td class="r">GPA 4.0:</td>  <th>2.500<?php $rcl->newFoot("5 - 2.5"); ?></th>  </tr>
    <tr>  <td class="r">GPA 5.0:</td>  <th>3.125<?php $rcl->newFoot("5 &middot; (5 - 2.5) &div; 4"); ?></th>  </tr>
    <?php } ?>
</table>
<?php echo $rcl->lang("<br/>Erwerb des Realschulabschluss<br/>",""); ?>
<br/><?php echo $rcl->lang(
"Im Rahmen des Lehrplanes wurden zwei Schulpraktika absolviert. Das eine bei ".internStr("/internships/Stilke/","Stilke Buch- und Zeitschriftenhandelsgesellschaft GmbH")." und das andere bei ".internStr("/internships/Reset/","Reset Grafische Medien GmbH").".",
"As part of this education I attended two internships. One at ".internStr("/internships/Stilke/","Stilke Buch- und Zeitschriftenhandelsgesellschaft GmbH")." and the other one at ".internStr("/internships/Reset/","Reset Grafische Medien GmbH")."."
); ?>

<hr/>
<div class="c"><?php echo $rcl->lang("Weitere Informationen", "Additional informations"); ?></div>
<ul>
<li><?php pdf("Anhang/20010201_SPR_HuR_5a_1HJ.pdf", "Halbjahreszeugnis des 5. Schuljahres", "Report card for the first half year of the 5th school year"); ?></li>
<li><?php pdf("Anhang/20010718_SPR_HuR_5a_2HJ.pdf", "Zeugnis des 5. Schuljahres", "Report card for the 5th school year."); ?></li>
<li><?php pdf("Anhang/20020131_SPR_HuR_6a_1HJ.pdf", "Halbjahreszeugnis des 6. Schuljahres", "Report card for the first half year of the 6th school year"); ?></li>
<li><?php pdf("Anhang/20020703_SPR_HuR_6a_2HJ.pdf", "Zeugnis des 6. Schuljahres", "Report card for the 6th school year."); ?></li>
<li><?php pdf("Anhang/20030130_SPR_R_R7b_1HJ.pdf", "Halbjahreszeugnis des 7. Schuljahres", "Report card for the first half year of the 7th school year"); ?></li>
<li><?php pdf("Anhang/20030702_SPR_R_R7b_2HJ.pdf", "Zeugnis des 7. Schuljahres", "Report card for the 7th school year."); ?></li>
<li><?php pdf("Anhang/20040129_SPR_R_R8b_1HJ.pdf", "Halbjahreszeugnis des 8. Schuljahres", "Report card for the first half year of the 8th school year"); ?></li>
<li><?php pdf("Anhang/20040623_SPR_R_R8b_2HJ.pdf", "Zeugnis des 8. Schuljahres", "Report card for the 8th school year."); ?></li>
<li><?php pdf("Anhang/20050128_SPR_R_R9b_1HJ.pdf", "Halbjahreszeugnis des 9. Schuljahres", "Report card for the first half year of the 9th school year"); ?></li>
<li><?php pdf("Anhang/20050629_SPR_R_R9b_2HJ.pdf", "Zeugnis des 9. Schuljahres", "Report card for the 9th school year."); ?></li>
<li><?php pdf("Anhang/20060202_SPR_R_R10b_1HJ.pdf", "Halbjahreszeugnis des 10. Schuljahres", "Report card for the first half year of the 10th school year"); ?></li>
<li><?php pdf("Anhang/20060623_SPR_R_R10b_2HJ.pdf", "Abschlusszeugnis", "Leaving Certificate"); ?></li>
</ul>
<hr/>
<div class="c">Ergänzungen zum Wahlpflichtunterricht</div>
<p>Im 7. Schuljahr habe ich mich gegen eine zweite Fremdsprache (Spanisch oder Französisch) und für das alternative Fach Naturwissenschaft entschieden, das bereits im zweiten Halbjahr nicht mehr stattfand (Strafprozess gegen Lehrer). Abgesehen davon bestand die "Wahl" im 7. Schuljahr nur darin in welchem Halbjahr man die Fächer belegt.</p>
<p>Im 8. Schuljahr wurde das Fach Naturwissenschaft aufgrund eines Lehrermangels durch die Alternativkurse Informatik und Englisch ersetzt. Der Alternativkurs Informatik fand im ersten Halbjahr nur an einem einzigen Termin statt (erkrankter Lehrer).</p>
<p>Im 9. Schuljahr stand zum Fach Darstellendes Spiel keine Alternative zur Wahl, es war für alle Schüler verpflichtend. Natur und Technik bestand nur aus Schülerreferaten und fand im zweiten Halbjahr nicht statt.</p>
<p>Im 10. Schuljahr stand zum Fach Musik keine Alternative zur Wahl, es war für alle Schüler verpflichtend. Der Alternativkurs Natur bestand nur aus Schülerreferaten. Der Alternativkurs Informatik fand im ersten Halbjahr nicht statt (erkrankter Lehrer).</p>

<?php include("/rcl/www/rcl/include2.php"); ?>
