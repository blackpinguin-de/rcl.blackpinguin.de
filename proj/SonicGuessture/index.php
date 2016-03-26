<?php $title = "Sonic Guessture"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php loc(array(
  'C++' => 1757
, $rcl->lang('Kommentare','Comments') => 399
)); ?>

<?php if($rcl->lang === "de") { ?>
<a href="plakat.png" style="width: 35%; float: right; margin-left: 10px; margin-bottom: 10px;"><img src="plakat.thumb.png" alt="Comic: bei einer falschen Geste wird der Spieler von einem Turret aus Portal erschossen. Die richtige Geste wird mit Kuchen belohnt. Als Bild ist es komisch." title="Ausstellungsplakat" style="width: 100%; height: auto;" /></a>
<p>Sonic Guessture<?php $rcl->newFoot("Sonic: Schall, schnell, akustisch, Vi&shy;deo&shy;spiel&shy;fi&shy;gur<br/>Guessture: Wortkombination aus 'guess' (raten) und 'gesture' (Geste)"); ?> ist ein Rätselspiel, das im Wintersemester 2014/15 im Wahlpflichtfach <?php privatea("/haw/bms/14ws/AVPRG/","Audio-Video-Programmierung"); ?> des Studienganges <?php echo (new BMSCourse())->_studium; ?> erstellt wurde.</p>
<p>Aufgabe war es, ein Programm zum Thema 'Gesten steuern Musik' zu entwickeln.
Entstanden ist ein akustisches Gestenrätsel.</p>
<p>Der Spieler bekommt bekannte Musikstücke zu hören und muss selbstständig den Bezug zu einer zum Stück passenden Geste herstellen, welche, bei erfolgreicher Ausführung vor der Webcam, das nächste Gestenrätsel freischaltet.
Die Leistung des Spielers wird mit Sternen belohnt.
Schnell sein und keine optional einblendbaren Hinweise benötigen bringt zusätzliche Sterne.</p>
<p>Beispiel<?php $rcl->newFoot("Dieses Beispiel ist kein Spoiler und kommt nicht im Spiel vor. Es dient lediglich der Veranschaulichung der Spielidee."); ?>: bei dem Overworld Theme aus The Legend of Zelda soll der Spieler mit den Händen ein <?php extern("https://de.wikipedia.org/wiki/The_Legend_of_Zelda#Das_Triforce","Triforce"); ?> formen.</p>
<p>Es wurden vier verschiedene Gesten programmiert.
Technisch wird das Bild der Webcam mittels OpenCV abgegriffen, die Hautfarbe<?php $rcl->newFoot("Die individuelle Hautfarbe des Spielers wird zu Beginn einmalig ausgewählt."); ?> mittels Color Keying herausgelöst und das resultierende binäre Bitmap auf die jeweilige Geste hin analyisiert.
Zeit und Rhythmik sind ebenfalls Faktoren, die für zwei der Gesten eine Rolle spielen.
Die Qt-Anwendung verwendet für GUI, Musiküberblendungen, Camera, Color Keying, Bildanalyse und Mediator<?php $rcl->newFoot("Mediator-Entwurfsmuster (GoF:273)"); ?> jeweils eigene Threads, die mittels Nachrichtensystem<?php $rcl->newFoot("Qt Signals und Slots"); ?> miteinander kommunizieren.</p>
<p>Zusammen mit den Projekten der anderen Studierenden dieses Kurses wurde das Spiel am 27.01.2015 ausgestellt.
Eine Veröffentlichung von Sonic Guessture ist aufgrund fehlender Musik- und Bildrechte<?php $rcl->newFoot("Bilder werden verwendet, um nach korrekter Erkennung der jeweiligen Geste das Rätsel aufzulösen.") ?> nicht möglich.</p>
<?php locdiv(); ?>
<table><tbody>
<tr> <th>Sprachen</th> <td>C++, UML</td> </tr>
<tr> <th>Technologien</th> <td>Qt 5, Multithreading, OpenCV, Color Keying, Gestenerkennung</td> </tr>
<tr> <th>Tools</th> <td>GIMP, Dia</td> </tr>
<tr> <th>IDE</th> <td>Qt Creator</td> </tr>
</tbody></table>
<?php } else { ?>
<a href="plakat.png" style="width: 35%; float: right; margin-left: 10px; margin-bottom: 10px;"><img src="plakat.thumb.png" alt="Comic: a wrong gesture results in a turret from Portal shooting the player and a correct gesture is rewarded with cake. It's funny as a picture, I swear!" title="exhibition poster" style="width: 100%; height: auto;" /></a>
<p>Sonic Guessture<?php $rcl->newFoot("Sonic: sound, speed, bang, video game figure<br/>Guessture: word combination of 'guess' and 'gesture'"); ?> is a puzzle game that was created in the winter semester 2014/15 at the <?php privatea("/haw/bms/14ws/AVPRG/","Audio-Video-Programming"); ?> compulsory elective course of <?php echo (new BMSCourse())->_studium; ?>.</p>
<p>The task was to develop an application to the topic 'Gesten steuern Musik' (engl.: music controlled by gestures).
An acoustical puzzle game with gestures was made.</p>
<p>The player listens to broadly known music and has to guess which gesture might match the song.
Guessing right, by making the gesture infront of the webcam, unlocks the next puzzle.
The performance of the player will be rewarded with stars,
in particular by being fast and solving the puzzle without optional hints.</p>
<p>Example<?php $rcl->newFoot("This example isn't a spoiler, because it is not part of the game. It merely illustrates the basic game idea."); ?>: the Overworld Theme from The Legend of Zelda requires the player to form a <?php extern("https://en.wikipedia.org/wiki/Triforce","Triforce"); ?> with their hands.</p>
<p>Four gestures were programmed.
Technically, the picture of the webcam is captured with OpenCV, the skin color<?php $rcl->newFoot("The individual skin color of the player will be picked once at the beginning of the game."); ?> gets separated with color keying and the resulting bitmap gets analyzed for the gesture in question.
Timing and rhytmic are additional recognition criteria for two of the gestures.
Seperate threads in the Qt-Application are used for the GUI, music fading, camera capture, color keying, image analyzing and for the mediator<?php $rcl->newFoot("Mediator-Pattern (GoF:273)"); ?>, which are communicating with each other by an messaging system<?php $rcl->newFoot("Qt Signals and Slots"); ?>.</p>
<p>Together with projects from other students of this course, the game was exhibited on 2015-01-27.
Sonic Guessture can't be released, because of missing rights of use for the music and images<?php $rcl->newFoot("Images are used to unravel puzzles after the correct gesture was recognized.") ?>.</p>
<?php locdiv(); ?>
<table><tbody>
<tr> <th>Languages</th> <td>C++, UML</td> </tr>
<tr> <th>Technologies</th> <td>Qt 5, Multithreading, OpenCV, Color Keying, Gesture recognition</td> </tr>
<tr> <th>Tools</th> <td>GIMP, Dia</td> </tr>
<tr> <th>IDE</th> <td>Qt Creator</td> </tr>
</tbody></table>
<?php } ?>
<div style="clear: both;"></div>

<?php include("/rcl/www/rcl/include2.php"); ?>
