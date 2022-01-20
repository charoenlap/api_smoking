<?php  
	class NewsModel extends db {
		public function getLists(){
			$query = $this->getdata('news','del = 0');
			return $query->rows;
		}
		public function addNews($data){
			$query = $this->insert('news',$data);
			return $query;
		}
		public function getDetail($id){
			$query = $this->getdata('news','id='.$id);
			return $query->row;
		}
		public function updateNews($id,$data){
			$query = $this->update('news',$data,'id='.$id);
			return $query;
		}
		public function del($id){
			$data  = array(
				'del' => '1'
			);
			$query = $this->update('news',$data,'id='.$id);
			return $query;
		}
	}
?>