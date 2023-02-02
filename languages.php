<?php include_once("/rcl/www/funktionen.php"); ?>
<?php $title = $rcl->lang("Sprachen", "Languages");  $path = "/languages"; ?>
<?php include("include1.php"); ?>

<style type="text/css" scoped="scoped">
#languages tr > th:first-of-type {
    padding-right:5px;
    text-align: right;
    vertical-align: top;
}
#languages tr > td:first-of-type {
    padding-right:5px;
    text-align: right;
    white-space: nowrap;
    vertical-align: top;
}
</style>

<table id="languages">
<thead>
<tr>  <th><?php echo $rcl->lang("Sprache", "Language"); ?></th> <th class="c"><?php echo $rcl->lang("Zeitraum", "Timeframe"); ?></th>  <th class="l"><?php echo $rcl->lang("Verwendung", "Usage"); ?></th>  </tr>
</thead>
<tbody>

<tr>  <th><?php echo $rcl->lang("Assembler","Assembly"); ?></th>  <td>2010 &ndash; 2013</td>  <td>
  <?php privatea("/haw/bai/10ss/RMP/","RMP"); ?>,
  <?php privatea("/haw/bms/13ws/INF3/","INF3"); ?>
</td>  </tr>

<tr>  <th>Bash</th>  <td>? &ndash; 2023</td>  <td>
  <?= $rcl->lang("persönliche Nutzung", "personal use"); ?>,
  <?php privatea("/job/2015/", "Job #1"); ?>,
  <?php extern(github("pine-interactive-map"), "Pine Interactive Map"); ?>,
  <?php extern(github("smoo.it/tree/api"), "smoo.it/api"); ?>
</td>  </tr>

<tr>  <th>C</th>  <td>2010 &ndash; 2013</td>  <td>
  <?php privatea("/haw/bai/10ss/RMP/","RMP"); ?>,
  <?php privatea("/haw/bai/10ws/BS/","BS"); ?>,
  TI89-Apps,
  <?php privatea("/haw/bms/13ws/INF3/","INF3"); ?>
</td>  </tr>

<tr>  <th>C++</th>  <td>2007 &ndash; 2022</td>  <td>
  <?php privatea("/g10/tai/AePro/","AePro"); ?>,
  <?php privatea("/g10/tai/AeSQL/","AeSQL"); ?>,
  <?php extern("http://directxtutorial.com/","DirectX 9 Tutorials"); ?>,
  <?php intern("/proj/AutounfallApp/","Autounfall App","Car accident app"); ?>,
  <?php intern("/proj/SonicGuessture/","Sonic Guessture"); ?>,
  <?php extern(github("SuperMarioOdysseyOnline/pulls?q=is%3Apr+author%3AIstador","CraftyBoss"), "SMOO Client"); ?>
</td>  </tr>

<tr>  <th>C#</th>  <td>2012 &ndash; 2022</td>  <td>
  <?php privatea("/haw/bai/12ss/IS/","IS"); ?>,
  <?php extern("http://www.cocktailsandcode.de/2012/05/workshop-c-fur-java-entwickler/","Workshop: C# für Java Entwickler","Workshop: C# for Java Developers"); ?>,
  <?php extern("https://msdn.microsoft.com/en-us/library/bb200104.aspx","XNA Tutorials"); ?>,
  <?php extern("https://events.ccc.de/congress/2011/Fahrplan/events/4680.en.html", "Implementation einer Hash-Collision-Attacke gegen PHP", "Implementation of an hash collision attack against PHP"); ?>,
  <?php intern("/proj/DarkSideOfMorra/","Dark Side of Morra"); ?>,
  <?php intern("/proj/BrainOfTehZwarm/","Brain of teh Zwarm"); ?>,
  <?php intern("/proj/DeathStarPD/","Death Star PD"); ?>,
  <?php extern(github("HsvScreensaver"),"HsvScreensaver"); ?>,
  <?php extern(github("SmoOnlineServer/pulls?q=is%3Apr+author%3AIstador","Sanae6"), "SMOO C# Server"); ?>
