<?php $title = "Death Star PD"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php loc(array(
  'C#' => 4142
, $rcl->lang('Kommentare','Comments') => 2262
, 'CSS' => 555
, 'HTML' => 238
, 'JavaScript' => 53
)); ?>

<a href="build.png"><img src="build.thumb.png" alt="Screenshot" title="Screenshot" style="width: 40%; height: auto; float: right; margin-left: 10px; margin-bottom: 10px;" /></a>
<?php if($rcl->lang === "de") { ?>
<p>Death Star PD ist ein 3D Tower Defense (TD) Strategiespiel, das im Wintersemester 2014/15 im Wahlpflichtfach <?php privatea("/haw/bms/14ws/MG3/","Mediengestaltung 3"); ?> des Studienganges <?php echo (new BMSCourse())->_studium; ?> erstellt wurde.</p>
<p>PD steht für Planetary Defense und soll die Besonderheit des Spieles hervorheben, die Türme auf einer Kugeloberfläche im dreidimensionalen Raum zu bauen.</p>
<p>
Vom Setting her orientiert sich das Spiel an den Todesstern aus Star Wars.
Der Spieler hat die Aufgabe, den Todesstern, durch das Bauen von Türmen, vor der Vernichtung durch die angreifenden Rebellen, zu beschützen.
</p>
<p>Zur Verteidigung stehen dem Spieler fünf verschiedene Turmtypen zur Verfügung: MG-Türme (schnell/schwach), Lasertürme (langsam/stark), Blitztürme (treffen viele Gegner gleichzeitig), Raketentürme (verschießen zielsuchende Raketen, die Flächenschaden verursachen) und Kraftwerke (liefern Energie und verstärken umliegende Türme).</p>
<p>Die Gegner greifen mit drei verschiedenen Schiffstypen<?php $rcl->newFoot("Fighter: Standardgegner.<br/>Mini-Fighter: klein und schwach, greifen aber in größerer Anzahl an.<br/>Bomber: langsam und stark, greifen zusätzlich zu den Primärzielen aber auch die Türme des Spielers an."); ?> an, die aber, weil sie sich im Weltraum befinden, keine festen Laufwege, wie in anderen Tower Defense Spielen, ablaufen, sondern aus beliebig zufälliger Richtung den Todesstern anfliegen, um dann den direkten Weg zum nächstgelegenen Primärziel einzuschlagen <?php $rcl->newFoot("Es existieren mehrere Primärziele, die bei Spielstart zufällig auf der Kugeloberfläche verteilt werden. Sollte eines der Primärziele vernichtet werden, verliert der Spieler.<br/><br/>Das alles macht es dem Spieler nicht einfach: er weiß nicht woher die Gegner kommen werden, muss mehrere Positionen gleichzeitig verteidigen und kann nicht die ganze Kugeloberfläche im Blickfeld haben."); ?>.</p>
<a href="logo.png"><img src="logo.thumb.png" alt="Logo" title="Logo" style="width: 10%; height: auto; float: left; margin-right: 10px; margin-bottom: 10px;" /></a>
<p>
Entwickelt wurde das Spiel zusammen mit Christopher Giese (GUI und Projektmanagement), Laura Gohl (Konzeptgrafiken, Icons und 3D-Modellierung) und Lars Krafft (Grafikprogrammierung und Effekte, 3D-Modellierung, Sounds und Musik).
Mein Beitrag zu dem Projekt war die ursprüngliche Spielidee, die Programmierung der Spielmechaniken, die Programmierung der K.I. für Türme und Gegner, das SVN-Repository bereitzustellen und das Gestalten des Logos und der Webseite.
</p>
<p>
Verwendet wurde die Unity Spiel-Engine, weshalb Death Star PD auf der dafür eingerichteten <?php extern("https://games.blackpinguin.de/DeathStarPD/","Webseite"); ?> mittels Unity Web Player direkt im Browser gespielt werden kann.
Alternativ besteht dort auch die Möglichkeit, es für Windows und GNU/Linux herunterzuladen.
</p>
<?php locdiv(); ?>
<table><tbody>
<tr> <th>Sprachen</th> <td>C#, CSS, HTML, JavaScript</td> </tr>
<tr> <th>Tools</th> <td>Inkscape</td> </tr>
<tr> <th>IDE</th> <td>Unity, MonoDevelop, Geany</td> </tr>
</tbody></table>
<?php } else { ?>
<p>Death Star PD is a 3D tower defense (TD) strategy game, that was created in the winter semester 2014/15 at the <?php privatea("/haw/bms/14ws/MG3/","Media Design 3"); ?> compulsory elective course of <?php echo (new BMSCourse())->_studium; ?>.</p>
<p>PD stands for Planetary Defense to emphasize its unique selling point, that the towers are build on a sphere in 3D space.</p>
<p>
The games setting is inspired by the Death Star from Star Wars.
By building towers on its surface, the player has to defend the Death Star against its destruction by the rebels.
</p>
<p>Five different tower types are available for the player to build: MG-Towers (fast/weak), Laser-Towers (slow/strong), Lightning-Towers (hit several enemies at once), Rocket-Towers (shoot guided missiles with splash damage) and Power Plant (generate energy and boost nearby towers).</p>
<p>Enemies are attacking with three different ship types <?php $rcl->newFoot("Fighters: default enemy.<br/>Mini-Fighters: smal and weak, but do attack in greater numbers.<br/>Bombers: slow, but strong and do attack, additionally to the primary targets, the towers of the player."); ?>, that, because they are in space, aren't following predefined routes, like in most tower defense games, but steer toward the nearest primary target <?php $rcl->newFoot("Several primary targets are distributed randomly on the sphere's surface during the start of a game. If any of the primary targets gets destroyed, the player loses.<br/><br/>This all isn't easy for the player. He doesn't know where enemies are comming from, has to defend several positions, and can't see the whole surface of the sphere at once."); ?> as soon as they have reached the Death Star from their arbitrary random spawn point.</p>
<a href="logo.png"><img src="logo.thumb.png" alt="Logo" title="Logo" style="width: 10%; height: auto; float: left; margin-right: 10px; margin-bottom: 10px;" /></a>
<p>
The game was developed together with Christopher Giese (GUI and project management), Laura Gohl (concept arts, icons and 3D modelling) and Lars Krafft (graphic programming and effects, 3D modelling, sound effects and music).
My contribution to the project was the original game idea, programming the game mechanics, programming the A.I. for towers and enemies, operating the SVN repository, and designing the logo and the website.
</p>
<p>
Because the Unity game engine was used, Death Star PD can be played directly in the browser with the Unity Web Player on <?php extern("https://games.blackpinguin.de/DeathStarPD/","this website"); ?>.
Alternatively, it can be downloaded there for Windows and GNU/Linux.
</p>
<?php locdiv(); ?>
<table><tbody>
<tr> <th>Languages</th> <td>C#, CSS, HTML, JavaScript</td> </tr>
<tr> <th>Tools</th> <td>Inkscape</td> </tr>
<tr> <th>IDE</th> <td>Unity, MonoDevelop, Geany</td> </tr>
</tbody></table>
<?php } ?>
<div style="clear: both;"></div>

<?php include("/rcl/www/rcl/include2.php"); ?>
