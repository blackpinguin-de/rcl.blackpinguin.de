<?php include_once("/rcl/www/funktionen.php"); ?>
<?php $title = "Events";  $path = "/events"; ?>
<?php include("include1.php"); ?>

<table id="events">
<thead>
    <?php if($rcl->lang === "de") { ?>
    <tr>  <th>Event</th>  <th>Ort</th>  <th>Besuchsdatum</th>  </tr>
    <?php } else { ?>
    <tr>  <th>Event</th>  <th>Location</th>  <th>Date of attendance</th>  </tr>
    <?php } ?>
</thead>
<tbody>
<tr>  <td><?php extern("http://www.wowwiki.com/BlizzCon_2007","BlizzCon 2007"); ?></td>  <td>Anaheim, <?php echo $rcl->lang("Kalifornien", "California"); ?>, USA</td>  <td>2007-08-03 - 2007-08-04</td>  </tr>
<tr>  <td><?php extern("https://events.ccc.de/congress/2009","26th Chaos Communication Congress"); ?></td>  <td>Berlin, <?php echo $rcl->lang("Deutschland", "Germany"); ?></td>  <td>2009-12-29</td>  </tr>
<tr>  <td><?php extern("https://events.ccc.de/congress/2012","29th Chaos Communication Congress"); ?></td>  <td>Hamburg, <?php echo $rcl->lang("Deutschland", "Germany"); ?></td>  <td>2012-12-27 - 2012-12-30</td>  </tr>
<tr>  <td><?php extern("https://events.ccc.de/congress/2014","31th Chaos Communication Congress"); ?></td>  <td>Hamburg, <?php echo $rcl->lang("Deutschland", "Germany"); ?></td>  <td>2014-12-27 - 2014-12-30</td>  </tr>
</tbody>
</table>

<?php include("include2.php"); ?>
