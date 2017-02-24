<?php

include 'config-mysql.inc.php';

//Zeile ab Welcher dieses Dokument im Admin Panel angezeigt wird
$displayforadmins = 6;


//Namen
$groups = array("Eins", "Zwei", "Kinder O.H.", "KuBu", "Admin", "FH-IT","Betreuer O.H.");
$group_numbers = array(
            array(3000, 3200, "Eins"),
            array(6000, 6500, "Zwei"),

);

$group_stickers = array(
            array(30000, 30300, "Eins"),
            array(60000, 60200, "Zwei"),
);

//STATI:
// Wichtig: Neue Kategorien müssen am Ende des Arrays hinzugefügt werden, sonst explodiert das System!
$status = array("OK", "Kaputt", "In Reparatur", "Verloren", "Aussortiert");
//Welche Stati beim einloggen Automatisch aktiviert sind.
//Wie bei allen kommenden Arrays ist die Reihenfolge der Werte relevant
$select_status = array(1, 1, 1, 1, 0);
//Status Icons: Ampeln, ja oder nein. Bei nein müssen anderen Icons verwendet werden!
$uses_robots = TRUE;
//Ampeln: 1=Grün, 2=GrünGelb, 3=Gelb. 4=GelbRot, 5=Rot, 6=Durchgestrichen
$robot_status = array(1, 3, 4, 5, 6); 
//Icons, wenn nicht ampeln.
$icon_status = array("eineDateiimordnerIMG.png", "eineAndere.jpg", "weiterso.png");


//Mobile Debug Info Ein/Aus. Hilfreich bei der erstellung, ansonsten eher komisch
$mobile_debug = FALSE;
//Desktop Debug Info Ein/Aus. Hilfreich bei der erstellung, ansonsten eher komisch
$desktop_debug = FALSE;

//BACK UPs
//BackUp Interval der Datenbank in MINUTEN. Mindestens 10, Nie=0 DEPRECATED!
$backupdata = 60;
//TAGE wie lange die Backups gespeichert werden. Mindestens 3, Ewig=0
$backupdatadays = 7;


$zugriffanzeige = array(
    "Inventar entfernen",
    "Config Datei sehen",
    "User Verwaltung - Nur User mit geringeren Levels",
    "Kann Inventar Bearbeiten",
    "Detailansicht",
    "Debug Infos - Wenn diese aktiviert sind",
    "Kann Verleihen, Retournieren",
    "Sieht alle Logs",
    "Status bearbeiten",
    "Kann exportieren",
    "Sieht Geld (Preis)",
    "Kann Labels Bearbeiten",
    "Kann IIDs bearbeiten",
    "Kann neuen Artikel anlegen",
    "Sieht diese Info im Usermenue",
    "Sieht letztes Backup ",
    "Sieht Lagerplatz",
    "Sieht erweiterete eigenschaften",
    "Kann Schachtelinhalte editieren",
    "Sieht Schachtelinhalte",
    "Kann Mehr Scannen",
    "Bekommt Benachrichtigungen",
    "Bekommt Alerts",
    "Sieht Hilfe",
    "Kann Kommentare sehen",
    "Kann Kommentare schreiben",
    "Kann nachbestellen",
    "Kann Kommentare entfernen",
    "Kann entfernte Kommentare sehen",
    "Schnellverleihmodul Aktivieren"
);



if (isset($_SESSION[NOW]))
{
    include $_SESSION[NOW] . '.inc.php';
}