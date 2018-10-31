<?php $title = "Minimalistic Shop"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php loc(array(
  'Scala' => 1460
, $rcl->lang('Kommentare','Comments') => 1252
, 'Java' => 689
, 'XSLT' => 619
, 'CSS' => 244
, 'XSD' => 192
, 'JSP' => 172
, 'DTD' => 70
, 'JavaScript' => 47
, 'XML' => 12
)); ?>

<a href="ms.png"><img src="ms.thumb.png" alt="Screenshot" title="Screenshot" style="width: 40%; height: auto; float: right; margin-left: 10px; margin-bottom: 10px;" /></a>
<?php if($rcl->lang === "de") { ?>
<p>Minimalistic Shop ist eine Webseite, die im Sommersemester 2013 im Modul <?php privatea("/haw/bms/13ss/RDB","Relationale Datenbanken"); ?> des Studienganges <?php echo (new BMSCourse())->_studium; ?> entstanden ist.</p>
<p>
In dieser technischen Demonstration eines Online-Shops werden Produkte verschiedenster Kategorien zum Kauf angeboten.
Artikel können zum Warenkorb hinzugefügt werden und nach der Registrierung eines neuen Benutzeraccounts bzw. nach dem Login bestellt werden.
Die Produktkategorien sind hierarchisch gegliedert, Produkte können in mehreren Kategorien stehen, und die Suche lässt sich auf bestimmte Kategorien eingrenzen.
</p>
<p>Vorgabe für das Projekt war es, Java-Klassen, JDBC, Tomcat und JSP zu verwenden.
Statt Java habe ich Scala verwendet, was zu Java-Klassen kompiliert wird.
Die JSP-Dateien enthalten keine Anwendungslogik, sondern rufen lediglich jeweils eine Scala-Methode mit den Parametern der HTTP-Verbindung auf.
</p>
<p>
Aufgeteilt ist die Architektur des Scala-Projektes in drei Pakete.
Ein Paket für den Datenbankzugriff mittels Prepared Statements, Geschäftslogik und Transaktionen, eines für die XML-Ausgabegenerierung und das letzte Paket für die Validierung der Eingabeparameter.
Das XML, welches die Webseite ausliefert, wird vom Browser des Besuchers mittels XSLT 1.0 zu HTML geparst.
</p>
<p>Erreichbar ist der Minimalistic Shop <?php extern("https://rdb.blackpinguin.de/","hier"); ?>.</p>
<p>
Seit dem Umzug von einem anderen Server tritt gelegentlich ein unbekannter Fehler im Zusammenhang mit dem Server-Cache auf, den ich mir bisher noch nicht genauer angeschaut habe.
Der Fehler dürfte pro Besuch nur einmalig auftauchen, dann einfach die gewünschte Seite erneut aufrufen.
</p>
<?php locdiv(); ?>
<table><tbody>
<tr> <th>Sprachen</th> <td>Scala, SQL, XML, XSLT, HTML, CSS, JavaScript, Java<?php $rcl->newFoot("Die einzige Verwendung von Java-Quelltext in diesem Projekt ist in den JSP-Dateien und in den kopierten Klassen für bcrypt und Mersenne-Twister von einem älteren Projekt von mir."); ?></td> </tr>
<tr> <th>Technologien</th> <td>XSD, DTD, MySQL, Prepared Statements, JDBC, bcrypt, Mersenne-Twister, BigDecimal, Tomcat, JSP</td> </tr>
<tr> <th>IDE</th> <td>Eclipse mit Scala IDE</td> </tr>
<tr> <th>Beteiligte</th> <td>1</td> </tr>
</tbody></table>
<?php } else { ?>
<p>Minimalistic Shop is a website, that was created in the summer semester 2013 at the <?php privatea("/haw/bms/13ss/RDB/","Relational Databases"); ?> course of <?php echo (new BMSCourse())->_studium; ?>.</p>
<p>
This technical demonstration of a online marketplace offers various product categories for purchase.
Products that are added to the shopping cart can be ordered after registering or loging into an user account.
The product categories are arranged hierarchicallly, products can be in several categories, and the search can be limited to a specific category.
</p>
<p>The task specification for the project required it to use Java classes, JDBC, Tomcat and JSP.
Instead of Java, I've used Scala to generate compiled Java classes.
The JSP files don't contain any application logic, but each JSP calls a single Scala method with the parameters of the HTTP connection.
</p>
<p>
The architecture of the Scala project is structured into three packages.
One package for the database access via prepared statemens, the business logic and transactions, another package for the XML output generation, and the last package to validate the input parameters and act according to them.
The XML that the website provides is parsed to HTML with XSLT 1.0 by the client's browser.
</p>
<p>The Minimalistic Shop is available <?php extern("https://rdb.blackpinguin.de/","here"); ?>.</p>
<p>
Since I moved the site from another server, an unknown error with the server cache occurs sometimes, which I haven't investigated yet.
It should only occur once per visit and is gone when the desired page is requested again.
</p>
<?php locdiv(); ?>
<table><tbody>
<tr> <th>Languages</th> <td>Scala, SQL, XML, XSLT, HTML, CSS, JavaScript, Java<?php $rcl->newFoot("The only usage of Java source code in this project is in the JSP files and in reused bcrypt and Mersenne Twister classes from one of my older projects."); ?></td> </tr>
<tr> <th>Technologies</th> <td>XSD, DTD, MySQL, Prepared Statements, JDBC, bcrypt, Mersenne Twister, BigDecimal, Tomcat, JSP</td> </tr>
<tr> <th>IDE</th> <td>Eclipse with Scala IDE</td> </tr>
<tr> <th>Participants</th> <td>1</td> </tr>
</tbody></table>
<?php } ?>
<div style="clear: both;"></div>

<?php include("/rcl/www/rcl/include2.php"); ?>