</td>  </tr>

<tr>  <th>COMAL</th>  <td>2004</td>  <td>
  <?php privatea("/spr/","R8b/Inform."); ?>
</td>  </tr>

<tr>  <th>CSS</th>  <td>2007 &ndash; 2023</td>  <td>
  <?php privatea("/g10/tai/AeHTML/","AeHTML"); ?>,
  <?php intern("/proj/GameZ4you", "GameZ4you"); ?>,
  <?php intern("/proj/MarketChecker/", "Market Checker"); ?>,
  <?php intern("/proj/MediaIndexer/","Media Indexer"); ?>,
  <?php intern("/proj/DeathStarPD/","Death Star PD"); ?>,
  <?php privatea("/job/2015/", "Job #1"); ?>,
  <?php extern(github("pine-interactive-map"), "Pine Interactive Map"); ?>,
  <?php extern(github("gamepadviewer-skins"), "Gamepad Viewer Skins"); ?>,
  <?php extern(github("smoo.it"), "smoo.it"); ?>
</td>  </tr>

<tr>  <th>Delphi</th>  <td>2008 &ndash; 2009</td>  <td>
  <?php privatea("/g10/fos/TL/","TL"); ?>,
  <?php intern("/proj/MauDauMau/","Mau Dau Mau"); ?>,
  USB Guard,
  <?php echo $rcl->lang("Implementation des Newton-Raphson-Verfahrens", "Implementation of Newton's method"); ?>
</td>  </tr>

<tr>  <th>Erlang</th>  <td>2011</td>  <td>
  <?php privatea("/haw/bai/11ws/VS/","VS"); ?>
</td>  </tr>

<tr>  <th>GLSL</th>  <td>2016</td>  <td>
  <?php extern(github("HsvScreensaver"),"HsvScreensaver"); ?>
</td>  </tr>

<tr>  <th>Go</th>  <td>2019 &ndash; 2022</td>  <td>
  <?php privatea("/job/2015/", "Job #1"); ?>,
  <?php extern(gitlab("gitlab-ci-orchestrator"),"gitlab-ci-orchestrator"); ?>
</td>  </tr>

<tr>  <th>GraphQL</th>  <td>2018 &ndash; 2020</td>  <td>
  <?php privatea("/job/2015/", "Job #1"); ?>
</td>  </tr>

<tr>  <th>HTML</th>  <td>2003 &ndash; 2023</td>  <td>
  <?php privatea("/spr/","R10b/Alt.Inform."); ?>,
  <?php privatea("/internships/KOGS/","KOGS"); ?>,
  <?php privatea("/g10/tai/AeHTML/","AeHTML"); ?>,
  <?php intern("/proj/GameZ4you", "GameZ4you"); ?>,
  <?php intern("/proj/MauDauMau/","Mau Dau Mau"); ?>,
  <?php intern("/proj/MarketChecker/", "Market Checker"); ?>,
  <?php intern("/proj/MinimalisticShop/", "Minimalistic Shop"); ?>,
  <?php intern("/proj/MediaIndexer/","Media Indexer"); ?>,
  <?php intern("/proj/DeathStarPD/","Death Star PD"); ?>,
  <?php privatea("/job/2015/", "Job #1"); ?>,
  <?php extern(github("pine-interactive-map"), "Pine Interactive Map"); ?>,
  <?php extern(github("smoo.it"), "smoo.it"); ?>
</td>  </tr>

