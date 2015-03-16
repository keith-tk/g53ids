<?php

include_once 'database/config.php';
include_once 'database/retrieve_functions.php';

if(!isset($_POST["id"])){

}
else{
	$id = $_POST["id"];
	$database = new Retrieve_Functions();
	$database->getComments($id);
}

?>