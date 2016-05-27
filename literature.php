<?php include_once("/rcl/www/funktionen.php"); ?>
<?php $title = $rcl->lang("Literatur", "Literature"); $path = "/literature"; ?>
<?php include("include1.php"); ?>

<style type="text/css" scoped="scoped">
table#literature > tbody > tr > td:nth-of-type(4) { background-color: #0f0; color: black; text-align: center; padding: 2px; }
table#literature > tbody > tr > td:nth-of-type(5) { color: black; text-align: center; padding: 2px; }
table#literature > tbody > tr > td.c200 { background-color: #00cc00; }
table#literature > tbody > tr > td.c170 { background-color: #00db00; }
table#literature > tbody > tr > td.c100 { background-color: #00ff00; }
table#literature > tbody > tr > td.c95  { background-color: #19ff00; }
table#literature > tbody > tr > td.c90  { background-color: #32ff00; }
table#literature > tbody > tr > td.c85  { background-color: #4cff00; }
table#literature > tbody > tr > td.c80  { background-color: #65ff00; }
table#literature > tbody > tr > td.c75  { background-color: #7fff00; }
table#literature > tbody > tr > td.c70  { background-color: #99ff00; }
table#literature > tbody > tr > td.c65  { background-color: #b2ff00; }
table#literature > tbody > tr > td.c60  { background-color: #ccff00; }
table#literature > tbody > tr > td.c0   { background-color: #ff0000; }
</style>

<table id="literature">
<thead>
    <?php if($rcl->lang === "de") { ?>
    <tr>  <th>Spr.</th>  <th>Titel</th>  <th>Autor(en)</th>  <th>Gelesen</th>  <th>Verständnis</th>  </tr>
    <?php } else { ?>
    <tr>  <th>Lng.</th>  <th>Title</th>  <th>Author(s)</th>  <th>Read</th>  <th>Grasp</th>  </tr>
    <?php } ?>
