<?php $title = "Market Checker"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php loc(array(
  'PHP' => 10205
, 'HTML' => 4334
, $rcl->lang('Kommentare','Comments') => 4059
, 'Java' => 2873
, 'SQL' => 1267
, 'XSD' => 545
, 'DTD' => 185
, 'CSS' => 38
)); ?>

<a href="mc1.png"><img src="mc1.thumb.png" alt="App Screenshot" title="App Screenshot" style="width: 40%; height: auto; float: right; margin-left: 10px; margin-bottom: 10px;" /></a>
<?php if($rcl->lang === "de") { ?>
<p>Market Checker ist ein Software-Projekt, das im Sommersemester 2011 im Modul <?php privatea("/haw/bai/11ss/SE2/","Software Engineering 2"); ?> des Studienganges <?php echo (new BAICourse())->_studium; ?> erstellt wurde.</p>
<p>Es handelt sich um eine Informationsplattform auf der Nutzer Artikelpreise von Supermärkten in ihrer Nähe recherchieren und selbst eintragen können.
Eingetragen werden können Artikel, Hersteller und Läden.
Artikel können mit Kommentaren und Bildern versehen werden.
Bilder, Kommentare und Artikel können bewertet werden, oder im Falle von Regelverstößen gemeldet werden.
</p>
<p>
Benutzer müssen ihre E-Mail-Adresse bei der Registrierung oder bei deren Änderung verifizieren, wozu ihnen eine E-Mail zugesandt wird<?php $rcl->newFoot("wurde. Der dafür eingerichtete Mailserver existiert inzwischen nicht mehr.") ?>.
Im Benutzerprofil kann ein, vom Benutzernamen verschiedener, eindeutiger Name gewählt und ein Avatar hochgeladen werden, die anderen Benutzern angezeigt werden.
Produkte oder Suchbegriffe, die der Benutzer sich gerne merken möchte, kann er zu beliebig vielen Einkaufslisten hinzufügen.
</p>
<a href="mc2.png"><img src="mc2.thumb.png" alt="Webseiten Screenshot" title="Webseiten Screenshot" style="width: 35%; height: auto; float: left; margin-right: 10px; margin-bottom: 10px;" /></a>
<p>Projektbeteiligte waren Jan Kuffer (Projektleitung und App), Philip Rose (Gestaltung und App), Vassilios Stavrou (App und API), Dimitri Fast (Webseite), Dieter Pisarewski (Webseite) und ich (API und API-Tests).</p>
<p>
Es wurde eine Android-App mit Barcode-Scanner in Java entwickelt, sowie eine dazugehörige Webseite und mobile Webseite in Ruby.
Um App, Webseite, mobile Webseite und evtl. weitere zukünftige Anwendungen zu unterstützen, wurde eine zentrale XML-API als sichere Schnittstelle zur Datenbank in PHP erstellt.
Vor ihrer Implementierung wurden alle API-Methoden in der <?php extern("https://mcheck.blackpinguin.de/api/Methodenverzeichnis.php","API-Dokumentation"); ?> ausführlich spezifiziert, damit App und Webseite zeitgleich zur API entwickelt werden können.
</p>
<p>
Die API wurde fast vollständig rechtzeitig fertiggestellt, lediglich die Suche nach Artikeln verzögerte sich, weil die Kombinationsmöglichkeiten der vielen optionalen Parameter zu komplexeren SQL-Ausdrücken führte.
Zum Testen der XML-API wurde ein eigenes Test-System in PHP mit cURL erstellt, dessen vollständige Ausgabe von 966 Einzeltests man <?php extern("https://mcheck.blackpinguin.de/api/test.html","hier"); ?> betrachten kann.
Die meisten Methoden und optionalen Parameter der API werden von der App und der Webseite nicht verwendet, bieten aber die Möglichkeit diese weiter auszubauen.
</p>
<p>Die Webseiten werden nicht mehr von der dafür zuständigen Person gehostet. Mir liegt der Ruby-Quelltext nicht vor, um die Webseiten selbst hosten zu können.</p>
<?php locdiv(); ?>
<table><tbody>
<tr> <th>Sprachen</th> <td>PHP, SQL, XML, HTML, CSS, Java</td> </tr>
<tr> <th>Technologien</th> <td>XSD, DTD, MySQL, ProFTPD, E-Mail, bcrypt, Mersenne Twister, cURL, convert (ImageMagick)</td> </tr>
<tr> <th>Tools</th> <td>Skype</td> </tr>
<tr> <th>IDE</th> <td>Notepad++, Eclipse</td> </tr>
<tr> <th>Beteiligte</th> <td>6</td> </tr>
</tbody></table>
<?php } else { ?>
<p>Market Checker is a software project, that was created in the summer semester 2011 at the <?php privatea("/haw/bai/11ss/SE2/","Software Engineering 2"); ?> course of <?php echo (new BAICourse())->_studium; ?>.</p>
<p>It is a information platform where users can research and submit article prices in stores around their location.
Users can insert articles, manufacturers and stores.
Articles can be supplemented with pictures and comments.
Pictures, comments and articles can be rated by users or, if they violate the terms of service, reported to the support.
</p>
<p>
Users have to validate their e-mail address when they register their account or change it later, for which they receive an e-mail <?php $rcl->newFoot("They did receive an e-mail. The mail server that was used doesn't exists anymore."); ?>.
In their profile, users can change their unique user name (which is different from their login name) or upload an avatar, that are both shown to other users.
Articles or search strings that a user wants to remember can be added to an arbitrary amount of shopping lists.
</p>
<a href="mc2.png"><img src="mc2.thumb.png" alt="Website Screenshot" title="Website Screenshot" style="width: 35%; height: auto; float: left; margin-right: 10px; margin-bottom: 10px;" /></a>
<p>Project members were Jan Kuffer (Project lead and App), Philip Rose (Design and App), Vassilios Stavrou (App and API), Dimitri Fast (Website), Dieter Pisarewski (Website) and me (API and API tests).</p>
<p>
An Android app with barcode scanner was developed in Java, and a website and mobile website were developed in Ruby.
To support app, website, mobile website, and possible future applications, a central XML API was developed in PHP that serves as an secure interface to the database.
Prior to their implementation, all API methods were specified in detail in the <?php extern("https://mcheck.blackpinguin.de/api/Methodenverzeichnis.php","API documentation"); ?>, which allowed their simultaneous developement with the app and websites.
</p>
<p>
Except for the article search method, which various optional parameters formed complex SQL statements, the API was implemented in time.
To test the XML API, a test system using cURL was developed in PHP. Its output for a complete test with 966 individual test cases can be visited <?php extern("https://mcheck.blackpinguin.de/api/test.html","here"); ?>.
Most API methods and optional parameters aren't used by the app and website, but offer the possibility to extend them.
</p>
<p>The websites aren't hosted anymore by their developer. I don't have access to the Ruby source code to host them by myself.</p>
<?php locdiv(); ?>
<table><tbody>
<tr> <th>Languages</th> <td>PHP, SQL, XML, HTML, CSS, Java</td> </tr>
<tr> <th>Technologies</th> <td>XSD, DTD, MySQL, ProFTPD, E-Mail, bcrypt, Mersenne Twister, cURL, convert (ImageMagick)</td> </tr>
<tr> <th>Tools</th> <td>Skype</td> </tr>
<tr> <th>IDE</th> <td>Notepad++, Eclipse</td> </tr>
<tr> <th>Participants</th> <td>6</td> </tr>
</tbody></table>
<?php } ?>
<div style="clear: both;"></div>

<?php include("/rcl/www/rcl/include2.php"); ?>
