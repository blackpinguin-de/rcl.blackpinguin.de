<?php include_once("/rcl/www/funktionen.php"); ?>
<?php $title = "RL: ".$rcl->lang("Vier gewinnt","Connect Four"); ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php loc(array(
  'Java' => 2086
, $rcl->lang('Kommentare','Comments') => 1009
)); ?>

<?php if($rcl->lang === "de") { ?>
<a href="vg.png"><img src="vg.png" alt="Screenshot" title="Screenshot des Zustandes 6AAAF00C9B158599" style="width: 25%; height: auto; float: right; margin-left: 10px; margin-bottom: 10px;" /></a>
<p>RL: Vier gewinnt ist ein Softwareprojekt, an dem ich im Wintersemester 2011/12 im Modul <?php privatea("/haw/bai/11ws/Proj_LA/","Projekt: Lernende Agenten"); ?> des Studienganges <?php echo (new BAICourse())->_studium; ?> gearbeitet habe.</p>
<p>
Das Projekt beschäftigte sich damit mittels Verstärkendem Lernen (Englisch: Reinforcement Learning, kurz: RL) einem Computer das Spielen von <?php extern("https://de.wikipedia.org/wiki/Vier_gewinnt","Vier gewinnt"); ?> beizubringen.
Dies hat sich als unrentabel herausgestellt, weil die Datenbank die dafür notwendig wäre, durch den großen Zustandsraum, beim Training auf bis zu etwa 49,5 TiB anwachsen würde.
</p>
<p>
Ursprünglich wurde RL: Vier gewinnt im Sommersemester 2011 von Daniel Wehring erstellt.
Dabei wurde das RL-Framework von Patrick Boekhoven verwendet, welches im Rahmen seiner <?php extern("http://edoc.sub.uni-hamburg.de/haw/volltexte/2011/1269/","Bachelor-Arbeit"); ?> entstanden ist und das Agenten-Framework JADE verwendet.
</p>
<p>Meine Arbeit an dem Projekt bestand hauptsächlich in einer ausführlichen Refaktorisierung<?php $rcl->newFoot("Sowohl in den RL-Algorithmen des RL-Frameworkes, als auch in der Anwendung für Vier Gewinnt, befanden sich schwerwiegende Fehler, wodurch das verstärkende Lernen nicht korrekt erfolgen konnte.<br/><br/>Beispielsweise existierte in der Berechnung der Vier Gewinnt Zustands-ID ein 64-bit Ganzzahlüberlauf, wodurch nicht alle Spielzustände eineindeutig adressiert wurden.") ?>, Optimierung und ergänzender Dokumentation des Spieles und des RL-Frameworks.</p>
<p>Die Dokumentation meiner Arbeit für das Projekt ist <?php extern("https://wiki.blackpinguin.de/index.php/Vier_gewinnt","hier"); ?> zu lesen.</p>
<p>Am Ende des Projektes habe ich eine <?php pdf("vg.pdf","Präsentation"); ?> für die Kursteilnehmer des nächsten Semesters gehalten, in der ich zunächst kurz Verstärkendes Lernen erklärt habe und anschließend RL: Vier gewinnt vorstellte.</p>
<?php locdiv(); ?>
<table><tbody>
<tr> <th>Sprachen</th> <td>Java, UML</td> </tr>
<tr> <th>Technologien</th> <td>JADE, Verstärkendes Lernen, Q-Learning, SARSA, Temporal difference learning</td> </tr>
<tr> <th>Tools</th> <td>Dia, MediaWiki, Libre Office Impress</td> </tr>
<tr> <th>IDE</th> <td>Eclipse</td> </tr>
</tbody></table>
<?php } else { ?>
<a href="vg.png"><img src="vg.png" alt="Screenshot" title="Screenshot of the state 6AAAF00C9B158599" style="width: 25%; height: auto; float: right; margin-left: 10px; margin-bottom: 10px;" /></a>
<p>RL: Connect Four is a software project that I've worked on in the winter semester 2011/12 at the <?php privatea("/haw/bai/11ws/Proj_LA/","Project: Learning Agents"); ?> course of <?php echo (new BAICourse())->_studium; ?>.</p>
<p>
The project's goal was to apply Reinforcement Learning (RL) on the game <?php extern("https://en.wikipedia.org/wiki/Connect_Four","Connect Four"); ?>, to teach a computer to play it successfully.
This has turned out to be unviable, because the game's state space is too big.
The needed database would grow on to about 49.5 TiB during the training phase.
</p>
<p>
Daniel Wehring created RL: Connect Four in the summer semester 2011.
He used the RL framework by Patrick Boekhoven, that was developed as part of his <?php extern("http://edoc.sub.uni-hamburg.de/haw/volltexte/2011/1269/","bachelor thesis"); ?> with the JADE agent framework.
</p>
<p>My contribution mainly consisted of a detailed code refactoring<?php $rcl->newFoot("The RL algorithms of the RL framework, as well as the Connect Four application of the framework, contained severe bugs, that prohibited effectual learning.<br/><br/>For example: there was a 64-bit integer overflow in the calculation of the Connect Four state IDs, which prevented them to address states bijectively.") ?>, runtime optimizations and additional documentation for the game and the RL framework.</p>
<p>The documentation of my work for the project is available <?php extern("https://wiki.blackpinguin.de/index.php/Vier_gewinnt","here"); ?>.</p>
<p>At the end of the project, I gave a <?php pdf("vg.pdf","presentation"); ?> for the course participants of the next semester, in which I briefly explained Reinforcement Learning and introduced RL: Connect Four.</p>
<?php locdiv(); ?>
<table><tbody>
<tr> <th>Languages</th> <td>Java, UML</td> </tr>
<tr> <th>Technologies</th> <td>JADE, Reinforcment Learning, Q-Learning, SARSA, Temporal difference learning</td> </tr>
<tr> <th>Tools</th> <td>Dia, MediaWiki, Libre Office Impress</td> </tr>
<tr> <th>IDE</th> <td>Eclipse</td> </tr>
</tbody></table>
<?php } ?>
<div style="clear: both;"></div>

<?php include("/rcl/www/rcl/include2.php"); ?>
