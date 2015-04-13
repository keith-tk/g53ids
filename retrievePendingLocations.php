<?php

include_once 'database/config.php';
include_once 'database/retrieve_functions.php';
// $lat = "2.943643";
// $lon = "101.875801";

if(!isset($_POST["lat"]) || !isset($_POST["lon"]) ){

}
else{
	$lat = $_POST["lat"];
	$lon = $_POST["lon"];
	$database = new Retrieve_Functions();
	$database->getNearbyLocations($lat,$lon);
}

?>