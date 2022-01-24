<?php 
	class GroupModel extends db {
		public function saveMenu($data=array()){
			$this->query("DELETE FROM s_take_group WHERE id_group='".(int)$data['id']."'");
			foreach($data['chk'] as $val){
				$insert = array(
					'id_menu' => (int)$val,
					'id_group'=> (int)$data['id']
				);
				$this->insert('take_group',$insert);
			}
		}
		public function listGroup($data = array()){
			$result = array(
				'result' => 'fail'
			);
			$sql = "SELECT * FROM s_group WHERE del=0";
			$result_group = $this->query($sql);
			if($result_group->num_rows > 0){
				$result = array(
					'result' 	=> 'success',
					'detail'	=> $result_group->rows
				);
			}
			return $result;
		}
		public function listMenu($data = array()){
			$result = array(
				'result' => 'fail'
			);
			$sql = "SELECT *,s_menu.id as id FROM s_menu LEFT JOIN s_take_group ON s_menu.id = s_take_group.id_menu ORDER BY s_menu.id ASC";
			$result_group = $this->query($sql);
			if($result_group->num_rows > 0){
				$result = array(
					'result' 	=> 'success',
					'detail'	=> $result_group->rows
				);
			}
			return $result;
		}
		public function add($data = array()){
			$name = (isset($data['name'])?$data['name']:'');
			$name = $this->escape($name);
			$insert = array(
				'name'	=> $name
			);
			$this->insert('group',$insert);
		}
		public function del($id=0){
			$sql = "UPDATE s_group SET del = '1' WHERE id='".(int)$id."'";
			$this->query($sql);
		}
	}
?>