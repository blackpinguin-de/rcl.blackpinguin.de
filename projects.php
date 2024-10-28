<?php include_once("/rcl/www/funktionen.php"); ?>
<?php $title = $rcl->lang("Projekte","Projects"); $path = "/projects"; ?>
<?php include("include1.php"); ?>

<style type="text/css" scoped="scoped">
#projects > tbody > tr > td { width: 100%; }
#projects > tbody > tr > th { vertical-align: top; font-weight: normal; padding-right: 10px; }
#projects > tbody > tr > th, #projects > tbody > tr > td { padding-top: 10px; padding-bottom: 10px; }
#projects div span { padding: 2px 5px 2px 5px; }
#projects div:hover > span { background-color: rgba(255, 165, 46, 0.2); }
#projects div:hover:after { content: ""; right: 20px; top: 35px; position: absolute; display: block; width: 25vw; height: calc(100% - 60px); background-size: contain; background-repeat: no-repeat; background-position: right top; opacity: 1.0; pointer-events:none; }
#projects tr.y2022 div:nth-of-type(2):hover:after { background-image: url(/proj/SMOO/smoo.dark.thumb.png); }
#projects tr.y2022 div:nth-of-type(5):hover:after { background-image: url(/proj/gamepadviewer-skins/preview.thumb.png); }
#projects tr.y2019 div:nth-of-type(2):hover:after { background-image: url(/proj/Pine/pine.thumb.png); }
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

#contributions { margin-top: 25px; }
#contributions > tbody > tr > td { width: 100%; }
#contributions > tbody > tr > th { vertical-align: top; font-weight: normal; padding-right: 10px; }
#contributions > tbody > tr > th, #contributions > tbody > tr > td { padding-top: 10px; padding-bottom: 10px; }
#contributions div span { padding: 2px 5px 2px 5px; }
</style>

<table id="projects"><tbody>
<thead> <tr> <th colspan="2"><?php echo $rcl->lang('Projekte', 'Projects') ?></th> </tr> </thead>

<tr class="y2022"> <th>2022</th> <td>
<div><span><?php echo $rcl->lang("Programm: ", "Program: "); extern(github("odyssey-downgrade"),"odyssey-downgrade"); echo " [".$rcl->lang("Dockerisierung","Dockerization")."]"; ?> [Fork]</span></div>
<div><span><?php echo $rcl->lang("Webseite: ", "Website: "); extern("https://smoo.it/", "Super Mario Odyssey: Online"); echo ' '; extern(github("smoo.it"),"(GitHub)"); ?></span></div>
<div><span><?php echo $rcl->lang("Programm: ", "Program: "); extern(github("node-ojds-nx-vigemclient"),"OJDS-NX ViGEm Client"); ?></span></div>
<div><span><?php echo $rcl->lang("Programm: ", "Program: "); extern(github("OJDS-NX"),"OJDS-NX"); echo " [".$rcl->lang("Dockerisierung","Dockerization")."]"; ?> [Fork]</span></div>
<div><span><?php echo $rcl->lang("Skins: ", "Skins: "); extern(github("gamepadviewer-skins"),"Gamepad Viewer Skins"); ?></span></div>
</td> </tr>

<tr class="y2021"> <th>2021</th> <td>
<div><span><?php echo $rcl->lang("Plugin: ", "Plugin: "); extern(github("ASL-Omno"),"LiveSplit Auto Splitter ".$rcl->lang("für","for")." Omno"); ?></span></div>
<div><span><?php echo $rcl->lang("Modul: ", "Module: "); extern(github("lodash-es-merge-undefined"),"lodash-es-merge-undefined"); ?></span></div>
</td> </tr>

<tr class="y2020"> <th>2020</th> <td>
<div><span><?php echo $rcl->lang("Programm: ", "Program: "); extern(gitlab("docker-alarm-clock-applet"),"docker-alarm-clock-applet"); echo " [".$rcl->lang("Dockerisierung","Dockerization")."]"; ?></span></div>
<div><span><?php echo $rcl->lang("Programm: ", "Program: "); extern(gitlab("gitlab-ci-orchestrator"),"gitlab-ci-orchestrator"); ?></span></div>
</td> </tr>

