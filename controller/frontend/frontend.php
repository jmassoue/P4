<?php //controleur

require('model/PostManager.php');
require('model/CommentManager.php');

class Frontend

{
	
	public function __construct(){

		$this->postManager = new PostManager();
		$this->commentManager = new CommentManager();
	}


	public function postHome(){

		$postsHome = $this->postManager->getPosts();
		
		
	require('view/frontend/home.php');

	}

	public function postcommentsView(){

		$postViewId = $this->postManager->getPost($_GET['id_post']);
		$commentsId = $this->commentManager->getComments($_GET['id_post']);
		

	require('view/frontend/postView.php');
	}

<<<<<<< HEAD
	public function addComment($postId, $user_id, $content){

		$affectedLines = $this->commentManager->addComments($postId, $user_id, $content);

		if ($affectedLines === false) {
			die('Impossible d\'ajouter le commentaire !');
		}
		else {
			header('Location: index.php?action=post&id=' . $postId);
		}

	require('view/frontend/postView.php');
	}

=======
>>>>>>> 13a7b56bb96358324dcd346f6f8ff4e5b558a060
}

?>