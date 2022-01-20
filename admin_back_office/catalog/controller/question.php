<?php 
	class QuestionController extends Controller {
	    public function index() {
	    	$data = array(); 
	    	$data['title'] = "ประเภทแบบสอบถาม";
	    	$data['lists'] = $this->model('question')->getCategory();

	    	$this->view('question/index',$data);
	    }
	    public function listQuestion(){
	    	$data = array();
	    	$data['title'] = "แบบสอบถาม";
	    	if($_SERVER['REQUEST_METHOD'] == "GET"){
	    		$id = $_GET['cat_id'];
	    		$data['lists'] = $this->model('question')->getQuestionLists($id);
	    	}
	    	$this->view('question/lists',$data);
	    }
	    public function editQuestion(){
	    	$data = array();
	    	$data['title'] = "แก้ไขแบบสอบถาม";

    		$id 	= $_GET['id'];
    		$cat_id = $_GET['cat_id'];
    		$data['datalist'] 	= $this->model('question')->getQuestionDetail($id);
    		$data['dataanswer']	= $this->model('question')->getAnswer($id);
    		$data['lists'] 		= $this->model('question')->getQuestionLists($cat_id);

    		if($_SERVER['REQUEST_METHOD'] == "POST"){
    			// print_r($_POST);
    			// exit();
    			$id_question 	= $_POST['question_id'];
    			$updateQuestion = $this->model('question')->editQuestion($id_question,$_POST['question_title']);
    			$deleteAnswer	= $this->model('question')->delAnswer($id_question);
    			foreach ($_POST['ans_title'] as $key => $value) {
    				$dataInsertAnswer = array(
    					'id_question'		=> $id_question,
    					'title' 			=> $value,
    					'next_id_question'	=> $_POST['next_id_question'][$key],
    				);
    				$insertAnswer = $this->model('question')->insertAnswer($dataInsertAnswer);
    			}
    			redirect('question/editQuestion&id='.$id.'&cat_id='.$cat_id);
    		}
    		
	    	$this->view('question/editQuestion',$data);
	    }
	    public function addQuestion(){
	    	$data = array();
	    	$data['title'] 	= "เพิ่มแบบสอบถาม";
	    	$cat_id 		= $_GET['cat_id'];
	    	$data['lists'] 	= $this->model('question')->getQuestionLists($cat_id);

	    	if($_SERVER['REQUEST_METHOD'] == "POST"){
	    		$dataQuestion = array(
	    			'id_category'	=> $cat_id,
	    			'title'			=> $_POST['question_title']
	    		);
	    		$insertQuestion = $this->model('question')->insertQuestion($dataQuestion);
	    		foreach ($_POST['ans_title'] as $key => $value) {
	    			$dataAnswer = array(
	    				'id_question' 		=> $insertQuestion,
	    				'title'				=> $value,
	    				'next_id_question'	=> $_POST['next_id_question']
	    			);
	    			$insertAnswer = $this->model('question')->insertAnswer($dataAnswer);
	    		}
	    		redirect('question/listQuestion&cat_id='.$cat_id);
	    	}

	    	$this->view('question/addQuestion',$data);
	    }
	}
?>