<tr>  <th>Java</th>  <td>2010 &ndash; 2013</td>  <td>
  <?php privatea("/haw/bai/10ss/DB/","DB"); ?>,
  <?php intern("/proj/GeoTweet/","GeoTweet"); ?>,
  <?php privatea("/haw/bai/10ss/PR2/","PR2"); ?>,
  <?php privatea("/haw/bai/10ws/GKA/","GKA"); ?>,
  <?php privatea("/haw/bai/10ws/AD/","AD"); ?>,
  <?php privatea("/haw/bai/11ss/CI/","CI"); ?>,
  <?php intern("/proj/MarketChecker/", "Market Checker"); ?>,
  <?php privatea("/haw/bai/11ss/RN/","RN"); ?>,
  <?php intern("/proj/Simrgy/", "Sim'rgy"); ?>,
  <?php privatea("/haw/bai/11ws/AI/","AI"); ?>,
  <?php privatea("/haw/bai/11ws/VS/","VS"); ?>,
  <?php intern("/proj/RLVierGewinnt/", "RL: Vier Gewinnt", "RL: Connect Four"); ?>,
  <?php privatea("/haw/bai/12ss/IS/","IS"); ?>,
  <?php privatea("/haw/bai/12ss/WP_ITS/","WP3:ITS"); ?>,
  <?php privatea("/haw/bms/13ss/P1/","P1"); ?>,
  <?php privatea("/haw/bms/13ws/P2/","P2"); ?>
</td>  </tr>

<tr>  <th>JavaScript</th>  <td>2007 &ndash; 2022</td>  <td>
  <?php privatea("/g10/tai/AeHTML/","AeHTML"); ?>,
  <?php intern("/proj/GameZ4you", "GameZ4you"); ?>,
  <?php intern("/proj/MediaIndexer/","Media Indexer"); ?>,
  <?php privatea("/haw/bms/14ss/MINF/","MINF"); ?>,
  <?php intern("/proj/dHeap/", "dHeap-Visualisierung", "dHeap visualization"); ?>,
  <?php privatea("/job/2015/", "Job #1"); ?>,
  <?php extern(github("old-search-fixed"), "Old Search Fixed 3"); ?>,
  <?php extern(github("pine-interactive-map"), "Pine Interactive Map"); ?>,
  <?php extern(github("babel-plugin-transform-unicode-regexp-runtime"), "babel-plugin-transform-unicode-regexp-runtime"); ?>,
  <?php extern(github("lodash-es-merge-undefined"), "lodash-es-merge-undefined"); ?>,
  <?php extern(github("node-ojds-nx-vigemclient"), "OJDS-NX ViGEm Client"); ?>
</td>  </tr>

<tr>  <th>JSON</th>  <td>2014 &ndash; 2023</td>  <td>
  <?php intern("/proj/MediaIndexer/","Media Indexer"); ?>,
  <?php privatea("/haw/bms/14ss/MINF/","MINF"); ?>,
  <?php intern("/proj/dHeap/", "dHeap-Visualisierung", "dHeap visualization"); ?>,
  <?php privatea("/job/2015/", "Job #1"); ?>,
  <?php extern(github("smoo.it"), "smoo.it"); ?>
</td>  </tr>

<tr>  <th>LaTeX</th>  <td>2010 &ndash; 2022</td>  <td>
  <?php privatea("/haw/bai/10ss/DB/","DB"); ?>,
  <?php privatea("/haw/bai/10ss/LB/","LB"); ?>,
  <?php privatea("/haw/bai/10ws/AD/","AD"); ?>,
  <?php privatea("/haw/bai/10ws/BS/","BS"); ?>,
  <?php privatea("/haw/bai/10ws/BW2/","BW2"); ?>,
  <?php privatea("/haw/bai/10ws/SE1/","SE1"); ?>,
  <?php privatea("/haw/bai/11ss/WP_SG/","WP1:SG"); ?>,
  <?php intern("/proj/AIS/", "KI-Simulation in Computerspielen", "Simulation of AI in computer games"); ?>,
  <?php privatea("/haw/bai/11ws/WP_QrQk/","WP2:QrQk"); ?>,
  <?php privatea("/haw/bms/14ws/IMP/","IMP"); ?>,
  <?= $rcl->lang("persönlicher Schriftverkehr", "personal correspondence"); ?>
