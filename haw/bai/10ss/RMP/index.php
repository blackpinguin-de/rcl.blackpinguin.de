<?php $title = "B-AI / RMP"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BAICourse();

//Organisation
$c->semester("Sommersemester 2010", "Summer semester 2010");
$c->name("Rechnerstrukturen und Maschinennahe Programmierung (RMP)", "Computer architectures and machine-oriented programming (RMP)");
$c->type("Vorlesung und Praktikum", "lecture and practical training");
$c->dozent("Prof. Dr. Reinhard Baran");
//Content
$c->topic("ALU, Speicher, Register, Von-Neumann-Architektur, Harvard-Architektur, Zahlensysteme, Zweierkomplement, Festkommazahlen, Gleitkommazahlen, Endianness",
          "ALU, memory, register, Von Neumann architecture, Harvard architecture, numeral systems, two's complement, fixed-point numbers, floating-point numbers, endianness");
$c->topic("ARM 7: Historie, Architektur, Befehls-Pipeline, CPSR, Speicherorganisation, Befehlssatz und Opcodes",
          "ARM 7: history, architecture, instruction pipeline, CPSR, memory organisation, instruction set and opcodes");
$c->topic("Assembler: Speicherdefinition/-initialisierung/-zugriff, Barrel-Shifter, Datenverarbeitungsbefehle, Bedingungscodes, Verzweigungen, Unterprogramme, Stack",
          "Assembly: memory definition/initialization/access, barrel shifter, data processing, condition codes, branches, subprograms, stack");
$c->topic("C: Datentypen, Typumwandlung, Präprozessor Direktiven (Makros), Felder, Zeichenketten, Strukturen, Zeiger, Funktionen, Speicherverwaltung",
          "C: data types, type casting, preprocessor directives (macros), arrays, strings, structures, pointer, functions, memory management");
$c->languages("Assembler, C", "Assembly, C");
$c->technologies("ARM7TDMI, NXP LPC2468, IEEE 754, ASCII");
//$c->tools("");
$c->ide("HiTOP");
//Grade
$c->cp("6");
$c->pruefung("Klausur", "written test");
$c->grade("14 LP (1)");

$c->printCourseInfo();
?>

<?php include("/rcl/www/rcl/include2.php"); ?>
