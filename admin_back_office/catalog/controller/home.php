<?php 
	class HomeController extends Controller {
	    public function index() {
	    	$data = array(); 
	    	$id_admin = $this->getSession('id_admin');
	    	if($id_admin){
	    		$data['member'] = $this->model('master')->countMember();
	    		$data['report'] = $this->model('master')->countReport();
	    		$data['quest'] 	= $this->model('master')->countQuest();
	    		$data['news'] 	= $this->model('master')->countNews();
	    		$this->view('home',$data);
	    	}else{
	    	 	redirect('home/login');
	    	}
	    }
	    public function login(){
	    	$data = array();
	    	if(method_post()){
	    		$admin = $this->model('admin');
	    		$data_login = array(
	    			'admin_user'		=> post('user'),
					'admin_password'	=> post('password'),
	    		);
	    		$result_login = $admin->login($data_login);
	    		if($result_login['result']=='success'){
	    			$this->setSession('id_admin',$result_login['detail']['id_admin']);
	    			$id_group = $result_login['detail']['id_group'];
	    			$menu  = $this->model('group')->listMenuID($id_group);
	    			$this->setSession('menu',$menu);
	    			redirect('home');
	    		}else{
	    			redirect('home/login&result=fail');
	    		}
	    	}
	    	$data['action'] = route('home/login');
	    	$this->render('login',$data);
	    }
	    public function logout(){
	    	$this->rmSession('id_admin');
	    	redirect('home/login');
	    }
	}
?>