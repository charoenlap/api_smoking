<?php 
	class GroupController extends Controller {
	    public function index($data=array()) { 
	    	$data['title'] 		= 'จัดกลุ่ม';
    		$data['listGroup'] 	= $this->model('group')->listGroup();
    		$this->view('group/index',$data);
	    }
	    public function menu($data=array()) { 
	    	$data['title'] 		= 'จัดการเมนู';
	    	$data['id']			= get('id');
    		$data['listMenu'] 	= $this->model('group')->listMenu();
    		$this->view('group/menu',$data);
	    }
	    public function add($data=array()) { 
	    	if(method_post()){
	    		$name = post('name');
	    		$data = array(
	    			'name'	=>	$name
	    		);
	    		$this->model('group')->add($data);
	    		$this->redirect('group');
	    	}
	    }
   	 	public function del() { 
    		$id = get('id');
    		$this->model('group')->del($id);
    		$this->redirect('group');
	    }
	    public function saveMenu(){
	    	// var_dump($_POST);exit();
	    	if(method_post()){
	    		$chk = post('chk');
	    		$id = (int)post('id');
	    		$update = array(
	    			'id' 	=> $id,
	    			'chk'	=> $chk
	    		);
	    		// var_dump($update);exit();
	    		$this->model('group')->saveMenu($update);
	    		$this->redirect('group/menu&id='.$id);
	    	}
	    }
	}
?>