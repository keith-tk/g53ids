<?php

include_once 'database/config.php';
include_once 'database/update_functions.php';
// $id = "54f47952382a83.78662123";
if(!isset($_POST["id"])){
	
}
else{
	$id = $_POST["id"];
	$database = new Update_Functions();
	$database->confirmPoi($id);
}
?>