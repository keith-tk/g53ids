<?php
include_once 'database/config.php';
include_once 'database/insert_functions.php';
include_once 'database/retrieve_functions.php';

//New database, return all records
if(!isset($_POST["date"])){
	$database = new Retrieve_Functions();
	$database->getAllRecords();
}
//Existing database, return newest records
else{
	$date = $_POST["date"];
	$database = new Retrieve_Functions();
	$database->getUnsyncedRecords($date);	
}

?>