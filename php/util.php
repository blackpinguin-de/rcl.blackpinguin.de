<?php
include_once("/rcl/www/funktionen.php");

function age($bdate){
    $bday = new DateTime($bdate);
    $now = new DateTime();
    $interval = $now->diff($bday);
    return $interval->y;
}
$myage = age("1989-05-09");

function locdiv(){ global $rcl;
?>
<div id="loc" class="jsonly" title="<?php echo $rcl->lang("Codezeilen","Lines of Code"); ?>" style="width: 20vw; height: 20vw; float: right; display: block; clear: right;"></div>
<?php
}

function loc($data){
    arsort($data);
?>
<script type='text/javascript' src='https://www.google.com/jsapi'></script>
<script type='text/javascript'>
google.load('visualization', '1', {packages:['corechart']});
google.setOnLoadCallback(function(){
    var data = google.visualization.arrayToDataTable([['Language', 'Lines of Code']<?php
        foreach($data as $name => $loc){
            echo ", ['".$name."', ".$loc."]";
        }
    ?>]);
    var options = {legend:'none', backgroundColor:'none', chartArea:{left:'5%', top:'5%', width:'90%', height:'90%'}};
    var chart = new google.visualization.PieChart(document.getElementById('loc'));
    window.onresize = function(){chart.draw(data, options);};
    window.onresize();
});
</script>
<?php
}

function prgr2clr($p) {
    $r = dechex(max(0, min(255, round((2.0 - $p * 2.0) * 255.0))));
    $g = dechex(max(0, min(255, round($p * 2 * 255.0))));
    if (strlen($r) === 1) { $r = "0" . $r; }
    if (strlen($g) === 1) { $g = "0" . $g; }
    return "#" . $r . $g . "00";
}

function langUrl($url){
    global $rcl;
    return ($rcl->langEqual ? $url : $url.$rcl->lang("?lang=de","?lang=en"));
}

function a($url, $de, $en = NULL){
    global $rcl;
    if(isset($en)) return "<a href='".$url."'>".$rcl->lang($de, $en)."</a>";
    else return "<a href='".$url."'>".$de."</a>";
}

function aclass($url, $class, $de, $en = NULL){
    return a($url."' class='".$class, $de, $en);
}

function internStr($url, $de, $en = NULL){
    global $rcl;
    return a( langUrl($url), $de, $en);
}
function intern($url, $de, $en = NULL){ echo internStr($url, $de, $en); }


function externStr($url, $de, $en = NULL){
    return aclass($url, "extern"."' target='_blank", $de, $en);
}
function extern($url, $de, $en = NULL){ echo externStr($url, $de, $en); }

function youtubeStr($video, $de, $en = NULL){
    return aclass("https://youtu.be/$video", "youtube"."' target='_blank", $de, $en);
}
function youtube($video, $de, $en = NULL){ echo youtubeStr($video, $de, $en); }


function sizeclass($url, $class, $de, $en = NULL, $size = NULL){
    if(isset($size)){
        if(isset($de)) $de = $de."<span>&nbsp;(".$size.")</span>";
        if(isset($en)) $en = $en."<span>&nbsp;(".$size.")</span>";
    }
    return aclass($url, $class, $de, $en);
}

function pdfStr($url, $de, $en = NULL, $size = NULL){
    return sizeclass($url, "pdf", $de, $en, $size);
}
function pdf($url, $de, $en = NULL, $size = NULL){ echo pdfStr($url, $de, $en, $size); }


function privateaStr($url, $de, $en = NULL, $size = NULL){
    return sizeclass( langUrl($url), "private", $de, $en, $size);
}
function privatea($url, $de, $en = NULL, $size = NULL){ echo privateaStr($url, $de, $en, $size); }

function isbn($str, $de, $en, $book_lang){
    global $rcl;
    $lang = $rcl->lang;
    $body = $str."<br/>".externStr("https://www.amazon.de/s/?field-keywords=".str_replace(" ", "+", $str), "(amazon.de)");
    if($book_lang === "EN") $body .= " ".externStr("https://www.amazon.com/s/?field-keywords=".str_replace(" ", "+", $str), "(amazon.com)");
    if($lang === "de" && $de !== "") $body .= "<br/>".$de;
    else if($lang === "en" && $en !== "") $body .= "<br/>".$en;
    $rcl->newFoot($body);
}

