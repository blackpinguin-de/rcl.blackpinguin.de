<?php $title = "FOS"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php (new FOSCourse())->printCoursesHeader(); ?>
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
    <tr>  <td>SuK</td> <td class="l">Sprache und Kommunikation</td>  <td>2</td>  </tr>
    <tr>  <td></td>    <td class="l">Fachenglisch</td>  <td>2</td>  </tr>
    <tr>  <td></td>    <td class="l">Politik</td>  <td>2</td>  </tr>
    <tr>  <td></td>    <td class="l">Mathematik</td>  <td>1</td>  </tr>
    <tr>  <td></td>    <td class="l">Physik</td>  <td>1</td>  </tr>
    <tr>  <td></td>    <td class="l">Sport</td>  <td>4</td>  </tr>
    <?php } else { ?>
    <tr>  <td>SuK</td> <td class="l">Language and Communication (German)</td>  <td>2</td>  </tr>
    <tr>  <td></td>    <td class="l">Technical English</td>  <td>2</td>  </tr>
    <tr>  <td></td>    <td class="l">Politics</td>  <td>2</td>  </tr>
    <tr>  <td></td>    <td class="l">Mathematics</td>  <td>1</td>  </tr>
    <tr>  <td></td>    <td class="l">Physics</td>  <td>1</td>  </tr>
    <tr>  <td>P.E.</td>    <td class="l">Physical Education</td>  <td>4</td>  </tr>
    <?php } ?>
    </tbody>

    <tbody>
    <?php if($rcl->lang === "de") { ?>
    <tr>  <td><?php intern("TL/","TL"); ?></td>    <td class="l">Techniklehre</td>  <td>1</td>  </tr>
    <tr>  <td></td>    <td class="l">Technisches Zeichnen</td>  <td>1</td>  </tr>
    <tr>  <td></td>    <td class="l">Chemie</td>  <td>3</td>  </tr>
    <?php } else { ?>
    <tr>  <td><?php intern("TL/","TL"); ?></td>    <td class="l">Technical Education</td>  <td>1</td>  </tr>
    <tr>  <td></td>    <td class="l">Technical Drawing</td>  <td>1</td>  </tr>
    <tr>  <td></td>    <td class="l">Chemistry</td>  <td>3</td>  </tr>
    <?php } ?>
    </tbody>

    <tbody>
    <?php if($rcl->lang === "de") { ?>
    <tr>  <td class="r" colspan="2">Durchschnitt (ohne Sport):</td>  <th>1.625</th>  </tr>
    <?php } else { ?>
    <tr>  <td class="r" colspan="2">Average (without P.E.):</td>  <th>1.625</th>  </tr>
    <tr>  <td class="r" colspan="2">GPA 4.0:</td>  <th>3.375<?php $rcl->newFoot("5 - 1.625"); ?></th>  </tr>
    <tr>  <td class="r" colspan="2">GPA 5.0:</td>  <th>4.219<?php $rcl->newFoot("5 &middot; (5 - 1.625) &div; 4"); ?></th>  </tr>
    <?php } ?>
    </tbody>
</table>
<br/><?php echo $rcl->lang("Erwerb der Fachhochschulreife","With the Leaving Certificate of this education, I earned the right to study at Universities of Applied Sciences."); ?>
<hr/>
<div class="c"><?php echo $rcl->lang("Weitere Informationen", "Additional informations"); ?></div>
<ul>
<li><?php pdf("Anhang/20090127_G10_FOS_FOH8b_1HJ.pdf", "Zeugnis des 1. Halbjahres", "Report card for the first half year"); ?></li>
<li><?php pdf("Anhang/20090629_G10_FOS_FOH8b_2HJ.pdf", "Abschlusszeugnis", "Leaving Certificate", "643 KiB"); ?></li>
</ul>

<?php include("/rcl/www/rcl/include2.php"); ?>
