<?php  
	class ReportQuestionModel extends db {
		public function add($data){
			$query = $this->insert('question_report',$data);
			return $query;
		}
	}
?>