abstract class Course {

public $_date = NULL;       // Date-Range of Attendance
public $_school = NULL;     // Name of Institution (with links)
public $_schooltype = NULL; // Kind of School
public $_studium = NULL;    // Link to studys page
public $_studiumStr = NULL; // studys name (e.g. Angewandte Informatik)
public $_abschluss = NULL;  // Abschluss dieser Schule
public $_abschlussDate = NULL;  // Datum des Abschlusses

public $_semester = NULL;   // Semester of this Course
public $_name = NULL;       // Name of this Course
public $_dozent = NULL;     // Name of the lecturer
public $_type = NULL;       // Type of lecture
public $_topics = [];       // several Topics of this Course
public $_cp = NULL;         // Credit Points
public $_pruefung = NULL;   // Type of examination
public $_grade = NULL;      // Grade for this course

public $_languages = NULL;
public $_technologies = NULL;
public $_tools = NULL;
public $_ide = NULL;

public function date($d){$this->_date = $d; }
public function school($de, $en = NULL){global $rcl; $this->_school = $rcl->lang($de, $en); }
public function schooltype($de, $en = NULL){global $rcl; $this->_schooltype = $rcl->lang($de, $en); }
public function studium($de, $en = NULL){global $rcl; $this->_studium = $rcl->lang($de, $en); }
public function abschluss($date, $de, $en = NULL){global $rcl; $this->_abschluss = $rcl->lang($de, $en); $this->_abschlussDate = $date; }
public function semester($de, $en = NULL){global $rcl; $this->_semester = $rcl->lang($de, $en); }
public function name($de, $en = NULL){global $rcl; $this->_name = $rcl->lang($de, $en); }
public function type($de, $en = NULL){global $rcl; $this->_type = $rcl->lang($de, $en); }
public function dozent($de, $en = NULL){global $rcl; $this->_dozent = $rcl->lang($de, $en); }
public function topic($de, $en = NULL){
    global $rcl;
    $this->_topics[count($this->_topics)] = $rcl->lang($de, $en);
}
public function cp($de, $en = NULL){global $rcl; $this->_cp = $rcl->lang($de, $en); }
public function pruefung($de, $en = NULL){global $rcl; $this->_pruefung = $rcl->lang($de, $en); }
public function grade($de, $en = NULL){global $rcl; $this->_grade = $rcl->lang($de, $en); }

public function languages($de, $en = NULL){global $rcl; $this->_languages = $rcl->lang($de, $en); }
public function technologies($de, $en = NULL){global $rcl; $this->_technologies = $rcl->lang($de, $en); }
public function tools($de, $en = NULL){global $rcl; $this->_tools = $rcl->lang($de, $en); }
public function ide($de, $en = NULL){global $rcl; $this->_ide = $rcl->lang($de, $en); }

private function tr($td, $de, $en = NULL){
    if(isset($td)){
        global $rcl;
        echo "\n<tr> <th>".$rcl->lang($de, $en)."</th> <td>".$td."</td> </tr>";
    }
}

public function printTableEntry($extra = NULL){
    echo "<tr> <th>".$this->_date."</th> <td>";
    if(isset($this->_studium)) echo $this->_studium;
    else if(isset($this->_schooltype)) echo $this->_schooltype;
    echo ", ".$this->_school;
    if(isset($extra)) echo ", ".$extra;
    echo "</td> </tr>";
    if(isset($this->_abschluss) and isset($this->_abschlussDate)){
        echo "<tr> <th>".$this->_abschlussDate."</th> <td>".$this->_abschluss."</td> </tr>";
    }
}

//on courses page
public function printCoursesHeader(){
    echo "<h3>".$this->_studiumStr."</h3><h4>".$this->_date.", ".$this->_school."</h4>";
}

//on course page
public function printCourseInfo(){
    global $rcl;
    echo "\n<table class='course'><tbody>";
    $this->tr($this->_school, "Einrichtung","Institution");
    $this->tr($this->_schooltype, "Schulform","Type of school");
    $this->tr($this->_studium, "Studiengang","Degree program");
    $this->tr($this->_semester, "Semester");
    $this->tr($this->_name, "Veranstaltung","Course");
    $this->tr($this->_type, "Veranstaltungsart", "Course type");
    $this->tr($this->_dozent, "Dozent(in)", "Lecturer");
    if(count($this->_topics) > 0){
        echo "\n<tr> <th>".$rcl->lang("Themen", "Topics")."</th> <td><ul style='margin: 0px; padding-left: 20px;'>";
        foreach($this->_topics as $topic){
            echo "\n<li>".$topic."</li>";
        }
        echo "\n</ul></td> </tr>";
    }
    $this->tr($this->_languages, "Sprachen", "Languages");
    $this->tr($this->_technologies, "Technologien", "Technologies");
    $this->tr($this->_tools, "Tools");
    $this->tr($this->_ide, "IDE");

    $this->tr($this->_cp, "ECTS Credit Points");
    $this->tr($this->_pruefung, "Prüfungsleistung", "Examination type");
    $this->tr($this->_grade, "Note(n)", "Grade(s)");
    echo "\n</tbody></table>\n";
} // end mehod out

} // End class Course

