<?php //controleur

require('model/PostManager.php');
require('model/CommentManager.php');

class Frontend

{
	
	public function __Construct(){

		$this->postManager = new PostManager();
		$this->commentManager = new CommentManager();
	}


<<<<<<< HEAD
	public function postHome(){

		$postsHome = $this->postManager->getPosts();
		
		
	require('view/frontend/home.php');

	}

	public function commentView(){

		
=======
	public function postAndCommentHome(){

		$postsHome = $this->postManager->getPosts();
		$commentsHome = $this->commentManager->getComment();

		require('view/frontend/home.php');

>>>>>>> ea943d880097c893997a0d91670cc2a9e76d7df3
	}

}

?>