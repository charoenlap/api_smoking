<?php 
	class AdminController extends Controller {
	    public function index($data=array()) { 
	    	$data['title'] 		= 'จัดกลุ่ม';
    		$data['listAdmin'] 	= $this->model('admin')->listAdmin();
    		$data['listGroup'] 	= $this->model('group')->listGroup();
    		$this->view('admin/index',$data);
	    }
	    public function detail($data=array()) { 
	    	$data['title'] 		= 'จัดกลุ่ม';
	    	$data['id'] 		= $id = get('id');
    		$data['detail'] 	= $this->model('admin')->adminID($id)['detail'];
    		$data['listGroup'] 	= $this->model('group')->listGroup();
    		$this->view('admin/detail',$data);
	    }
	    public function add($data=array()) { 
	    	if(method_post()){
	    		$name 		= post('name');
	    		$password 	= post('password');
	    		$id_group 	= post('id_group');
	    		$data 		= array(
	    			'name'		=>	$name,
	    			'password'	=>	$password,
	    			'id_group'	=>	$id_group
	    		);
	    		$this->model('admin')->add($data);
	    		$this->redirect('admin');
	    	}
	    }
   	 	public function del() { 
    		$id = get('id');
    		$this->model('admin')->del($id);
    		$this->redirect('admin');
	    }
	    public function save(){
	    	// var_dump($_POST);exit();
	    	if(method_post()){
	    		$id 			= (int)post('id');
	    		$admin_user 	= post('admin_user');
	    		$admin_password = post('admin_password');
	    		$id_group 		= post('id_group');

	    		$update 		= array(
	    			'admin_user'		=>	$admin_user,
	    			'id_group'	=>	$id_group
	    		);
	    		if(!empty($admin_password)){
	    			$update['password'] = MD5($admin_password);
	    		}
	    		// var_dump($update);exit();
	    		$this->model('admin')->save($update,$id);
	    		$this->redirect('admin/detail&id='.$id);
	    	}
	    }
	}
?>