<?php

include_once 'config.php';

$name = "Secret Recipe";
$type = "Restaurant";
$contact = "+60123456789";
$openTime = "00:09:30";
$closeTime = "00:08:00";
$monday = '1';
$tuesday = '1';
$wednesday = '1';
$thursday = '1';
$friday = '1';
$saturday = '0';
$sunday = '0';
$latitude = '2.945219';
$longitude = '101.874778';

$con = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
if ($con->connect_errno)
  {
  echo "Failed to connect to MySQL: " . $con->connect_error;
  }



$id = uniqid('', true);
$insert_row = $con->query("INSERT INTO poi(Id, Name, Type, Contact, OpenTime, CloseTime, 
										Monday, Tuesday, Wednesday, Thursday, Friday, 
										Saturday, Sunday, Latitude, Longitude) 
									VALUES ('$id', '$name', '$type', '$contact', '$openTime', '$closeTime', 
										'$monday', '$tuesday', '$wednesday', '$thursday', '$friday',
										 '$saturday', '$sunday', '$latitude', '$longitude')");

if($insert_row){
    print 'Success! ID of last inserted record is : ' .$con->insert_id .'<br />'; 
}else{
    die('Error : ('. $con->errno .') '. $con->error);
}



?>