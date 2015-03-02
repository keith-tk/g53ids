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
}

?>