</td>  </tr>

<tr>  <th>PHP</th>  <td>2005 &ndash; 2023</td>  <td>
  <?php privatea("/spr/","R10b/Alt.Inform."); ?>,
  <?php privatea("/internships/KOGS/","KOGS"); ?>,
  <?php intern("/proj/GameZ4you", "GameZ4you"); ?>,
  <?php intern("/proj/MarketChecker/", "Market Checker"); ?>,
  <?php privatea("/job/2015/", "Job #1"); ?>
</td>  </tr>

<tr>  <th>Prolog</th>  <td>2009 &ndash; 2012</td>  <td>
  <?php privatea("/haw/bai/09ws/GI/","GI"); ?>,
  <?php privatea("/haw/bai/10ss/LB/","LB"); ?>,
  <?php privatea("/haw/bai/12ss/IS/","IS"); ?>
</td>  </tr>

<tr>  <th>Python</th>  <td>2019</td>  <td>
  <?php extern(github("pine-interactive-map"), "Pine Interactive Map"); ?>
</td>  </tr>

<tr>  <th>Ruby</th>  <td>2009 &ndash; 2013</td>  <td>
  <?php privatea("/haw/bai/09ws/PR1/","PR1"); ?>,
  <?php privatea("/haw/bai/10ws/BW2/","BW2"); ?>,
  <?php privatea("/haw/bms/13ss/PRG/","PRG"); ?>
</td>  </tr>

<tr>  <th>Rust</th>  <td>2022</td>  <td>
  <?php extern(github("smo-multi-rs/pulls?q=is%3Apr+author%3AIstador","speyejack"), "SMOO Rust Server"); ?>
</td>  </tr>

<tr>  <th>Scala</th>  <td>2012 &ndash; 2018</td>  <td>
  <?php privatea("/haw/bai/12ws/WP_Scala/","WP4:Scala"); ?>,
  <?php extern("https://www.coursera.org/course/progfun","Coursera:FP"); ?>,
  <?php extern("https://www.coursera.org/course/reactive","Coursera:RP"); ?>,
  <?php intern("/proj/MinimalisticShop/", "Minimalistic Shop"); ?>,
  <?php intern("/proj/SindWirSchonDa/","Sind wir schon da?", "Are we there yet?"); ?>,
  <?php intern("/proj/MediaIndexer/","Media Indexer"); ?>,
  <?php privatea("/haw/bms/14ws/IMP/","IMP"); ?>,
  <?php privatea("/job/2015/", "Job #1"); ?>
</td>  </tr>

<tr>  <th>SCSS</th>  <td>2015 &ndash; 2023</td>  <td>
  <?php privatea("/job/2015/", "Job #1"); ?>,
  <?php extern(github("pine-interactive-map"), "Pine Interactive Map"); ?>,
  <?php extern(github("smoo.it"), "smoo.it"); ?>
</td>  </tr>

<tr>  <th>SQL</th>  <td>2007 &ndash; 2023</td>  <td>
  <?php privatea("/g10/tai/AeSQL/","AeSQL"); ?>,
  <?php privatea("/g10/tai/AeOffice/","AeOffice"); ?>,
  <?php privatea("/internships/KOGS/","KOGS"); ?>,
  <?php intern("/proj/GameZ4you", "GameZ4you"); ?>,
  <?php privatea("/haw/bai/10ss/DB/","DB"); ?>,
  <?php intern("/proj/GeoTweet/","GeoTweet"); ?>,
  <?php intern("/proj/MarketChecker/", "Market Checker"); ?>,
  <?php privatea("/haw/bms/13ss/RDB/","RDB"); ?>,
  <?php intern("/proj/MinimalisticShop/", "Minimalistic Shop"); ?>,
  <?php privatea("/haw/bms/13ws/INF2/","INF2"); ?>,
  <?php privatea("/job/2015/", "Job #1"); ?>
