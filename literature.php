<?php include_once("/rcl/www/funktionen.php"); ?>
<?php $title = $rcl->lang("Literatur", "Literature"); $path = "/literature"; ?>
<?php include("include1.php"); ?>

<style type="text/css" scoped="scoped">
table#literature > tbody > tr > td:nth-of-type(4) { background-color: #0f0; color: black; text-align: center; padding: 2px; }
table#literature > tbody > tr > td:nth-of-type(5) { color: black; text-align: center; padding: 2px; }
table#literature > tbody > tr > td.c200 { background-color: #00cc00; }
table#literature > tbody > tr > td.c170 { background-color: #00db00; }
table#literature > tbody > tr > td.c100 { background-color: #00ff00; }
table#literature > tbody > tr > td.c95  { background-color: #1aff00; }
table#literature > tbody > tr > td.c90  { background-color: #33ff00; }
table#literature > tbody > tr > td.c85  { background-color: #4dff00; }
table#literature > tbody > tr > td.c80  { background-color: #66ff00; }
table#literature > tbody > tr > td.c75  { background-color: #80ff00; }
table#literature > tbody > tr > td.c70  { background-color: #99ff00; }
table#literature > tbody > tr > td.c65  { background-color: #b3ff00; }
table#literature > tbody > tr > td.c60  { background-color: #ccff00; }
table#literature > tbody > tr > td.c0   { background-color: #ff0000; }
<?php /* prgr2clr(0.6); */ ?>
</style>

<div>
<?php if($rcl->lang === "de") { ?>
Diese Seite listet Fachbücher auf die ich gelesen habe,
und bietet eine Selbsteinschätzung von mir darüber wieviel ich meine vom Inhalt verstanden zu haben.
<?php } else { ?>
This site lists text books that I have read.
It also shows an self-evaluation of how much I think I have grasped of their content.
<?php }?>
</div>
<br/>

<table id="literature">
<thead>
    <?php if($rcl->lang === "de") { ?>
    <tr>  <th>Spr.</th>  <th>Titel</th>  <th>Autor(en)</th>  <th>Gelesen</th>  <th>Verständnis</th>  </tr>
    <?php } else { ?>
    <tr>  <th>Lng.</th>  <th>Title</th>  <th>Author(s)</th>  <th>Read</th>  <th>Grasp</th>  </tr>
    <?php } ?>
