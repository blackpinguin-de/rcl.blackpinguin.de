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
    <tr>  <th>Event</th>  <th>Rolle</th>  <th>Veranstaltungsort</th>  <th>Besuchsdatum</th>  </tr>
    <?php } else { ?>
    <tr>  <th>Event</th>  <th>Role</th>  <th>Location</th>  <th>Date of attendance</th>  </tr>
    <?php } ?>
</thead>
<tbody>
<!--
<tr>
  <td>Einstieg Hamburg 2007</td>
  <td><?= $rcl->lang("Besucher", "Attendee") ?></td>
  <td>Hamburg, <?= $rcl->lang("Deutschland", "Germany") ?></td>
  <td>2007-??-??</td>
</tr>
-->
<tr>
  <td><?php extern("http://www.giga.de/unternehmen/intel/leserartikel/blizzard-amp-intel-warcraft-weekend-ende-von-tag-2/","Blizzard &amp; Intel Warcraft Weekend"); ?></td>
  <td><?= $rcl->lang("Besucher", "Attendee") ?></td>
  <td>Hamburg, <?= $rcl->lang("Deutschland", "Germany") ?></td>
  <td>2007-06-23</td>
</tr>
<tr>
  <td><?php extern("http://www.wowwiki.com/BlizzCon_2007","BlizzCon 2007"); ?></td>
  <td><?= $rcl->lang("Besucher", "Attendee") ?></td>
  <td>Anaheim, <?= $rcl->lang("Kalifornien", "California") ?>, USA</td>
  <td>2007-08-03 - 2007-08-04</td>
</tr>
<tr>
  <td><?php extern("https://events.ccc.de/congress/2009","26th Chaos Communication Congress"); ?></td>
  <td><?= $rcl->lang("Besucher", "Attendee") ?></td>
  <td>Berlin, <?= $rcl->lang("Deutschland", "Germany") ?></td>
  <td>2009-12-29</td>
</tr>
<tr>
  <td><?php extern("https://wiki.cacert.org/events/2010-11-05-ATE-Hamburg","CAcert Assurer Training Event Hamburg"); ?></td>
  <td><?= $rcl->lang("Besucher", "Attendee") ?></td>
  <td>Hamburg, <?php echo $rcl->lang("Deutschland", "Germany") ?></td>
  <td>2010-11-05</td>
</tr>
<tr>
  <td><?php extern("https://events.ccc.de/congress/2012/","29th Chaos Communication Congress"); ?></td>
  <td><?= $rcl->lang("Besucher", "Attendee") ?></td>
  <td>Hamburg, <?= $rcl->lang("Deutschland", "Germany") ?></td>
  <td>2012-12-27 - 2012-12-30</td>
</tr>
<tr>
  <td><?php extern("https://events.ccc.de/congress/2014/wiki/Main_Page","31st Chaos Communication Congress"); ?></td>
  <td><?= $rcl->lang("Besucher", "Attendee") ?></td>
  <td>Hamburg, <?= $rcl->lang("Deutschland", "Germany") ?></td>
  <td>2014-12-27 - 2014-12-30</td>
</tr>
<tr>
  <td><?php extern("http://www.creative-gaming.eu/blog/2015/01/21/%E2%80%9Epong-invaders-reality%E2%80%9C-in-hamburg/","Creative Gaming Show"); ?> <?= $rcl->lang("mit ", "with ") . internStr("/proj/DeathStarPD/","Death Star PD")?></td>
  <td><?= $rcl->lang("Aussteller", "Exhibitor") ?></td>
  <td>Hamburg, <?= $rcl->lang("Deutschland", "Germany") ?></td>
  <td>2015-01-31</td>
</tr>
<tr>
  <td><?php extern("http://www.hh-mag.net/mag2015","Hamburg MaGnology 2015"); ?></td>
  <td><?= $rcl->lang("Besucher", "Attendee") ?></td>
  <td>Hamburg, <?= $rcl->lang("Deutschland", "Germany") ?></td>
  <td>2015-06-06 - 2015-06-07</td>
</tr>
<tr>
  <td><?php extern("https://events.ccc.de/congress/2015/","32nd Chaos Communication Congress"); ?></td>
  <td><?= $rcl->lang("Besucher", "Attendee") ?></td>
  <td>Hamburg, <?= $rcl->lang("Deutschland", "Germany") ?></td>
  <td>2015-12-27 - 2015-12-30</td>
</tr>
<tr>
  <td><?php extern("https://www.hsh-nordbank-run.de/","HSH Nordbank Run 2016"); ?></td>
  <td><?= $rcl->lang("Teilnehmer", "Participant") ?></td>
  <td>Hamburg, <?= $rcl->lang("Deutschland", "Germany") ?></td>
  <td>2016-06-18</td>
</tr>
<tr>
  <td><?php extern("https://events.ccc.de/congress/2016/","33rd Chaos Communication Congress"); ?></td>
  <td><?= $rcl->lang("Besucher", "Attendee") ?></td>
  <td>Hamburg, <?= $rcl->lang("Deutschland", "Germany") ?></td>
  <td>2016-12-27 - 2016-12-30</td>
</tr>
<tr>
  <td><?php extern("http://www.hamburger-tactica.de/?p=11651".$rcl->lang("","&lang=en"),"Hamburger Tactica 2017"); ?></td>
  <td><?= $rcl->lang("Besucher", "Attendee") ?></td>
  <td>Hamburg, <?= $rcl->lang("Deutschland", "Germany") ?></td>
  <td>2017-02-18 - 2017-02-19</td>
</tr>
<tr>
  <td><?php extern("http://magnology.de/","Hamburg MaGnology 2017"); ?></td>
  <td><?= $rcl->lang("Besucher", "Attendee") ?></td>
  <td>Hamburg, <?= $rcl->lang("Deutschland", "Germany") ?></td>
  <td>2017-06-09 - 2017-06-10</td>
</tr>
<tr>
  <td><?php extern("https://www.hsh-nordbank-run.de/","HSH Nordbank Run 2017"); ?></td>
  <td><?= $rcl->lang("Teilnehmer", "Participant") ?></td>
  <td>Hamburg, <?= $rcl->lang("Deutschland", "Germany") ?></td>
  <td>2017-07-01</td>
</tr>
</tbody>
</table>

<?php include("include2.php"); ?>
