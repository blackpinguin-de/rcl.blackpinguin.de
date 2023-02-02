<?php $title = "B-AI"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php (new BAICourse())->printCoursesHeader(); ?>
<table class="courses">
    <thead>
    <?php if($rcl->lang === "de") { ?>
    <tr>  <th>Sem.</th>              <th>Abk.</th>  <th>Modul</th>  <th>CP<?php $rcl->newFoot("ECTS Credit Points"); ?></th>  <th>LP<?php $rcl->newFoot("Leistungspunkte"); ?></th>  <th>Note</th>  </tr>
    <?php } else { ?>
    <tr>  <th>Sem.</th>              <th>Abbr.</th>  <th>Course</th>  <th>CP<?php $rcl->newFoot("ECTS Credit Points"); ?></th>  <th>LP<?php $rcl->newFoot("\"Leistungspunkte\" (Performance points), goes from 0 (worst) to 15 (best). "); ?></th>  <th>Grade<?php $rcl->newFoot("Table-Lookup:<br/>15 LP &rightarrow; 1+<br/>14 LP &rightarrow; 1<br/>13 LP &rightarrow; 1-<br/>12 LP &rightarrow; 2+<br/>...<br>1 LP &rightarrow; 5-<br>0 LP &rightarrow; 6"); ?></th>  </tr>
    <?php } ?>
    </thead>

    <tbody>
    <?php if($rcl->lang === "de") { ?>
    <tr>  <th rowspan="5">WiSe<br/>2009</th>  <td><?php intern("09ws/MG/","MG"); ?></td>    <td>Grundlagen der Mathematik</td>  <td>6</td>  <td>12</td>  <td>2+</td>  </tr>
    <tr>                             <td><?php intern("09ws/GI/","GI"); ?></td>    <td>Grundlagen der Informatik</td>  <td>6</td>  <td>12</td>  <td>2+</td>  </tr>
    <tr>                             <td><?php intern("09ws/PR1/","PR1"); ?></td>  <td>Programmieren 1</td>  <td>9</td>  <td>13</td>  <td>1-</td>  </tr>
    <tr>                             <td>PRP1</td>                        <td>Programmieren 1 Praktikum</td>  <td>3</td>  <td>14</td>  <td>1</td>  </tr>
    <tr>                             <td><?php intern("09ws/BW1/","BW1"); ?></td>  <td>Betriebswirtschaft 1</td>  <td>6</td>  <td>14</td>  <td>1</td>  </tr>
    <?php } else { ?>
    <tr>  <th rowspan="5">WiSe<br/>2009</th>  <td><?php intern("09ws/MG/","MG"); ?></td>    <td>Mathematic Basics</td>  <td>6</td>  <td>12</td>  <td>2+</td>  </tr>
    <tr>                             <td><?php intern("09ws/GI/","GI"); ?></td>    <td>Computer Science Basics</td>  <td>6</td>  <td>12</td>  <td>2+</td>  </tr>
    <tr>                             <td><?php intern("09ws/PR1/","PR1"); ?></td>  <td>Programming 1</td>  <td>9</td>  <td>13</td>  <td>1-</td>  </tr>
    <tr>                             <td>PRP1</td>                        <td>Programming 1 Practice</td>  <td>3</td>  <td>14</td>  <td>1</td>  </tr>
    <tr>                             <td><?php intern("09ws/BW1/","BW1"); ?></td>  <td>Business Studies 1</td>  <td>6</td>  <td>14</td>  <td>1</td>  </tr>
    <?php } ?>
    </tbody>

    <tbody>
    <?php if($rcl->lang === "de") { ?>
    <tr>  <th rowspan="6">SoSe<br/>2010</th>  <td><?php intern("10ss/LB/","LB"); ?></td>    <td>Logik und Berechenbarkeit</td>  <td>6</td>  <td>10</td>  <td>2-</td>  </tr>
    <tr>                             <td><?php intern("10ss/AF/","AF"); ?></td>    <td>Automathentheorie und Formale Sprachen</td>  <td>6</td>  <td>14</td>  <td>1</td>  </tr>
    <tr>                             <td><?php intern("10ss/DB/","DB"); ?></td>    <td>Datenbanken</td>  <td>6</td>  <td>12</td>  <td>2+</td>  </tr>
    <tr>                             <td><?php intern("10ss/PR2/","PR2"); ?></td>  <td>Programmieren 2</td>  <td>4.5</td>  <td>14</td>  <td>1</td>  </tr>
    <tr>                             <td>PRP2</td>                        <td>Programmieren 2 Praktikum</td>  <td>1.5</td>  <td>14</td>  <td>1</td>  </tr>
    <tr>                             <td><?php intern("10ss/RMP/","RMP"); ?></td>  <td>Rechnerstrukturen und Maschinennahe Programmierung</td>  <td>6</td>  <td>14</td>  <td>1</td>  </tr>
    <?php } else { ?>
    <tr>  <th rowspan="6">SuSe<br/>2010</th>  <td><?php intern("10ss/LB/","LB"); ?></td>    <td>Logic and Computation</td>  <td>6</td>  <td>10</td>  <td>2-</td>  </tr>
    <tr>                             <td><?php intern("10ss/AF/","AF"); ?></td>    <td>Automata Theory and Formal Languages</td>  <td>6</td>  <td>14</td>  <td>1</td>  </tr>
    <tr>                             <td><?php intern("10ss/DB/","DB"); ?></td>    <td>Databases</td>  <td>6</td>  <td>12</td>  <td>2+</td>  </tr>
    <tr>                             <td><?php intern("10ss/PR2/","PR2"); ?></td>  <td>Programming 2</td>  <td>4.5</td>  <td>14</td>  <td>1</td>  </tr>
    <tr>                             <td>PRP2</td>                        <td>Programming 2 Practice</td>  <td>1.5</td>  <td>14</td>  <td>1</td>  </tr>
    <tr>                             <td><?php intern("10ss/RMP/","RMP"); ?></td>  <td>Computer architectures and machine-oriented programming</td>  <td>6</td>  <td>14</td>  <td>1</td>  </tr>
    <?php } ?>
    </tbody>

    <tbody>
    <?php if($rcl->lang === "de") { ?>
    <tr>  <th rowspan="5">WiSe<br/>2010</th>  <td><?php intern("10ws/GKA/","GKA"); ?></td>  <td>Graphentheoretische Konzepte und Algorithmen</td>  <td>6</td>  <td>9</td>  <td>3+</td>  </tr>
    <tr>                             <td><?php intern("10ws/AD/","AD"); ?></td>    <td>Algorithmen und Datenstrukturen</td>  <td>6</td>  <td>12</td>  <td>2+</td>  </tr>
    <tr>                             <td><?php intern("10ws/SE1/","SE1"); ?></td>  <td>Software Engineering 1</td>  <td>6</td>  <td>13</td>  <td>1-</td>  </tr>
    <tr>                             <td><?php intern("10ws/BS/","BS"); ?></td>    <td>Betriebssysteme</td>  <td>6</td>  <td>15</td>  <td>1+</td>  </tr>
    <tr>                             <td><?php intern("10ws/BW2/","BW2"); ?></td>  <td>Betriebswirtschaft 2</td>  <td>6</td>  <td>15</td>  <td>1+</td>  </tr>
    <?php } else { ?>
    <tr>  <th rowspan="5">WiSe<br/>2010</th>  <td><?php intern("10ws/GKA/","GKA"); ?></td>  <td>Graph Theory</td>  <td>6</td>  <td>9</td>  <td>3+</td>  </tr>
    <tr>                             <td><?php intern("10ws/AD/","AD"); ?></td>    <td>Algorithms and Data Structures</td>  <td>6</td>  <td>12</td>  <td>2+</td>  </tr>
    <tr>                             <td><?php intern("10ws/SE1/","SE1"); ?></td>  <td>Software Engineering 1</td>  <td>6</td>  <td>13</td>  <td>1-</td>  </tr>
    <tr>                             <td><?php intern("10ws/BS/","BS"); ?></td>    <td>Operating Systems</td>  <td>6</td>  <td>15</td>  <td>1+</td>  </tr>
    <tr>                             <td><?php intern("10ws/BW2/","BW2"); ?></td>  <td>Business Studies 2</td>  <td>6</td>  <td>15</td>  <td>1+</td>  </tr>
    <?php } ?>
    </tbody>

    <tbody>
    <?php if($rcl->lang === "de") { ?>
    <tr>  <th rowspan="6">SoSe<br/>2011</th>  <td><?php intern("11ss/CI/","CI"); ?></td>    <td>Compiler und Interpreter</td>  <td>6</td>  <td>13</td>  <td>1-</td>  </tr>
    <tr>                             <td><?php intern("11ss/SE2/","SE2"); ?></td>  <td>Software Engineering 2</td>  <td>6</td>  <td>15</td>  <td>1+</td>  </tr>
    <tr>                             <td><?php intern("11ss/RN/","RN"); ?></td>    <td>Rechnernetze</td>  <td>6</td>  <td>14</td>  <td>1</td>  </tr>
    <tr>                             <td><?php intern("11ss/WP_SG/","WP1:SG"); ?></td>    <td>Wahlpflichtfach 1: Serious Games</td>  <td>6</td>  <td>11</td>  <td>2</td>  </tr>
    <tr>                             <td><?php pdf("11ss/GW_SdL/SdL.pdf","GW1"); ?></td>  <td>Gesellschaftswissenschaften 1: Sinn des Lebens</td>  <td>3</td>  <td colspan="2">bestanden</td>  </tr>
    <tr>                             <td><?php pdf("11ss/GW_WK/WK.pdf","GW2"); ?></td>  <td>Gesellschaftswissenschaften 2: Gewaltfreie Kommunikation</td>  <td>3</td>  <td colspan="2">bestanden</td>  </tr>
    <?php } else { ?>
    <tr>  <th rowspan="6">SuSe<br/>2011</th>  <td><?php intern("11ss/CI/","CI"); ?></td>    <td>Compilers and Interpreters</td>  <td>6</td>  <td>13</td>  <td>1-</td>  </tr>
    <tr>                             <td><?php intern("11ss/SE2/","SE2"); ?></td>  <td>Software Engineering 2</td>  <td>6</td>  <td>15</td>  <td>1+</td>  </tr>
    <tr>                             <td><?php intern("11ss/RN/","RN"); ?></td>    <td>Computer Networks</td>  <td>6</td>  <td>14</td>  <td>1</td>  </tr>
    <tr>                             <td><?php intern("11ss/WP_SG/","WP1:SG"); ?></td>    <td>Compulsory elective 1: Serious Games</td>  <td>6</td>  <td>11</td>  <td>2</td>  </tr>
    <tr>                             <td><?php pdf("11ss/GW_SdL/SdL.pdf","GW1"); ?></td>  <td>Elective social sciences 1: meaning of life</td>  <td>3</td>  <td colspan="2">passed</td>  </tr>
    <tr>                             <td><?php pdf("11ss/GW_WK/WK.pdf","GW2"); ?></td>    <td>Elective social sciences 2: nonviolent communication</td>  <td>3</td>  <td colspan="2">passed</td>  </tr>
    <?php } ?>
    </tbody>

    <tbody>
    <?php if($rcl->lang === "de") { ?>
    <tr>  <th rowspan="6">WiSe<br/>2011</th>  <td><?php intern("11ws/Proj_LA/","Proj:LA"); ?></td>   <td>Projekt: Lernende Agenten</td>  <td>9</td>  <td colspan="2">bestanden</td>  </tr>
    <tr>                             <td><?php intern("11ws/AIS/","AIS"); ?></td>       <td>Seminar: KI-Simulation in Computerspielen</td>  <td>3</td>  <td colspan="2">bestanden</td>  </tr>
    <tr>                             <td><?php intern("11ws/AI/","AI"); ?></td>        <td>Architektur von Informationssystemen</td>  <td>6</td>  <td>15</td>  <td>1+</td>  </tr>
    <tr>                             <td><?php intern("11ws/VS/","VS"); ?></td>        <td>Verteilte Systeme</td>  <td>6</td>  <td>15</td>  <td>1+</td>  </tr>
    <tr>                             <td><?php intern("11ws/WP_QrQk/","WP2:QrQk"); ?></td>  <td>Wahlpflichtfach 2: Quantenrechner und Quantenkryptographie</td>  <td>6</td>  <td>15</td>  <td>1+</td>  </tr>
    <tr>                             <td><?php pdf("11ws/GW_BA/BA.pdf","GW3"); ?></td>         <td>Gesellschaftswissenschaften 3: Konzeption und Anfertigung von Bachelorarbeiten</td>  <td>3</td>  <td colspan="2">bestanden</td>  </tr>
    <?php } else { ?>
    <tr>  <th rowspan="6">WiSe<br/>2011</th>  <td><?php intern("11ws/Proj_LA/","Proj:LA"); ?></td>   <td>Project: Learning Agents</td>  <td>9</td>  <td colspan="2">passed</td>  </tr>
    <tr>                             <td><?php intern("11ws/AIS/","AIS"); ?></td>       <td>Seminar: AI-Simulation in Computer Games</td>  <td>3</td>  <td colspan="2">passed</td>  </tr>
    <tr>                             <td><?php intern("11ws/AI/","AI"); ?></td>        <td>Architecture of information systems</td>  <td>6</td>  <td>15</td>  <td>1+</td>  </tr>
    <tr>                             <td><?php intern("11ws/VS/","VS"); ?></td>        <td>Distributed Systems</td>  <td>6</td>  <td>15</td>  <td>1+</td>  </tr>
    <tr>                             <td><?php intern("11ws/WP_QrQk/","WP2:QrQk"); ?></td>  <td>Compulsory elective 2: Quantum computers and quantum cryptography</td>  <td>6</td>  <td>15</td>  <td>1+</td>  </tr>
    <tr>                             <td><?php pdf("11ws/GW_BA/BA.pdf","GW3"); ?></td>         <td>Elective social sciences 3: how-to write a bachelor thesis</td>  <td>3</td>  <td colspan="2">passed</td>  </tr>
    <?php } ?>
    </tbody>

    <tbody>
    <?php if($rcl->lang === "de") { ?>
    <tr>  <th rowspan="2">SoSe<br/>2012</th>  <td><?php intern("12ss/WP_ITS/","WP3:ITS"); ?></td>  <td>Wahlpflichtfach 3: IT-Sicherheit</td>  <td>6</td>  <td>13</td>  <td>1-</td>  </tr>
    <tr>                             <td><?php intern("12ss/IS/","IS"); ?></td>           <td>Intelligente Systeme</td>  <td>6</td>  <td>14</td>  <td>1</td>  </tr>
    <?php } else { ?>
    <tr>  <th rowspan="2">SuSe<br/>2012</th>  <td><?php intern("12ss/WP_ITS/","WP3:ITS"); ?></td>  <td>Compulsory elective 3: IT-Security</td>  <td>6</td>  <td>13</td>  <td>1-</td>  </tr>
    <tr>                             <td><?php intern("12ss/IS/","IS"); ?></td>           <td>Artificial Intelligence</td>  <td>6</td>  <td>14</td>  <td>1</td>  </tr>
    <?php } ?>
    </tbody>

    <tbody>
    <?php if($rcl->lang === "de") { ?>
    <tr>  <th rowspan="1">WiSe<br/>2012</th>  <td><?php intern("12ws/WP_Scala/","WP4:Scala"); ?></td>  <td>Wahlpflichtfach 4<?php $rcl->newFoot("Es sind nur drei Wahlpflichtfächer vorgesehen, dieses Modul ist deshalb optional und geht nicht in die Endnote ein."); ?>: Scala</td>  <td>0/6</td>  <td colspan="2">abgebrochen</td>  </tr>
    <?php } else { ?>
    <tr>  <th rowspan="1">WiSe<br/>2012</th>  <td><?php intern("12ws/WP_Scala/","WP4:Scala"); ?></td>  <td>Compulsory elective 4<?php $rcl->newFoot("A fourth compulsory elective course is not scheduled. It is therefore optional and not a part of the final grade."); ?>: Scala</td>  <td>0/6</td>  <td colspan="2">cancelled</td>  </tr>
    <?php } ?>
    </tbody>

    <tbody>
    <?php if($rcl->lang === "de") { ?>
    <tr>  <th rowspan="2">offen</th> <td>BA</td>    <td>Bachelorarbeit</td>  <td>0/12</td>  <td>?</td>  <td>?</td>  </tr>
    <tr>                             <td>BAK</td>   <td>Kolloquium</td>  <td>0/3</td>  <td colspan="2">unbenotet</td>  </tr>
    <?php } else { ?>
    <tr>  <th rowspan="2">open</th> <td>BA</td>    <td>Bachelor thesis</td>  <td>0/12</td>  <td>?</td>  <td>?</td>  </tr>
    <tr>                            <td>BAK</td>   <td>Colloquium</td>  <td>0/3</td>  <td colspan="2">ungraded</td>  </tr>
    <?php } ?>
    </tbody>

    <tbody>
    <?php if($rcl->lang === "de") { ?>
    <tr>  <td class="r" colspan="3">Summe / Durchschnitt:</td>
        <th>165/180</th>
        <th>13.229<?php $rcl->newFoot("Der Durchschnitt basiert auf der \"Gewichtung für die Gesamtnote\" G für das jeweilige Modul nach &sect;6 der Prüngs- und Studienordnung:<br/>&empty;LP = &sum;( LP &sdot; G ) &divide; &sum;( G )"); ?></th>
        <th>1.257<?php $rcl->newFoot("&empty;Note = ( 17 &minus; &empty;LP ) &divide; 3"); ?></th>
    </tr>
    <?php } else { ?>
    <tr>  <td class="r" colspan="3">Total / Weighted Average:</td>
        <th>165/180</th>
        <th>13.229<?php $rcl->newFoot("Weighted by the factor G according to the academic regulations:<br/>&empty;LP = &sum;( LP &middot; G ) &divide; &sum;( G )"); ?></th>
        <th>1.257<?php $rcl->newFoot("&empty;Grade = ( 17 &minus; &empty;LP ) &divide; 3"); ?></th>
    </tr>
    <tr>  <td class="r" colspan="5">GPA 4.0:</td>  <th>3.743<?php $rcl->newFoot("GPA4 = 5 - &empty;Grade"); ?></th>  </tr>
    <tr>  <td class="r" colspan="5">GPA 5.0:</td>  <th>4.679<?php $rcl->newFoot("GPA5 = 5 &middot; ( 5 - &empty;Grade ) &div; 4"); ?></th>  </tr>
    <?php } ?>
    </tbody>
