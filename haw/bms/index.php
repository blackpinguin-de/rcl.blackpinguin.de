<?php $title = "B-MS"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>
<?php $c = new BMSCourse(); ?>

<?php (new BMSCourse())->printCoursesHeader(); ?>
<table class="courses">
    <thead>
    <?php if($rcl->lang === "de") { ?>
    <tr>  <th>Sem.</th>              <th>Abk.</th>  <th>Modul</th>  <th>CP<?php $rcl->newFoot("ECTS Credit Points"); ?></th>  <th>Note</th>  </tr>
    <?php } else { ?>
    <tr>  <th>Sem.</th>              <th>Abbr.</th>  <th>Course</th>  <th>CP<?php $rcl->newFoot("ECTS Credit Points"); ?></th>  <th>Grade<?php $rcl->newFoot("The grading system goes from 1.0 (best) to 5.0 (worst). "); ?></th>  </tr>
    <?php } ?>
    </thead>

    <tbody>

    <?php if($rcl->lang === "de") { ?>
    <tr>  <th rowspan="12">SoSe<br/>2013</th> <td><?php intern("13ss/M1/","M1"); ?></td>    <td>Mathematik 1</td>  <td>6</td>  <td>1.0</td>  </tr>
    <tr>                             <td><?php intern("13ss/GEST/","GEST"); ?></td>    <td>Gestaltung</td>  <td rowspan="2">6</td>  <td rowspan="2">1.7</td>  </tr>
    <tr>                             <td><?php intern("13ss/KG1/","KG1"); ?></td>  <td>Künstlerische Gestaltung 1</td>  </tr>
    <tr>                             <td><?php intern("13ss/PRG/","PRG"); ?></td>  <td>Einführung in das Programmieren</td>  <td rowspan="3">6</td>  <td rowspan="3">bestanden</td>  </tr>
    <tr>                             <td><?php intern("13ss/MAN/","MAN"); ?></td>  <td>Management</td>  </tr>
    <tr>                             <td><?php intern("13ss/Proj1/","Proj1"); ?></td>  <td>Projekt 1</td>  </tr>
    <tr>                             <td><?php intern("13ss/P1/","P1"); ?></td>  <td>Programmieren 1</td>  <td>6</td>  <td>1.0</td>  </tr>
    <tr>                             <td><?php intern("13ss/M+W/","M+W"); ?></td>  <td>Medien + Wirtschaft</td>  <td>6</td>  <td>1.3</td>  </tr>
    <tr>                             <td><?php intern("13ss/AV/","AV"); ?></td>  <td>Audio-Video-Technik</td>  <td rowspan="2">6</td>  <td rowspan="2">1.0</td>  </tr>
    <tr>                             <td><?php intern("13ss/KT/","KT"); ?></td>  <td>Kommunikationstechnik</td>  </tr>
    <tr>                             <td><?php intern("13ss/RDB/","RDB"); ?></td>  <td>Relationale Datenbanken</td>  <td>6</td>  <td>1.0</td>  </tr>
    <tr>                             <td><?php intern("13ss/INF1/","INF1"); ?></td>  <td>Informatik 1</td>  <td rowspan="2">9</td>  <td rowspan="2">1.0</td>  </tr>
    <?php } else { ?>
    <tr>  <th rowspan="12">SoSe<br/>2013</th> <td><?php intern("13ss/M1/","M1"); ?></td>    <td>Mathematics 1</td>  <td>6</td>  <td>1.0</td>  </tr>
    <tr>                             <td><?php intern("13ss/GEST/","GEST"); ?></td>    <td>Design</td>  <td rowspan="2">6</td>  <td rowspan="2">1.7</td>  </tr>
    <tr>                             <td><?php intern("13ss/KG1/","KG1"); ?></td>  <td>Artistic Design 1</td>  </tr>
    <tr>                             <td><?php intern("13ss/PRG/","PRG"); ?></td>  <td>Programming Introduction</td>  <td rowspan="3">6</td>  <td rowspan="3">passed</td>  </tr>
    <tr>                             <td><?php intern("13ss/MAN/","MAN"); ?></td>  <td>Management</td>  </tr>
    <tr>                             <td><?php intern("13ss/Proj1/","Proj1"); ?></td>  <td>Project 1</td>  </tr>
    <tr>                             <td><?php intern("13ss/P1/","P1"); ?></td>  <td>Programming 1</td>  <td>6</td>  <td>1.0</td>  </tr>
    <tr>                             <td><?php intern("13ss/M+W/","M+W"); ?></td>  <td>Media Economics</td>  <td>6</td>  <td>1.3</td>  </tr>
    <tr>                             <td><?php intern("13ss/AV/","AV"); ?></td>  <td>Audio-Video-Technology</td>  <td rowspan="2">6</td>  <td rowspan="2">1.0</td>  </tr>
    <tr>                             <td><?php intern("13ss/KT/","KT"); ?></td>  <td>Communication Technology</td>  </tr>
    <tr>                             <td><?php intern("13ss/RDB/","RDB"); ?></td>  <td>Relational Databases</td>  <td>6</td>  <td>1.0</td>  </tr>
    <tr>                             <td><?php intern("13ss/INF1/","INF1"); ?></td>  <td>Computer Science 1</td>  <td rowspan="2">9</td>  <td rowspan="2">1.0</td>  </tr>
    <?php } ?>

    <?php if($rcl->lang === "de") { ?>
    <tr>  <th rowspan="8">WiSe<br/>2013</th>  <td><?php intern("13ws/INF2/","INF2"); ?></td>    <td>Informatik 2</td>  </tr>
    <tr>                             <td><?php intern("13ws/INF3/","INF3"); ?></td>  <td>Informatik 3 + Elektronik</td>  <td>6</td>  <td>1.0</td>  </tr>
    <tr>                             <td><?php intern("13ws/M2/","M2"); ?></td>    <td>Mathematik 2</td>  <td>9</td>  <td>4.0</td>  </tr>
    <tr>                             <td><?php intern("13ws/KG2/","KG2"); ?></td>    <td>Künstlerische Gestaltung 2</td>  <td rowspan="2">6</td>  <td rowspan="2">1.3</td>  </tr>
    <tr>                             <td><?php intern("13ws/MG1/","MG1"); ?></td>  <td>Mediengestaltung 1</td>  </tr>
    <tr>                             <td><?php intern("13ws/P2/","P2"); ?></td>  <td>Programmieren 2</td>  <td>6</td>  <td>1.0</td>  </tr>
    <tr>                             <td><?php intern("13ws/VS/","VS"); ?></td>  <td>Virtuelle Systeme</td>  <td rowspan="2">6</td>  <td rowspan="2">1.7</td>  </tr>
    <tr>                             <td><?php intern("13ws/ANI/","ANI"); ?></td>  <td>Animation</td>  </tr>
    <?php } else { ?>
    <tr>  <th rowspan="8">WiSe<br/>2013</th>  <td><?php intern("13ws/INF2/","INF2"); ?></td>    <td>Computer Science 2</td>  </tr>
    <tr>                             <td><?php intern("13ws/INF3/","INF3"); ?></td>  <td>Computer Science 3 + Electronics</td>  <td>6</td>  <td>1.0</td>  </tr>
    <tr>                             <td><?php intern("13ws/M2/","M2"); ?></td>    <td>Mathematics 2</td>  <td>9</td>  <td>4.0</td>  </tr>
    <tr>                             <td><?php intern("13ws/KG2/","KG2"); ?></td>    <td>Artistic Design 2</td>  <td rowspan="2">6</td>  <td rowspan="2">1.3</td>  </tr>
    <tr>                             <td><?php intern("13ws/MG1/","MG1"); ?></td>  <td>Media Design 1</td>  </tr>
    <tr>                             <td><?php intern("13ws/P2/","P2"); ?></td>  <td>Programming 2</td>  <td>6</td>  <td>1.0</td>  </tr>
    <tr>                             <td><?php intern("13ws/VS/","VS"); ?></td>  <td>Augmented Reality</td>  <td rowspan="2">6</td>  <td rowspan="2">1.7</td>  </tr>
    <tr>                             <td><?php intern("13ws/ANI/","ANI"); ?></td>  <td>Animation</td>  </tr>
    <?php } ?>

    <?php if($rcl->lang === "de") { ?>
    <tr>  <th rowspan="8">SoSe<br/>2014</th>  <td><?php intern("14ss/MG2/","MG2"); ?></td>    <td>Mediengestaltung 2</td>  <td rowspan="2">6</td>  <td rowspan="2">bestanden</td>  </tr>
    <tr>                             <td><?php intern("14ss/CA/","CA"); ?></td>    <td>Camera Acting</td>  </tr>
    <tr>                             <td><?php intern("14ss/NWI/","NWI"); ?></td>    <td>Netzwerke, Internet, Sicherheit</td>  <td>6</td>  <td>1.0</td>  </tr>
    <tr>                             <td><?php intern("14ss/KRY/","KRY"); ?></td>    <td>Kryptografie</td>  <td>6</td>  <td>1.0</td>  </tr>
    <tr>                             <td><?php intern("14ss/MINF/","MINF"); ?></td>    <td>Wahlpflichtmodul Technik: Ausgewählte Themen der Medieninformatik</td>  <td>6</td>  <td>1.0</td>  </tr>
    <tr>                             <td><?php intern("14ss/MOSY/","MOSY"); ?></td>    <td>Wahlpflichtmodul Technik: Mobile Systeme</td>  <td>6</td>  <td>1.0<?php $rcl->newFoot("MOSY wird als Zusatzmodul gewertet, dessen Note nicht in die Gesamtnote eingeht."); ?></td>  </tr>
    <tr>                             <td><?php intern("14ss/ATP1/","ATP1"); ?></td>    <td>Wahlpflichtmodul AV: Audiotechnik und -produktion 1</td>  <td>5</td>  <td>1.3</td>  </tr>
    <tr>                             <td><?php intern("14ss/MR/","MR"); ?></td>    <td>Medienrecht</td>  <td rowspan="2">6</td>  <td rowspan="2">bestanden</td>  </tr>
    <?php } else { ?>
    <tr>  <th rowspan="8">SoSe<br/>2014</th>  <td><?php intern("14ss/MG2/","MG2"); ?></td>    <td>Media Design 2</td>  <td rowspan="2">6</td>  <td rowspan="2">passed</td>  </tr>
    <tr>                             <td><?php intern("14ss/CA/","CA"); ?></td>    <td>Camera Acting</td>  </tr>
    <tr>                             <td><?php intern("14ss/NWI/","NWI"); ?></td>    <td>Computer Networks, Internet, Security</td>  <td>6</td>  <td>1.0</td>  </tr>
    <tr>                             <td><?php intern("14ss/KRY/","KRY"); ?></td>    <td>Cryptography</td>  <td>6</td>  <td>1.0</td>  </tr>
    <tr>                             <td><?php intern("14ss/MINF/","MINF"); ?></td>    <td>Compulsory Elective Technology: Selected Topics of Media Computer Science</td>  <td>6</td>  <td>1.0</td>  </tr>
    <tr>                             <td><?php intern("14ss/MOSY/","MOSY"); ?></td>    <td>Compulsory Elective Technology: Mobile Systems</td>  <td>6</td>  <td>1.0<?php $rcl->newFoot("MOSY counts as an additional course, that doesn't affect the cumulative grade."); ?></td>  </tr>
    <tr>                             <td><?php intern("14ss/ATP1/","ATP1"); ?></td>    <td>Compulsory Elective AV: Audio Technology and Audio Production 1</td>  <td>5</td>  <td>1.3</td>  </tr>
    <tr>                             <td><?php intern("14ss/MR/","MR"); ?></td>    <td>Media Law</td>  <td rowspan="2">6</td>  <td rowspan="2">passed</td>  </tr>
    <?php } ?>

    <?php if($rcl->lang === "de") { ?>
    <tr>  <th rowspan="5">WiSe<br/>2014</th>  <td><?php intern("14ws/PRAE/","PRÄ"); ?></td>    <td>Präsentations- und Kommunikationsfertigkeiten</td>  </tr>
    <tr>                             <td><?php intern("14ws/TI/","TI"); ?></td>    <td>Theoretische Informatik</td>  <td>6</td>  <td>1.0</td>  </tr>
    <tr>                             <td><?php intern("14ws/MG3/","MG3"); ?></td>    <td>Wahlpflichtmodul Gestaltung: Mediengestaltung 3</td>  <td>10</td>  <td>1.0</td>  </tr>
    <tr>                             <td><?php intern("14ws/AVPRG/","AVPRG"); ?></td>    <td>Wahlpflichtmodul AV: Audio-Video-Programmierung</td>  <td>5</td>  <td>1.0</td>  </tr>
    <tr>                             <td><?php intern("14ws/IMP/","IMP"); ?></td>    <td>Image Processing</td>  <td>6</td>  <td>1.0</td>  </tr>
    <?php } else { ?>
    <tr>  <th rowspan="5">WiSe<br/>2014</th>  <td><?php intern("14ws/PRAE/","PRÄ"); ?></td>    <td>Presentation and Communication Skills</td>  </tr>
    <tr>                             <td><?php intern("14ws/TI/","TI"); ?></td>    <td>Theoretical Computer Science</td>  <td>6</td>  <td>1.0</td>  </tr>
    <tr>                             <td><?php intern("14ws/MG3/","MG3"); ?></td>    <td>Compulsory Elective Design: Media Design 3</td>  <td>10</td>  <td>1.0</td>  </tr>
    <tr>                             <td><?php intern("14ws/AVPRG/","AVPRG"); ?></td>    <td>Compulsory Elective AV: Audio-Video-Programming</td>  <td>5</td>  <td>1.0</td>  </tr>
    <tr>                             <td><?php intern("14ws/IMP/","IMP"); ?></td>    <td>Image Processing</td>  <td>6</td>  <td>1.0</td>  </tr>

    <?php } ?>

    <?php if($rcl->lang === "de") { ?>
    <tr>  <th rowspan="4">offen</th> <td>SE</td>    <td>Software-Engineering</td>  <td>0/6</td>  <td>?</td>  </tr>
    <tr>                             <td>Proj2</td>    <td>Projekt 2</td>  <td>0/6</td>  <td>unbenotet</td>  </tr>
    <tr>                             <td>Proj3</td>    <td>Projekt 3</td>  <td>0/10</td>  <td>unbenotet</td>  </tr>
    <tr>                             <td>BA</td>    <td>Bachelor-Arbeit</td>  <td>0/12</td>  <td>?</td>  </tr>
    <?php } else { ?>
    <tr>  <th rowspan="4">open</th> <td>SE</td>    <td>Software Engineering</td>  <td>0/6</td>  <td>?</td>  </tr>
    <tr>                             <td>Proj2</td>    <td>Project 2</td>  <td>0/6</td>  <td>ungraded</td>  </tr>
    <tr>                             <td>Proj3</td>    <td>Project 3</td>  <td>0/10</td>  <td>ungraded</td>  </tr>
    <tr>                             <td>BA</td>    <td>Bachelor thesis</td>  <td>0/12</td>  <td>?</td>  </tr>
    <?php } ?>

    </tbody>

    <tbody>
    <?php if($rcl->lang === "de") { ?>
    <tr>  <td class="r" colspan="3">Summe / Durchschnitt:</td>
        <th>152/186</th>
        <th>1.271<?php $rcl->newFoot("Der Notendurchschnitt basiert auf der \"Gewichtung der Note\" G für das jeweilige Modul nach &sect;4 der Prüngs- und Studienordnung:<br/>&empty;Note = &sum;( Note &sdot; G ) &divide; &sum;( G )"); ?></th>
    </tr>
    <?php } else { ?>
    <tr>  <td class="r" colspan="3">Total / Weighted Average Grade:</td>
        <th>152/186</th>
        <th>1.271<?php $rcl->newFoot("Weighted by the factor G according to the academic regulations:<br/>&empty;Grade = &sum;( Grade &middot; G ) &divide; &sum;( G )"); ?></th>
    </tr>
    <tr>  <td class="r" colspan="4">GPA 4.0:</td>  <th>3.729<?php $rcl->newFoot("GPA4 = 5 - &empty;Grade"); ?></th>  </tr>
    <tr>  <td class="r" colspan="4">GPA 5.0:</td>  <th>4.661<?php $rcl->newFoot("GPA5 = 5 &middot; ( 5 - &empty;Grade ) &div; 4"); ?></th>  </tr>
    <?php } ?>
    </tbody>
