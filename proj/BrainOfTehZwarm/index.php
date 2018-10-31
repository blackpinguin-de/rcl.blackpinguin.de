<?php $title = "Brain of teh Zwarm"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php loc(array(
  'C#' => 2831
, $rcl->lang('Kommentare','Comments') => 1761
)); ?>

<a href="botz.png"><img src="botz.thumb.png" alt="Screenshot" title="Screenshot" style="width: 40%; height: auto; float: right; margin-left: 10px; margin-bottom: 10px;" /></a>
<?php if($rcl->lang === "de") { ?>
<p>Brain of teh Zwarm <?php $rcl->newFoot("Zwarm steht für Zombie Schwarm und der 'Tippfehler' in teh / the ist Absicht.<br/>Der Name ist eine Anspielung auf StarCraft 2: Heart of the Swarm."); ?> ist ein 2D-Spiel, das im Wintersemester 2013/14 im Modul <?php privatea("/haw/bms/13ws/MG1/","Mediengestaltung 1"); ?> des Studienganges <?php echo (new BMSCourse())->_studium; ?> erstellt, und im Sommersemester 2014 im Modul <?php privatea("/haw/bms/14ss/MG2/","Mediengestaltung 2"); ?> erweitert, wurde.</p>
<p>
In diesem Zombie-Side-Scroller in Strichmännchengrafik, übernimmt der Spieler die Kontrolle über einen Zombie und begibt sich auf die Jagd nach Menschen.
Unterstützt wird der Spieler durch andere Zombies die sich ihm anschließen.</p>
<p>
Einige der menschlichen Gegner sind mit Schusswaffen ausgestattet und greifen damit umherlaufende Zombies an.
Mittels der eingesammelten Gehirne der besiegten Menschen kann der Spieler sich heilen oder einen kurzfristigen Geschwindigkeitsschub erhalten.
</p>
<p>
Brain of teh Zwarm ist ein Endlosspiel, das so lange weiterläuft bis der Spieler stirbt.
Dafür wird die Spielwelt fortlaufend zufallsbasierend vor dem Spieler generiert und hinter dem Spieler wieder abgebaut.
</p>
<p>
Die Grafiken und die Schrift wurden an einer Weißwandtafel gezeichnet, fotografiert und anschließend digital aufbereitet.
Technisch betrachtet handelt es sich eigentlich um ein 3D-Spiel mit 2D-Grafiken, die zur Kamera hin perspektivisch ausgerichtet werden.
</p>
<p>
Verwendet wurde die Unity Spiel-Engine, weshalb Brain of teh Zwarm auf <?php extern("https://games.blackpinguin.de/BrainOfTehZwarm/","dieser Webseite"); ?> mittels Unity Web Player direkt im Browser gespielt werden kann.
Alternativ besteht dort auch die Möglichkeit, es für Windows, Mac, GNU/Linux und Android herunterzuladen.
</p>
<?php locdiv(); ?>
<table><tbody>
<tr> <th>Sprachen</th> <td>C#</td> </tr>
<tr> <th>Tools</th> <td>Photoshop, MediaWiki</td> </tr>
<tr> <th>IDE</th> <td>Unity, MonoDevelop</td> </tr>
<tr> <th>Beteiligte</th> <td>1</td> </tr>
</tbody></table>
<?php } else { ?>
<p>Brain of teh Zwarm <?php $rcl->newFoot("Zwarm stands for zombie swarm and the 'typo' in teh / the is intended.<br/>The name is an allusion to StarCraft 2: Heart of the Swarm."); ?> is a 2D game, that was created in the winter semester 2013/14 at the <?php privatea("/haw/bms/13ws/MG1/","Media Design 1"); ?> course of <?php echo (new BMSCourse())->_studium; ?> and was extended in the summer semester 2014 at the <?php privatea("/haw/bms/14ss/MG2/","Media Design 2"); ?> course.</p>
<p>
In this side-scrolling zombie game with stickman graphics the player controls a zombie and hunts down humans.
Other zombies are helping the player by joining him.
</p>
<p>
Some of the human opponents are armed with firearms and attack rambling zombies.
The player can use gathered human brains to heal himself or to get temporary speed boosts.
</p>
<p>
Brain of teh Zwarm is a endless game, that is running until the player dies.
The game world is constantly generated randomly infront of the player and gets destroyed behind of him to make that possible.
</p>
<p>
The graphics and the font were drawn on a white board, photographed and digitally edited.
Technically it's a 3D game with 2D graphics, which are aligned to the camera perspectively.
</p>
<p>
Because the Unity game engine was used, Brain of teh Zwarm can be played directly in the browser with the Unity Web Player on <?php extern("https://games.blackpinguin.de/BrainOfTehZwarm/","this website"); ?>.
Alternatively, it can be downloaded there for Windows, Mac, GNU/Linux and Android.
</p>
<?php locdiv(); ?>
<table><tbody>
<tr> <th>Languages</th> <td>C#</td> </tr>
<tr> <th>Tools</th> <td>Photoshop, MediaWiki</td> </tr>
<tr> <th>IDE</th> <td>Unity, MonoDevelop</td> </tr>
<tr> <th>Participants</th> <td>1</td> </tr>
</tbody></table>
<?php } ?>
<div style="clear: both;"></div>

<?php include("/rcl/www/rcl/include2.php"); ?>