</table>
<br/><?php echo $rcl->lang("Ich habe das Studium ohne Abschluss beendet, weil, abgesehen von der Bachelorarbeit, nichts mehr zu tun war.", "I resigned from the degree program, because there wasn't more to do besides the bachelor thesis.");?>
<hr/>
<div class="c"><?php echo $rcl->lang("Weitere Informationen", "Additional informations"); ?></div>
<ul>
<li><?php pdf("Anhang/PO2008AI.pdf", "Prüfungs- und Studienordnung Angewandte Informatik", "Study and examination regulations for Applied Computer Science", "86&nbsp;KiB"); ?></li>
<li><?php pdf("Anhang/APSO-TI-BM.pdf", "Allgemeine Prüfungs- und Studienordnung Fakultät TI", "Common study and examination regulations for the faculty TI", "79&nbsp;KiB"); ?></li>
<li><?php pdf("Anhang/Modulhandbuch_AI_TI_ECS_V2.0.pdf", "Modulbeschreibungen", "Official course descriptions", "1.2&nbsp;MiB"); ?></li>
<li><?php pdf("Anhang/Noten.pdf", "Notenübersicht", "Transcript of grades", "7&nbsp;KiB"); ?></li>
<li><?php pdf("Anhang/Abgangszeugnis.pdf", "Studienbescheinigung (Abgangszeugnis)", "Certificate of Attendance", "1.6&nbsp;MiB"); ?></li>
</ul>

<?php include("/rcl/www/rcl/include2.php"); ?>
