<?php $title = "B-AI / BW2"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BAICourse();

//Organisation
$c->semester("Wintersemester 2010/11", "Winter semester 2010/11");
$c->name("Betriebswirtschaft 2 (BW2)", "Business Studies 2 (BW2)");
$c->type("Vorlesung und Praktikum", "lecture and practical training");
$c->dozent("Prof. Dr. Wolfgang Gerken");
//Content
$c->topic("IT-Abteilungen im Unternehmen, IT-Dienstleistung, ITIL, Störfall- und Problem-Management, Servicevereinbarungen, Key Performance Indikatoren", "IT Departments in companies, IT service, ITIL, Incident and problem management, Service Level Agreements, Key Performance Indicators");
$c->topic("Materialwirtschaft: Strukturstücklisten, ABC-Analyse", "Materials management: structural parts list, ABC analysis");
$c->topic("Lagerwirtschaft: Lagerkennzahlen, Bestellverfahren", "Warehouse management: warehouse key figures, order procedures");
$c->topic("Produktionswirtschaft: Produktionsplanung und -steuerung (PPS), Primärbedarfsplanung, Disposition (Brutto-Netto-Bedarfsrechnung), Durchlaufterminierung (MPM-Netzplantechnik), Kapazitätsterminierung (GANTT-Diagram), Feinterminierung", "Manufacturing process management: production planning, primary demand planning, material requirements planning, scheduling (metra potential method), capacity scheduling (Gantt chart), fine scheduling");
$c->topic("Marketing: Zielgruppen, Marktsegmente, Produktlebenszyklus, Marktwachstum/-anteil, Preistheorie, Preisbestimmung, Werbung, Kundenpflege, E-Commerce, Web Analytics", "Marketing: target group, product life cycle, market segment/growth/share, pricing theory, pricing, advertising, customer relationship management, E-commerce, web analytics");
$c->topic("Unternehmensführung, Entscheidungsfindung, Balanced Scorecard, Data-Warehouse", "Management, decision making, balanced scorecard, data warehouse");
$c->topic("Informationssysteme: PPS-Systeme, computerintegrierte Produktion (CIM), ARIS, SAP", "Information systems: production planning systems, computer-integrated manufacturing (CIM), ARIS, SAP");
$c->languages("PHP, SQL, HTML, CSS, JavaScript");
$c->technologies("Apache, MySQL, Google Analytics");
//$c->tools("");
//$c->ide("");
//Grade
$c->cp("6");
$c->pruefung("Klausur", "written test");
$c->grade("15 LP (1+)");

$c->printCourseInfo();
?>
<p>
<?php if($rcl->lang === "de") { ?>
Im Rahmen des Praktikums wurde der Online-Shop <?php intern("/proj/GameZ4you/","GameZ4you"); ?> aus <?php intern("/g10/tai/AeHTML/","AeHTML"); ?> als Gruppenarbeit um Folgendes erweitert:
Strukturstückliste, ABC-Analyse, Primärbedarfsanalyse, Kaufempfehlungen und Google Analytics Einbindung
<?php } else { ?>
As part of the practical training in a group, the online marketplace <?php intern("/proj/GameZ4you/","GameZ4you"); ?> from <?php intern("/g10/tai/AeHTML/","AeHTML"); ?> was extended by:
structural parts list, ABC analysis, primary demand analysis, purchase recommendations and Google Analytics integration
<?php } ?>
</p>

<?php include("/rcl/www/rcl/include2.php"); ?>