<tr class="y2019"> <th>2019</th> <td>
<div><span><?php echo $rcl->lang("Plugin: ", "Plugin: "); extern(github("babel-plugin-transform-unicode-regexp-runtime"),"babel-plugin-transform-unicode-regexp-runtime"); ?></span></div>
<div><span><?php echo $rcl->lang("Webseite: ", "Website: "); extern("https://pine.blackpinguin.de/", "Pine Interactive Map"); echo ' '; extern(github("pine-interactive-map"),"(GitHub)"); ?></span></div>
</td> </tr>

<tr class="y2018"> <th>2018</th> <td>
<div><span><?php echo $rcl->lang("Add-on: ", "Add-on: "); extern(github("old-search-fixed"),"Old Search Fixed 3 (Firefox)"); ?></span></div>
</td> </tr>

<tr class="y2016"> <th>2016</th> <td>
<div><span><?php echo $rcl->lang("Programm: ", "Program: "); extern(github("HsvScreensaver"),"HsvScreensaver"); ?></span></div>
</td> </tr>

<tr class="y2015"> <th>2015</th> <td>
<div><span><?php echo $rcl->lang("Spiel: ", "Game: "); intern("/proj/SonicGuessture/","Sonic Guessture"); ?></span></div>
<div><span><?php echo $rcl->lang("Webseite: diese Seite", "Website: this page"); ?></span></div>
<div><span><?php echo $rcl->lang("Webseite: ", "Website: "); extern("https://status.blackpinguin.de/", "Server Status"); ?></span></div>
</td> </tr>

<tr class="y2014"> <th>2014</th> <td>
<div><span><?php echo $rcl->lang("Spiel: ", "Game: "); intern("/proj/DeathStarPD/","Death Star PD"); ?></span></div>
<div><span><?php echo $rcl->lang("Webseite: ", "Website: "); intern("/proj/dHeap/", "dHeap-Visualisierung", "dHeap visualization"); ?></span></div>
<div><span>App: <?php intern("/proj/SindWirSchonDa/", "Sind wir schon da?", "Are we there yet?"); ?></span></div>
<div><span><?php echo $rcl->lang("Kurzfilm: ", "Short film: "); intern("/proj/Gefahrengebiete/", "Gefahrengebiete"); ?></span></div>
<div><span>Map: <?php extern("https://steamcommunity.com/sharedfiles/filedetails/?id=284923613", "Inferno Chamber (Portal 2)"); echo " "; youtube("_nFEOg_hOBU", "Playthrough"); ?></span></div>
</td> </tr>

<tr class="y2013"> <th>2013</th> <td>
<div><span><?php echo $rcl->lang("Spiel: ", "Game: "); intern("/proj/BrainOfTehZwarm/", "Brain of teh Zwarm"); ?></span></div>
<div><span><?php echo $rcl->lang("Spiel: ", "Game: "); intern("/proj/DarkSideOfMorra/", "Dark Side of Morra"); ?></span></div>
<div><span><?php echo $rcl->lang("Webseite / Crawler: ", "Website / Crawler: "); intern("/proj/MediaIndexer/", "Media Indexer"); ?></span></div>
<div><span><?php echo $rcl->lang("Webseite: ", "Website: "); intern("/proj/MinimalisticShop/", "Minimalistic Shop"); ?></span></div>
<div><span><?php echo $rcl->lang("Webseite: ", "Website: "); extern("https://tor.blackpinguin.de/", "Statistiken meines Tor-Relays", "Statistics of my Tor relay"); ?></span></div>
<div><span>App: <?php intern("/proj/AutounfallApp/","Autounfall App","Car accident app"); ?></span></div>
</td> </tr>

