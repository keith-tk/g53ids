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

	public function confirmPoi($id){		

		$result_row = $this->increaseFlagValue($id);
		
		if($result_row){
			$flag = $this->getFlagValue($id);
			if($flag == 3){
				$this->savePoi($id);
			}
			else{
				echo "true";
			}
		}
		else{
			echo "false";
		}
	}

	public function savePoi($id){
		$date  = new DateTime();
		$updatedTime = $date->format('Y-m-d H:i:s');		
		$result_row = $this->con->query("UPDATE poi SET Status = 2, LastUpdated = '$updatedTime' WHERE id = '$id'"); 
		if($result_row){
			$this->resetFlagValue($id);
			echo "true";
		}
		else{
			echo "false";
		}
	}

	public function rejectPoi($id){
		$result_row = $this->decreaseFlagValue($id);
		if($result_row){
			if($this->getFlagValue($id) == -3){
				$this->deletePoi($id);
			}
			else{
				echo "true";
			}
		}
		else{
			echo "false";
		}
	}

	public function dismissPoi($id){		

		if(!$this->isPoiDeleted($id)){
			$result_row = $this->increaseFlagValue($id);
			
			if($result_row){
				$flag = $this->getFlagValue($id);
				if($flag == 3){
					$this->deletePoi($id);
				}
				else{
					echo "true";
				}
			}
			else{
				echo "false";
			}
		}
	}

	public function deletePoi($id){
		$date  = new DateTime();
		$updatedTime = $date->format('Y-m-d H:i:s');		
		$result_row = $this->con->query("UPDATE poi SET Status = 1, LastUpdated = '$updatedTime' WHERE id = '$id'"); 
		if($result_row){
			$this->resetFlagValue($id);
			echo "true";
		}
		else{
			echo "false";
		}
	}

	public function isPoiDeleted($id){
		$row = $this->con->query("SELECT Status FROM poi WHERE Id = '$id'");
		$r = mysqli_fetch_assoc($row);
		return $r["Status"] == 1;
	}

	public function getFlagValue($id){
		$row = $this->con->query("SELECT Flag FROM log WHERE Id = '$id'");
		$r = mysqli_fetch_assoc($row);
		return $r["Flag"];
	}

	public function increaseFlagValue($id){
		return $result_row = $this->con->query("UPDATE log SET FLag = Flag+1 WHERE Id = '$id'");
	}

	public function decreaseFlagValue($id){
		return $result_row = $this->con->query("UPDATE log SET FLag = Flag-1 WHERE Id = '$id'");
	}

	public function resetFlagValue($id){
		$result_row = $this->con->query("UPDATE log SET FLag = 0 WHERE Id = '$id'");
	}

	
}

?>