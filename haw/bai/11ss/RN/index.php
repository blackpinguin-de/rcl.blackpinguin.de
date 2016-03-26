<?php $title = "B-AI / RN"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BAICourse();

//Organisation
$c->semester("Sommersemester 2011", "Summer semester 2011");
$c->name("Rechnernetze (RN)","Computer Networks (RN)");
$c->type("Vorlesung und Praktikum", "lecture and practical training");
$c->dozent("Prof. Dr. Dirk Westhoff");
//Content
$c->topic("Client-Server-Modell, Broadcast, Unicast, LAN / MAN / WAN, Topologie, Simplex / Halb-Duplex / Voll-Duplex, Diensttypen, Protokoll, Schichtenmodelle, OSI-Referenzmodell, TCP/IP-Referenzmodell, Standardisierung",
          "Client-server model, broadcast, unicast, LAN / MAN / WAN, topology, simplex / half-duplex / full-duplex, service types, protocol, layered architecture, OSI model, internet protocol suite, standardization");
$c->topic("Sicherungsschicht: Rahmenbildung, Hamming Distanz, Parität, Hamming Codes, Cyclic Redundancy Code (CRC), Elementare Protokolle, Sliding Window Protokolle, Pipelining, Piggybacking, SLIP, PPP, TC",
          "Data link layer: Framing, Hamming distance, parity, Hamming codes, Cyclic Redundancy Code (CRC), elementary protocols, Sliding Window protocols, pipelining, piggybacking, SLIP, PPP, TC");
$c->topic("Media Access Control: FDM, pure/slotted ALOHA, 1-/p-/non-persistentes CSMA, CSMA/CD, WDMA, MACA, CDMA, IEEE 802.3/3u/4/5, Brücken, FDDI",
          "Media Access Control: FDM, pure/slotted ALOHA, 1-/p-/non-persistentes CSMA, CSMA/CD, WDMA, MACA, CDMA, IEEE 802.3/3u/4/5, bridges, FDDI");
$c->topic("Vermittlungsschicht: Wegeauswahl, Broadcast, Multicast, Spannbaum, Stau-/Flusskontrolle, RSVP, Router, Tunnel, Fragmentierung, IPv4, ICMP, ARP, RARP, OSPF, BGP, IPv6, IPSec, MIPv6, Firewalls, iptables",
          "Network layer: routing, broadcast, multicast, spanning tree, congestion/flow control, RSVP, router, tunnel, fragmentation, IPv4, ICMP, ARP, RARP, OSPF, BGP, IPv6, IPSec, MIPv6, Firewalls, iptables");
$c->topic("Transportschicht: QoS, 3-Wege-Handschlag, Bufferstrategien, Zustände, TCP, Stau-/Flusskontrolle, UDP, Socket-Programmierung, SSL/TLS",
          "Transport layer: QoS, 3-way-handshake, buffer strategies, states, TCP, congestion/flow control, UDP, Socket programming, SSL/TLS");
$c->topic("Kryptografie: Chiffren, One-Time-Pad, DES, 3DES, RSA, Signaturen, Zertifikate, PKI, Hashfunktionen, Kollisionen, SHA-1",
          "Cryptography: ciphers, one-time pad, DES, 3DES, RSA, signatures, certificates, PKI, hash functions, collisions, SHA-1");
$c->topic("WLAN-Sicherheit: WEP, WPA, TKIP, WPA2, CCMP",
          "Wifi security: WEP, WPA, TKIP, WPA2, CCMP");
$c->languages("Java");
$c->technologies("iptables");
$c->tools("Wireshark");
$c->ide("Netbeans");
//Grade
$c->cp("6");
$c->pruefung("Klausur", "written test");
$c->grade("14 LP (1)");

$c->printCourseInfo();
?>

<?php include("/rcl/www/rcl/include2.php"); ?>