<tr class="y2011"> <th>2011</th> <td>
<div><span>Seminar: <?php intern("/proj/AIS/", "KI-Simulation in Computerspielen", "Simulation of AI in computer games"); ?></span></div>
<div><span><?php echo $rcl->lang("Spiel: ", "Game: "); intern("/proj/Simrgy/", "Sim'rgy"); ?></span></div>
<div><span><?php echo $rcl->lang("Spiel-KI: ", "Game AI: "); intern("/proj/RLVierGewinnt/", "RL: Vier Gewinnt", "RL: Connect Four"); ?></span></div>
<div><span><?php echo $rcl->lang("Webseite", "Website")." / App / API: "; intern("/proj/MarketChecker/", "Market Checker"); ?></span></div>
</td> </tr>

<tr class="y2010"> <th>2010</th> <td>
<div><span><?php echo $rcl->lang("Programm: ", "Program: "); intern("/proj/GeoTweet/", "GeoTweet"); ?></span></div>
<div><span><?php echo $rcl->lang("Webseite: ", "Website: "); extern("https://blastwave.blackpinguin.de/", "Gone with the Blastwave"); ?></span></div>
</td> </tr>

<tr class="y2009"> <th>2009</th> <td>
<div><span><?php echo $rcl->lang("Spiel: ", "Game: "); intern("/proj/MauDauMau/", "Mau Dau Mau"); ?></span></div>
</td> </tr>

<tr class="y2008"> <th>2008</th> <td>
<div><span><?php echo $rcl->lang("Webseite: ", "Website: "); intern("/proj/GameZ4you", "GameZ4you"); ?></span></div>
</td> </tr>

<tr class="y2007"> <th>2007</th> <td>
<div><span><?php echo $rcl->lang("Webseite: ", "Website: "); extern("https://lifeless.blackpinguin.de/", "Lifeless"); ?></span></div>
</td> </tr>

<tr class="y2003"> <th>2003</th> <td>
<div><span><?php echo $rcl->lang("Webseite: ", "Website: "); extern("https://www.blackpinguin.de/", "blackpinguin.de"); ?></span></div>
</td> </tr>

</tbody></table>


<table id="contributions"><tbody>
<thead> <tr> <th colspan="2"><?php echo $rcl->lang('Open Source Beiträge', 'Open Source Contributions') ?></th> </tr> </thead>

<tr class="y2024"> <th>2024</th>
<td>
  <div><span>Zohiu-Website:
    <?php extern(github("Zohiu-Website/pull/1","Zohiu"),"#1"); ?>
  </span></div>
  <div><span>SMOO Client:
    <?php extern(github("SuperMarioOdysseyOnline/pull/63","CraftyBoss"),"#63"); ?>,
    <?php extern(github("SuperMarioOdysseyOnline/pull/64","CraftyBoss"),"#64"); ?>,
    <?php extern(github("SuperMarioOdysseyOnline/pull/65","CraftyBoss"),"#65"); ?>,
    <?php extern(github("SuperMarioOdysseyOnline/pull/66","CraftyBoss"),"#66"); ?>,
    <?php extern(github("SuperMarioOdysseyOnline/pull/67","CraftyBoss"),"#67"); ?>,
    <?php extern(github("SuperMarioOdysseyOnline/pull/68","CraftyBoss"),"#68"); ?>,
    <?php extern(github("SuperMarioOdysseyOnline/pull/69","CraftyBoss"),"#69"); ?>,
    <?php extern(github("SuperMarioOdysseyOnline/pull/72","CraftyBoss"),"#72"); ?>,
    <?php extern(github("SuperMarioOdysseyOnline/pull/73","CraftyBoss"),"#73"); ?>,
    <?php extern(github("SuperMarioOdysseyOnline/pull/74","CraftyBoss"),"#74"); ?>
  </span></div>
  <div><span>SMOO Map:
    <?php extern(github("smoo-map/pull/1","speyejack"),"#1"); ?>
  </span></div>
  <div><span>SMOO Rust Server:
    <?php extern(github("smo-multi-rs/pull/5","speyejack"),"#5"); ?>
  </span></div>
  <div><span>SMOO C# Server:
    <?php extern(github("SmoOnlineServer/pull/52","Sanae6"),"#52"); ?>,
    <?php extern(github("SmoOnlineServer/pull/53","Sanae6"),"#53"); ?>,
    <?php extern(github("SmoOnlineServer/pull/54","Sanae6"),"#54"); ?>,
    <?php extern(github("SmoOnlineServer/pull/55","Sanae6"),"#55"); ?>,
    <?php extern(github("SmoOnlineServer/pull/56","Sanae6"),"#56"); ?>,
    <?php extern(github("SmoOnlineServer/pull/59","Sanae6"),"#59"); ?>
  </span></div>
  <div><span>openstreetmap-tile-server:
    <?php extern(github("openstreetmap-tile-server/pull/420","Overv"),"#420"); ?>
  </span></div>
  <div><span>playback-i18n:
    <?php extern(github("playback-i18n/pull/2","epilogue-co"),"#2"); ?>
  </span></div>
