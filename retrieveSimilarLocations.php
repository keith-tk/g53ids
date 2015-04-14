<?php

include_once 'database/config.php';
include_once 'database/retrieve_functions.php';

if(!isset($_POST["type"]) || !isset($_POST["lat"]) || !isset($_POST["lon"]) ){

}
else{
	$type = $_POST["type"];
	$lat = $_POST["lat"];
	$lon = $_POST["lon"];
	$database = new Retrieve_Functions();
	$database->getSimilarLocations($type, $lat, $lon);
}

?>