class MTSCourse extends Course { function __construct(){ global $rcl;
$this->_studiumStr = $rcl->lang("Grundschule","Elementary school");
$this->date("1995-08 &ndash; 2000-07");
$this->school(externStr("http://max-traeger-schule.hamburg.de/","Max-Träger-Schule"));
$this->schooltype("Grundschule","Elementary school");
}}

class SPRCourse extends Course { function __construct(){ global $rcl;
$this->_studiumStr = $rcl->lang("Realschule","Realschule (secondary school)");
$a = privateaStr("/spr/", "Realschule");
$this->date("2000-08 &ndash; 2006-07");
$this->school(externStr("https://de.wikipedia.org/wiki/Stadtteilschule_Stellingen#Geschichte","Haupt- und Realschule Sportplatzring"));
$this->schooltype($a, $a." (secondary school)");
$this->abschluss("2006-06-23", "Realschulabschluss, Notendurchschnitt: 2.50", "Leaving Certificate of Realschule, Average Grade: 2.50");
}}

abstract class G10Course extends Course { function __construct(){
$this->_school = externStr("http://www.g10.de/","Staatliche Gewerbeschule Energietechnik - G&nbsp;10");
}}
class TAICourse extends G10Course { function __construct(){ parent::__construct(); global $rcl;
$name = "Berufsfachschule Technische Assistenz für Informatik (TAI)";
$extra = " (vocational school - technical assistance for computer science)";
$this->_studiumStr = $rcl->lang($name, $name.$extra);
$a = privateaStr("/g10/tai/", $name);
$this->date("2006-08 &ndash; 2008-07");
$this->schooltype($a, $a.$extra);
$this->abschluss("2008-06-30", "Staatlich geprüfter technischer Assistent für Informatik, Notendurchschnitt: 2.00", "State-certified technical assistant for computer science, Average Grade: 2.00");
}}
class FOSCourse extends G10Course { function __construct(){ parent::__construct(); global $rcl;
$name = "Fachoberschule (FOS)";
$extra1 = " Fachbereich Technik Fachrichtung Elektrotechnik";
$extra2 = " (vocational college - electrical engineering)";
$this->_studiumStr = $rcl->lang($name.$extra1, $name.$extra1.$extra2);
$a = privateaStr("/g10/fos/", $name).$extra1;
$this->date("2008-08 &ndash; 2009-07");
$this->schooltype($a, $a.$extra2);
$this->abschluss("2009-06-29", "Fachhochschulreife, Notendurchschnitt: 1.63", "Leaving Certificate that grants the right to study at Universities of Applied Sciences, Average Grade: 1.63");
}}

abstract class HAWCourse extends Course { function __construct(){
$this->_school = externStr("http://www.haw-hamburg.de/", "Hochschule für Angewandte Wissenschaften Hamburg", "Hamburg University of Applied Sciences");
}}
class BAICourse extends HAWCourse { function __construct(){ parent::__construct(); global $rcl;
$this->date("2009-09 &ndash; 2013-02");
$this->_school = externStr("http://www.informatik.haw-hamburg.de/", "Department Informatik", "Department of Computer Science").", ".$this->_school;
$this->_studiumStr = $rcl->lang("Bachelor Angewandte Informatik (B-AI)", "B.Sc. Applied Computer Science (B-AI)");
$this->studium(privateaStr("/haw/bai/", $this->_studiumStr));
}}
class BMSCourse extends HAWCourse { function __construct(){ parent::__construct(); global $rcl;
$this->date("2013-03 &ndash; 2015-02");
$this->_school = externStr("http://www.haw-hamburg.de/medientechnik", "Department Medientechnik", "Department of Media Technology").", ".$this->_school;
$this->_studiumStr = $rcl->lang("Bachelor Media Systems (B-MS)", "B.Sc. Media Systems (B-MS)");
$this->studium(privateaStr("/haw/bms/", $this->_studiumStr));
}}

?>
