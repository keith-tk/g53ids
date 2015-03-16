<?php

include_once 'database/config.php';
include_once 'database/insert_functions.php';

if(!isset($_POST["id"]) || !isset($_POST["text"])){
	
}
else{
	$id = $_POST["id"];
	$text = $_POST["text"];
	$database = new Insert_Functions();
	$database->addNewComment($id, $text);
}
?>