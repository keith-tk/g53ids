<?php
echo '<p>Hello World</p>'
include_once './db_functions.php';
//Create Object for DB_Functions clas

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

$db = new DB_Functions(); 
//Store User into MySQL DB

$res = $db->storePOI($name,$type,$openTime,$closeTime,$monday,$tuesday,$wednesday,$thursday,$friday,$saturday,$sunday,$latitude,$longitude);
    
    if($res){ 
         echo "Insertion successful";
     }else{ 
         echo "Insertion failed";
    }
?>