</td> </tr>

<tr class="y2023"> <th>2023</th>
<td>
  <div><span>openstreetmap-tile-server:
    <?php extern(github("openstreetmap-tile-server/pull/385","Overv"),"#385"); ?>
  </span></div>
  <div><span>SMOO Client:
    <?php extern(github("SuperMarioOdysseyOnline/pull/53","CraftyBoss"),"#53"); ?>,
    <?php extern(github("SuperMarioOdysseyOnline/pull/54","CraftyBoss"),"#54"); ?>,
    <?php extern(github("SuperMarioOdysseyOnline/pull/55","CraftyBoss"),"#55"); ?>,
    <?php extern(github("SuperMarioOdysseyOnline/pull/58","CraftyBoss"),"#58"); ?>
  </span></div>
  <div><span>piplup.smoo.it:
    <?php extern(github("smoo.it/pull/2","TeamPiplup"),"#2"); ?>
  </span></div>
  <div><span>nxDumpMerger:
    <?php extern(github("nxDumpMerger/pull/9","emiyl"),"#9"); ?>
  </span></div>
  <div><span>SMOO Rust Server:
    <?php extern(github("smo-multi-rs/pull/4","speyejack"),"#4"); ?>
  </span></div>
  <div><span>SMOO C# Server:
    <?php extern(github("SmoOnlineServer/pull/46","Sanae6"),"#46"); ?>,
    <?php extern(github("SmoOnlineServer/pull/48","Sanae6"),"#48"); ?>,
    <?php extern(github("SmoOnlineServer/pull/49","Sanae6"),"#49"); ?>,
    <?php extern(github("SmoOnlineServer/pull/50","Sanae6"),"#50"); ?>,
    <?php extern(github("SmoOnlineServer/pull/36","TeamPiplup"),"TeamPiplup#36"); ?>,
    <?php extern(github("SmoOnlineServer/pull/51","Sanae6"),"#51"); ?>
  </span></div>
</td> </tr>

