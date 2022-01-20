<?php  
	class ReportQuestionModel extends db {
		public function getLists(){
			// $query = $this->getdata('question_report','del=0');
			// return $query->rows;
			$query = $this->query("SELECT *,a.id as id FROM s_question_report a LEFT JOIN s_question_category b ON a.cat_id = b.id WHERE a.del=0");
			return $query->rows;
		}
		public function getDetail($id){
			$query = $this->getdata('question_report','id='.$id);
			return $query->row;
		}
		public function getQuestion($id){
			$query = $this->getdata('question','id_category='.$id);
			return $query->rows;
		}
		public function getAnswer($id){
			$query = $this->getdata('question_answer','id='.$id);
			return $query->row;
		}
	}
?>