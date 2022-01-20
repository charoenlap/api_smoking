<?php 
	class ArticleController extends Controller {
	    public function index() {
	    	$data = array(); 
	    	$data['title'] = "บทความ";
	    	$data['result'] = $this->model('article')->getDetail();
	    	if($_SERVER['REQUEST_METHOD'] == "POST"){
	    		$dataUpdate = array(
	    			'text'		=> $_POST['text'],
	    			'date_edit'	=> date('Y-m-d H:i:s')
	    		);
	    		$update = $this->model('article')->updateArticle($dataUpdate);
	    		if($update){
	    			redirect('article&update=success');
	    		}
	    	}
	    	$this->view('article/index',$data);
	    }
	}
?>