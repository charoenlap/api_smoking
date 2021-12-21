<?php 
	class MasterModel extends db {
		public function getQuestion($data=array()){
			$result = array();
			$result_rows = array();
			$id_category = $data['id_category'];
			$result_question = $this->query('SELECT * FROM s_question WHERE id_category = '.$id_category);
			if($result_question->num_rows){
				foreach($result_question->rows as $val){
					$answer = array();
					$result_answer = $this->query('SELECT * FROM s_question_answer WHERE id_question = '.$val['id']);
					if($result_answer->num_rows){
						foreach($result_answer->rows as $answer){
							$type = ($answer['type']?$answer['type']:'0');
							$answer = array(
								'id' 	=> $answer['id'],
								'title' => $answer['title'],
								'type'	=> $type
							);
						}
					}
					$result_rows[] = array(
						'id'			=> $val['id'],
						'id_category' 	=> $val['id_category'],
						'title' 		=> $val['title'],
						'answer' 		=> $answer
					);
				}
			}
			$result = array(
				'status' 	=> 'success',
				'rows'		=> $result_rows
			);
			return $result;
		}
	}
?>