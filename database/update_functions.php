<?php
include_once 'base_function.php';
class Update_Functions extends Base_Function{
	
	public function deleteTag($id){
		$date  = new DateTime();
		$updatedTime = $date->format('Y-m-d H:i:s');		
		$result_row = $this->con->query("UPDATE tag SET FLag = 1, LastUpdated = '$updatedTime' WHERE id = '$id'"); 
		if($result_row){
			echo "true";
		}
		else{
			echo "false";
		}
	}

	
}

?>