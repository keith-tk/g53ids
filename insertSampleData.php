<?php

include_once 'database/config.php';
include_once 'database/insert_functions.php';
include_once 'database/retrieve_functions.php';

$name = "Secret Recipe";
$type = "Restaurant";
$contact = "+60123456789";
$openTime = "09:30:00";
$closeTime = "08:00:00";
$monday = '1';
$tuesday = '1';
$wednesday = '1';
$thursday = '1';
$friday = '1';
$saturday = '0';
$sunday = '0';
$latitude = '2.945219';
$longitude = '101.874778';

$database = new Insert_Functions();
$database->addNewInsertion($name, $type, $contact, $openTime, $closeTime, $monday, $tuesday, $wednesday, $thursday, $friday, $saturday, $sunday, $latitude, $longitude);

?>