</thead>
<tbody>
<?php
	$books = [
		[
		'book' => [ "EN", "Design Patterns", "Erich Gamma, Richard Helm, Ralph Johnson, John Vlissides" ],
		'desc' => [ "ISBN 978-0-201-63361-0", "Thema: Entwurfsmuster", "" ],
		'prog' => [ "200%", "100%" ],
		],
		[
		'book' => [ "EN", "Understanding Cryptography", "Christof Paar, Jan Pelzl" ],
		'desc' => [ "ISBN 978-3-642-04100-6", "Thema: Kryptografie", "" ],
		'prog' => [ "200%", "95%" ],
		],
		[
		'book' => [ "EN", "Modern Operating Systems", "Andrew S. Tanenbaum" ],
		'desc' => [ "ISBN 978-0-13-813459-4", "Thema: Betriebssysteme", "" ],
		'prog' => [ [341, 1072, false], "75%" ],
		],
		[
		'book' => [ "EN", "Computer Networks", "Andrew S. Tanenbaum, David J. Wetherall" ],
		'desc' => [ "ISBN 978-0-13-212695-3", "Thema: Netzwerke", "" ],
		'prog' => [ "100%", "80%" ],
		],
		[
		'book' => [ "EN", "Distributed Systems", "Andrew S. Tanenbaum, Maarten Van Steen" ],
		'desc' => ["ISBN 978-0-13-613553-1", "Thema: Verteilte Systeme", "" ],
		'prog' => [ "100%", "85%" ],
		],
		[
		'book' => [ "EN", "Introduction to Automata Theory, Languages, and Computation", "John E. Hopcroft, Rajeev Motwani, Jeffrey D. Ullman"],
		'desc' => [ "ISBN 978-0-321-47617-3", "Themen: Automatentheorie, Sprachen, Berechenbarkeit", "" ],
		'prog' => [ "100%", "70%" ],
		],
		[
		'book' => [ "EN", "Software Engineering and Computer Games", "Rudy Rucker" ],
		'desc' => [ "ISBN 978-0-20176-791-9", "Themen: Softwareentwicklung, Spieleentwicklung", "" ],
		'prog' => [ "100%", "85%" ],
		],
		[
		'book' => [ "DE", "Inside Microsoft DirectX 9 - Spieleprogrammierung", "Uwe Kettermann, Andreas Rohde" ],
		'desc' => [ "ISBN 978-3-86063-096-9", "", "Subjects: DirectX 9, Game Development" ],
		'prog' => [ "100%", "85%" ],
		],
		[
		'book' => [ "DE", "Computergrafik und Bildverarbeitung: Band I: Computergrafik", "Alfred Nischwitz, Max Fischer, Peter Haberäcker, Gudrun Socher" ],
		'desc' => [ "ISBN 978-3-83481-304-6", "Themen: Computergrafik, OpenGL", "Subjects: Computer Graphics, OpenGL" ],
		'prog' => [ "100%", "80%" ]
		],
		[
		'book' => [ "DE", "Computergrafik und Bildverarbeitung: Band II: Bildverarbeitung", "Alfred Nischwitz, Max Fischer, Peter Haberäcker, Gudrun Socher" ],
		'desc' => [ "ISBN 978-3-83481-712-9 ", "", "" ],
		'prog' => [ "100%", "70%" ],
		],
		[
		'book' => [ "EN", "Programming Game AI by Example", "Mat Buckland" ],
		'desc' => [ "ISBN 978-1-55622-078-4", "Themen: Künstliche Intelligenz, Spieleentwicklung", "" ],
		'prog' => [ "200%", "100%" ],
		],
		[
		'book' => [ "EN", "AI Techniques for Game Programming", "Mat Buckland" ],
		'desc' => [ "ISBN 978-1-93184-108-5", "Themen: Künstliche Intelligenz, Spieleentwicklung", "" ],
		'prog' => [ "100%", "90%" ],
		],
		[
		'book' => [ "EN", "AI for Game Developers", "David M. Bourg, Glenn Seemann" ],
		'desc' => [ "ISBN 978-0-596-00555-9", "Themen: Künstliche Intelligenz, Spieleentwicklung", "" ],
		'prog' => [ [288, 379, false], null ],
		],
		[
		'book' => [ "DE", "Grundkurs Künstliche Intelligenz", "Wolfgang Ertel" ],
		'desc' => [ "ISBN 978-3-8348-0783-0", "", "Subject: Artificial Intelligence" ],
		'prog' => [ "100%", "90%" ],
		],
		[
		'book' => [ "DE", "Mathematik für Informatiker", "Peter Hartmann" ],
		'desc' => [ "ISBN 978-3-8348-0096-1", "", "Subject: Mathematics" ],
		'prog' => [ "100%", "60%" ],
		],
		[
		'book' => [ "DE", "Logik für Informatiker", "Martin Kreuzer, Stefan Kühling" ],
		'desc' => [ "ISBN 978-3-8273-7215-4", "", "Subject: Logic" ],
		'prog' => [ "100%", "65%" ],
		],
		[
		'book' => [ "DE", "Graphentheoretische Konzepte und Algorithmen", "Sven Oliver Krumke, Hartmut Noltemeier" ],
		'desc' => [ "ISBN 978-3-8348-0629-1", "", "Subject: Graph Theory" ],
		'prog' => [ "100%", "75%" ],
		],
		[
		'book' => [ "EN", "The Mythical Man-Month", "Frederick P. Brooks, Jr." ],
		'desc' => [ "ISBN 978-0-201-83595-3", "Thema: Softwareentwicklung", "Subject: Software-Engineering" ],
		'prog' => [ "200%", "90%" ],
		],
		[
		'book' => [ "EN", "Software Engineering: A Practitioner's Approach", "Roger S. Pressman, Bruce R. Maxim" ],
		'desc' => [ "ISBN 978-1-259-25315-7", "Thema: Softwareentwicklung", "Subject: Software-Engineering" ],
		'prog' => [ [106, 941, '2018-10-31'], null ],
		],
		[
		'book' => [ "DE", "Assembler", "Reiner Backer" ],
		'desc' => [ "ISBN 978-3-499-61224-4", "", "Subject: Assembly language" ],
		'prog' => [ "100%", "95%" ],
		],
		[
		'book' => [ "EN", "Programming in Scala", "Martin Odersky, Lex Spoon, Bill Venners" ],
		'desc' => [ "ISBN 978-0-98153-164-9", "", "" ],
		'prog' => [ "100%", "95%" ],
		],
		[
		'book' => [ "EN", "JavaScript Patterns", "Stoyan Stefanov" ],
		'desc' => [ "ISBN 978-0-59680-675-0", "", "" ],
		'prog' => [ "100%", "100%" ],
		],
		[
		'book' => [ "DE", "Computerforensik", "Alexander Geschonneck" ],
		'desc' => [ "ISBN 978-3-86490-133-1", "", "Subject: computer forensics" ],
		'prog' => [ "100%", "85%" ],
		],
		[
		'book' => [ "DE", "Grenzen des Wachstums - das 30-Jahre-Update", "Donella Meadows, Jørgen Randers, Dennis Meadows" ],
		'desc' => [ "ISBN 978-3-7776-2228-6", "", "English: Limits to Growth: The 30-Year Update" ],
		'prog' => [ "200%", null ],
		],
		[
		'book' => [ "EN", "Delusions of Gender", "Cordelia Fine" ],
		'desc' => [ "ISBN 978-184831-220-3", "Thema: Geschlechterforschung", "Subject: Gender studies" ],
		'prog' => [ "100%", null ],
		],
		[
		'book' => [ "EN", "The God Delusion", "Richard Dawkins" ],
		'desc' => [ "ISBN 978-0-618-91824-9", "Thema: Religionskritik", "Subject: Criticism of religion" ],
		'prog' => [ "200%", null ],
		],
	];
	
	$color = function ($prog) {
		global $rcl;
		if (is_string($prog)) {
			$x = str_replace("%", "", $prog);
			echo "  <td class='c$x'";
			if ($x == 200) { echo " title='" . $rcl->lang("zweimal gelesen", "read twice") . "'" ; }
			echo ">$prog</td>";
		} else if (is_array($prog) && count($prog) >= 3) {
			$a = $prog[0];
			$b = $prog[1];
			$reading = $prog[2];
			if ($a === $b) { echo "  <td class='c100'>100%</td>"; return; }
			if (is_int($a) && is_int($b)) {
				$p = (double) $a /  (double) $b;
				$out = (int) round($p * 100.0);
				$col = prgr2clr($p);
				echo "  <td style='background-color: $col;' title='$a / $b ";
				echo $rcl->lang("Seiten", "pages");
				if ($reading) {
					echo $rcl->lang(", momentan am lesen", ", currently reading");
					if (is_string($reading) && strtotime($reading) !== false) {
						echo $rcl->lang(", letzte Aktualisierung: $reading", ", last update: $reading");
					}
					else { echo "."; }
				}
				else { echo $rcl->lang(" gelesen.", " read."); }
				echo "'>$out%</td>";
			}
		}
	};
	
	foreach ($books as $b) {
		echo "\n<tr>";
		
		// language
		echo "  <td>".$b['book'][0]."</td>";
		
		// title
		echo "  <td>".$b['book'][1];
		isbn($b['desc'][0], $b['desc'][1], $b['desc'][2], $b['book'][0]);
		echo "</td>";
		
		// author
		echo "  <td>".$b['book'][2]."</td>";
		
		// progress
		$color($b['prog'][0]);
		$color($b['prog'][1]);
		
		echo "  </tr>";
	}
?>
</tbody>
</table>

<?php include("include2.php"); ?>
