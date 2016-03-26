<?php $title = "TAI"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php (new TAICourse())->printCoursesHeader(); ?>
<table class="courses">
    <thead>
    <?php if($rcl->lang === "de") { ?>
    <tr>  <th>Abk.</th>   <th>Modul</th>   <th>Note</th>   </tr>
    <?php } else { ?>
    <tr>  <th>Abbr.</th>  <th>Course</th>  <th>Grade<?php $rcl->newFoot("The grading system goes from 1 (best) to 6 (worst)."); ?></th>  </tr>
    <?php } ?>
    </thead>

    <tbody>
    <?php if($rcl->lang === "de") { ?>
    <tr>  <td>AE</td>    <td class="l">Anwendungsentwicklung<br/><?php intern("AeHTML/","AeHTML"); ?>, <?php intern("AeOffice/","AeOffice"); ?>, <?php intern("AePro","AePro"); ?>, <?php intern("AeSQL","AeSQL"); ?></td>  <td>1</td>  </tr>
    <tr>  <td>BuGP</td>                                                <td class="l">Betriebsorganisation und Geschäftsprozesse</td>  <td>3</td>  </tr>
    <tr>  <td><?php intern("BuNet/","BuNet"); ?></td>   <td class="l">Betriebssysteme und Netzwerke</td>  <td>1</td>  </tr>
    <tr>  <td></td>                                                    <td class="l">Fachenglisch</td>  <td>2</td>  </tr>
    <tr>  <td><?php intern("IuM/","IuM"); ?></td>       <td class="l">Installation und Montagetechnik</td>  <td>3</td>  </tr>
    <tr>  <td><?php intern("TI/","TI"); ?></td>         <td class="l">Technische Informatik</td>  <td>2</td>  </tr>
    <?php } else { ?>
    <tr>  <td><?php intern("AE.html","AE"); ?></td>    <td class="l">Application Development</td>  <td>1</td>  </tr>
    <tr>  <td>BuGP</td>                                                <td class="l">Business Studies</td>  <td>3</td>  </tr>
    <tr>  <td><?php intern("BuNet/","BuNet"); ?></td>   <td class="l">Operating Systems and Networks</td>  <td>1</td>  </tr>
    <tr>  <td></td>                                                    <td class="l">Technical English</td>  <td>2</td>  </tr>
    <tr>  <td><?php intern("IuM/","IuM"); ?></td>       <td class="l">Installation and Assembly Technology</td>  <td>3</td>  </tr>
    <tr>  <td><?php intern("TI/","TI"); ?></td>         <td class="l">Computer Engineering</td>  <td>2</td>  </tr>
    <?php } ?>
    </tbody>

    <tbody>
    <?php if($rcl->lang === "de") { ?>
    <tr>  <td>SuK</td>                         <td class="l">Sprache und Kommunikation</td>  <td>2</td>  </tr>
    <tr>  <td>WuG</td>                         <td class="l">Wirtschaft und Gesellschaft</td>  <td>2</td>  </tr>
    <tr>  <td></td>                            <td class="l">Sport</td>  <td>3</td>  </tr>
    <?php } else { ?>
    <tr>  <td>SuK</td>                         <td class="l">Language and Communication (German)</td>  <td>2</td>  </tr>
    <tr>  <td>WuG</td>                         <td class="l">Economy and Society</td>  <td>2</td>  </tr>
    <tr>  <td>P.E.</td>                        <td class="l">Physical Education</td>  <td>3</td>  </tr>
    <?php } ?>
    </tbody>

    <tbody>
    <?php if($rcl->lang === "de") { ?>
    <tr>  <td class="r" colspan="2">Durchschnitt (ohne Sport):</td>  <th>2.0</th>  </tr>
    <?php } else { ?>
    <tr>  <td class="r" colspan="2">Average (without P.E.):</td>  <th>2.0</th>  </tr>
    <tr>  <td class="r" colspan="2">GPA 4.0:</td>  <th>3.0<?php $rcl->newFoot("5 - 2.0"); ?></th>  </tr>
    <tr>  <td class="r" colspan="2">GPA 5.0:</td>  <th>3.75<?php $rcl->newFoot("5 &middot; (5 - 2.0) &div; 4"); ?></th>  </tr>
    <?php } ?>
    </tbody>
</table>
<br/><?php echo $rcl->lang(
"Erwerb der Berufsbezeichnung: Staatlich geprüfter technischer Assistent für Informatik",
"I earned the right to use the job title: Staatlich geprüfter technischer Assistent für Informatik (State-certified technical assistant for computer science)"
); ?>
<br/>
<br/><?php echo $rcl->lang(
"Im Rahmen der Ausbildung wurde ein ".internStr("/internships/KOGS/","Berufspraktikum")." am Department Informatik der Universität Hamburg absolviert.",
"As part of this education I attended an ".internStr("/internships/KOGS/","internship")." at the Department of Informatics at the University of Hamburg."
); ?>
<hr/>
<div class="c"><?php echo $rcl->lang("Weitere Informationen", "Additional informations"); ?></div>
<ul>
<li><?php pdf("Anhang/20070124_G10_TAI_TAH6b_1HJ.pdf", "Zeugnis des 1. Halbjahres", "Report card for the 1st half year"); ?></li>
<li><?php pdf("Anhang/20070702_G10_TAI_TAH6b_2HJ.pdf", "Zeugnis des 2. Halbjahres", "Report card for the 2nd half year"); ?></li>
<li><?php pdf("Anhang/20080123_G10_TAI_TAH6b_3HJ.pdf", "Zeugnis des 3. Halbjahres", "Report card for the 3rd half year"); ?></li>
<li><?php pdf("Anhang/20080630_G10_TAI_TAH6b_4HJ.pdf", "Abschlusszeugnis", "Leaving Certificate", "621 KiB"); ?></li>
</ul>

<?php include("/rcl/www/rcl/include2.php"); ?>
