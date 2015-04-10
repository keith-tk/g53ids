<?php

include_once 'database/config.php';
include_once 'database/update_functions.php';

if(!isset($_POST["id"])){
	
}
else{
	$id = $_POST["id"];
	$database = new Update_Functions();
	$database->deleteTag($id);
}
?>