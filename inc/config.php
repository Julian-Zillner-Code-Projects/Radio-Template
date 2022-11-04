<?php
/*
   Radio Template
   (c) 2022 @julianzillner
   https://julianzillner.de
   https://github.com/julianzillner
*/

/* Allgemeine Informationen */
$radioname = "Radio Demo";
$slogan = "Die beste Musik!";
$hintergrundfarbe = "white";
$lautmountpoint = "eins";
$externerplayerlink = "https://onlineradiobox.com/de/antennepassau/";
$titelbox = "Mustertitel";
$titeltext = "Hier könnte der benutzerdefinierte Text stehen, den Besucher auf der Seite unten sehen können";
$rssfeed = simplexml_load_file('https://www.tagesschau.de/xml/rss2/');


/* Programm Seite - Informationen einfach ersetzen */
$programm1 = "Non!Stop Hits 1";
$programmtext1 = "Das ist ein Mustertext der bei diesen Programm unter den Programmtitel stehen könnte.";

$programm2 = "Non!Stop Hits 2";
$programmtext2 = "Das ist ein Mustertext der bei diesen Programm unter den Programmtitel stehen könnte.";

$programm3 = "Non!Stop Hits 3";
$programmtext3 = "Das ist ein Mustertext der bei diesen Programm unter den Programmtitel stehen könnte.";

$programm4 = "Non!Stop Hits 4";
$programmtext4 = "Das ist ein Mustertext der bei diesen Programm unter den Programmtitel stehen könnte.";

$programm5 = "Non!Stop Hits 5";
$programmtext5 = "Das ist ein Mustertext der bei diesen Programm unter den Programmtitel stehen könnte.";

$programm6 = "Non!Stop Hits 6";
$programmtext6 = "Das ist ein Mustertext der bei diesen Programm unter den Programmtitel stehen könnte.";


/* Player-Seiten z. B. radio.de, OnlineRadioBox usw... */
$playerseite1 = "Radio.de";
$playerseitenlink1 = "https://julianzillner.de";

$playerseite2 = "";
$playerseitenlink2 = "";

$playerseite3 = "";
$playerseitenlink3 = "";

$playerseite4 = "";
$playerseitenlink4 = "";

$playerseite5 = "";
$playerseitenlink5 = "";


/* Externe Stream Adressen */
$streamurl1 = "http://stream.laut.fm/antenne-passau";
$streamurl2 = "https://stream.antennepassau.de";
$streamurl3 = "";

/* Rechtlicher Impressumtext */
$impressumtext = "";

/* Beispielformat AzuraCast: https://azuracast.com/public/example-station/embed-requests?theme=light */
$musikwunschazuraurl = "https://stream.radioserver.ch/public/antenne-passau/embed-requests?theme=light";


?>