<?php 
	class MasterModel extends db {
		public function getDateLastedResult(){
			return $this->query("SELECT * FROM b_result ORDER BY date ASC limit 0,1")->row['date'];
		}
	}
?>