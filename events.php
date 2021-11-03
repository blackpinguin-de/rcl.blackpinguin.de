<?php include_once("/rcl/www/funktionen.php"); ?>
<?php $title = "Events";  $path = "/events"; ?>
<?php include("include1.php"); ?>

<div>
<?php if($rcl->lang === "de") { ?>
Diese Seite listet Veranstaltungen auf an denen ich teilgenommen habe oder teilnehmen werde.
<?php } else { ?>
This site lists events that I attended, or am going to attend.
<?php }?>
</div>
<br/>

<table id="events">
<thead>
    <?php if($rcl->lang === "de") { ?>
    <tr>  <th>Event</th>  <th>Rolle</th>  <th>Typ</th>  <th>Veranstaltungsort</th>  <th>Besuchsdatum</th>  </tr>
    <?php } else { ?>
    <tr>  <th>Event</th>  <th>Role</th>  <th>Type</th>  <th>Location</th>  <th>Date of attendance</th>  </tr>
    <?php } ?>
</thead>
<tbody>

<tr>
  <!-- dead link: http://www.giga.de/unternehmen/intel/leserartikel/blizzard-amp-intel-warcraft-weekend-ende-von-tag-2/ -->
  <td><?php extern("https://play.eslgaming.com/news/39977/Blizzard-Intel-Warcraft-Weekend-Seedings/","Blizzard &amp; Intel Warcraft Weekend"); ?></td>
  <td><?= $rcl->lang("Besucher", "Attendee") ?></td>
  <td><?= $rcl->lang("Public Viewing", "Public Screening") ?></td>
  <td>Hamburg, <?= $rcl->lang("Deutschland", "Germany") ?></td>
  <td>2007&#8209;06&#8209;23</td>
</tr>
<tr>
  <td><?php extern("http://www.wowwiki.com/BlizzCon_2007","BlizzCon 2007"); ?></td>
  <td><?= $rcl->lang("Besucher", "Attendee") ?></td>
  <td><?= $rcl->lang("Messe", "Convention") ?></td>
  <td>Anaheim, <?= $rcl->lang("Kalifornien", "California") ?>, USA</td>
  <td>2007&#8209;08&#8209;03 &ndash; 2007&#8209;08&#8209;04</td>
</tr>
<tr>
  <td><?php extern("https://events.ccc.de/congress/2009","26th Chaos Communication Congress"); ?></td>
  <td><?= $rcl->lang("Besucher", "Attendee") ?></td>
  <td><?= $rcl->lang("Kongress", "Congress") ?></td>
  <td>Berlin, <?= $rcl->lang("Deutschland", "Germany") ?></td>
  <td>2009&#8209;12&#8209;29</td>
</tr>
<tr>
  <td><?php extern("https://www.vorratsdatenspeicherung.de/content/view/364/55/lang,".$rcl->lang("de", "en")."/", "Freiheit statt Angst 2010", "Freedom not Fear 2010"); ?></td>
  <td><?= $rcl->lang("Demonstrant", "Protester") ?></td>
  <td>Demonstration</td>
  <td>Berlin, <?php echo $rcl->lang("Deutschland", "Germany") ?></td>
  <td>2010&#8209;09&#8209;11</td>
</tr>
<tr>
  <td><?php extern("https://wiki.cacert.org/events/2010-11-05-ATE-Hamburg","CAcert Assurer Training Event Hamburg"); ?></td>
  <td><?= $rcl->lang("Besucher", "Attendee") ?></td>
  <td>Training</td>
  <td>Hamburg, <?php echo $rcl->lang("Deutschland", "Germany") ?></td>
  <td>2010&#8209;11&#8209;05</td>
</tr>
<tr>
  <td><?php extern("https://events.ccc.de/congress/2012/","29th Chaos Communication Congress"); ?></td>
  <td><?= $rcl->lang("Besucher", "Attendee") ?></td>
  <td><?= $rcl->lang("Kongress", "Congress") ?></td>
  <td>Hamburg, <?= $rcl->lang("Deutschland", "Germany") ?></td>
  <td>2012&#8209;12&#8209;27 &ndash; 2012&#8209;12&#8209;30</td>
</tr>
<tr>
  <td><?php extern("https://events.ccc.de/congress/2014/wiki/Main_Page","31st Chaos Communication Congress"); ?></td>
  <td><?= $rcl->lang("Besucher", "Attendee") ?></td>
  <td><?= $rcl->lang("Kongress", "Congress") ?></td>
  <td>Hamburg, <?= $rcl->lang("Deutschland", "Germany") ?></td>
  <td>2014&#8209;12&#8209;27 &ndash; 2014&#8209;12&#8209;30</td>
</tr>
<tr>
  <td><?php extern("http://www.creative-gaming.eu/blog/2015/01/21/%E2%80%9Epong-invaders-reality%E2%80%9C-in-hamburg/","Creative Gaming Show"); ?> <?= $rcl->lang("mit ", "with ") . internStr("/proj/DeathStarPD/","Death Star PD")?></td>
  <td><?= $rcl->lang("Aussteller", "Exhibitor") ?></td>
  <td><?= $rcl->lang("Ausstellung", "Exhibition") ?></td>
  <td>Hamburg, <?= $rcl->lang("Deutschland", "Germany") ?></td>
  <td>2015&#8209;01&#8209;31</td>
