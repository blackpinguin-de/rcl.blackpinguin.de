<?php $title = "Dark Side Of Morra"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php loc(array(
  'C#' => 4327
, $rcl->lang('Kommentare','Comments') => 3455
, 'JavaScript' => 30
)); ?>

<a href="dsom.png"><img src="dsom.thumb.png" alt="Screenshot" title="Screenshot" style="width: 40%; height: auto; float: right; margin-left: 10px; margin-bottom: 10px;" /></a>
<?php if($rcl->lang === "de") { ?>
<p>Dark Side of Morra ist ein 2D-Spiel, das im Sommersemester 2013 im Modul <?php privatea("/haw/bms/13ss/Proj1/","Projekt 1"); ?> des Studienganges <?php echo (new BMSCourse())->_studium; ?> erstellt wurde.</p>
<p>In diesem storygetriebenen Jump-'n'-Run-Spiel muss der Spieler geschickt schwierige Sprungeinlagen und Gegner überwinden, um am Ende das pinke Einhorn aus der Gefangenschaft von Monunkulus zu befreien.</p>
<p>
Es gibt zwei Levels, in denen sich vier verschiedene Gegnertypen herumtreiben, gefolgt von einem Bosslevel.
Neben den intelligenten Gegnern enthalten die Levels auch noch bewegliche Plattformen, Teleporter, Leitern, verschlossene Türen, Schlüssel, Fallen und NPCs.
</p>
<p>
Entwickelt wurde das Spiel zusammen mit Bent Nürnberg (Projektleitung, Steuerung, Programmierung der Sprite-Animation, Sounds, Credits, ...), Tanja Blücher (Story, Leveldesign, Kamera, ...) und Dennis Nabel (Grafiken und Animation).
Meine Hauptbeiträge zu dem Projekt waren die Programmierung der K.I. der Gegner, Programmierung und Leveldesign des Bosslevels und das SVN-Repository bereitzustellen.
</p>
<p>
Verwendet wurde die Unity Spiel-Engine, weshalb Dark Side of Morra auf <?php extern("https://games.blackpinguin.de/DarkSideOfMorra/","dieser Webseite"); ?> mittels Unity Web Player direkt im Browser gespielt werden kann.
Alternativ besteht dort auch die Möglichkeit, es für Windows, Mac und GNU/Linux herunterzuladen.
</p>
<?php locdiv(); ?>
<table><tbody>
<tr> <th>Sprachen</th> <td>C#</td> </tr>
<tr> <th>Tools</th> <td>Skype, Trello, Photoshop</td> </tr>
<tr> <th>IDE</th> <td>Unity, MonoDevelop</td> </tr>
<tr> <th>Beteiligte</th> <td>4</td> </tr>
</tbody></table>
<?php } else { ?>
<p>Dark Side of Morra is a 2D game, that was created in the summer semester 2013 at the <?php privatea("/haw/bms/13ss/Proj1/","Project 1"); ?> course of <?php echo (new BMSCourse())->_studium; ?>.</p>
<p>In this story-driven platform game the player has to overcome difficult jump segments and enemies, to rescue the pink unicorn from its imprisonment by Monunkulus.</p>
<p>
There are two levels, which contain four different enemy types, followed by a boss level.
Besides the intelligent enemies, the levels contain moving platforms, teleporters, ladders, locked doors, keys, traps and NPCs.
</p>
<p>
The game was developed together with Bent Nürnberg (project leadership, controls, programming of the sprite's animation, sounds, credits, ...), Tanja Blücher (story, level design, camera, ...) and Dennis Nabel (graphics and animation).
My main contributions to the project were the programming of the A.I. for the enemies, programming and level design of the boss level, and operating the SVN repository.
</p>
<p>
Because the Unity game engine was used, Dark Side of Morra can be played directly in the browser with the Unity Web Player on <?php extern("https://games.blackpinguin.de/DarkSideOfMorra/","this website"); ?>.
Alternatively, it can be downloaded there for Windows, Mac and GNU/Linux.
</p>
<?php locdiv(); ?>
<table><tbody>
<tr> <th>Languages</th> <td>C#</td> </tr>
<tr> <th>Tools</th> <td>Skype, Trello, Photoshop</td> </tr>
<tr> <th>IDE</th> <td>Unity, MonoDevelop</td> </tr>
<tr> <th>Participants</th> <td>4</td> </tr>
</tbody></table>
<?php } ?>
<div style="clear: both;"></div>

<?php include("/rcl/www/rcl/include2.php"); ?>