<tr class="y2022"> <th>2022</th>
<td>
  <div><span>phpstan:
    <?php extern(github("phpstan/issues/8252","phpstan"),"Issue#8252"); ?>,
    <?php extern(github("phpstan/issues/8461","phpstan"),"Issue#8461"); ?>,
    <?php extern(github("phpstan-issue-8461"),$rcl->lang("Beispiel","Example")); ?>
  </span></div>
  <div><span>piplup.smoo.it:
    <?php extern(github("smoo.it/pull/1","TeamPiplup"),"#1"); ?>
  </span></div>
  <div><span>SMOO Rust Server:
    <?php extern(github("smo-multi-rs/pull/1","speyejack"),"#1"); ?>,
    <?php extern(github("smo-multi-rs/pull/2","speyejack"),"#2"); ?>,
    <?php extern(github("smo-multi-rs/pull/3","speyejack"),"#3"); ?>
  </span></div>
  <div><span>stripe-cli:
    <?php extern(github("stripe-cli/pull/918#issuecomment-1206245134","stripe"),"#918 (".$rcl->lang("Kommentare","Comments").")"); ?>
  </span></div>
  <div><span>SMOO Client:
    <?php extern(github("SuperMarioOdysseyOnline/pull/20","CraftyBoss"),"#20"); ?>,
    <?php extern(github("SuperMarioOdysseyOnline/pull/22","CraftyBoss"),"#22"); ?>,
    <?php extern(github("SuperMarioOdysseyOnline/pull/32","CraftyBoss"),"#32"); ?>,
    <?php extern(github("SuperMarioOdysseyOnline/pull/35","CraftyBoss"),"#35"); ?>,
    <?php extern(github("SuperMarioOdysseyOnline/pull/36","CraftyBoss"),"#36"); ?>,
    <?php extern(github("SuperMarioOdysseyOnline/pull/38","CraftyBoss"),"#38"); ?>,
    <?php extern(github("SuperMarioOdysseyOnline/pull/47","CraftyBoss"),"#47"); ?>
  </span></div>
  <div><span>SMOO C# Server:
    <?php extern(github("SmoOnlineServer/pull/6","Sanae6"),"#6"); ?>,
    <?php extern(github("SmoOnlineServer/pull/34","Sanae6"),"#34"); ?>,
    <?php extern(github("SmoOnlineServer/pull/35","Sanae6"),"#35"); ?>,
    <?php extern(github("SmoOnlineServer/pull/36","Sanae6"),"#36"); ?>,
    <?php extern(github("SmoOnlineServer/pull/37","Sanae6"),"#37"); ?>,
    <?php extern(github("SmoOnlineServer/pull/38","Sanae6"),"#38"); ?>,
    <?php extern(github("SmoOnlineServer/pull/39","Sanae6"),"#39"); ?>,
    <?php extern(github("SmoOnlineServer/pull/40","Sanae6"),"#40"); ?>,
    <?php extern(github("SmoOnlineServer/pull/41","Sanae6"),"#41"); ?>,
    <?php extern(github("SmoOnlineServer/pull/42","Sanae6"),"#42"); ?>,
    <?php extern(github("SmoOnlineServer/pull/44","Sanae6"),"#44"); ?>,
    <?php extern(github("SmoOnlineServer/tree/json-api"),"json-api"); ?>
  </span></div>
  <div><span>wtf_wikipedia:
    <?php extern(github("wtf_wikipedia/pull/483","spencermountain"),"#483"); ?>
  </span></div>
  <div><span>trim_osc.py:
    <?php extern(github("regional/pull/17","Zverik"),"Issue#17"); ?>
  </span></div>
  <div><span>openstreetmap-tile-server:
    <?php extern(github("openstreetmap-tile-server/issues/257","Overv"),"Issue#257"); ?>,
    <?php extern(github("openstreetmap-tile-server/pull/260","Overv"),"#260"); ?>,
    <?php extern(github("openstreetmap-tile-server/pull/261","Overv"),"#261"); ?>,
    <?php extern(github("openstreetmap-tile-server/pull/262","Overv"),"#262"); ?>,
    <?php extern(github("openstreetmap-tile-server/pull/263","Overv"),"#263"); ?>,
    <?php extern(github("openstreetmap-tile-server/pull/273","Overv"),"#273"); ?>,
    <?php extern(github("openstreetmap-tile-server/pull/282","Overv"),"#282"); ?>,
    <?php extern(github("openstreetmap-tile-server/pull/292","Overv"),"#292"); ?>,
    <?php extern(github("openstreetmap-tile-server/pull/308","Overv"),"#308"); ?>
  </span></div>
</td> </tr>

<tr class="y2021"> <th>2021</th> <td>
  <div><span>UEAESKeyFinder:
    <?php extern(github("UEAESKeyFinder/pull/17","EZFNDEV"),"#17"); ?>
  </span></div>
  <div><span>LiveSplit.AutoSplitters:
    <?php extern(github("LiveSplit.AutoSplitters/pull/458","LiveSplit"),"#458"); ?>
  </span></div>
  <div><span>acmens:
    <?php extern(github("acmens/pull/3","r5d"),"#3"); ?>,
    <?php extern(github("acmens-expect-example"),$rcl->lang("Benutzungsbeispiel","Usage example")); ?>
  </span></div>
  <div><span>bootstrap-vue:
    <?php extern(github("bootstrap-vue/pull/6487","bootstrap-vue"),"#6487"); ?>
  </span></div>
