<?php
include_once 'base_function.php';
class Retrieve_Functions extends Base_Function{
	
	public function getAllRecords(){
				
		$result_row = $this->con->query("SELECT Id, Name, Type, Rating, Contact, OpenTime, CloseTime, 
										Monday, Tuesday, Wednesday, Thursday, Friday, 
										Saturday, Sunday, Latitude, Longitude, Status FROM poi"); 
		
		$rows = array();
		while($r = mysqli_fetch_assoc($result_row)){
			$rows[]=$r;
		}
		echo json_encode($rows, JSON_PRETTY_PRINT);
		$result_row->free();
	}

	public function getUnsyncedRecords($lastSyncDate){

		$result_row = $this->con->query("SELECT Id, Name, Type, Rating, Contact, OpenTime, CloseTime, 
										Monday, Tuesday, Wednesday, Thursday, Friday, 
										Saturday, Sunday, Latitude, Longitude, Status FROM poi WHERE LastUpdated > '$lastSyncDate'"); 

		$rows = array();
		while($r = mysqli_fetch_assoc($result_row)){
			$rows[]=$r;
		}
		echo json_encode($rows, JSON_PRETTY_PRINT);
		$result_row->free();
	}

	public function getComments($id){

		$result_row = $this->con->query("SELECT CONVERT_TZ(Date,'+00:00','+08:00') AS Date, Text FROM comment WHERE Id = '$id' ORDER BY Date DESC");
		$rows = array();
		while($r = mysqli_fetch_assoc($result_row)){
			$rows[]=$r;
		}
		echo json_encode($rows, JSON_PRETTY_PRINT);
		$result_row->free();
	}

	public function getPoiTags($poi){
		$result_row = $this->con->query("SELECT Id, Name FROM tag WHERE poi = '$poi'");
		$rows = array();
		while($r = mysqli_fetch_assoc($result_row)){
			$rows[]=$r;
		}
		echo json_encode($rows, JSON_PRETTY_PRINT);
		// $result_row->free();
	}

	public function getAllTags(){

		$result_row = $this->con->query("SELECT Id, Name, Poi, Flag FROM tag"); 

		$rows = array();
		while($r = mysqli_fetch_assoc($result_row)){
			$rows[]=$r;
		}
		echo json_encode($rows, JSON_PRETTY_PRINT);
		// $result_row->free();
	}

	public function getUnsyncedTags($lastSyncDate){

		$result_row = $this->con->query("SELECT Id, Name, Poi, Flag FROM tag WHERE LastUpdated > '$lastSyncDate'"); 

		$rows = array();
		while($r = mysqli_fetch_assoc($result_row)){
			$rows[]=$r;
		}
		echo json_encode($rows, JSON_PRETTY_PRINT);
		// $result_row->free();
	}

	public function getNearbyLocations($lat,$lon){
		$result_row = $this->con->query(" SELECT *, ( ((ACOS(SIN($lat * PI() / 180) * SIN(Latitude * PI() / 180) 
			+ COS($lat * PI() / 180) * COS(Latitude * PI() / 180) * COS(($lon - Longitude) * PI() / 180)) * 180 / PI()) * 60 * 1.1515) ) * 1.60934
			AS distance FROM poi HAVING Status = 0 AND distance<='0.5' ORDER BY distance ASC LIMIT 0,1");

		$rows = array();
		while($r = mysqli_fetch_assoc($result_row)){
			$rows[]=$r;
		}
		echo json_encode($rows, JSON_PRETTY_PRINT);
	}
}

?>