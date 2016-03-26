<?php $title = "B-AI / BW1"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BAICourse();

//Organisation
$c->semester("Wintersemester 2009/10", "Winter semester 2009/10");
$c->name("Betriebswirtschaft 1 (BW1)", "Business Studies 1 (BW1)");
$c->type("Vorlesung und Übungen", "lecture and excercises");
$c->dozent("Dipl. Inf. Holger Klindtworth");
//Content
$c->topic("Unternehmensstrukturen und Rechtsformen", "Corporate structures and legal forms of german companies");
$c->topic("Entscheidungsfindung: Minimax-Regel, Maximax-Regel, Savage-Niehans-Regel, Nutzwertanalyse", "Decision making: minimax principle, maximax principle, minimax regret principle, cost-utility analysis");
$c->topic("Unternehmensführung: Motivation (Maslowsche Bedürfnishierarchie), Führungsstile", "Management: motivation (Maslow's hierarchy of needs), management styles");
$c->topic("Investitions- und Finanzplanung, Kreditfinanzierung, Annuität, Liquiditätsplan", "Investment and fiscal planning, financing by credit, annuity, cash budget");
$c->topic("Inventur, Finanzbuchhaltung, Bilanz, Gewinn- und Verlustrechnung, Abschreibungen, Rückstellungen, Rücklagen", "Stock-taking, financial accounting, balance sheet, income statement, depreciation, provision, reserve");
$c->topic("Kennzahlenanalyse, Kosten- und Leistungsrechnung", "Ratio analysis, management accounting");
$c->topic("Zuschlagskalkulation, Angebotskalkulation", "Cost-plus pricing, quotation pricing");
$c->topic("Gruppenpräsentation mit schriftlicher Ausarbeitung (Thema: Vergleich der wirtschaftskrimininellen Fälle von Worldcom, Enron, Parmalat und FlowTex)", "Group presentation with written composition (subject: camparison of the white-collar crimes of Worldcom, Enron, Parmalat and FlowTex)");
//$c->languages("");
//$c->technologies("");
//$c->tools("");
//$c->ide("");
//Grade
$c->cp("6");
$c->pruefung("Klausur", "written test");
$c->grade("14 LP (1)");

$c->printCourseInfo();
?>

<?php include("/rcl/www/rcl/include2.php"); ?>
