<?php 
	class GroupController extends Controller {
	    public function index($data=array()) {
	    	$data['title'] = 'จัดกลุ่ม';
	    	$this->view('group/index',$data);
	    }
	}
?>