<?php  
	class MemberController extends Controller {
		public function login(){
			$username 	= $_GET['username'];
			$password	= $_GET['password'];
			$result 	= $this->model('member')->login($username,$password);
			if($result['result'] == 'success'){
				$this->json($result);
			}else{
				$this->json($result);
			}
		}
	}
?>