</thead>
<tbody>
<tr>  <td>EN</td>  <td>Design Patterns<?php isbn("ISBN 978-0-201-63361-0", "Thema: Entwurfsmuster", ""); ?></td>  <td>Erich Gamma, Richard Helm, Ralph Johnson, John Vlissides</td>  <td class="c200">200%</td>  <td class="c100">100%</td>  </tr>
<tr>  <td>EN</td>  <td>Understanding Cryptography<?php isbn("ISBN 978-3-642-04100-6", "Thema: Kryptografie", ""); ?></td>  <td>Christof Paar, Jan Pelzl</td>  <td class="c200">200%</td>  <td class="c95">95%</td>  </tr>
<tr>  <td>EN</td>  <td>Modern Operating Systems<?php isbn("ISBN 978-0-13-813459-4", "Thema: Betriebssysteme", ""); ?></td>  <td>Andrew S. Tanenbaum</td>  <td style="background-color: #ffa300;">32%<!--(341/1072)--></td>  <td class="c75">75%</td>  </tr>
<tr>  <td>EN</td>  <td>Computer Networks<?php isbn("ISBN 978-0-13-212695-3", "Thema: Netzwerke", ""); ?></td>  <td>Andrew S. Tanenbaum, David J. Wetherall</td>  <td>100%</td>  <td class="c80">80%</td>  </tr>
<tr>  <td>EN</td>  <td>Distributed Systems<?php isbn("ISBN 978-0-13-613553-1", "Thema: Verteilte Systeme", ""); ?></td>  <td>Andrew S. Tanenbaum, Maarten Van Steen</td>  <td>100%</td>  <td class="c85">85%</td>  </tr>
<tr>  <td>EN</td>  <td>Introduction to Automata Theory, Languages, and Computation<?php isbn("ISBN 978-0-321-47617-3", "Themen: Automatentheorie, Sprachen, Berechenbarkeit", ""); ?></td>  <td>John E. Hopcroft, Rajeev Motwani, Jeffrey D. Ullman</td>  <td>100%</td>  <td class="c70">70%</td>  </tr>
<tr>  <td>EN</td>  <td>Software Engineering and Computer Games<?php isbn("ISBN 978-0-20176-791-9", "Themen: Softwareentwicklung, Spieleentwicklung", ""); ?></td>  <td>Rudy Rucker</td>  <td>100%</td>  <td class="c85">85%</td>  </tr>
<tr>  <td>DE</td>  <td>Inside Microsoft DirectX 9 - Spieleprogrammierung<?php isbn("ISBN 978-3-86063-096-9", "", "Subjects: DirectX 9, Game Development"); ?></td>  <td>Uwe Kettermann, Andreas Rohde</td>  <td>100%</td>  <td class="c85">85%</td>  </tr>
<tr>  <td>DE</td>  <td>Computergrafik und Bildverarbeitung: Band I: Computergrafik<?php isbn("ISBN 978-3-83481-304-6", "Themen: Computergrafik, OpenGL", "Subjects: Computer Graphics, OpenGL"); ?></td>  <td>Alfred Nischwitz, Max Fischer, Peter Haberäcker, Gudrun Socher</td>  <td>100%</td>  <td class="c80">80%</td>  </tr>
<tr>  <td>DE</td>  <td>Computergrafik und Bildverarbeitung: Band II: Bildverarbeitung<?php isbn("ISBN 978-3-83481-712-9 ", "", ""); ?></td>  <td>Alfred Nischwitz, Max Fischer, Peter Haberäcker, Gudrun Socher</td>  <td class="c80">80%<!--(470/588)--></td>  <td class="c70">70%</td>  </tr>
<tr>  <td>EN</td>  <td>Programming Game AI by Example<?php isbn("ISBN 978-1-55622-078-4", "Themen: Künstliche Intelligenz, Spieleentwicklung", ""); ?></td>  <td>Mat Buckland</td>  <td class="c200">200%</td>  <td class="c100">100%</td>  </tr>
<tr>  <td>EN</td>  <td>AI Techniques for Game Programming<?php isbn("ISBN 978-1-93184-108-5", "Themen: Künstliche Intelligenz, Spieleentwicklung", ""); ?></td>  <td>Mat Buckland</td>  <td>100%</td>  <td class="c90">90%</td>  </tr>
<tr>  <td>EN</td>  <td>AI for Game Developers<?php isbn("ISBN 978-0-596-00555-9", "Themen: Künstliche Intelligenz, Spieleentwicklung", ""); ?></td>  <td>David M. Bourg, Glenn Seemann</td>  <td style="background-color: #7aff00;">76%<!-- 288/379 --></td>  </tr>
<tr>  <td>DE</td>  <td>Grundkurs Künstliche Intelligenz<?php isbn("ISBN 978-3-8348-0783-0", "", "Subject: Artificial Intelligence"); ?></td>  <td>Wolfgang Ertel</td>  <td>100%</td>  <td class="c90">90%</td>  </tr>
<tr>  <td>DE</td>  <td>Mathematik für Informatiker<?php isbn("ISBN 978-3-8348-0096-1", "", "Subject: Mathematics"); ?></td>  <td>Peter Hartmann</td>  <td>100%</td>  <td class="c60">60%</td>  </tr>
<tr>  <td>DE</td>  <td>Logik für Informatiker<?php isbn("ISBN 978-3-8273-7215-4", "", "Subject: Logic"); ?></td>  <td>Martin Kreuzer, Stefan Kühling</td>  <td>100%</td>  <td class="c65">65%</td>  </tr>
<tr>  <td>DE</td>  <td>Graphentheoretische Konzepte und Algorithmen<?php isbn("ISBN 978-3-8348-0629-1", "", "Subject: Graph Theory"); ?></td>  <td>Sven Oliver Krumke, Hartmut Noltemeier</td>  <td>100%</td>  <td class="c75">75%</td>  </tr>
<tr>  <td>EN</td>  <td>The Mythical Man-Month<?php isbn("ISBN 978-0-201-83595-3", "Thema: Softwareentwicklung", "Subject: Software-Engineering"); ?></td>  <td>Frederick P. Brooks, Jr.</td>  <td class="c200">200%</td>  <td class="c90">90%</td>  </tr>
<tr>  <td>DE</td>  <td>Assembler<?php isbn("ISBN 978-3-499-61224-4", "", "Subject: Assembly language"); ?></td>  <td>Reiner Backer</td>  <td>100%</td>  <td class="c95">95%</td>  </tr>
<tr>  <td>EN</td>  <td>Programming in Scala<?php isbn("ISBN 978-0-98153-164-9", "", ""); ?></td>  <td>Martin Odersky, Lex Spoon, Bill Venners</td>  <td style="background-color: #ff0a00;">2%<!-- (16/812) --></td>  <!--<td class="c80">80%</td>-->  </tr>
<tr>  <td>DE</td>  <td>Grenzen des Wachstums - das 30-Jahre-Update<?php isbn("ISBN 978-3-7776-2228-6", "", "English: Limits to Growth: The 30-Year Update"); ?></td>  <td>Donella Meadows, Jørgen Randers, Dennis Meadows</td>  <td class="c200">200%</td>  </tr>
<tr>  <td>EN</td>  <td>Delusions of Gender<?php isbn("ISBN 978-184831-220-3", "Thema: Geschlechterforschung", "Subject: Gender studies"); ?></td>  <td>Cordelia Fine</td>  <td>100%</td>  </tr>
<tr>  <td>EN</td>  <td>The God Delusion<?php isbn("ISBN 978-0-618-91824-9", "Thema: Religionskritik", "Subject: Criticism of religion"); ?></td>  <td>Richard Dawkins</td>  <td class="c200">200%</td>  </tr>
</tbody>
</table>

<?php include("include2.php"); ?>
