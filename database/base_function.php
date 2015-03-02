<?php

class Base_Function{

	public function __construct(){
		$this->con = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
		// if ($this->con->connect_errno){
		// 	echo "Failed to connect to MySQL: " . $con->connect_error."<br />";
		// }
		// else{
		// 	echo "Successfully connected<br />";
		// }
	}
}