</td>  </tr>

<tr>  <th>SVG</th>  <td>2014 &ndash; 2022</td>  <td>
  <?php privatea("/haw/bms/14ss/MINF/","MINF"); ?>,
  <?php intern("/proj/dHeap/", "dHeap-Visualisierung", "dHeap visualization"); ?>,
  <?php extern(github("pine-interactive-map"), "Pine Interactive Map"); ?>,
  <?php extern(github("gamepadviewer-skins"), "Gamepad Viewer Skins"); ?>
</td>  </tr>

<tr>  <th>TypeScript</th>  <td>2017 &ndash; 2023</td>  <td>
  <?php privatea("/job/2015/", "Job #1"); ?>,
  <?php extern(github("smoo.it"), "smoo.it"); ?>
</td>  </tr>

<tr>  <th>UML</th>  <td>2010 &ndash; 2018</td>  <td>
  <?php privatea("/haw/bai/10ss/DB/","DB"); ?>,
  <?php privatea("/haw/bai/10ws/SE1/","SE1"); ?>,
  <?php privatea("/haw/bai/11ss/SE2/","SE2"); ?>,
  <?php privatea("/haw/bai/11ss/WP_SG/","WP1:SG"); ?>,
  <?php privatea("/haw/bai/11ws/VS/","VS"); ?>,
  <?php privatea("/haw/bai/11ws/AI/","AI"); ?>,
  <?php intern("/proj/RLVierGewinnt/", "RL: Vier Gewinnt", "RL: Connect Four"); ?>,
  <?php privatea("/haw/bms/13ss/P1/","P1"); ?>,
  <?php intern("/proj/SindWirSchonDa/","Sind wir schon da?", "Are we there yet?"); ?>,
  <?php intern("/proj/SonicGuessture/","Sonic Guessture"); ?>,
  <?php privatea("/job/2015/", "Job #1"); ?>
</td>  </tr>

<tr>  <th>VBA</th>  <td>2007</td>  <td>
  <?php privatea("/g10/tai/AeOffice/","AeOffice"); ?>
</td>  </tr>

<tr>  <th>XML</th>  <td>2011 &ndash; 2023</td>  <td>
  <?php intern("/proj/MarketChecker/", "Market Checker"); ?>,
  <?php privatea("/haw/bai/12ss/WP_ITS/","WP3:ITS"); ?>,
  <?php intern("/proj/MinimalisticShop/", "Minimalistic Shop"); ?>,
  <?php intern("/proj/MediaIndexer/","Media Indexer"); ?>,
  <?php privatea("/job/2015/", "Job #1"); ?>
</td>  </tr>

<tr>  <th>XSLT</th>  <td>2013 &ndash; 2023</td>  <td>
  <?php intern("/proj/MinimalisticShop/", "Minimalistic Shop"); ?>,
  <?php intern("/proj/MediaIndexer/","Media Indexer"); ?>,
  <?php privatea("/job/2015/", "Job #1"); ?>
</td>  </tr>

<tr>  <th>YML</th>  <td>2017 &ndash; 2023</td>  <td>
  <?php privatea("/job/2015/", "Job #1"); ?>
</td>  </tr>

</tbody>
</table>

<?php if($rcl->lang === "de") { ?>
<p>Ohne (bisherige) praktische Anwendung<?php $rcl->newFoot("Durch Behandlung in Vorlesungen, Fachbüchern und/oder Onlinekursen."); ?>: Fortran, LISP, Objective-C, Smalltalk</p>
<?php } else { ?>
<p>Without practical usage (yet)<?php $rcl->newFoot("My knowledge of these is only based on lectures, textbooks and/or online courses."); ?>: Fortran, LISP, Objective-C, Smalltalk</p>
<?php } ?>

<?php include("include2.php"); ?>
