<?php  
	class ArticleModel extends db {
		public function getDetail(){
			$query = $this->getdata('article','id=1');
			return $query->row;
		}
	}
?>