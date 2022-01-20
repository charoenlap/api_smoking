<?php  
	class QuestionModel extends db {
		public function getCategory(){
			$query = $this->getdata('question_category');
			return $query->rows;
		}
		public function getQuestionLists($id){
			$query = $this->getdata('question','id_category='.$id);
			return $query->rows;
		}
		public function getQuestionDetail($id){
			$sql 	= "SELECT * FROM s_question WHERE id = '".$id."'";
			$query 	= $this->query($sql); 
			return $query->row;
		}

		public function getAnswer($id){
			$query  = $this->getdata('question_answer','id_question = '.$id);
			return $query->rows;
		}

		// edit
		public function editQuestion($id,$data){
			$dataUpdate = array(
				'title' => $data
			);
			$query = $this->update('question',$dataUpdate,'id='.$id);
			return $query;
		}
		public function editAnswer($id,$data){
			$query = $this->update('question_answer',$data,'id='.$id);
			return $query;
		}

		// delete
		public function delAnswer($id){
			$query = $this->delete('question_answer','id_question ='.$id);
			return $query;
		}

		// insert
		public function insertAnswer($data){
			$query = $this->insert('question_answer',$data);
			return $query;
		}
		public function insertQuestion($data){
			$query = $this->insert('question',$data);
			return $query;
		}
	}
?>