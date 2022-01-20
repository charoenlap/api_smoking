<?php  
	class MemberModel extends db {
		public function login($username,$password){
			$sql = "SELECT * FROM s_user WHERE username = '".$username."' AND password = '".md5($password)."' AND del = 0";
			$result_login = $this->query($sql);
			if($result_login->num_rows > 0){
				$result = array(
					'result' 	=> 'success',
					'detail'	=> $result_login->row
				);
			}else{
				$result = array(
					'result'	=> 'failed'
				);
			}
			return $result;
		}
	}
?>