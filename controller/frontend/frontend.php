<?php //controleur

require('model/PostManager.php');

class Frontend

{
	
	public function __Construct(){

		$this->postManager = new PostManager();
	}





	public function postHome(){

		$posts = $this->postManager->getPosts();

		require('view/frontend/home.php');

	}
}



?>