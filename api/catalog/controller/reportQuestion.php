<?php 
	class ReportQuestionController extends Controller {
	    public function index() {
	    	if($_SERVER['REQUEST_METHOD']=="POST"){
	    		$dataInsert = array(
	    			'name'		=> '',
	    			'cat_id'	=> $_POST['cat_id'],
	    			'answer'	=> $_POST['answer'],
	    			'date_add'	=> date('Y-m-d H:i:s'),
	    			'del'		=> '0'
	    		);
	    		$insert = $this->model('reportQuestion')->add($dataInsert);
	    		if($insert){
	    			$result = array(
		    			'result'	=> 'success'
		    		);
	    		}
	    	}else{
	    		$result = array(
	    			'result'	=> 'failed'
	    		);
	    	}
	    	$this->json($result);
	    }
	}
?>