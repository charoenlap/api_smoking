<?php 
	class QuestionnaireController extends Controller {
	    public function index() {
	    	$data = array();
	    	$id_category = (int)get('id_category');
	    	$data = array(
	    		'id_category' => $id_category
	    	);
	    	$result = $this->model('master')->getQuestion($data);
	    	echo "<pre>";
	    	var_dump($result);
	    	// $this->json($result);
	    	// $this->view('home',$data);
	    }
	}
?>