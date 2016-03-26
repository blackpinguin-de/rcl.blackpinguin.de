<?php $title = "B-AI / BS"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BAICourse();

//Organisation
$c->semester("Wintersemester 2010/11", "Winter semester 2010/11");
$c->name("Betriebssysteme (BS)", "Operating Systems (BS)");
$c->type("Vorlesung und Praktikum", "lecture and practical training");
$c->dozent("Prof. Dr. Franz Korf");
//Content
$c->topic("Computergenerationen, Von-Neumann-Architektur, Stapelverarbeitung, Lochkarten, Rechnerfamilien, Emulation, Batch Multiprogramming, Time-Sharing",
          "Computer generations, Von Neumann architecture, batch processing, punched cards, computer family, emulation, batch multiprogramming, time-sharing");
$c->topic("Hardware: CPU-Register, Pipelining, Interrupts, Speicher, Cache, I/O",
          "Hardware: CPU registers, pipelining, interrupts, memory, cache, I/O");
$c->topic("Kommandozeileninterpreter, Kernel, System Calls, monolithischer Kernel, Schichtenarchitektur, Mikrokernel, Client-Server-Modell, Virtuelle Maschine, UNIX, Windows",
          "Command line interpreters, kernel, system calls, monolithic kernel, multitier architecture, microkernel, client-server model, virtual machine, UNIX, Windows");
$c->topic("Prozesse, Prozesstabelle (PCB), Prozesszustände, fork / exec, Beispiel: Shell",
          "Processes, Process Control Block (PCB), process states, fork / exec, example: shell");
$c->topic("Threads, POSIX-Threads, Synchronisation von Threads, Threads im Userspace, Beispiel: Webserver",
          "Threads, POSIX threads, synchronization of threads, threads in userspace, example: webserver");
$c->topic("Scheduling: statisch/dynamisch, First-Come First-Served, Shortest Job First, Shortest Remaining Time Next, Round-Robin, (dynamische) Prioritäten, QNX, Rate Monotonic Scheduling, Earliest Deadline First, UNIX, Windows",
          "Scheduling: static/dynamic, First-Come First-Served, Shortest Job First, Shortest Remaining Time Next, Round-Robin, (dynamic) priorities, QNX, Rate Monotonic Scheduling, Earliest Deadline First, UNIX, Windows");
$c->topic("kritische Abschnitte, aktives Warten, Prioritätsumkehrproblem, Mutex, Semaphore, Erzeuger-Verbraucher-Problem, Conditional Variables, Monitore, IPC",
          "critical sections, busy-waiting, priority inversion problem, mutex, semaphore, producer-consumer problem, conditional variables, monitors, IPC");
$c->topic("Deadlocks: Entstehung, Erkennen, Beheben, Verhindern, Vermeiden",
          "Deadlocks: forming, recognition, correction, prevention, avoidance");
$c->topic("Speicherverwaltung: Adressierung, Relokation, Swapping, Partitionierung, Platzierungsstrategien, Paging, Seitentabelle, MMU / TLB",
          "Memory management: addressing, relocation, swapping, partitioning, placement strategies, paging, page table, MMU / TLB");
$c->topic("Seitenersetzungsstrategien: NRU, FIFO, Second Chance, Clock, LRU, NFU, Aging, Working Set, WSClock",
          "Page replacement algorithms: NRU, FIFO, Second Chance, Clock, LRU, NFU, Aging, Working Set, WSClock");
$c->topic("Controller, Memory Mapped I/O, I/O Mapped I/O, Gerätetreiber, Pufferung",
          "Controller, Memory Mapped I/O, I/O Mapped I/O, device drivers, buffering");
$c->topic("Festplatten, Scheiben, Spuren, Sektoren, Zylinder, Zonen, Schedulingalgorithmen (SSTF, Fahrstuhl), Cache",
          "Hard disc drives, slices, tracks, sectors, cylinders, zones, Scheduling algorithms (SSTF, elevator), cache");
$c->topic("Dateisysteme: Namen, Dateiendungen, Attribute, Verzeichnisse, Operationen, Belegung (zusammenhängend, verkettete Listen, FAT, I-Nodes), Blockgröße, Backups, Konsistenz, Virtuelle Dateisysteme, NFS",
          "File systems: names, extensions, attributes, directories, operations, data structure (contiguous, linked lists, FAT, inodes), block sizes, backups, consistency, virtual file systems, NFS");
$c->languages("Bash, C");
$c->technologies("POSIX, Multithreading");
//$c->tools("");
//$c->ide("");
//Grade
$c->cp("6");
$c->pruefung("mündliche Prüfung", "oral examination");
$c->grade("15 LP (1+)");

$c->printCourseInfo();
?>

<?php include("/rcl/www/rcl/include2.php"); ?>
