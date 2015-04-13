<?php

include_once 'database/config.php';
include_once 'database/retrieve_functions.php';
$lat = "3.0906105";
$lon = "101.7270159";
$database = new Retrieve_Functions();
$database->getNearbyLocations($lat,$lon);

?>