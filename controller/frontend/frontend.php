<?php //controleur

require('model/PostManager.php');
require('model/CommentManager.php');

class Frontend

{
	
	public function __Construct(){

		$this->postManager = new PostManager();
		$this->commentManager = new CommentManager();
	}


	public function postAndCommentHome(){

		$postsHome = $this->postManager->getPosts();
		$commentsHome = $this->commentManager->getComment();

		require('view/frontend/home.php');

	}

}

?>