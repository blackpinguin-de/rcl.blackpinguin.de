<?php include_once("/rcl/www/funktionen.php"); ?>
<?php $title = $rcl->lang("Literatur", "Literature"); $path = "/literature"; ?>
<?php include("include1.php"); ?>

<style type="text/css" scoped="scoped">
table#literature  td:not(:last-of-type) { padding-right: 5px; }
table#literature2 td:not(:last-of-type) { padding-right: 5px; }
table#literature > tbody > tr > td:nth-of-type(5) { background-color: #0f0; color: black; text-align: center; padding: 2px; }
table#literature > tbody > tr > td:nth-of-type(6) { color: black; text-align: center; padding: 2px; }
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
Diese Liste enthält Fachbücher die ich gelesen habe,
und bietet eine Selbsteinschätzung von mir darüber wieviel ich meine vom Inhalt verstanden zu haben.
<?php } else { ?>
This list contains text books that I have read.
It also shows an self-evaluation of how much I think I have grasped of their content.
<?php }?>
</div>
<br/>

<table id="literature">
<thead>
    <?php if($rcl->lang === "de") { ?>
    <tr>  <th>#</th>  <th>Spr.</th>  <th>Titel</th>  <th>Autor(en)</th>  <th>Gelesen</th>  <th>Verständnis</th>  </tr>
    <?php } else { ?>
    <tr>  <th>#</th>  <th>Lng.</th>  <th>Title</th>  <th>Author(s)</th>  <th>Read</th>  <th>Grasp</th>  </tr>
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
		'desc' => [ "ISBN 978-3-83481-712-9", "", "" ],
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
		'prog' => [ [242, 941, '2019-03-11'], null ],
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
	
	$nr = 1;
	foreach ($books as $b) {
		echo "\n<tr>";
		
		// Nr.
		echo "  <td>".($nr++)."</td>";
		
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

<br/>

<div>
<?php if($rcl->lang === "de") { ?>
Folgend weitere Bücher die ich privat gelesen habe, welche jedoch nicht von Informatik handeln.
<?php } else { ?>
Additional books that I read privately, which aren't text books for computer science.
<?php }?>
</div>
<br/>

<table id="literature2">
<thead>
    <?php if($rcl->lang === "de") { ?>
    <tr>  <th>#</th>  <th>Spr.</th>  <th>Titel</th>  <th>Autor(en)</th>  <th>Genre</th>  </tr>
    <?php } else { ?>
    <tr>  <th>#</th>  <th>Lng.</th>  <th>Title</th>  <th>Author(s)</th>  <th>Genre</th>  </tr>
    <?php } ?>
</thead>
<tbody>
<?php
	$fantasy  = "Fantasy";
	$thriller = "Thriller";
	$scifi    = [ "Science-Fiction", "Science Fiction" ];
	$comic    = "Comic";
	$romance  = [ "Liebesroman", "Romance" ];
	$novel    = [ "Roman", "Novel" ];
	
	$signed = call_user_func(function () {
		$out = null;
		return function () use (&$out) {
			global $rcl;
			return $out ?? $out = $rcl->newFootStr($rcl->lang("Mein Exemplar wurde vom Author signiert.", "My copy is signed by the author."));
		};
	});
	
	### +++ Science
	$science = [
		[
		'book' => [ "EN", "The Origin of Species", "Charles Darwin" ],
		'genr' => "Evolution",
		],
		[
		'book' => [ "EN", "The God Delusion", "Richard Dawkins" ],
		'genr' => "Religion",
		'desc' => [ "ISBN 978-0-618-91824-9" ],
		'prog' => [ "200%", null ],
		],
		[
		'book' => [ "EN", "Delusions of Gender", "Cordelia Fine" ],
		'genr' => [ "Geschlechterforschung", "Gender Studies" ],
		'desc' => [ "ISBN 978-184831-220-3" ],
		'prog' => [ "100%", null ],
		],
		[
		'book' => [ "DE", "Artgerecht ist nur die Freiheit", "Hilal Sezgin" ],
		'genr' => [ "Tierrechte", "Animal Rights" ],
		],
		[
		'book' => [ "DE", "Grenzen des Wachstums - das 30-Jahre-Update", "Donella Meadows, Jørgen Randers, Dennis Meadows" ],
		'genr' => [ "Ökonomie", "Economy" ],
		'desc' => [
			"ISBN 978-3-7776-2228-6",
			"",
			"<br/>English:<br/>Limits to Growth: The 30-Year Update<br/>ISBN 978-1-9314-9858-6<br/>" . externStr("https://www.amazon.com/s/?field-keywords=ISBN+978-1-9314-9858-6", "(amazon.com)")
		],
		'prog' => [ "200%", null ],
		],
		[
		'book' => [ "DE", "Das Kapital - Band 1", "Karl Marx" ],
		'genr' => [ "Ökonomie", "Economy" ],
		],
		[
		'book' => [ "DE", "Manifest der Kommunistischen Partei", "Karl Marx, Friedrich Engels" ],
		'genr' => [ "Politik", "Politics" ],
		],
		[
		'book' => [ "DE", "Arbeitsfrei", "Constanze Kurz, Frank Rieger" ],
		'genr' => [ "Automatisierung", "Automation" ],
		],
		[
		'book' => [ "DE", "Die Welt als Wille und Vorstellung", "Arthur Schopenhauer" ],
		'genr' => [ "Philosophie", "Philosophy" ],
		],
		[
		'book' => [ "DE", "Utopia", "Thomas Morus" ],
		'genr' => [ "Philosophie", "Philosophy" ],
		],
		[
		'book' => [ "DE", "Wie man mit Fundamentalisten diskutiert, ohne den Verstand zu verlieren", "Hubert Schleichert" ],
		'genr' => [ "Philosophie", "Philosophy" ],
		],
		[
		'book' => [ "DE", "Inside WikiLeaks", "Daniel Domscheit-Berg" ],
		'genr' => [ "Journalismus", "Journalism" ],
		],
		[
		'book' => [ "DE", "Ich war noch niemals auf Saturn", "Michael Büker" ],
		'genr' => [ "Weltraum", "Space" ],
		],
		[
		'book' => [ "EN", "What If? Serious Scientific Answers to Absurd Hypothetical Questions", "Randall Munroe" ],
		'genr' => [ "Wissenschaft", "Science" ],
		],
		[
		'book' => [ "EN", "Thing Explainer: Complicated Stuff in Simple Words", "Randall Munroe" ],
		'genr' => $comic,
		],
		[
		'book' => [ "DE", "Das Kochbuch für Geeks", "Mela Eckenfels, Petra Hildebrandt" ],
		'genr' => [ "Kochbuch", "Cookbook" ],
		],
	];
	### --- Science
	### +++ Ender
	$ender = [
		[
		'book' => [ "EN", "Ender's Game", "Orson S. Card" ],
		'genr' => $scifi,
		],
		[
		'book' => [ "EN", "Speaker for the Dead", "Orson S. Card" ],
		'genr' => $scifi,
		],
		[
		'book' => [ "EN", "Xenocide", "Orson S. Card" ],
		'genr' => $scifi,
		],
		[
		'book' => [ "EN", "Children of the Mind", "Orson S. Card" ],
		'genr' => $scifi,
		],
		[
		'book' => [ "EN", "Ender's Shadow", "Orson S. Card" ],
		'genr' => $scifi,
		],
		[
		'book' => [ "EN", "Shadow of the Hegemon", "Orson S. Card" ],
		'genr' => $scifi,
		],
		[
		'book' => [ "EN", "Shadow Puppets", "Orson S. Card" ],
		'genr' => $scifi,
		],
		[
		'book' => [ "EN", "Shadow of the Giant", "Orson S. Card" ],
		'genr' => $scifi,
		],
		[
		'book' => [ "EN", "Shadows in Flight", "Orson S. Card" ],
		'genr' => $scifi,
		],
		[
		'book' => [ "EN", "Ender in Exile", "Orson S. Card" ],
		'genr' => $scifi,
		],
		[
		'book' => [ "EN", "Earth Unaware", "Orson S. Card" ],
		'genr' => $scifi,
		],
		[
		'book' => [ "EN", "Earth Afire", "Orson S. Card" ],
		'genr' => $scifi,
		],
		[
		'book' => [ "EN", "Earth Awakens", "Orson S. Card" ],
		'genr' => $scifi,
		],
		[
		'book' => [ "EN", "The Swarm", "Orson S. Card" ],
		'genr' => $scifi,
		],
		[
		'book' => [ "EN", "First Meetings", "Orson S. Card" ],
		'genr' => $scifi,
		],
		[
		'book' => [ "EN", "A War of Gifts", "Orson S. Card" ],
		'genr' => $scifi,
		],
		[
		'book' => [ "EN", "Children of the Fleet", "Orson S. Card" ],
		'genr' => $scifi,
		],
		[
		'book' => [ "EN", "Orson Scott Card's Intergalactic Medicine Show", "Orson S. Card" ],
		'genr' => $scifi,
		],
	];
	### --- Ender
	### +++ Voyager
	$voyager = [
		[
		'book' => [ "DE", "Star Trek: Voyager 1 - Heimkehr", "Christie Golden" ],
		'genr' => $scifi,
		],
		[
		'book' => [ "DE", "Star Trek: Voyager 2 - Ferne Ufer", "Christie Golden" ],
		'genr' => $scifi,
		],
		[
		'book' => [ "DE", "Star Trek: Voyager 3 - Geistreise 1 - Alte Wunden", "Christie Golden" ],
		'genr' => $scifi,
		],
		[
		'book' => [ "DE", "Star Trek: Voyager 4 - Geistreise 2 - Der Feind meines Feindes", "Christie Golden" ],
		'genr' => $scifi,
		],
		[
		'book' => [ "DE", "Star Trek: Voyager 5 - Projekt Full Circle", "Kirsten Beyer" ],
		'genr' => $scifi,
		],
		[
		'book' => [ "DE", "Star Trek: Voyager 6 - Unwürdig", "Kirsten Beyer" ],
		'genr' => $scifi,
		],
		[
		'book' => [ "DE", "Star Trek: Voyager 7 - Kinder des Sturms", "Kirsten Beyer" ],
		'genr' => $scifi,
		],
	];
	### --- Voyager
	### +++ Neal
	$neal = [
		[
		'book' => [ "EN", "Cryptonomicon", "Neal Stephenson" ],
		'genr' => $scifi,
		],
		[
		'book' => [ "EN", "The Diamond Age", "Neal Stephenson" ],
		'genr' => $scifi,
		],
		[
		'book' => [ "EN", "Snow Crash", "Neal Stephenson" ],
		'genr' => $scifi,
		],
	];
	### --- Neal
	### +++ Adams
	$adams42 = [
		[
		'book' => [ "EN", "The Hitchhiker's Guide to the Galaxy", "Douglas Adams" ],
		'genr' => $scifi,
		],
	];
	### --- Adams
	### +++ Heitz: Zwerge
	$zwerge = [
		[
		'book' => [ "DE", function () use ($signed) { return "Die Zwerge" . $signed(); }, "Markus Heitz" ],
		'genr' => $fantasy,
		],
		[
		'book' => [ "DE", "Der Krieg der Zwerge", "Markus Heitz" ],
		'genr' => $fantasy,
		],
		[
		'book' => [ "DE", "Die Rache der Zwerge", "Markus Heitz" ],
		'genr' => $fantasy,
		],
		[
		'book' => [ "DE", "Das Schicksal der Zwerge", "Markus Heitz" ],
		'genr' => $fantasy,
		],
		[
		'book' => [ "DE", "Der Triumph der Zwerge", "Markus Heitz" ],
		'genr' => $fantasy,
		],
		[
		'book' => [ "DE", "Die Sterne der Tiefen", "Markus Heitz" ],
		'genr' => $fantasy,
		],
		[
		'book' => [ "DE", "Der Botengang", "Markus Heitz" ],
		'genr' => $fantasy,
		],
		[
		'book' => [ "DE", "Die Zwerge: Band 1 - Tungdil", "Markus Heitz, Che Rossié, Yann Krehl" ],
		'genr' => $comic,
		],
		[
		'book' => [ "DE", "Die Zwerge: Band 2 - Der Thronanwärter", "Markus Heitz, Che Rossié, Yann Krehl" ],
		'genr' => $comic,
		],
	];
	### --- Heitz: Zwerge
	### +++ Heitz: Albae
	$albae = [
		[
		'book' => [ "DE", "Die Legenden der Albae", "Markus Heitz" ],
		'genr' => $fantasy,
		],
		[
		'book' => [ "DE", "Die Legenden der Albae: Vernichtender Hass", "Markus Heitz" ],
		'genr' => $fantasy,
		],
		[
		'book' => [ "DE", "Die Legenden der Albae: Dunkle Pfade", "Markus Heitz" ],
		'genr' => $fantasy,
		],
		[
		'book' => [ "DE", "Die Legenden der Albae: Tobender Sturm", "Markus Heitz" ],
		'genr' => $fantasy,
		],
		[
		'book' => [ "DE", "Die Legenden der Albae: Die Vergessenen Schriften", "Markus Heitz" ],
		'genr' => $fantasy,
		],
	];
	### --- Heitz: Albae
	### +++ Heitz: Uldart
	$ulldart = [
		[
		'book' => [ "DE", "Uldart - Die Dunkle Zeit 1: Schatten über Uldart", "Markus Heitz" ],
		'genr' => $fantasy,
		],
		[
		'book' => [ "DE", "Uldart - Die Dunkle Zeit 2: Der Orden der Schwerter", "Markus Heitz" ],
		'genr' => $fantasy,
		],
		[
		'book' => [ "DE", "Uldart - Die Dunkle Zeit 3: Das Zeichen des Dunklen Gottes", "Markus Heitz" ],
		'genr' => $fantasy,
		],
		[
		'book' => [ "DE", "Uldart - Die Dunkle Zeit 4: Unter den Augen Tzulans", "Markus Heitz" ],
		'genr' => $fantasy,
		],
		[
		'book' => [ "DE", "Uldart - Die Dunkle Zeit 5: Die Magie des Herrschers", "Markus Heitz" ],
		'genr' => $fantasy,
		],
		[
		'book' => [ "DE", "Uldart - Die Dunkle Zeit 6: Die Quellen des Bösen", "Markus Heitz" ],
		'genr' => $fantasy,
		],
		[
		'book' => [ "DE", "Uldart - Zeit des Neuen 1: Trügerischer Friede", "Markus Heitz" ],
		'genr' => $fantasy,
		],
		[
		'book' => [ "DE", "Uldart - Zeit des Neuen 2: Brennende Kontinente", "Markus Heitz" ],
		'genr' => $fantasy,
		],
		[
		'book' => [ "DE", "Uldart - Zeit des Neuen 3: Fatales Vermächtnis", "Markus Heitz" ],
		'genr' => $fantasy,
		],
		[
		'book' => [ "DE", "Uldart - Zeit des Neuen 3: Fatales Vermächtnis", "Markus Heitz" ],
		'genr' => $fantasy,
		],
	];
	### --- Heitz: Uldart
	### +++ Baron
	$merlin = [
		[
		'book' => [ "DE", "Merlin - Wie alles begann", "Thomas A. Barron" ],
		'genr' => $fantasy,
		],
		[
		'book' => [ "DE", "Merlin und die Schritte zur Weisheit", "Thomas A. Barron" ],
		'genr' => $fantasy,
		],
		[
		'book' => [ "DE", "Merlin und die Feuerproben", "Thomas A. Barron" ],
		'genr' => $fantasy,
		],
		[
		'book' => [ "DE", "Merlin und der Zauberspiegel", "Thomas A. Barron" ],
		'genr' => $fantasy,
		],
		[
		'book' => [ "DE", "Merlin und die Flügel der Freiheit", "Thomas A. Barron" ],
		'genr' => $fantasy,
		],
		[
		'book' => [ "DE", "Merlins Drache 1 ", "Thomas A. Barron" ],
		'genr' => $fantasy,
		],
		[
		'book' => [ "DE", "Merlins Drache 2 - Die große Aufgabe", "Thomas A. Barron" ],
		'genr' => $fantasy,
		],
		[
		'book' => [ "DE", "Merlins Drache 3 - Die Schlacht der endlosen Feuer", "Thomas A. Barron" ],
		'genr' => $fantasy,
		],
		[
		'book' => [ "DE", "Der Zauber von Avalon 1 - Sieben Sterne und die dunkle Prophezeiung", "Thomas A. Barron" ],
		'genr' => $fantasy,
		],
		[
		'book' => [ "DE", "Der Zauber von Avalon 2 - Im Schatten der Lichtertore", "Thomas A. Barron" ],
		'genr' => $fantasy,
		],
		[
		'book' => [ "DE", "Der Zauber von Avalon 3 - Die ewige Flamme", "Thomas A. Barron" ],
		'genr' => $fantasy,
		],
	];
	### --- Baron
	### +++ Tolkien
	$tolkien = [
		[
		'book' => [ "DE", "Der kleine Hobbit", "John R. R. Tolkien" ],
		'genr' => $fantasy,
		],
		[
		'book' => [ "DE", "Herr der Ringe 1: Die Gefährten", "John R. R. Tolkien" ],
		'genr' => $fantasy,
		],
		[
		'book' => [ "DE", "Herr der Ringe 2: Die zwei Türme", "John R. R. Tolkien" ],
		'genr' => $fantasy,
		],
		[
		'book' => [ "DE", "Herr der Ringe 3: Die Rückkehr des Königs", "John R. R. Tolkien" ],
		'genr' => $fantasy,
		],
	];
	### --- Tolkien
	### +++ Potter
	$potter = [
		[
		'book' => [ "DE", "Harry Potter und der Stein der Weisen", "Joanne K. Rowling" ],
		'genr' => $fantasy,
		],
		[
		'book' => [ "DE", "Harry Potter und die Kammer des Schreckens", "Joanne K. Rowling" ],
		'genr' => $fantasy,
		],
		[
		'book' => [ "DE", "Harry Potter und der Gefangene von Askaban", "Joanne K. Rowling" ],
		'genr' => $fantasy,
		],
		[
		'book' => [ "DE", "Harry Potter und der Feuerkelch", "Joanne K. Rowling" ],
		'genr' => $fantasy,
		],
		[
		'book' => [ "DE", "Harry Potter und der Orden des Phönix", "Joanne K. Rowling" ],
		'genr' => $fantasy,
		],
		[
		'book' => [ "DE", "Harry Potter und der Halbblutprinz", "Joanne K. Rowling" ],
		'genr' => $fantasy,
		],
		[
		'book' => [ "DE", "Harry Potter und die Heiligtümer des Todes", "Joanne K. Rowling" ],
		'genr' => $fantasy,
		],
	];
	### --- Potter
	### +++ Millenium
	$millenium = [
		[
		'book' => [ "DE", "Verblendung", "Stieg Larsson" ],
		'genr' => $thriller,
		],
		[
		'book' => [ "DE", "Verdammnis", "Stieg Larsson" ],
		'genr' => $thriller,
		],
		[
		'book' => [ "DE", "Vergebung", "Stieg Larsson" ],
		'genr' => $thriller,
		],
		[
		'book' => [ "DE", "Verschwörung", "David Lagercrantz (".$rcl->lang("nach", "after")." Stieg Larsson †)" ],
		'genr' => $thriller,
		],
	];
	### --- Millenium
	### +++ Eschbach
	$eschbach = [
		[
		'book' => [ "DE", "Black Out", "Andreas Eschbach" ],
		'genr' => $thriller,
		],
		[
		'book' => [ "DE", "Hide Out", "Andreas Eschbach" ],
		'genr' => $thriller,
		],
		[
		'book' => [ "DE", "Time Out", "Andreas Eschbach" ],
		'genr' => $thriller,
		],
		[
		'book' => [ "DE", "Die Haarteppichknüpfer", "Andreas Eschbach" ],
		'genr' => $scifi,
		],
		[
		'book' => [ "DE", "Quest", "Andreas Eschbach" ],
		'genr' => $scifi,
		],
	];
	### --- Eschbach
	### +++ Novels
	$novels = [
		[
		'book' => [ "EN", "Fight Club", "Chuck Palahniuk" ],
		'genr' => $novel,
		],
		[
		'book' => [ "DE", "Herr Lehmann", "Sven Regener" ],
		'genr' => $novel,
		],
		[
		'book' => [ "DE", "Sitzen vier Polen im Auto", "Alexandra Tobor" ],
		'genr' => $novel,
		],
		[
		'book' => [ "DE", "Minigolf Paradiso", "Alexandra Tobor" ],
		'genr' => $novel,
		],
	];
	### --- Novels
	### +++ Love
	$love = [
		[
		'book' => [ "EN", "Pride and Prejudice", "Jane Austen" ],
		'genr' => $romance,
		],
		[
		'book' => [ "EN", "Twilight", "Stephenie Meyer" ],
		'genr' => $romance,
		],
		[
		'book' => [ "EN", "New Moon", "Stephenie Meyer" ],
		'genr' => $romance,
		],
		[
		'book' => [ "EN", "Eclipse", "Stephenie Meyer" ],
		'genr' => $romance,
		],
		[
		'book' => [ "EN", "Breaking Dawn", "Stephenie Meyer" ],
		'genr' => $romance,
		],
	];
	### --- Love
	### +++ Comics
	$comics = [
		[
		'book' => [ "EN", "Questionable Content Vol. 1", "Jeph Jacques" ],
		'genr' => $comic,
		],
		[
		'book' => [ "EN", "Questionable Content Vol. 2", "Jeph Jacques" ],
		'genr' => $comic,
		],
		[
		'book' => [ "EN", "Questionable Content Vol. 3", "Jeph Jacques" ],
		'genr' => $comic,
		],
		[
		'book' => [ "EN", "Questionable Content Vol. 4", "Jeph Jacques" ],
		'genr' => $comic,
		],
		[
		'book' => [ "EN", "Questionable Content Vol. 5", "Jeph Jacques" ],
		'genr' => $comic,
		],
		[
		'book' => [ "EN", "Questionable Content Vol. 6", "Jeph Jacques" ],
		'genr' => $comic,
		],
		[
		'book' => [ "EN", "The GaMERCaT Volume 1", "Samantha Whitten" ],
		'genr' => $comic,
		],
		[
		'book' => [ "DE", function () use ($signed) { return "Massu Schmiedstochter" . $signed(); }, "Ines Korth" ],
		'genr' => $comic,
		],
	];
	### --- Comics
	### +++ Artbooks/Guides
	$artbooks = [
		[
		'book' => [ "DE", "Diablo 3 - Die Cain-Chronik", "Flint Dille" ],
		'genr' => $fantasy,
		],
		[
		'book' => [ "DE", "Diablo 3 - Die Tyrael-Chronik", "Matt Burns, Doug Alexander" ],
		'genr' => $fantasy,
		],
		[
		'book' => [ "DE", "Star Wars - Handbuch der Imperialen Streitkräfte", "Daniel Wallace" ],
		'genr' => $scifi,
		],
		[
		'book' => [ "EN", "The Zombie Survival Guide", "Max Brooks" ],
		'genr' => [ "Ratgeber", "Guide" ],
		],
	];
	### --- Artbooks/Guides
	
	$books = array_merge(
		$science,
		// sci-fi
		$ender,
		$voyager,
		$neal,
		$adams42,
		// fantasy
		$zwerge,
		$albae,
		$ulldart,
		$merlin,
		$tolkien,
		$potter,
		// thriller
		$millenium,
		$eschbach,
		// misc.
		$novels,
		$love,
		$comics,
		$artbooks,
		[]
	);
	foreach ($books as $b) {
		echo "\n<tr>";
		
		// Nr.
		echo "  <td>".($nr++)."</td>";
		
		// language
		echo "  <td>".$b['book'][0]."</td>";
		
		// title
		$t = $b['book'][1];
		echo "  <td>".(is_callable($t) ? $t() : $t);
		if ($b['desc'] ?? 0) { isbn($b['desc'][0], $b['desc'][1], $b['desc'][2], $b['book'][0]); }
		echo "</td>";
		
		// author
		echo "  <td>".$b['book'][2]."</td>";
		
		// genre
		$de = is_array($b['genr']) ? $b['genr'][0] ?? '' : $b['genr'] ?? '';
		$en = is_array($b['genr']) ? $b['genr'][1] ?? '' : $b['genr'] ?? '';
		echo "  <td>" . $rcl->lang($de, $en ?? $de) . "</td>";
		
		echo "  </tr>";
	}
?>
</tbody>
</table>

<br/>

<div>
<?php if($rcl->lang === "de") { ?>
Ja, ich lese viel.
<?php } else { ?>
Yes, I read a lot.
<?php }?>
</div>

<?php include("include2.php"); ?>
