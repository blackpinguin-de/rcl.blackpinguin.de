<?php $title = "GameZ4you"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php loc(array(
  'PHP' => 2208
, $rcl->lang('Kommentare','Comments') => 189
, 'CSS' => 108
, 'JavaScript' => 44
)); ?>

<a href="g4y.png"><img src="g4y.thumb.png" alt="Screenshot" title="Screenshot" style="width: 40%; height: auto; float: right; margin-left: 10px; margin-bottom: 10px;" /></a>
<?php if($rcl->lang === "de") { ?>
<p>GameZ4you ist eine Webseite, die im April 2008 im Fach <?php privatea("/g10/tai/AeHTML/","AeHTML"); ?> der <?php echo (new TAICourse())->_schooltype; ?> erstellt und im Wintersemester 2010/11 im Modul <?php privatea("/haw/bai/10ws/BW2/","Betriebswirtschaft 2"); ?> des Studienganges <?php echo (new BAICourse())->_studium; ?> erweitert wurde.</p>
<p>
In dieser technischen Demonstration eines Online-Shops werden Computerspiele zum Kauf angeboten.
Nach der Registrierung eines neuen Benutzeraccounts (bzw. nach dem Login) können die Artikel dem Warenkorb hinzugefügt und bestellt werden.
</p>
<p>Die Erweiterungen, die 2010 erfolgten, sind: Strukturstückliste, ABC-Analyse, Primärbedarfsanalyse, Kaufempfehlungen und Google Analytics Einbindung (deaktiviert).</p>
<p>
Entwickelt wurde die Webseite 2008 zusammen mit Christian Stoffers (Produkttexte und -bilder), Henrik Kaese (HTML-Gestaltung) und Patrick Stockfisch (CSS-Gestaltung und Logo).
Mein Aufgabenbereich war die Entwicklung der Datenbank und die Programmierung der dynamischen Bestandteile der Webseite.
Bei der Erweiterung 2010 war Dimitri Fast beteiligt.
</p>
<p>Erreichbar ist GameZ4you <?php extern("https://shop.blackpinguin.de/","hier"); ?>.</p>
<?php locdiv(); ?>
<table><tbody>
<tr> <th>Sprachen</th> <td>PHP, JavaScript, HTML, CSS, SQL</td> </tr>
<tr> <th>Technologien</th> <td>Server2Go (Apache, PHP, MySQL), Google Analytics</td> </tr>
<tr> <th>IDE</th> <td>Notepad++</td> </tr>
</tbody></table>
<?php } else { ?>
<p>GameZ4you is a website, that was created in April 2008 at the <?php privatea("/g10/tai/AeHTML/","AeHTML"); ?> course of <?php echo (new TAICourse())->_schooltype; ?> and was extended in the winter semester 2010/11 at the <?php privatea("/haw/bai/10ws/BW2/","Business Studies 2"); ?> course of <?php echo (new BAICourse())->_studium; ?>.</p>
<p>
This technical demonstration of a online marketplace offers computer games for purchase.
Products can be added to the shopping cart and ordered after registering or loging into an user account.
</p>
<p>The extensions that were made in 2010 are: structural parts list, ABC analysis, primary demand analysis, purchase recommendations and Google Analytics integration (deactivated).</p>
<p>
The website was developed in 2008 together with Christian Stoffers (product texts and pictures), Henrik Kaese (HTML design) and Patrick Stockfisch (CSS design and logo)
My duties were the development of the database and the programming of the dynamic aspects of the website.
Dimitri Fast worked together with me on the extensions of 2010.
</p>
<p>GameZ4you is available <?php extern("https://shop.blackpinguin.de/","here"); ?>.</p>
<?php locdiv(); ?>
<table><tbody>
<tr> <th>Languages</th> <td>PHP, JavaScript, HTML, CSS, SQL</td> </tr>
<tr> <th>Technologies</th> <td>Server2Go (Apache, PHP, MySQL), Google Analytics</td> </tr>
<tr> <th>IDE</th> <td>Notepad++</td> </tr>
</tbody></table>
<?php } ?>
<div style="clear: both;"></div>

<?php include("/rcl/www/rcl/include2.php"); ?>
