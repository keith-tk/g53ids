<?php

include_once 'database/config.php';
include_once 'database/insert_functions.php';
include_once 'database/retrieve_functions.php';

$poi = "54f47952382a83.78662123";
$tag = "Cake";

// $database = new Insert_Functions();
// $database->addNewTag($poi, $tag);

$database = new Retrieve_Functions();
$database->getAllTags();

$database->getPoiTags($poi);

?>