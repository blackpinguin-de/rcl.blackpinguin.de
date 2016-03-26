<?php $rcl->printFoots(); ?>
    </article></div></div>

    <div id="navi"><div><nav>
        <b class="hidden">Navigation<?php echo "<a href='#content'>".$rcl->lang(" springe zum Anfang"," jump to the top")."</a>";?><br/></b>
             <?php intern("/", "Start"); ?>
        <br/><?php intern("/projects", "Projekte", "Projects"); ?>
        <br/><?php intern("/education", "Ausbildung", "Education"); ?>
        <br/><?php intern("/languages", "Sprachen", "Languages"); ?>
        <br/><?php intern("/literature", "Literatur", "Literature"); ?>
        <!-- <br/><?php intern("/technics", "Technik", "Technics"); ?> -->
        <!-- <br/><?php intern("/events", "Events"); ?> -->
        <br/><?php intern("/contact", "Impressum", "Contact"); ?>
    </nav></div></div>

    <div id="top"><div><header><!-- Yes, that's Comic Sans. Deal with it :P -->
        <h1>Robin C. Ladiges<?php if(isset($title)) echo " / ".$title; ?></h1>
    </header></div></div>

    <div id="lang">
        <?php
            if($rcl->lang === "de") echo "<div id='de'></div>";
            else echo "<a href='".($rcl->langEqual ? "?lang=de" : $path)."' title='Diese Seite auf Deutsch anzeigen'><img id='de' src='/img/de.png' alt='German flag'/></a>";

            if($rcl->lang === "en") echo "<div id='en'></div>";
            else echo "<a href='".($rcl->langEqual ? "?lang=en" : $path)."' title='View this page in English'><img id='en' src='/img/en.png' alt='Flagge der USA'/></a>";
        ?>
    </div>

    <div id="avatar"><div></div></div>
</div>
</body>
</html>
