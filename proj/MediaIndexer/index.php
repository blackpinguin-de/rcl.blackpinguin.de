<?php $title = "Media Indexer"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php loc(array(
  'Scala' => 1374
, 'XSLT' => 463
, $rcl->lang('Kommentare','Comments') => 290
, 'JavaScript' => 144
, 'CSS' => 143
, 'XSD' => 109
, 'DTD' => 47
, 'Java' => 5
)); ?>

<a href="mindex.png"><img src="mindex.png" alt="Screenshot" title="Screenshot" style="width: 40%; height: auto; float: right; margin-left: 10px; margin-bottom: 10px;" /></a>
<?php if($rcl->lang === "de") { ?>
<p>
Prof. Dr. <?php extern("http://weitz.de/","Edmund Weitz"); $rcl->newFoot("Mein Dozent in: ".privateaStr("/haw/bms/13ss/M1/","Mathematik 1").", ".privateaStr("/haw/bms/13ws/M2/","Mathematik 2").", ".privateaStr("/haw/bms/14ss/MINF/","Ausgewählte Themen der Medieninformatik")." und ".privateaStr("/haw/bms/14ws/TI/","Theoretische Informatik")."."); ?> begann im Wintersemester 2013/14 damit, alle seine Vorlesungen aufzuzeichnen und online zur Verfügung zu stellen.
</p><p>
Weil mir die <?php extern("http://mediathek.mt.haw-hamburg.de/","ViMP-Mediathek"); ?> zu unübersichtlich ist, sie damals keine Downloadmöglichkeit enthielt und nicht die Features bietet die ich gerne hätte, entwickelte ich an einem Wochenende einen simplen Webcrawler, der automatisiert nach neuen Videos sucht, eine lokale Datenbank pflegt und einen übersichtlichen HTML-Index erstellt.
Videos werden nach Vorlesung und Datum gruppiert, und sie können manuell mit einer Checkbox vom Webseitenbesucher markiert werden<?php $rcl->newFoot("Die Zustände der Checkboxen, und welche Gliederungspunkte auf oder zugeklappt sind, werden selbstverständlich lokal im Browser gespeichert, nicht über Cookies oder ähnliches übertragen und sind dem Webserver deshalb unbekannt.") ?>.
</p><p>
Der Media Indexer wurde zwischen dem Wintersemester 2013/14 und dem Sommersemester 2014 gegen ein kleines Honorar um folgende Features erweitert:
<ul>
    <li>Zusätzlicher Gliederungspunkt: Semester.</li>
    <li>Videodauer und Anzahl der Videos aufsummieren.</li>
    <li>Konfigurationsdatei, um einstellen zu können welche URL die Mediathek hat, wo im HTML-DOM die Informationen liegen und wie sie zu parsen sind.</li>
    <li>Konfigurationsdatei, um die Gliederung beliebig zu ändern, sowie mittels regulärer Ausdrücke die Zugehörigkeit zu den Gliederungspunkten einzustellen.</li>
    <li>Makros für die Konfigurationsdatei, um das Datum und das Semester vom Indexer erkennen zu lassen und in der Gliederung, beliebig verwenden zu können.</li>
    <li>Mehr Kommandozeilenparameter<?php $rcl->newFoot("Manuell einzelne Videos löschen/aktualisieren, den Index neu generieren ohne Suche (z.B. bei geänderter Konfigurationsdatei), die Datenbank zurücksetzen und alles erneut erzeugen, usw.");?>.</li>
    <li>Die interne Datenbank geändert von CSV zu XML.</li>
    <li>Ausgabe-HTML nicht mehr fest einprogrammiert, sondern über XSLT erzeugen.</li>
    <li>Zusätzliche Ausgabe: RSS-Feeds (ebenfalls über XSLT).</li>
    <li>Unterseiten, für Semester und Vorlesungen, generieren, um nicht immer die riesige Startseite laden zu müssen.</li>
    <li>Multithreading: asynchrone HTTP-Anfragen, Auswertung und Outputgenerierung alles parallelisiert<?php $rcl->newFoot("Die Zahlen sind durch die vielen neuen Funktionen nicht direkt vergleichbar, aber die Laufzeit für einen vollständigen Lauf hat sich von 6.3 Minuten bei 461 Videos auf 3.3 Minuten bei 518 Videos verbessert. In der Regel wird kein vollständiger Lauf über alle Seiten und Videos durchgeführt, sondern es werden nur die ersten etwa 1-2 Seiten und neu hinzugekommene Videos aufgerufen."); ?>.</li>
    <li>Verbesserter Umgang mit, sowie Protokollierung und Benachrichtigung bei, Exceptions</li>
</ul>
</p><p>
Zwischen dem Sommersemester 2014 und dem Wintersemester 2014/15 wurde der Indexer erneut leicht überarbeitet:
<ul>
    <li>Bugfix: Betriebssystemabhängige Probleme mit Umlauten in Veranstaltungsnamen<?php $rcl->newFoot("Die Namen der Lehrveranstaltungen werden als Ordnernamen verwendet und bilden dadurch die URLs für die Unterseiten. Das Programm ist in jeder Hinsicht explizit auf UTF-8 konfiguriert, aber trotzdem sorgte auf einem von drei Computern das Dateisystem dafür, dass Unterseiten mit Umlauten nicht mehr aktualisiert wurden."); ?>.</li>
    <li>Manuell implementierter und optimierter Insertionsort-Sortieralgorithmus, welcher entgegen dem Quicksort von Arrays.sort besser für diese Anwendung geeignet ist <?php $rcl->newFoot("Die alten Daten sind bereits sortiert und neu hinzukommende Einträge werden meist nur hinten angehängt und untereinander sortiert."); ?>.</li>
    <li>weitere Ausgabeformate: XML<?php $rcl->newFoot("Basierend auf dem XML-Format hat ein Kommilitone ein ".externStr("https://github.com/jmnx/AL-ViDo/","Python-Skript")." erstellt, womit automatisch alle Videos einer Lehrveranstaltung heruntergeladen werden können."); ?> und JSON (beides über XSLT).</li>
</ul>
</p><p>
Im Wintersemester 2014/15 wurde der Indexer um einen Kommentarzähler ergänzt, um evtl. wichtige Anmerkungen und Korrekturen hervorzuheben.
</p>
<p>
Angewendet wird der Media Indexer, einerseits von Prof. Dr. Weitz auf einem <?php extern("http://weitz.de/haw-videos/","geschützten Bereich"); ?> seiner Webseite, auf den nur Studierende mit Passwort Zugriff haben, und anderseits von mir auf <?php extern("https://indexer.blackpinguin.de/","meiner Webseite"); ?>.
Beide Instanzen verwenden dieselbe Software, unterscheiden sich aber etwas in den Konfigurationsdateien<?php $rcl->newFoot("Meine Konfiguration akzeptiert prinzipiell auch Videos, die von anderen Dozenten in die Mediathek eingestellt werden, und listet Videos für die keine Regel angelegt wurde als unsortiert."); ?>.
</p>
<?php locdiv(); ?>
<table><tbody>
<tr> <th>Sprachen</th> <td>Scala, XML, XSLT, HTML, CSS, JavaScript, JSON</td> </tr>
<tr> <th>Technologien</th> <td>Async Http Client, HtmlCleaner, Xerces, Xalan, EXSLT, Futures, Scala Regex, StringEscapeUtils, ThreadLocal, Java Properties, XPath, XSD, DTD, HTML5, jQuery, RSS</td> </tr>
<tr> <th>IDE</th> <td>Eclipse mit Scala IDE</td> </tr>
<tr> <th>Beteiligte</th> <td>1</td> </tr>
</tbody></table>
<?php } else { ?>
<p>
In the winter semester 2013/14 Prof. Dr. <?php extern("http://weitz.de/","Edmund Weitz"); $rcl->newFoot("My lecturer in: ".privateaStr("/haw/bms/13ss/M1/","Mathematics 1").", ".privateaStr("/haw/bms/13ws/M2/","Mathematics 2").", ".privateaStr("/haw/bms/14ss/MINF/","Selected Topics of Media Computer Science")." and ".privateaStr("/haw/bms/14ws/TI/","Theoretical Computer Science")."."); ?> started to record all of his lectures and distributed them online.
</p><p>
Because I find the ViMP <?php extern("http://mediathek.mt.haw-hamburg.de/","media center"); ?> too unintuitive and unclear, it didn't offer download links at that time, and it doesn't have the features I need, I developed a simple web crawler in one weekend.
It automatically searches for new videos, caches them in a local database and generates a clear and simple index for the media center as an static HTML file.
Videos get structurally grouped by course and by lecture date and can be marked by the website user via checkboxes <?php $rcl->newFoot("The state of the checkboxes, and which structure element is open or closed, are of course locally saved in the browser, and not transmitted over cookies or similiar, remaining unknown to the web server.") ?>.
</p><p>
The Media Indexer was extended between the winter semester 2013/14 and the summer semester 2014 by the following features for a minor honorarium:
<ul>
    <li>Additional structure group: semesters.</li>
    <li>Summation of video duration and number of videos.</li>
    <li>Configuration file, to set the media center URL, where the data inside the HTML-DOM resides and how it is parsed.</li>
    <li>Configuration file, to arbitrarily change the structure of the index, as well as changing the regular expressions to determine structure membership.</li>
    <li>Macros for the configuration files, to determine the date and semester by the program, to use them as structuring elements.</li>
    <li>More command line parameters<?php $rcl->newFoot("Manually delete or update single videos, generating the index without a search (e.g. when the config files have changes), reset the local database and start from scratch, etc.");?>.</li>
    <li>The internal database have changed from CSV to XML.</li>
    <li>The HTML generation isn't programmed into the binary executable anymore, but is outsourced to a XSLT file.</li>
    <li>Additional output: RSS-Feeds (likewise via XSLT)</li>
    <li>Generating subpages for semesters and couses, to not always have to load the huge front page.</li>
    <li>Multithreading: asynchronous HTTP requests, analysis and output generation are all parallelized<?php $rcl->newFoot("The numbers aren't comparable, because of all the new features, but the running time for a complete run improved from 6.3 minutes with 461 videos to 3.3 minutes with 518 videos. Usually there isn't a complete run over all pages and all videos, but a small run over only the first few pages and videos that were added since the last run."); ?></li>
    <li>Improved exception handling, logging and reporting.</li>
</ul>
</p><p>
Between the summer semester 2014 and the winter semester 2014/15 it was again slightly extended:
<ul>
    <li>Bugfix: operating system dependent problems with umlauts in course names<?php $rcl->newFoot("The course names are used as directory names, forming the URLs of the subpages. The program is configured to use UTF-8 whenever possible, but nonetheless on one of three systems the file system prevented subpages with umlauts to update."); ?>.</li>
    <li>Manually implemented and optimized insertion sort algorithm, which is, contrary to the quicksort algorithm of Arrays.sort, better fitted for this application <?php $rcl->newFoot("The old elements are already sorted and new elements will usually be added to the end and rearranged only with other new elements."); ?>.</li>
    <li>Additional outputs: XML<?php $rcl->newFoot("Based on the XML format, a fellow student made a ".externStr("https://github.com/jmnx/AL-ViDo/","Python script").", that automatically downloads all video files of one course."); ?> and JSON (both via XSLT).</li>
</ul>
</p><p>
In the winter semester 2014/15 the Media Indexer was extended with a comment counter, to highlight potentially important remarks and corrections.
</p>
<p>
The Media Indexer is used by Prof. Dr. Weitz, in a <?php extern("http://weitz.de/haw-videos/","private area"); ?> of his website, that only students with the correct password can access, and by me on <?php extern("https://indexer.blackpinguin.de/","my website"); ?>.
Both instances use the same software, but differ in the configuration files<?php $rcl->newFoot("In contrary, my configuration accepts video files that other lecturers might have added to the media center, and lists videos for that no rule has matched as 'Unsortiert' (engl.: unsorted)."); ?>.
</p>
<?php locdiv(); ?>
<table><tbody>
<tr> <th>Languages</th> <td>Scala, XML, XSLT, HTML, CSS, JavaScript, JSON</td> </tr>
<tr> <th>Technologies</th> <td>Async Http Client, HtmlCleaner, Xerces, Xalan, EXSLT, Futures, Scala Regex, StringEscapeUtils, ThreadLocal, Java Properties, XPath, XSD, DTD, HTML5, jQuery, RSS</td> </tr>
<tr> <th>IDE</th> <td>Eclipse with Scala IDE</td> </tr>
<tr> <th>Participants</th> <td>1</td> </tr>
</tbody></table>
<?php } ?>
<div style="clear: both;"></div>

<?php include("/rcl/www/rcl/include2.php"); ?>
