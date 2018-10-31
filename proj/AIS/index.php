<?php include_once("/rcl/www/funktionen.php"); ?>
<?php $title = $rcl->lang("KI-Seminar", "AI Seminar"); ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php if($rcl->lang === "de") { ?>
<a href="ais.png"><img src="ais.thumb.png" alt="Gliederung" title="Gliederung" style="width: 30%; height: auto; float: right; margin-left: 10px; margin-bottom: 10px;" /></a>
<p>KI-Simulation in Computerspielen ist ein Thema, über das ich im Wintersemester 2011/12 im <?php privatea("/haw/bai/11ws/AIS/","Seminar"); ?> des Studienganges <?php echo (new BAICourse())->_studium; ?> referiert habe.</p>
<p>Ziel des Seminares war es, ein Thema der Künstlichen Intelligenz zu recherchieren und den Kommilitonen in einem 30-minütigen Vortrag, gefolgt von einer 15-minütigen Diskussion mit dem Publikum, beizubringen.</p><p>
Die Themenwahl fand am Ende des vorigen Semesters statt.
Für die Recherche zu diesem Thema habe ich in der vorlesungsfreien Zeit zwischen den Semestern zwei <?php intern("/literature","Fachbücher"); $rcl->newFoot("Programming Game AI by Example von Mat Buckland und AI for Game Developers von David M. Bourg und Glenn Seemann."); ?> gelesen, so dass ich direkt am ersten Termin erfolgreich präsentieren konnte.
</p>
<p><?php pdf("Abstract.pdf", "Abstract"); echo " und "; pdf("Slides.pdf", "Folien"); ?></p>
<p>Die in diesem Seminar leider nur theoretisch behandelten Themen der Spiel K.I. habe ich mit <?php echo internStr("/proj/DarkSideOfMorra/", "Dark Side of Morra").", ".internStr("/proj/BrainOfTehZwarm/", "Brain of teh Zwarm")." und ".internStr("/proj/DeathStarPD/","Death Star PD"); ?> im <?php echo (new BMSCourse())->_studium; ?> Studiengang teilweise praktisch umsetzen können.</p>
<?php } else { ?>
<a href="ais.png"><img src="ais.thumb.png" alt="Structure" title="Structure: decision making (automata, messages, memory, goal-driven behavior, fuzzy logic), movement (graph construction, path planning, steering)" style="width: 30%; height: auto; float: right; margin-left: 10px; margin-bottom: 10px;" /></a>
<p>Simulation of AI in computer games is a topic that I've lectured about in the winter semester 2011/12 at the <?php privatea("/haw/bai/11ws/AIS/","Seminar"); ?> course of <?php echo (new BAICourse())->_studium; ?>.</p>
<p>The goal of the seminar was to teach fellow students about an artifical intelligence topic via a 30 minutes presentation, followed by an 15 minutes audience discussion.</p>
<p>The topic selection happened at the end of the previous semester.
During the semester break I read two <?php intern("/literature","text books"); $rcl->newFoot("Programming Game AI by Example by Mat Buckland and AI for Game Developers by David M. Bourg and Glenn Seemann."); ?> about the topic for research purposes, so that I could held my presentation at the first appointment successfully.
</p>
<p><?php pdf("Abstract.pdf", "Abstract"); echo " and "; pdf("Slides.pdf", "Slides"); ?></p>
<p>Sadly, I could only cover these topics of game A.I. theoretically in this seminar, but I partially implemented them later with <?php echo internStr("/proj/DarkSideOfMorra/", "Dark Side of Morra").", ".internStr("/proj/BrainOfTehZwarm/", "Brain of teh Zwarm")." and ".internStr("/proj/DeathStarPD/","Death Star PD"); ?> at the <?php echo (new BMSCourse())->_studium; ?> degree program.</p>
<?php } ?>
<table><tbody>
<tr> <th><?php echo $rcl->lang("Sprachen","Languages"); ?></th> <td>LaTeX</td> </tr>
<tr> <th>Tools</th> <td>LibreOffice Impress</td> </tr>
<tr> <th><?= $rcl->lang("Beteiligte", "Participants"); ?></th> <td>1</td> </tr>
</tbody></table>
<div style="clear: both;"></div>

<?php include("/rcl/www/rcl/include2.php"); ?>
