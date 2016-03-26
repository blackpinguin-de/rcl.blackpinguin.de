<?php $title = "Mau Dau Mau"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php loc(array(
  'Delphi' => 7351
, $rcl->lang('Kommentare','Comments') => 1173
, 'HTML' => 1024
)); ?>

<a href="mdm.jpg"><img src="mdm.jpg" alt="Screenshot" title="Screenshot" style="width: 40%; height: auto; float: right; margin-left: 10px; margin-bottom: 10px;" /></a>
<?php if($rcl->lang === "de") { ?>
<p>An der <?php extern("http://www.g10.de/","Staatlichen Gewerbeschule Energietechnik - G&nbsp;10"); ?> haben meine Klassenkameraden und ich exzessiv das Kartenspiel <?php extern("https://de.wikipedia.org/wiki/Mau-Mau_(Kartenspiel)","Mau Mau");?> gespielt. Als 2008 in dem Fach <?php privatea("/g10/fos/TL","Techniklehre"); ?> an der <?php privatea("/g10/fos/", "Fachoberschule (FOS)") ?> die Aufgabe kam, ein beliebiges Projekt in Delphi zu entwickeln, entschied ich mich für das Projekt Mau Dau<?php $rcl->newFoot("DAU = Dümmster anzunehmender User"); ?> Mau.</p>
<p>Entstanden ist ein Windows-Programm mit dem man Mau Mau mit zwei bis vier Spielern über das lokale Netzwerk oder das Internet<?php $rcl->newFoot("Vorausgesetzt, dass einer der Spieler einen offenen Port besitzt oder einzurichten vermag."); ?> spielen kann. Die Spielregeln können verändert werden, mit den Mitspielern kann gechattet werden, und es existiert eine deutsche Anleitung. Für die Kartengrafiken wird die Windows cards.dll verwendet.</p>
<p>In den Optionen kann die Benutzeroberfläche zwischen Deutsch, Englisch und Französisch<?php $rcl->newFoot("Die Übersetzung ins Französiche erfolgte durch Christian Stoffers."); ?> umgestellt werden.</p>
<p>Herunterladen kann man Mau Dau Mau <?php extern("https://blackpinguin.de/?s=dl&a=2&b=6","hier"); ?>.</p>
<p>Obwohl es damals für Windows XP entwickelt wurde, läuft es auch heute noch auf Windows Vista, Windows 7 und mittels <?php extern("https://winehq.org/","WINE"); ?> auf GNU/Linux.</p>
<?php locdiv(); ?>
<table><tbody>
<tr> <th>Sprachen</th> <td>Delphi, HTML</td> </tr>
<tr> <th>Technologien</th> <td>Netzwerk-Sockel, DLL, CHM, INI</td> </tr>
<tr> <th>IDE</th> <td>Turbo Delphi, HTML Help Workshop</td> </tr>
</tbody></table>
<?php } else { ?>
<p>I played the card game <?php extern("https://en.wikipedia.org/wiki/Mau_Mau_(card_game)","Mau Mau");?> excessively with my classmates during my time at the <?php extern("http://www.g10.de/","Staatliche Gewerbeschule Energietechnik - G&nbsp;10"); ?>. In 2008, when I got the task to develop a software project in Delphi for the <?php privatea("/g10/fos/TL","Techniklehre"); ?> course at the <?php privatea("/g10/fos/", "Fachoberschule (FOS)") ?>, I decided to make the game Mau Dau<?php $rcl->newFoot("DAU = \"Dümmster anzunehmender User\" (german for \"dumbest possible user\", derived from the german translation for maximum credible accident)"); ?> Mau.
<p>A Windows program was created to play Mau Mau with two to four players over a local network or the internet<?php $rcl->newFoot("If one of the players has an open port or can open one."); ?>. The game rules can be changed, the players can chat with each other and there is an german-only manual. The Windows cards.dll is used to draw the cards.</p>
<p>The user interface can be changed between german, english and france<?php $rcl->newFoot("The france translation was made by Christian Stoffers."); ?> through the settings.</p>
<p>You can download Mau Dau Mau <?php extern("https://blackpinguin.de/?s=dl&a=2&b=6","here"); ?>.</p>
<p>Althought it was developed for Windows XP, it is still running today on Windows Vista, Windows 7 and on GNU/Linux with <?php extern("https://winehq.org/","WINE"); ?>.</p>
<?php locdiv(); ?>
<table><tbody>
<tr> <th>Languages</th> <td>Delphi, HTML</td> </tr>
<tr> <th>Technologies</th> <td>Network sockets, DLL, CHM, INI</td> </tr>
<tr> <th>IDE</th> <td>Turbo Delphi, HTML Help Workshop</td> </tr>
</tbody></table>
<?php } ?>
<div style="clear: both;"></div>

<?php include("/rcl/www/rcl/include2.php"); ?>
