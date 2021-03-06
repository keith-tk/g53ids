<?php
include_once 'base_function.php';
class Insert_Functions extends Base_Function{
	
	public function addNewInsertion($name, $type, $contact, $openTime, $closeTime, $monday, $tuesday, $wednesday, $thursday, $friday, $saturday, $sunday, $latitude, $longitude){
		
		$id = uniqid('', true);
		$date  = new DateTime();
		$formatted_date = $date->format('Y-m-d H:i:s');
		$insert_row = $this->con->query("INSERT INTO poi(Id, Name, Type, Contact, OpenTime, CloseTime, 
										Monday, Tuesday, Wednesday, Thursday, Friday, 
										Saturday, Sunday, Latitude, Longitude, LastUpdated) 
									VALUES ('$id', '$name', '$type', '$contact', '$openTime', '$closeTime', 
										'$monday', '$tuesday', '$wednesday', '$thursday', '$friday',
										 '$saturday', '$sunday', '$latitude', '$longitude', '$formatted_date')");

		// if($insert_row){
		    // print 'Success! ID of last inserted record is : ' .$this->con->insert_id .'<br />'; 			
		// }else{
		    // die('Error : ('. $this->con->errno .') '. $this->con->error.'<br />');			
		// }

		$insert_row = $this->con->query("INSERT INTO log(Id) VALUES ('$id')");

		if($insert_row){
			// print 'Success! ID of last inserted record is : ' .$this->con->insert_id .'<br />'; 
			echo "true";
		}else{
		    // die('Error : ('. $this->con->errno .') '. $this->con->error.'<br />');
			echo "false";
		}

		// $insert_row->free();
	}

	public function addNewComment($id, $text){
		$date  = new DateTime();
		$formatted_date = $date->format('Y-m-d H:i:s');
		$insert_row = $this->con->query("INSERT INTO comment(Id, Date, Text) 
									VALUES ('$id', '$formatted_date', '$text')");
		if($insert_row){
			echo "true";
		}
		else{
			echo "false";
		}
	}

	public function addNewTag($poi, $tag){
		$id = uniqid();
		$date  = new DateTime();
		$formatted_date = $date->format('Y-m-d H:i:s');
		$insert_row = $this->con->query("INSERT INTO tag(Id, Name, Poi, LastUpdated) 
									VALUES ('$id', '$tag', '$poi', '$formatted_date')");
		if($insert_row){
			echo "true";
		}
		else{
			echo "false";
			// die('Error : ('. $this->con->errno .') '. $this->con->error.'<br />');
		}
	}
}

?>