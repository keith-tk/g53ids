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

		$result_row = $this->con->query("SELECT Date, Text FROM comment WHERE Id = '$id'");
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
}

?>