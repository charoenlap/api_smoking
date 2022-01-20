<?php 
	class NewsController extends Controller {
	    public function index() {
	    	$data = array(); 
	    	$data['title'] = "ข่าวสาร";
	    	$data['lists'] = $this->model('news')->getLists();
	    	$this->view('news/index',$data);
	    }
	    public function add(){
	    	$data = array();
	    	$data['title'] = "เพิ่มข่าวสาร";
	    	if($_SERVER['REQUEST_METHOD'] == "POST"){
	    		$data = array(
	    			'title'		=> $_POST['title'],
	    			'text'		=> $_POST['text'],
	    			'date_add'	=> date('Y-m-d H:i:s'),
	    		);
	    		$insert = $this->model('news')->addNews($data);
	    		if($insert){
	    			redirect('news');
	    		}
	    	}
	    	$this->view('news/add',$data);
	    }
	    public function edit(){
	    	$data = array();
	    	$data['title'] = "แก้ไขข้อมูล";
	    	$id = $_GET['id'];
	    	$data['result'] = $this->model('news')->getDetail($id);
	    	if($_SERVER['REQUEST_METHOD'] == "POST"){
	    		$data = array(
	    			'title'		=> $_POST['title'],
	    			'text'		=> $_POST['text'],
	    			'date_edit'	=> date('Y-m-d H:i:s')
	    		);
	    		$update = $this->model('news')->updateNews($id,$data);
	    		if($update){
	    			redirect('news/edit&id='.$id.'&update=success');
	    		}
	    	}
	    	$this->view('news/edit',$data);
	    }
	    public function del(){
	    	$id = $_GET['id'];
	    	$delete = $this->model('news')->del($id);
	    	if($delete){
	    		redirect('news');
	    	}
	    }
	}
?>