</td> </tr>

<tr class="y2020"> <th>2020</th> <td>
  <div><span>qubes-pass:
    <?php extern(github("qubes-pass/pull/4","Rudd-O"),"#4"); ?>,
    <?php extern(github("qubes-pass/pull/5","Rudd-O"),"#5"); ?>,
    <?php extern(github("qubes-pass/tree/docker"),$rcl->lang("Dockerisierung","Dockerization")); ?>
  </span></div>
  <div><span>openstreetmap-tile-server:
    <?php extern(github("openstreetmap-tile-server/pull/135","Overv"),"#135"); ?>
  </span></div>
  <div><span>gitlab-job-guard:
    <?php extern(gitlab("gitlab-job-guard/-/issues/1","shalomb"),"Issue#1"); ?>
  </span></div>
  <div><span>GitLab:
    <?php extern(gitlab("gitlab/-/issues/202186","gitlab-org"),"Issue#202186"); ?>,
    <?php extern(gitlab("gitlab/-/issues/257411","gitlab-org"),"Issue#257411"); ?>
  </span></div>
</td> </tr>

<tr class="y2019"> <th>2019</th> <td>
  <div><span>Leaflet.fullscreen:
    <?php extern(github("Leaflet.fullscreen/pull/100","Leaflet"),"#100"); ?>
  </span></div>
  <div><span>babel:
    <?php extern(github("babel/issues/10523","babel"),"Issue#10523"); ?>
  </span></div>
  <div><span>tape:
    <?php extern(github("tape/issues/482","ljharb"),"Issue#482"); ?>
  </span></div>
  <div><span>wtf_wikipedia:
    <?php extern(github("wtf_wikipedia/issues/300","spencermountain"),"Issue#300"); ?>,
    <?php extern(github("wtf_wikipedia/issues/308","spencermountain"),"Issue#308"); ?>,
    <?php extern(github("wtf-wikipedia-ast-parser"),$rcl->lang("AST-Beispiel","AST example")); ?>
  </span></div>
  <div><span>Leaflet:
    <?php extern(github("leaflet/pull/6764","Leaflet"),"Issue#6764"); ?>,
    <?php extern(github("leaflet/pull/7155","Leaflet"),"#7155"); ?>
  </span></div>
  <div><span>leaflet-languageselector:
    <?php extern(github("leaflet-languageselector/pull/3","buche"),"#3"); ?>
  </span></div>
  <div><span>leaflet-panel-layers:
    <?php extern(github("leaflet-panel-layers/issues/51","stefanocudini"),"Issue#51"); ?>,
    <?php extern(github("leaflet-panel-layers/pull/52","stefanocudini"),"#52"); ?>,
    <?php extern(github("leaflet-panel-layers/pull/62","stefanocudini"),"#62"); ?>
  </span></div>
  <div><span>openstreetmap-tile-server:
    <?php extern(github("openstreetmap-tile-server/pull/44","Overv"),"#44"); ?>,
    <?php extern(github("openstreetmap-tile-server/issues/45","Overv"),"Issue#45"); ?>,
    <?php extern(github("openstreetmap-tile-server/pull/46","Overv"),"#46"); ?>
  </span></div>
  <div><span>bootstrap-vue:
    <?php extern(github("bootstrap-vue/pull/3012","bootstrap-vue"),"#3012"); ?>
  </span></div>
</td> </tr>

<tr class="y2018"> <th>2018</th> <td>
  <div><span>mysql:
    <?php extern(github("mysql/pull/500","docker-library"),"#500"); ?>
  </span></div>
</td> </tr>

</tbody></table>

<?php include("include2.php"); ?>
