<?php

$date = $_POST["date"];

if(!isset($date){
	echo "Date received is null";
}
else{
	echo "Existing sync present";
}

?>