<?php 
	class MemberController extends Controller {
	    public function index() {
	    	$data = array(); 
	    	$data['lists'] = $this->model('member')->getLists();
	    	$this->view('member/index',$data);
	    }
	    public function add(){
	    	$data = array();
	    	$data['title'] = "เพิ่มสมาชิก";
	    	if($_SERVER['REQUEST_METHOD'] == "POST"){
    			$dataInsert = array(
    				'name'		=> $_POST['name'],
    				'lastname'	=> $_POST['lastname'],
    				'username'	=> $_POST['username'],
    				'password'	=> md5($_POST['password'])
    			);
    			$insert = $this->model('member')->memberInsert($dataInsert);
    			if($insert){
    				redirect('member');
    			}
    		}
	    	$this->view('member/add',$data);
	    }
	    public function edit(){
	    	$data = array();
	    	$data['title'] = "แก้ไขข้อมูล";

    		$id = $_GET['id'];
    		$data['result'] = $this->model('member')->getDetail($id);

    		if($_SERVER['REQUEST_METHOD'] == "POST"){
    			$dataUpdate = array(
    				'name'		=> $_POST['name'],
    				'lastname'	=> $_POST['lastname'],
    				'username'	=> $_POST['username'],
    				'password'	=> md5($_POST['password'])
    			);
    			$update = $this->model('member')->memberUpdate($id,$dataUpdate);
    			if($update){
    				redirect('member/edit&id='.$id.'&update=success');
    			}
    		}

	    	$this->view('member/edit',$data);
	    }
	    public function del(){
	    	$id = $_GET['id'];
	    	$delete = $this->model('member')->del($id);
	    	if($delete){
	    		redirect('member');
	    	}
	    }
	}
?>