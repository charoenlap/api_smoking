<?php 
	class ReportQuestionController extends Controller {
	    public function index() {
	    	$data = array(); 
	    	$data['title'] 	= "รายงานผลแบบสอบถาม";
	    	$data['lists']	= $this->model('reportQuestion')->getLists('all');
	    	
	    	$this->view('reportQuestion/index',$data);
	    }
	    public function detail(){
	    	$data = array(); 
	    	$data['title'] 	= "รายละเอียด";
	    	$id = $_GET['id'];

	    	$data['result']		= $this->model('reportQuestion')->getDetail($id);
	    	$question			= $this->model('reportQuestion')->getQuestion($data['result']['cat_id']);
	    	
	    	$answer = json_decode($data['result']['answer']);

	    	foreach ($answer as $key => $value) {
	    		// $data['answer'][]	= $this->model('reportQuestion')->getAnswer($value);
	    		$data['answer'][]	= $value;
	    	}
	    	foreach ($question as $key => $value) {
	    		$data['question'][] = array(
	    			'title'		=> $value['title'],
	    			'answer'	=> $data['answer'][$key]
	    		);
	    	}
	    	$this->view('reportQuestion/view',$data);
	    }
	}
?>