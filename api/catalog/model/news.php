<?php  
	class NewsModel extends db {
		public function getLists(){
			$query = $this->getdata('news','del = 0');
			return $query->rows;
		}
		public function getDetail($id){
			$query = $this->getdata('news','id='.$id);
			return $query->row;
		}
	}
?>