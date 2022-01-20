<?php 
	class ReportController extends Controller {
	    public function index() {
	    	$data = array(); 
	    	$this->view('report/index',$data);
	    }
	}
?>