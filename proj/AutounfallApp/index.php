<?php include_once("/rcl/www/funktionen.php"); ?>
<?php $title = $rcl->lang("Autounfall App","Car accident app"); ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php loc(array(
  'C++' => 1928
, $rcl->lang('Kommentare','Comments') => 455
, 'PHP' => 146
)); ?>

<?php if($rcl->lang === "de") { ?>
<p>Von März bis Mai 2013 habe ich neben dem Studium für meinen Cousin eine iPhone-App entwickelt, die für einen seiner Kunden als Teil eines größeren Auftrags bestimmt war.</p>
<p>Weil ich keinen Mac besitze, um für iOS-Geräte entwickeln zu können, erwarb mein Cousin, ohne mich vorher zu konsultieren, eine DragonFireSDK-Lizenz für mich, mit der ich die App dann unter Windows in C++ entwickelte.</p>
</p>
<div style="width: 100%; text-align: center;">
    <a href="01.png" style="display: inline-block; width: 32%;"><img src="01.png" alt="Screenshot" title="Hauptmenü" style="width: 100%; height: auto;" /></a>
    <a href="02.png" style="display: inline-block; width: 32%;"><img src="02.png" alt="Screenshot" title="Daten des Unfallgegners" style="width: 100%; height: auto;" /></a>
    <a href="03.png" style="display: inline-block; width: 32%;"><img src="03.png" alt="Screenshot" title="Eigene Daten" style="width: 100%; height: auto;" /></a>
</div>
<p>Die Kunden eines Gutachters für Autounfälle (Name und Firmenlogo sind in den Screenshots der App verpixelt) können mit dieser App, direkt vor Ort Unfälle eintragen und ihrem Gutachter zuschicken.</p>
<p>Programmablauf, Gestaltung und die Grafiken<?php $rcl->newFoot("Die Buttons habe ich selbst noch mal neu erstellt um den Text ändern zu können, sowie um einige Buttons Grün, Rot und Gelb hervorzuheben."); ?> der App waren mir durch ein Storyboard und einen HTML/JavaScript-Mockup vorgegeben. Ich habe die Entwürfe in C++ umgesetzt und an die technischen Gegebenheiten angepasst.</p>
<div style="width: 100%; text-align: center;">
    <a href="04.png" style="display: inline-block; width: 32%;"><img src="04.png" alt="Screenshot" title="Unfallhergang" style="width: 100%; height: auto;" /></a>
    <a href="05.png" style="display: inline-block; width: 32%;"><img src="05.png" alt="Screenshot" title="Gespeichert" style="width: 100%; height: auto;" /></a>
    <a href="06.png" style="display: inline-block; width: 32%;"><img src="06.png" alt="Screenshot" title="Abschicken" style="width: 100%; height: auto;" /></a>
</div>
<p>
Es war ein Entgelt vereinbart, aber leider ist der Kunde vom Vertrag zurückgetreten, als die App bereits fast fertig gestellt war.
Sie funktionierte bereits wie gewünscht, aber es waren noch ein paar grafische Details, das Hosting des Backends und die Veröffentlichung zu klären.
</p>
<?php locdiv(); ?>
<table><tbody>
<tr> <th>Sprachen</th> <td>C++, SQL, PHP</td> </tr>
<tr> <th>Technologien</th> <td>DragonFire SDK, SQLite, Base64, E-Mail</td> </tr>
<tr> <th>Tools</th> <td>Photoshop</td> </tr>
<tr> <th>IDE</th> <td>Visual Studio 2012</td> </tr>
</tbody></table>
<?php } else { ?>
<p>From March to May 2013, I developed a iPhone app for my cousin besides my studies, which was part of a bigger order for one of his customers.</p>
<p>Because I don't have a Mac to develop for iOS devices, my cousin acquired a DragonFireSDK license for me without asking, with which the app was developed then on Windows in C++.</p>
<div style="width: 100%; text-align: center;">
    <a href="01.png" style="display: inline-block; width: 32%;"><img src="01.png" alt="Screenshot" title="Main menu: create new accident, saved accidents overview, contact details" style="width: 100%; height: auto;" /></a>
    <a href="02.png" style="display: inline-block; width: 32%;"><img src="02.png" alt="Screenshot" title="Data of other party: name, phone, e-mail, insurance, license plate" style="width: 100%; height: auto;" /></a>
    <a href="03.png" style="display: inline-block; width: 32%;"><img src="03.png" alt="Screenshot" title="Own data: name, phone, e-mail, insurance, license plate" style="width: 100%; height: auto;" /></a>
</div>
<p>With this app, the customers of a consultant for car accidents (the company name and logo are pixelated in the screenshot of the app) can enter accident details at its location and send them directly to their consultant.</p>
<p>Program flow, design and graphics<?php $rcl->newFoot("I had to redo the buttons by myself to change their text and to highlight some buttons with green, red and yellow color."); ?> of the app were predetermined by a storyboard and a HTML/JavaScript mockup. I implemented these outlines in C++ and adapted them to the technical circumstances.</p>
<div style="width: 100%; text-align: center;">
    <a href="04.png" style="display: inline-block; width: 32%;"><img src="04.png" alt="Screenshot" title="Accident description" style="width: 100%; height: auto;" /></a>
    <a href="05.png" style="display: inline-block; width: 32%;"><img src="05.png" alt="Screenshot" title="Data was successfully saved, reminder to make pictures of all damages and to send them over e-mail" style="width: 100%; height: auto;" /></a>
    <a href="06.png" style="display: inline-block; width: 32%;"><img src="06.png" alt="Screenshot" title="Accident overview, buttons to delete it and to send the data to the consultant" style="width: 100%; height: auto;" /></a>
</div>
<p>
A payment was agreed upon, but the customer sadly backed out of the contract when the app was nearly finished.
It worked like wanted, but there were some graphical details, the hosting of the back end and the publication to consider.
</p>
<?php locdiv(); ?>
<table><tbody>
<tr> <th>Languages</th> <td>C++, SQL, PHP</td> </tr>
<tr> <th>Technologies</th> <td>DragonFire SDK, SQLite, Base64, E-Mail</td> </tr>
<tr> <th>Tools</th> <td>Photoshop</td> </tr>
<tr> <th>IDE</th> <td>Visual Studio 2012</td> </tr>
</tbody></table>
<?php } ?>
<div style="clear: both;"></div>

<?php include("/rcl/www/rcl/include2.php"); ?>
