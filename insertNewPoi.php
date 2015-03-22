<?php

include_once 'database/config.php';
include_once 'database/insert_functions.php';

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

if(!isset($_POST["name"]) || !isset($_POST["type"]) || !isset($_POST["contact"]) || !isset($_POST["openTime"]) || !isset($_POST["closeTime"]) || !isset($_POST["monday"]) || !isset($_POST["tuesday"]) || !isset($_POST["wednesday"]) || !isset($_POST["thursday"]) || !isset($_POST["friday"]) || !isset($_POST["saturday"]) || !isset($_POST["sunday"]) || !isset($_POST["latitude"]) || !isset($_POST["longitude"])){
	echo "false";
}

else{
	$name = $_POST["name"];
	$type = $_POST["type"];
	$contact = $_POST["contact"];
	$openTime = $_POST["openTime"];
	$closeTime = $_POST["closeTime"];
	$monday = $_POST["monday"];
	$tuesday = $_POST["tuesday"];
	$wednesday = $_POST["wednesday"];
	$thursday = $_POST["thursday"];
	$friday = $_POST["friday"];
	$saturday = $_POST["saturday"];
	$sunday = $_POST["sunday"];
	$latitude = $_POST["latitude"];
	$longitude = $_POST["longitude"];

	$database = new Insert_Functions();
	$database->addNewInsertion($name, $type, $contact, $openTime, $closeTime, $monday, $tuesday, $wednesday, $thursday, $friday, $saturday, $sunday, $latitude, $longitude);

}

?>