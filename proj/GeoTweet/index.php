<?php $title = "GeoTweet"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php loc(array(
  'Java' => 771
, $rcl->lang('Kommentare','Comments') => 229
)); ?>

<a href="geotweet.png"><img src="geotweet.thumb.png" alt="Screenshot" title="Screenshot" style="width: 40%; height: auto; float: right; margin-left: 10px; margin-bottom: 10px;" /></a>
<?php if($rcl->lang === "de") { ?>
<p>GeoTweet ist eine Java-Applikation, die im Sommersemester 2011 im Modul <?php privatea("/haw/bai/10ss/DB/","Datenbanken"); ?> des Studienganges <?php echo (new BAICourse())->_studium; ?> entstanden ist.</p>
<p>Aufgabe war es, eine eigene Applikation zu entwickeln, die eine Datenbank mit Positionsdaten verwendet. Inspiriert durch das <?php extern("https://support.twitter.com/articles/122236-adding-your-location-to-a-tweet","Twitter-Geotagging");?> entstand ein Tool, das es erlaubt Koordinaten auf der <?php extern("https://openstreetmap.org/","OpenStreetMap"); ?>-Weltkarte mit kurzen Nachrichten (Tweets) zu versehen, sowie auf Nachrichten anderer Nutzer zu antworten.</p>
<p>Nutzen tue ich GeoTweet auch heute noch regelmäßig, um für mich selbst Orte zu markieren, an denen ich war.</p>
<p>Eine Veröffentlichung von GeoTweet ist nicht möglich, weil bei dessen Entwicklung Sicherheit<?php $rcl->newFoot("Die Applikation benötigt einen direkten Zugriff auf die Datenbank, mit Lese- und Schreibrechten, in der Passwörter im Klartext gespeichert sind."); ?> und Privatsphäre<?php $rcl->newFoot("Weil ich als einziger Zugriff auf die Datenbank habe, speichere ich Namen, Adressen, Geburtstage, E-Mail-Adressen oder Telefonnummern von anderen Personen an deren aktuellen (oder ehemaligen) Wohnorten."); ?> nicht berücksichtigt wurden.</p>
<?php locdiv(); ?>
<table><tbody>
<tr> <th>Sprachen</th> <td>Java, SQL</td> </tr>
<tr> <th>Technologien</th> <td>Swing, JDBC, MySQL</td> </tr>
<tr> <th>IDE</th> <td>Netbeans</td> </tr>
<tr> <th>Beteiligte</th> <td>1</td> </tr>
</tbody></table>
<?php } else { ?>
<p>GeoTweet is an Java application that was created in the summer semester 2011 at the <?php privatea("/haw/bai/10ss/DB","Databases"); ?> course of <?php echo (new BAICourse())->_studium; ?>.</p>
<p>The task was to develop an application that makes use of a database with location data. Inspired by <?php extern("https://support.twitter.com/articles/122236-adding-your-location-to-a-tweet","Twitter's geotagging feature");?>, a tool was created to mark locations on an <?php extern("https://openstreetmap.org/","OpenStreetMap"); ?> map with short messages (tweets) and to reply to messages from other users.</p>
<p>I still use GeoTweet for myself regulary to mark places I've been.</p>
<p>GeoTweet can't be released, because security<?php $rcl->newFoot("The application requires read and write access to the database which contains passwords in plaintext."); ?> and privacy<?php $rcl->newFoot("Because I'm the only one with access to the database, I do save names, addresses, dates of birth, e-mail-addresses and phone numbers of other people at their current (or former) residence."); ?> issues weren't considered during its development.</p>
<?php locdiv(); ?>
<table><tbody>
<tr> <th>Languages</th> <td>Java, SQL</td> </tr>
<tr> <th>Technologies</th> <td>Swing, JDBC, MySQL</td> </tr>
<tr> <th>IDE</th> <td>Netbeans</td> </tr>
<tr> <th>Participants</th> <td>1</td> </tr>
</tbody></table>
<?php } ?>
<div style="clear: both;"></div>

<?php include("/rcl/www/rcl/include2.php"); ?>
