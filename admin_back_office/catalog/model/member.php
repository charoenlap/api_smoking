<?php  
	class MemberModel extends db {
		public function getLists(){
			$query = $this->getdata('user','del=0');
			return $query->rows;
		}
		public function getDetail($id){
			$query = $this->getdata('user','id='.$id);
			return $query->row;
		}

		// update
		public function memberUpdate($id,$data){
			$query = $this->update('user',$data,'id='.$id);
			return $query;
		}
		public function del($id){
			$data  = array(
				'del' => '1'
			);
			$query = $this->update('user',$data,'id='.$id);
			return $query;
		}

		// insert
		public function memberInsert($data){
			$query = $this->insert('user',$data);
			return $query;
		}
	}
?>