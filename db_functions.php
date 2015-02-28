<?php

class DB_Functions {
 
    private $db;
 
    //put your code here
    // constructor
    function __construct() {
        include_once './db_connect.php';
        // connecting to database
        $this->db = new DB_Connect();
        $this->db->connect();
    }
 
    // destructor
    function __destruct() {
 
    }
 
   public function storePOI($name,$type,$openTime,$closeTime,$monday,$tuesday,$wednesday,$thursday,$friday,$saturday,$sunday,$latitude,$longitude) {
        // Insert user into database
   		$id = uniqid('', true);
        $result = mysql_query("INSERT INTO poi(Id, Name, Type, Contact, OpenTime, CloseTime, 
										Monday, Tuesday, Wednesday, Thursday, Wednesday, Thursday, 
										Friday, Saturday, Sunday, Latitude, Longitude) 
									VALUES ('$id', '$name', '$type', '$openTime', '$closeTime', 
										'$monday', '$tuesday', '$wednesday', '$thursday', '$friday',
										 '$saturday', '$sunday', '$latitude', '$longitude')");
 
        if ($result) {
            return true;
        } else {            
                // For other errors
                return false;
        }
    }

}
 
?>