</tr>
<tr>
  <!-- dead link: http://www.hh-mag.net/mag2015 -->
  <td><?php extern("https://en.wikipedia.org/wiki/Magnology","Hamburg MaGnology 2015"); ?></td>
  <td><?= $rcl->lang("Besucher", "Attendee") ?></td>
  <td><?= $rcl->lang("Messe", "Convention") ?></td>
  <td>Hamburg, <?= $rcl->lang("Deutschland", "Germany") ?></td>
  <td>2015&#8209;06&#8209;06 &ndash; 2015&#8209;06&#8209;07</td>
</tr>
<tr>
  <td><?php extern("https://events.ccc.de/congress/2015/","32nd Chaos Communication Congress"); ?></td>
  <td><?= $rcl->lang("Besucher", "Attendee") ?></td>
  <td><?= $rcl->lang("Kongress", "Congress") ?></td>
  <td>Hamburg, <?= $rcl->lang("Deutschland", "Germany") ?></td>
  <td>2015&#8209;12&#8209;27 &ndash; 2015&#8209;12&#8209;30</td>
</tr>
<tr>
  <td><?php extern("https://www.hsh-nordbank-run.de/","HSH Nordbank Run 2016"); ?></td>
  <td><?= $rcl->lang("Teilnehmer", "Participant") ?></td>
  <td><?= $rcl->lang("Benefizlauf", "Walkathon") ?></td>
  <td>Hamburg, <?= $rcl->lang("Deutschland", "Germany") ?></td>
  <td>2016&#8209;06&#8209;18</td>
</tr>
<tr>
  <td><?php extern("https://events.ccc.de/congress/2016/","33rd Chaos Communication Congress"); ?></td>
  <td><?= $rcl->lang("Besucher", "Attendee") ?></td>
  <td><?= $rcl->lang("Kongress", "Congress") ?></td>
  <td>Hamburg, <?= $rcl->lang("Deutschland", "Germany") ?></td>
  <td>2016&#8209;12&#8209;27 &ndash; 2016&#8209;12&#8209;30</td>
</tr>
<tr>
  <td><?php extern("http://www.hamburger-tactica.de/?p=11651&lang=".$rcl->lang("de","en"),"Hamburger Tactica 2017"); ?></td>
  <td><?= $rcl->lang("Besucher", "Attendee") ?></td>
  <td><?= $rcl->lang("Messe", "Convention") ?></td>
  <td>Hamburg, <?= $rcl->lang("Deutschland", "Germany") ?></td>
  <td>2017&#8209;02&#8209;18 &ndash; 2017&#8209;02&#8209;19</td>
</tr>
<tr>
  <td><?php extern("https://en.wikipedia.org/wiki/Magnology","Hamburg MaGnology 2017"); ?></td>
  <td><?= $rcl->lang("Besucher", "Attendee") ?></td>
  <td><?= $rcl->lang("Messe", "Convention") ?></td>
  <td>Hamburg, <?= $rcl->lang("Deutschland", "Germany") ?></td>
  <td>2017&#8209;06&#8209;09 &ndash; 2017&#8209;06&#8209;10</td>
</tr>
<tr>
  <td><?php extern("https://www.hsh-nordbank-run.de/","HSH Nordbank Run 2017"); ?></td>
  <td><?= $rcl->lang("Teilnehmer", "Participant") ?></td>
  <td><?= $rcl->lang("Benefizlauf", "Walkathon") ?></td>
  <td>Hamburg, <?= $rcl->lang("Deutschland", "Germany") ?></td>
  <td>2017&#8209;07&#8209;01</td>
</tr>
<tr>
  <td><?php extern("http://www.hamburger-tactica.de/?p=14672&lang=".$rcl->lang("de","en"),"Hamburger Tactica 2019"); ?></td>
  <td><?= $rcl->lang("Besucher", "Attendee") ?></td>
  <td><?= $rcl->lang("Messe", "Convention") ?></td>
  <td>Hamburg, <?= $rcl->lang("Deutschland", "Germany") ?></td>
  <td>2019&#8209;02&#8209;16 &ndash; 2019&#8209;02&#8209;17</td>
</tr>
<tr>
  <td><?php extern("https://netpolitik.org/2019/upload-filter-alle-demos-auf-einen-blick/", "SaveYourInternet Hamburg"); ?></td>
  <td><?= $rcl->lang("Demonstrant", "Protester") ?></td>
  <td>Demonstration</td>
  <td>Hamburg, <?php echo $rcl->lang("Deutschland", "Germany") ?></td>
  <td>2019&#8209;03&#8209;23</td>
</tr>
<tr>
  <td><?php extern("https://www.abendblatt.de/hamburg/article227142561/", "Alle fürs Klima"); ?></td>
  <td><?= $rcl->lang("Demonstrant", "Protester") ?></td>
  <td>Demonstration</td>
  <td>Hamburg, <?php echo $rcl->lang("Deutschland", "Germany") ?></td>
  <td>2019&#8209;09&#8209;20</td>
</tr>
</tbody>
</table>

<?php include("include2.php"); ?>