</table>
<br/><?php echo $rcl->lang("Ich habe aus finanziellen Gründen das Studium ohne Abschluss abgebrochen.", "I resigned from the degree program for financial reasons.");?>
<hr/>
<div class="c"><?php echo $rcl->lang("Weitere Informationen", "Additional informations"); ?></div>
<ul>
<li><?php pdf("Anhang/PO2008MS.pdf", "Prüfungs- und Studienordnung Media Systems", "Study and examination regulations for Media Systems", "39&nbsp;KiB"); ?></li>
<li><?php pdf("Anhang/APSO-BM-DMIT.pdf", "Allgemeine Prüfungs- und Studienordnung Fakultät DMI", "Common study and examination regulations for the faculty DMI", "115&nbsp;KiB"); ?></li>
<li><?php pdf("Anhang/stud_fuehMS.pdf", "Modulbeschreibungen", "Official course descriptions", "438&nbsp;KiB"); ?></li>
<li><?php pdf("Anhang/Noten.pdf", "Leistungsübersicht", "Performance list", "259&nbsp;KiB"); ?></li>
<li><?php pdf("Anhang/Abgangszeugnis.pdf", "Studienbescheinigung (Abgangszeugnis)", "Certificate of Attendance", "2.7&nbsp;MiB"); ?></li>
</ul>

<?php include("/rcl/www/rcl/include2.php"); ?>
