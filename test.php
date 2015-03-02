<?php
include_once 'database/config.php';
include_once 'database/insert_functions.php';
include_once 'database/retrieve_functions.php';

if(!isset($_POST["date"])){
	$database = new Retrieve_Functions();
	$database->getAllRecords();
}
else{
	
}

?>