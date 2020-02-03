<?php //controleur

require('model/PostManager.php');
require('model/CommentManager.php');

class Frontend

{
	
	public function __Construct(){

		$this->postManager = new PostManager();
		$this->commentManager = new CommentManager();
	}


	public function postHome(){

		$postsHome = $this->postManager->getPosts();
		
		
	require('view/frontend/home.php');

	}

	public function postcommentsView(){

		$postViewId = getPost($_GET['id_post']);
		$commentsId = getComments($_GET['id_comment']);

		require('postView.php');
	}

}

?>