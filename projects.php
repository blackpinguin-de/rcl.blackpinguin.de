<?php include_once("/rcl/www/funktionen.php"); ?>
<?php $title = $rcl->lang("Projekte","Projects"); $path = "/projects"; ?>
<?php include("include1.php"); ?>

<style type="text/css" scoped="scoped">
#projects > tbody > tr > td { width: 100%; }
#projects > tbody > tr > th { vertical-align: top; font-weight: normal; }
#projects { margin: -25px -10px -25px -10px; border-spacing: 10px 25px; border-collapse: separate; }
#projects div span { padding: 2px 5px 2px 5px; }
#projects div:hover > span { background-color: rgba(255, 165, 46, 0.2); }
#projects div:hover:after { content: ""; right: 20px; top: 35px; position: absolute; display: block; width: 25vw; height: calc(100% - 60px); background-size: contain; background-repeat: no-repeat; background-position: right top; opacity: 1.0; pointer-events:none; }
#projects tr.y2016 div:nth-of-type(1):hover:after { background-image: url(/proj/hsvscr.png); }
#projects tr.y2015 div:nth-of-type(1):hover:after { background-image: url(/proj/SonicGuessture/plakat.thumb.png); }
#projects tr.y2015 div:nth-of-type(2):hover:after { background-image: url(/proj/rcl.png); }
#projects tr.y2015 div:nth-of-type(3):hover:after { background-image: url(/proj/status.png); }
#projects tr.y2014 div:nth-of-type(1):hover:after { background-image: url(/proj/DeathStarPD/build.thumb.png); }
#projects tr.y2014 div:nth-of-type(2):hover:after { background-image: url(/proj/dHeap/dheap.png); }
#projects tr.y2014 div:nth-of-type(3):hover:after { background-image: url(/proj/SindWirSchonDa/calc.thumb.png); }
#projects tr.y2014 div:nth-of-type(4):hover:after { background-image: url(/proj/Gefahrengebiete/gefahr.png); }
#projects tr.y2014 div:nth-of-type(5):hover:after { background-image: url(/proj/ic.png); }
#projects tr.y2013 div:nth-of-type(1):hover:after { background-image: url(/proj/BrainOfTehZwarm/botz.thumb.png); }
#projects tr.y2013 div:nth-of-type(2):hover:after { background-image: url(/proj/DarkSideOfMorra/dsom.thumb.png); }
#projects tr.y2013 div:nth-of-type(3):hover:after { background-image: url(/proj/MediaIndexer/mindex.png); }
#projects tr.y2013 div:nth-of-type(4):hover:after { background-image: url(/proj/MinimalisticShop/ms.thumb.png); }
#projects tr.y2013 div:nth-of-type(5):hover:after { background-image: url(/proj/tor.png); }
#projects tr.y2013 div:nth-of-type(6):hover:after { background-image: url(/proj/AutounfallApp/02.png); }
#projects tr.y2011 div:nth-of-type(1):hover:after { background-image: url(/proj/AIS/ais.thumb.png); }
#projects tr.y2011 div:nth-of-type(2):hover:after { background-image: url(/proj/Simrgy/unfall.png); }
#projects tr.y2011 div:nth-of-type(3):hover:after { background-image: url(/proj/RLVierGewinnt/vg.png); }
#projects tr.y2011 div:nth-of-type(4):hover:after { background-image: url(/proj/MarketChecker/mc1.thumb.png); }
#projects tr.y2010 div:nth-of-type(1):hover:after { background-image: url(/proj/GeoTweet/geotweet.thumb.png); }
#projects tr.y2010 div:nth-of-type(2):hover:after { background-image: url(/proj/gwtbw.png); }
#projects tr.y2009 div:nth-of-type(1):hover:after { background-image: url(/proj/MauDauMau/mdm.jpg); }
#projects tr.y2008 div:nth-of-type(1):hover:after { background-image: url(/proj/GameZ4you/g4y.thumb.png); }
#projects tr.y2007 div:nth-of-type(1):hover:after { background-image: url(/proj/lifeless.png); }
#projects tr.y2003 div:nth-of-type(1):hover:after { background-image: url(/proj/bp.png); }
</style>

<table id="projects"><tbody>

<tr class="y2019"> <th>2019</th>
<td>
<div><span><?php echo $rcl->lang("Webseite: ", "Website: "); extern("https://pine.blackpinguin.de/", "Pine Interactive Map"); echo ' '; extern("https://github.com/Istador/pine-interactive-map/","(Github)"); ?></span></div>
</td> </tr>

<tr class="y2018"> <th>2018</th>
<td>
<div><span><?php echo $rcl->lang("Add-on: ", "Add-on: "); extern("https://github.com/Istador/old-search-fixed/","Old Search Fixed 3 (Firefox)"); ?></span></div>
</td> </tr>

<tr class="y2016"> <th>2016</th>
<td>
<div><span><?php echo $rcl->lang("Programm: ", "Program: "); extern("https://github.com/Istador/HsvScreensaver/","HsvScreensaver"); ?></span></div>
</td> </tr>

