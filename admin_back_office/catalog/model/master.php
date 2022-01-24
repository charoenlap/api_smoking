<?php 
	class MasterModel extends db {
		public function countMember($data=array()){
			$result = 0;
			$result = $this->query('SELECT count(id) as count FROM s_user')->row['count'];
			return $result;
		}
		public function countReport($data=array()){
			$result = 0;
			$result = $this->query('SELECT count(id) as count FROM s_question_report')->row['count'];
			return $result;
		}
		public function countQuest($data=array()){
			$result = 0;
			$result = $this->query('SELECT count(id) as count FROM s_question_category')->row['count'];
			return $result;
		}
	}
?>