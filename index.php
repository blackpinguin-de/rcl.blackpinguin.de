<?php include("include1.php"); ?>
<?php if($rcl->lang == "de"){ ?>
<p>
Herzlich Willkommen auf meinem Online-Portfolio,
<br/>ich bin Robin, <?php echo $myage; ?> Jahre alter Softwareentwickler aus Hamburg, mit einem Fokus auf Computerspiele.
</p>
<a class="teaser" href="<?php echo langUrl("/proj/DeathStarPD/"); ?>" title="Spiel: Death Star PD" style="float: right; margin-left: 10px; margin-bottom: 10px;">
    <img src="/proj/DeathStarPD/build.thumb.png" alt="Screenshot von Death Star PD" />
    <br/>Death Star PD
</a>
<?php /*<p>
Derzeit suche ich eine Festanstellung als Spieleprogrammierer / Softwareentwickler / Webentwickler, eventuell mit einem vorangehenden bezahlten Praktikum.
An Hamburg bin ich nicht gebunden, würde es aber bevorzugen in Deutschland zu bleiben.
</p>*/ ?>
<p>Einige Bereiche dieser Webseite sind <a class="private aicon">nur mit Zugangsdaten</a> abrufbar, die ich entweder <?php intern("contact","auf Anfrage");?> herausgebe oder Ihnen bereits in einer Bewerbung mitgeteilt habe.</p>
<p>
Individuelle Inhalte, die von mir erstellt wurden oder an denen ich mitgewirkt habe, wie z.B. Webseiten, Computerspiele und Programme, finden sich unter <?php intern("projects","Projekte", "Projects"); ?>.
Die Daten für die Codezeilen-Diagramme<noscript> (nur mit aktiviertem JavaScript sichtbar)</noscript> wurden mittels <?php extern("http://cloc.sourceforge.net/","cloc"); echo " erzeugt"; $rcl->newFoot("Es handelt sich um Codezeilen ohne Kommentare (separat angegeben) und ohne Leerzeilen.<br/><br/>Die Spracherkennung basiert auf der Dateiendung und gilt für die gesamte Datei. Eingebetteter Code anderer Sprachen wird deshalb nicht erkannt, weshalb nicht alle verwendeten Sprachen im Diagramm auftauchen.<br/><br/>Kommentare innerhalb eingebetteter Sprachen werden fälschlicherweise als Code gezählt."); ?>.
</p>
<a class="teaser" href="<?php echo langUrl("/proj/BrainOfTehZwarm/"); ?>" title="Spiel: Brain of teh Zwarm" style="float: left; margin-right: 10px; margin-bottom: 10px;">
    <img src="/proj/BrainOfTehZwarm/botz.thumb.png" alt="Screenshot von Brain of teh Zwarm" />
    <br/>Brain of teh Zwarm
</a>
<p>
In der Rubrik <?php intern("education", "Ausbildung", "Education"); ?> befindet sich eine Auflistung der von mir besuchten Schulen, Hochschulen, absolvierten Praktika und erworbenen Zertifikaten.
Im geschützten Bereich sind Noten, Zeugnisse, Nachweise und genauere Beschreibungen zu den Inhalten der Lehrveranstaltungen und meinen erbrachten Leistungen.
</p>
<p>Eine vollständige Liste der Programmiersprachen, Auszeichnungssprachen und <span class="mhyphen">Style&shy;sheet&shy;spra&shy;chen</span>, mit denen ich bereits gearbeitet habe, finden sich, zusammen mit Verweisen auf Lehrveranstaltungen und Projekten, in denen sie verwendet wurden, tabellarisch aufgelistet unter <?php intern("languages", "Sprachen", "Languages"); ?>.</p>
<p>Fachbücher, die ich gelesen habe, werden in der Rubrik <?php intern("literature", "Literatur", "Literature"); ?> aufgelistet, zusammen mit einer Einschätzung darüber, wieviel ich meine davon verstanden zu haben.</p>
<!-- <p>Verwendete Betriebssysteme, Entwicklungsumgebungen, Software und Frameworks gibt es gesammelt unter <?php intern("technics","Technik", "Technics"); ?>.</p> -->
<!-- <p><?php intern("events", "Events"); ?> bietet eine Übersicht der von mir besuchten Kongresse, Konferenzen und Messen.</p> -->
<?php } else { ?>
<p>
Welcome to my online portfolio,
<br/>I'm Robin, <?php echo $myage; ?> years old software developer from Hamburg (Germany), with a focus on computer games.
</p>
<a class="teaser" href="<?php echo langUrl("/proj/DeathStarPD/"); ?>" title="Game: Death Star PD" style="float: right; margin-left: 10px; margin-bottom: 10px;">
    <img src="/proj/DeathStarPD/build.thumb.png" alt="Screenshot from Death Star PD" />
    <br/>Death Star PD
</a>
<?php /*<p>
Currently, I'm looking for a job as a game programmer / software developer / web developer, ideally with an precedent paid internship.
I'm not bound to Hamburg, but I'd prefer to stay in Germany.
</p>*/ ?>
<p>
Some areas of this website are <a class="private aicon">protected</a> with a password.
You can get one either by <?php intern("contact","requesting it");?> from me or I already gave you one with my job application.</p>
<p>
Individual contents that I have produced or contributed to, e.g. websites, video games and programs, can be found under <?php intern("projects","Projekte", "Projects"); ?>.
The data for the Lines of Code charts<noscript> (only visible with enabled JavaScript)</noscript> was generated with <?php extern("http://cloc.sourceforge.net/","cloc"); $rcl->newFoot("These are Source Lines of Code (SLOC), code without comments (seperately listed) and without blank lines.<br/><br/>The language recognition is based on file extensions and is applied on whole file. Therefore embedded code of other languages isn't recognized, which is why not all used languages are displayed in the charts.<br/><br/>Comments in embedded languages are wrongfully counted as code."); ?>.
</p>
<a class="teaser" href="<?php echo langUrl("/proj/BrainOfTehZwarm/"); ?>" title="Game: Brain of teh Zwarm" style="float: left; margin-right: 10px; margin-bottom: 10px;">
    <img src="/proj/BrainOfTehZwarm/botz.thumb.png" alt="Screenshot from Brain of teh Zwarm" />
    <br/>Brain of teh Zwarm
</a>
<p>
In the <?php intern("education", "Ausbildung", "Education"); ?> region is a list of all the schools, universities, internships and certificates that I attended / achieved.
The protected area of this region consists of Grades, Leaving Certificates, Certificates of Attendance and detailed descriptions about the courses and my activities.
</p>
<p><?php intern("languages", "Sprachen", "Languages"); ?> is an exhaustive tabular listing of all programming, markup and stylesheet languages that I've worked with, together with references to where they were used.</p>
<p>Textbooks that I've read and estimates of how much of them I've understood are listed in the <?php intern("literature", "Literatur", "Literature"); ?> section.</p>
<!-- <p>The <?php intern("technics","Technik", "Technics"); ?> area aggregates operating systems, integrated development environments, software and frameworks that I've used.</p> -->
<!-- <p><?php intern("events", "Events"); ?> gives an overview obout congresses, conferences and exhibition that I attended or that I'm going to attend.</p> -->
<?php } ?>
<div style="clear: both;"></div>

<?php include("include2.php"); ?>
