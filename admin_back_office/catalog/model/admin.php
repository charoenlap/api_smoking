<?php 
	class AdminModel extends db {
		public function login($data = array()){
			$result = array(
				'result' => 'fail'
			);
			$admin_user		= $this->escape($data['admin_user']);
			$admin_password	= $this->escape($data['admin_password']);
			$sql = "SELECT * FROM s_admin WHERE admin_user ='".$admin_user."' AND admin_password=MD5('".$admin_password."') AND admin_status=1";
			$result_login = $this->query($sql);
			// echo $result_login->sql;
			if($result_login->num_rows > 0){
				$result = array(
					'result' 	=> 'success',
					'detail'	=> $result_login->row
				);
			}
			return $result;
		}
		public function listAdmin($data = array()){
			$result = array(
				'result' => 'fail'
			);
			$sql = "SELECT * FROM s_admin WHERE admin_status=1";
			$result_admin = $this->query($sql);
			if($result_admin->num_rows > 0){
				$result = array(
					'result' 	=> 'success',
					'detail'	=> $result_admin->rows
				);
			}
			return $result;
		}
		public function adminID($id_admin=0){
			$result = array(
				'result' => 'fail'
			);
			$sql = "SELECT * FROM s_admin 
				WHERE id_admin = '".(int)$id_admin."'";
			$result_admin = $this->query($sql);
			if($result_admin->num_rows > 0){
				$result = array(
					'result' 	=> 'success',
					'detail'	=> $result_admin->row
				);
			}
			return $result;
		}
		public function add($data = array()){
			$name = (isset($data['name'])?$data['name']:'');
			$name = $this->escape($name);

			$password = (isset($data['password'])?$data['password']:'');
			$password = $this->escape($password);

			$id_group = (isset($data['id_group'])?$data['id_group']:'');
			$id_group = $this->escape($id_group);

			$insert = array(
				'admin_user'	=> $name,
				'admin_password'=> md5($password),
				'admin_status'	=> 1,
				'id_group'		=> $id_group
			);
			$this->insert('admin',$insert);
		}
		public function save($data = array(),$id=0){
			$admin_user = (isset($data['admin_user'])?$data['admin_user']:'');
			// $admin_user = $this->escape($admin_user);

			$admin_password = (isset($data['admin_password'])?$data['admin_password']:'');
			// $admin_password = $this->escape($admin_password);

			$id_group = (isset($data['id_group'])?$data['id_group']:'');
			$id_group = $this->escape($id_group);

			$id = (int)$id;

			// echo $id;exit();

			if($id){
				$update = array(
					'admin_user'	=> $admin_user,
					'admin_name'	=> $admin_user,
					'admin_password'=> md5($admin_password),
					'admin_status'	=> 1,
					'id_group'		=> $id_group
				);
				// var_dump($update);exit();
				$this->update('admin',$update,"id_admin = '".$id."'");
			}
		}
		public function del($id=0){
			$sql = "UPDATE s_admin SET admin_status = '0' WHERE id_admin='".(int)$id."'";
			$this->query($sql);
		}
	}
?>