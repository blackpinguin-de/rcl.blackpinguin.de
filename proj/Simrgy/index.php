<?php $title = "Sim'rgy"; ?>
<?php include("../../include1.php"); ?>

<?php loc(array(
  'Java' => 4928
, $rcl->lang('Kommentare','Comments') => 529
, 'HTML' => 283
, 'JavaScript' => 77
, 'PHP' => 76
)); ?>

<?php if($rcl->lang === "de") { ?>
<a href="unfall.png"><img src="unfall.png" alt="Screenshot" title="Beheben eines Reaktorunfalls" style="width: 30%; height: auto; float: right; margin-left: 10px; margin-bottom: 10px;" /></a>
<a href="bauen.png"><img src="bauen.png" alt="Screenshot" title="Bau einer neuen Windkraftanlage" style="width: 30%; height: auto; float: right; margin-left: 10px; margin-bottom: 10px;" /></a>

<p>Sim'rgy ist ein 2D-Spiel, das im Sommersemester 2011 im Wahlpflichtmodul <?php privatea("/haw/bai/11ss/WP_SG/","Serious Games"); ?> des Studienganges <?php echo (new BAICourse())->_studium; ?> erstellt wurde.</p>
<p>
In diesem Aufbau-Simulationsspiel baut der Spieler Kraftwerke, um Deutschland mit Energie zu versorgen.
Bestehende Gebäude können ausgebaut oder abgerissen werden, sowie teilweise in ihrer Leistung und Mitarbeiterzahl angepasst werden.
</p>
<p>Neben den Bauen von Kraftwerken kann der Spieler den Strompreis anpassen und sein erwirtschaftetes Geld in die Erforschung von Zukunftstechnologien investieren.</p>
<p>Bei Atomkraftwerken besteht das Risiko von Reaktorunfällen, auf die der Spieler zügig reagieren muss.
Uran und Kohle sind nur in begrenzter Anzahl verfügbar.
Photovoltaikanlagen sind von der Sonnenintensität und Windkraftanlagen von der Windstärke abhängig, sowie zusätzlich von ihrer Position.
</p>
<p>
Entwickelt wurde das Spiel zusammen mit Sebastian Möllmann.
Die Spiel-Engine ist eine Eigenentwicklung, die das AWT von Java zum Zeichnen von 2D-Grafiken mittels Graphics-Objekt verwendet.
Musik und Sounds werden mittels JLayer von JavaZoom abgespielt.
</p>
<p>
Weil es sich bei Sim'rgy um ein Java-Applet handelt, kann es direkt im Browser auf <?php extern("https://games.blackpinguin.de/Sim%27rgy/","dieser Webseite"); ?> gespielt werden.
Der <?php extern("http://www.morgen-in-meiner-stadt.de/","Morgen in meiner Stadt GmbH"); ?> wurde exklusiv das Verwertungsrecht eingeräumt, mit einer Ausnahme für die Verwertung durch die Entwickler selbst.
</p>
<?php locdiv(); ?>
<table><tbody>
<tr> <th>Sprachen</th> <td>Java, HTML, PHP, JavaScript</td> </tr>
<tr> <th>Technologien</th> <td>Java-Applet, AWT, JLayer</td> </tr>
<tr> <th>IDE</th> <td>Eclipse</td> </tr>
<tr> <th>Beteiligte</th> <td>2</td> </tr>
</tbody></table>
<?php } else { ?>
<a href="unfall.png"><img src="unfall.png" alt="Screenshot" title="Handeling an reactor accident" style="width: 30%; height: auto; float: right; margin-left: 10px; margin-bottom: 10px;" /></a>
<a href="bauen.png"><img src="bauen.png" alt="Screenshot" title="Building of a new wind turbine" style="width: 30%; height: auto; float: right; margin-left: 10px; margin-bottom: 10px;" /></a>

<p>Sim'rgy is a 2D game, that was created in the summer semester 2011 at the <?php privatea("/haw/bai/11ss/WP_SG/","Serious Games"); ?> compulsory elective course of <?php echo (new BAICourse())->_studium; ?>.</p>
<p>
In this simulation game the player builds power plants to supply Germany with energy.
Planted buildings can be upgraded or dismantled, and some can be configured in their performance and staff quantity.
</p>
<p>Besides building, the player can adjust the price of electricity and can invest earned money into the research of future technologies.</p>
<p>
Nuclear power plants involve the risk of reactor accidents, on which the player has to react quickly.
Uranium and coal are exhaustible ressources that will run out.
Photovoltaic systems are dependend on the sun's and wind turbines on the wind's intensity and on their location.
</p>
<p>
The game was developed together with Sebastian Möllmann.
The game engine is a proprietary developement, using Java's AWT to draw 2D graphics with a Graphics object and JLayer from JavaZoom to play music and sounds.
</p>
<p>
Because Sim'rgy is a Java applet, it can be played directly in the browser on <?php extern("https://games.blackpinguin.de/Sim%27rgy/","this website"); ?>.
The company <?php extern("http://www.morgen-in-meiner-stadt.de/","Morgen in meiner Stadt GmbH"); ?> has the exclusive right to distribute the game, with a exception for the distribution by the developers.
</p>
<?php locdiv(); ?>
<table><tbody>
<tr> <th>Languages</th> <td>Java, HTML, PHP, JavaScript</td> </tr>
<tr> <th>Technologies</th> <td>Java applet, AWT, JLayer</td> </tr>
<tr> <th>IDE</th> <td>Eclipse</td> </tr>
<tr> <th>Participants</th> <td>2</td> </tr>
</tbody></table>
<?php } ?>
<div style="clear: both;"></div>


<?php include("../../include2.php"); ?>
