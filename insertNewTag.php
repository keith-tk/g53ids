<?php

include_once 'database/config.php';
include_once 'database/insert_functions.php';

if(!isset($_POST["poi"]) || !isset($_POST["tag"])){
	
}
else{
	$poi = $_POST["poi"];
	$tag = $_POST["tag"];
	$database = new Insert_Functions();
	$database->addNewTag($poi, $tag);
}
?>