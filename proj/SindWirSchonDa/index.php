<?php include_once("/rcl/www/funktionen.php"); ?>
<?php $title = $rcl->lang("Sind wir schon da?","Are we there yet?"); ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php loc(array(
  'Scala' => 1090
, $rcl->lang('Kommentare','Comments') => 251
)); ?>

<?php if($rcl->lang === "de") { ?>
<p>Sind wir schon da? ist eine Android-App, die im Sommersemester 2014 im Wahlpflichtfach <?php privatea("/haw/bms/14ss/MOSY/","Mobile Systeme"); ?> des Studienganges <?php echo (new BMSCourse())->_studium; ?> erstellt wurde.</p>
<p>Aufgabe war es, eine native App für ein beliebiges mobiles Betriebssystem zu entwickeln, die als Messgerät dienen soll und auf die eingebauten Sensoren des Gerätes zugreift.
Es wurde eine Android-App erstellt, die versucht, die uralte Frage von gelangweilten Kindern auf dem Rücksitz zu beantworten: Sind wir schon da?</p>
<p>Beantwortet wird die Frage in drei Aspekten: Entfernung, Geschwindigkeit und Zeit<?php $rcl->newFoot("Wie weit ist es noch?<br/>Wie schnell bewegen wir uns?<br/>Wie lange dauert es noch?"); ?>.
Einer dieser Werte wird dabei jeweils aus den verbleibenden beiden Werten berechnet.
Neben der Möglichkeit, Werte manuell einzugeben oder aus vorgegebenen Konstanten zu wählen, ist es auch möglich, jeden Wert manuell zu messen:
Zeit durch die interne Uhr, Entfernung durch den Location Provider des Gerätes und die Geschwindigkeit aus der Kombination von Beidem.</p>
<div style="width: 100%; text-align: center;">
    <a href="calc.png" style="display: inline-block; width: 32%;"><img src="calc.thumb.png" alt="Screenshot der Berechne Zeit Activity" title="Berechne Zeit Activity (Deutsch)" style="width: 100%; height: auto;" /></a>
    <a href="choose.png" style="display: inline-block; width: 32%;"><img src="choose.thumb.png" alt="Screenshot der Wähle Geschwindigkeit Activity" title="Wähle Geschwindigkeit Activity (Englisch): Messung..., zu Fuß, Fahrrad, Auto (innerorts), Auto (Autobahn), Airbus A380, Schallgeschwindigkeit, Rakete, Lichtgeschwindigkeit, ..." style="width: 100%; height: auto;" /></a>
    <a href="measure.png" style="display: inline-block; width: 32%;"><img src="measure.thumb.png" alt="Screenshot der Messe Geschwindigkeit Activity" title="Messe Geschwindigkeit Activity (Deutsch)" style="width: 100%; height: auto;" /></a>
</div>
<p>Die App hat sowohl ein deutsches als auch ein englisches Benutzerinterface, welches durch die Systemsprache ausgewählt wird<?php $rcl->newFoot("Die Systemsprache zu ändern, während die App noch läuft, führt zu einem Neustart der App. Der interne Zustand der App geht dabei verloren."); ?>.
Entwickelt wurde sie in Scala, verwendet selbst erstellte Views und eine eigene Implementation für Einheiten<?php $rcl->newFoot("Der Benutzer kann von einer in die andere Einheit wechseln. Die Werte werden dabei umgerechnet, die Rechnungen finden aber in SI-Einheiten statt. Genauigkeitsfehler sind dabei zu erwarten."); ?> und Werte.</p>
<p>Zusammen mit den Projekten der anderen Studierenden dieses Kurses wurde die App am 24.06.2014 ausgestellt.
Die APK von Sind wir schon da? für Android 4.0 oder höher kann <a href="SindWirSchonDa.apk">direkt hier</a> heruntergeladen werden.</p>
<?php locdiv(); ?>
<table><tbody>
<tr> <th>Sprachen</th> <td>Scala, UML</td> </tr>
<tr> <th>Technologien</th> <td>Android, AndroidScalaProguard, Google Play Fused Location Provider, Activities, eigene Views, SI-Einheiten</td> </tr>
<tr> <th>Tools</th> <td>Dia</td> </tr>
<tr> <th>IDE</th> <td>ADT Eclipse mit Scala IDE</td> </tr>
<tr> <th>Beteiligte</th> <td>1</td> </tr>
</tbody></table>
<?php } else { ?>
<p>Are we there yet? is an Android-App that was created in the summer semester 2014 at the <?php privatea("/haw/bms/14ss/MOSY/","Mobile Systems"); ?> compulsory elective course of <?php echo (new BMSCourse())->_studium; ?>.</p>
<p>The task was to develop a native app for an arbitrary mobile operating system, acting as a measuring device that uses its embedded sensors.
An Android-App was made to try to answer the age-old question from bored kids on the backseat: Are we there yet?</p>
<p>It answers this question at three aspects: distance, speed and time<?php $rcl->newFoot("How far is it away?<br/>How fast are we moving?<br/>How long until we are there?"); ?>, calculating one of them with the remaining two.
Besides entering values manually or choosing from some predefined constants, it's possible to measure each quantity manually.
Time by the internal clock, distance by the device's location provider, and speed as the combination of both.</p>
<div style="width: 100%; text-align: center;">
    <a href="calc.png" style="display: inline-block; width: 32%;"><img src="calc.thumb.png" alt="Screenshot of the calculate time activity" title="calculate time activity (german): How long? Distance ÷ Velocity = Time" style="width: 100%; height: auto;" /></a>
    <a href="choose.png" style="display: inline-block; width: 32%;"><img src="choose.thumb.png" alt="Screenshot of the choose velocity activity" title="choose velocity activity (english)" style="width: 100%; height: auto;" /></a>
    <a href="measure.png" style="display: inline-block; width: 32%;"><img src="measure.thumb.png" alt="Screenshot of the measure velocity activity" title="measure velocity activity (german)" style="width: 100%; height: auto;" /></a>
</div>
<p>It has a german and an english user interface, which is selected by the system language<?php $rcl->newFoot("Changing the system language while it's running results in a restart of the App. Its internal state will be lost."); ?>.
It was developed in Scala, uses custom Views and an own implementation for units<?php $rcl->newFoot("The user can change between units of the same type (distance, velocity and time) at will. The values will be converted from unit to unit for display purposes, but the calculations are done in the corresponding SI units. Errors of accuracy are to be expected."); ?> and values.</p>
<p>Together with projects from other students of this course, the App was exhibited on 2014-06-24.
The APK of Are we there yet? for Android 4.0 or higher can be downloaded by <a href="SindWirSchonDa.apk">clicking here</a>.</p>
<?php locdiv(); ?>
<table><tbody>
<tr> <th>Languages</th> <td>Scala, UML</td> </tr>
<tr> <th>Technologies</th> <td>Android, AndroidScalaProguard, Google Play Fused Location Provider, Activities, Custom Views, SI-Units</td> </tr>
<tr> <th>Tools</th> <td>Dia</td> </tr>
<tr> <th>IDE</th> <td>ADT Eclipse with Scala IDE</td> </tr>
<tr> <th>Participants</th> <td>1</td> </tr>
</tbody></table>
<?php } ?>
<div style="clear: both;"></div>

<?php include("/rcl/www/rcl/include2.php"); ?>
