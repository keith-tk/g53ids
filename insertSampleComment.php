<?php

include_once 'database/config.php';
include_once 'database/insert_functions.php';

$id = '54fab3016ff718.29641160';
$text = 'Hello World';
$database = new Insert_Functions();
$database->addNewComment($id, $text);

?>