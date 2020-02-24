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
=======
<<<<<<< HEAD
>>>>>>> 38d7719520a0a353160a62392d2e89c0dd6cdd7f
	public function addComment($postId, $user_id, $content){

		$affectedLines = $this->commentManager->addComments($postId, $user_id, $content);

<<<<<<< HEAD

=======
>>>>>>> 38d7719520a0a353160a62392d2e89c0dd6cdd7f
		if ($affectedLines === false) {
			die('Impossible d\'ajouter le commentaire !');
		}
		else {
<<<<<<< HEAD
			header('Location: index.php?action=postViewId&id_post=' . $postId);
=======
			header('Location: index.php?action=post&id=' . $postId);
>>>>>>> 38d7719520a0a353160a62392d2e89c0dd6cdd7f
		}

	require('view/frontend/postView.php');
	}

<<<<<<< HEAD
	public function addPosts(){

		$affectedPost = $this->postManager->addPosts($_POST['title'], $_POST['user_id'], $_POST['content']);

		if(isset($_POST['title']) && !empty($_POST['title']) && isset($_POST['user_id']) &&  !empty($_POST['user_id']) && isset($_POST['content'])) && !empty($_POST['content']) {
						$this->frontController->addPosts($_GET['title'], $_POST['user_id'], $_POST['content']);
		}
		if ($affectedPost === false) {
			die('Impossible d\'ajouter l\'article !');
		
	}
	require('view/frontend/addPost.php');
	}

=======
=======
>>>>>>> 13a7b56bb96358324dcd346f6f8ff4e5b558a060
>>>>>>> 38d7719520a0a353160a62392d2e89c0dd6cdd7f
}

?>