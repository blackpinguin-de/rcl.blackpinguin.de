<?php $title = "dHeap"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php loc(array(
  'JavaScript' => 310
, $rcl->lang('Kommentare','Comments') => 131
, 'HTML' => 48
, 'CSS' => 45
)); ?>

<?php if($rcl->lang === "de") { ?>
<a href="dheap.png" style="width: 40%; float: right; margin-left: 10px; margin-bottom: 10px;"><img src="dheap.png" alt="Screenshot der Visualisierung mit 9 Knoten und 8 Kanten: [2, 5, 9, 8, 11, 20, 13, 12, 4]. Zwei Knoten sind farblich hervorgehoben." title="dHeap-Beispiel aus dem Buch: die 4 einzufügen verletzt die Heap-Eigenschaft. Die markierten Knoten werden im aktuellen Algorithmus-Schritt vertauscht." style="width: 100%; height: auto;" /></a>
<p>Für die mündliche Prüfung des Wahlpflichtfaches <?php privatea("/haw/bms/14ss/MINF/","Ausgewählte Themen der Medieninformatik"); $rcl->newFoot("Das Thema für MINF in diesem Semester war Visualisierung."); ?> im Sommersemester 2014 des Studienganges <?php echo (new BMSCourse())->_studium; ?> bestand die Option, freiwillig eine Visualisierung mit <?php extern("http://d3js.org/","D3"); ?> in JavaScript zu erstellen, wobei ein D3 Layout gewählt werden sollte, welches nicht bereits in der Vorlesung behandelt wurde.</p>
<p>Inspiriert vom <span class="i">Anhang B - Elementare Datenstrukturen</span> des Buches <span class="i">Graphentheoretische Konzepte und Algorithmen</span><?php isbn("ISBN 978-3-8348-0629-1", "", "Subject: Graph Theory", "DE"); ?> von S. O. Krumpke und H. Noltemeier, in dem <?php extern("https://en.wikipedia.org/wiki/D-ary_heap","d-näre Heaps"); $rcl->newFoot("Ein binärer Heap ist z.B. ein d-närer Heap mit d=2. D-näre Heaps sind eine Verallgemeinerung von binären Heaps für beliebiges d (degree = Grad), was je nach Anwendungsfall zu einem besseren Laufzeitverhalten führen kann."); ?> erläutert werden, entwickelte ich mittels des <?php extern("https://github.com/mbostock/d3/wiki/Tree-Layout","D3 Tree Layouts"); ?> eine schrittweise Visualisierung für die grundlegenden dHeap-Operationen<?php $rcl->newFoot("Die grundlegenden Operationen, die im Buch beschrieben werden, sind: einen neuen Knoten einfügen, den Wert eines Knoten verringern und die Wurzel entfernen.<br/><br/>Darüber hinaus habe ich die Algorithmen erweitert, um die Werte von Knoten erhöhen zu können, sowie einen beliebigen Knoten, statt nur der Wurzel, entfernen zu können. Beides bei gleichbleibender logarithmischer Laufzeit.") ?>.</p>
<p>Das Ergebnis dieser Arbeit kann online <?php extern(langUrl("https://dheap.blackpinguin.de/"),"hier");?> betrachtet werden.
Der geladene Heap ist das Beispiel aus dem Buch, in dem erst eine 4 eingefügt (Bild rechts) und anschließend die 2 entfernt wird.</p>
<?php locdiv(); ?>
<table><tbody>
<tr> <th>Sprachen</th> <td>JavaScript, JSON, SVG, HTML, CSS</td> </tr>
<tr> <th>Technologien</th> <td>D3, JS Prototypen, Closures</td> </tr>
<tr> <th>IDE</th> <td>Geany</td> </tr>
<tr> <th>Beteiligte</th> <td>1</td> </tr>
</tbody></table>
<?php } else { ?>
<a href="dheap.png" style="width: 40%; float: right; margin-left: 10px; margin-bottom: 10px;"><img src="dheap.png" alt="Screenshot of the visualization with 9 nodes and 8 edges: [2, 5, 9, 8, 11, 20, 13, 12, 4]. Two nodes are highlighted by color." title="dHeap example from the book: a 4 is inserted, but it violates the heap property. The highlighted nodes will be switched in the current algorithm step." style="width: 100%; height: auto;" /></a>
<p>There was the voluntary option to develop a visualization with <?php extern("http://d3js.org/","D3"); ?> in JavaScript for the oral examination in the compulsory elective course <?php privatea("/haw/bms/14ss/MINF/","Selected Topics of Media Computer Science"); $rcl->newFoot("The topic this semester was visualization."); ?> of <?php echo (new BMSCourse())->_studium; ?> in the summer semester 2014.
The D3 layout for the visualization had to be one that wasn't introduced in the lectures.</p>
<p>Inspiried by the <span class="i">Attachment B - elementary data structures</span> from the textbook <span class="i">Graphentheoretische Konzepte und Algorithmen</span><?php isbn("ISBN 978-3-8348-0629-1", "", "Subject: Graph Theory", "DE"); ?> from S. O. Krumpke and H. Noltemeier, which explains <?php extern("https://en.wikipedia.org/wiki/D-ary_heap","d-ary heaps"); ?>, I developed a stepwise visualization of the basic dHeap operations<?php $rcl->newFoot("The basic operations explained in the textbook are: insert a new node, reduce the value of a node, and remove the root node.<br/><br/>I extended the algorithms to increase the value of a node and to remove an arbitrary node. Both with an unchanged logarithmic running time.") ?> with the <?php extern("https://github.com/mbostock/d3/wiki/Tree-Layout","D3 Tree Layout"); ?>.</p>
<p>The result of this work can be viewed online <?php extern(langUrl("https://dheap.blackpinguin.de/"),"here");?>.
The loaded heap is the example from the book.
First a 4 is inserted (right picture) and then the 2 gets removed.</p>
<?php locdiv(); ?>
<table><tbody>
<tr> <th>Languages</th> <td>JavaScript, JSON, SVG, HTML, CSS</td> </tr>
<tr> <th>Technologies</th> <td>D3, JS Prototypes, Closures</td> </tr>
<tr> <th>IDE</th> <td>Geany</td> </tr>
<tr> <th>Participants</th> <td>1</td> </tr>
</tbody></table>
<?php } ?>
<div style="clear: both;"></div>

<?php include("/rcl/www/rcl/include2.php"); ?>
