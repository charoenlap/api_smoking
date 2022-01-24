<?php 
	class CommonController extends Controller {
	    public function header($data=array()) {
	    	$data = array();
	    	$data['menu'] = array();
	    	$menu = $this->getSession('menu');
	    	if(isset($menu['detail'])){
		    	foreach($menu['detail'] as $val){
		    		$data['menu'][] = $val['id'];
		    	}
		    }
	    	$this->render('common/header',$data);
	    }
	    public function footer($data=array()){
	    	$this->render('common/footer',$data);
	    }
	    public function logout($data=array()){
	    	session_destroy();
	    	$this->redirect('home',$data);
	    }
	}
?>