<tr class="y2015"> <th>2015</th>
<td>
<div><span><?php echo $rcl->lang("Spiel: ", "Game: "); intern("/proj/SonicGuessture/","Sonic Guessture"); ?></span></div>
<div><span><?php echo $rcl->lang("Webseite: diese Seite", "Website: this page"); ?></span></div>
<div><span><?php echo $rcl->lang("Webseite: ", "Website: "); extern("https://status.blackpinguin.de/", "Server Status"); ?></span></div>
</td> </tr>

<tr class="y2014"> <th>2014</th>
<td>
<div><span><?php echo $rcl->lang("Spiel: ", "Game: "); intern("/proj/DeathStarPD/","Death Star PD"); ?></span></div>
<div><span><?php echo $rcl->lang("Webseite: ", "Website: "); intern("/proj/dHeap/", "dHeap-Visualisierung", "dHeap visualization"); ?></span></div>
<div><span>App: <?php intern("/proj/SindWirSchonDa/", "Sind wir schon da?", "Are we there yet?"); ?></span></div>
<div><span><?php echo $rcl->lang("Kurzfilm: ", "Short film: "); intern("/proj/Gefahrengebiete/", "Gefahrengebiete"); ?></span></div>
<div><span>Map: <?php extern("https://steamcommunity.com/sharedfiles/filedetails/?id=284923613", "Inferno Chamber (Portal 2)"); echo " "; youtube("_nFEOg_hOBU", "Playthrough"); ?></span></div>
</td> </tr>

<tr class="y2013"> <th>2013</th>
<td>
<div><span><?php echo $rcl->lang("Spiel: ", "Game: "); intern("/proj/BrainOfTehZwarm/", "Brain of teh Zwarm"); ?></span></div>
<div><span><?php echo $rcl->lang("Spiel: ", "Game: "); intern("/proj/DarkSideOfMorra/", "Dark Side of Morra"); ?></span></div>
<div><span><?php echo $rcl->lang("Webseite / Crawler: ", "Website / Crawler: "); intern("/proj/MediaIndexer/", "Media Indexer"); ?></span></div>
<div><span><?php echo $rcl->lang("Webseite: ", "Website: "); intern("/proj/MinimalisticShop/", "Minimalistic Shop"); ?></span></div>
<div><span><?php echo $rcl->lang("Webseite: ", "Website: "); extern("https://tor.blackpinguin.de/", "Statistiken meines Tor-Relays", "Statistics of my Tor relay"); ?></span></div>
<div><span>App: <?php intern("/proj/AutounfallApp/","Autounfall App","Car accident app"); ?></span></div>
</td> </tr>

<tr class="y2011"> <th>2011</th>
<td>
<div><span>Seminar: <?php intern("/proj/AIS/", "KI-Simulation in Computerspielen", "Simulation of AI in computer games"); ?></span></div>
<div><span><?php echo $rcl->lang("Spiel: ", "Game: "); intern("/proj/Simrgy/", "Sim'rgy"); ?></span></div>
<div><span><?php echo $rcl->lang("Spiel-KI: ", "Game AI: "); intern("/proj/RLVierGewinnt/", "RL: Vier Gewinnt", "RL: Connect Four"); ?></span></div>
<div><span><?php echo $rcl->lang("Webseite", "Website")." / App / API: "; intern("/proj/MarketChecker/", "Market Checker"); ?></span></div>
</td> </tr>

<tr class="y2010"> <th>2010</th>
<td>
<div><span><?php echo $rcl->lang("Programm: ", "Program: "); intern("/proj/GeoTweet/", "GeoTweet"); ?></span></div>
<div><span><?php echo $rcl->lang("Webseite: ", "Website: "); extern("https://blastwave.blackpinguin.de/", "Gone with the Blastwave"); ?></span></div>
</td> </tr>

<tr class="y2009"> <th>2009</th>
<td>
<div><span><?php echo $rcl->lang("Spiel: ", "Game: "); intern("/proj/MauDauMau/", "Mau Dau Mau"); ?></span></div>
</td> </tr>

<tr class="y2008"> <th>2008</th>
<td>
<div><span><?php echo $rcl->lang("Webseite: ", "Website: "); intern("/proj/GameZ4you", "GameZ4you"); ?></span></div>
</td> </tr>

<tr class="y2007"> <th>2007</th>
<td>
<div><span><?php echo $rcl->lang("Webseite: ", "Website: "); extern("https://lifeless.blackpinguin.de/", "Lifeless"); ?></span></div>
</td> </tr>

<tr class="y2003"> <th>2003</th>
<td>
<div><span><?php echo $rcl->lang("Webseite: ", "Website: "); extern("https://www.blackpinguin.de/", "blackpinguin.de"); ?></span></div>
</td> </tr>

</tbody></table>

<?php include("include2.php"); ?>
