<?php  
	class ArticleController extends Controller {
		public function index(){
			$result = $this->model('article')->getDetail();
			$this->json($result);
		}
	}
?>