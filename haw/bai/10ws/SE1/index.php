<?php $title = "B-AI / SE1"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BAICourse();

//Organisation
$c->semester("Wintersemester 2010/11", "Winter semester 2010/11");
$c->name("Software Engineering 1 (SE1)");
$c->type("Vorlesung und Praktikum", "lecture and practical training");
$c->dozent("Prof. Dr. Olaf Zukunft");
//Content
$c->topic("Anforderungsanalyse (Lastenheft): Ist-/Soll-Analyse, Anforderungsarten",
          "Product requirements: systems analysis, types of requirements");
$c->topic("Spezifikation (Pflichtenheft): Glossar, fachliches Datenmodell, Geschäftsprozesse, Anwendungsfälle, Dialoge, Architektur, Schnittstellen",
          "Functional specification: glossary, functional data model, business processes, use cases, dialogs, architecture, interfaces");
$c->topic("Entwurf: Modularisierung, Kohäsion und Kopplung, Werte vs. Objekte, Mehrfachvererbung, Delegation, Schnittstellen, Komponenten",
          "Design: modularization, cohesion and coupling, values vs. objects, multiple inheritance, delegation, interfaces, components");
$c->topic("Entwurfsprinzipien: Information Hiding, Separation of Concerns, Single Responsibility Pr., Open Closed Pr., Liskov Substitution Pr., Design by Contract, Interface Segregation Pr., Dependency Inversion Pr.",
          "Design Principles: Information Hiding, Separation of Concerns, Single Responsibility Pr., Open Closed Pr., Liskov Substitution Pr., Design by Contract, Interface Segregation Pr., Dependency Inversion Pr.");
$c->topic("Entwurfsmuser: Fliegengewicht, Adapter, Zustand, Kompositum, Fassade",
          "Design Patterns: Flywight, Adapter, State, Composite, Facade");
$c->topic("Software-Lebenszyklus, Prozessmodelle: Code & Fix, Wasserfallm., V-Modell, Phasenm., Prototyping, Iterativ, Inkrementell, Spiralm., (Rational) Unified Process (UP/RUP), Extreme Programming (XP)",
          "Software development life cycle, development models: code and fix, waterfall m., V-Model, phase m., prototyping, iterativ, incremental, spiral m., (rational) unified process (UP/RUP), extreme programming (XP)");
$c->topic("Ereignisgesteuerte Prozessketten (EPK), UML-Diagramme: Klassen, Aktivität, Nutzerfall, Zustand, Komponenten, Sequenz",
          "Event-driven Process Chain (EPC), UML diagrams: class, activity, use case, state, component, sequence");
$c->topic("Gastvortrag von ETHALON GmbH über Anforderungsmanagement",
          "Guest lecture by ETHALON GmbH about requirements management");
$c->languages("LaTeX, UML");
$c->technologies("ERM, pst-uml");
$c->tools("Dia, Microsoft Visio");
//$c->ide("");
//Grade
$c->cp("6");
$c->pruefung("Klausur", "written test");
$c->grade("13 LP (1-)");

$c->printCourseInfo();
?>

<?php include("/rcl/www/rcl/include2.php"); ?>
