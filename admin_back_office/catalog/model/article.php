<?php  
	class ArticleModel extends db {
		public function getDetail(){
			$query = $this->getdata('article','id=1');
			return $query->row;
		}
		public function updateArticle($data){
			$query = $this->update('article',$data,'id=1');
			return $query;
		}
	}
?>