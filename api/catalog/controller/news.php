<?php  
	class NewsController extends Controller {
		public function index(){
			$result = $this->model('news')->getLists();
			$this->json($result);
		}
		public function detail(){
			if(isset($_GET['id'])){
				$id = $_GET['id'];
				$result = $this->model('news')->getDetail($id);
				if($result){
					$this->json($result);
				}
			}
		}
	}
?>