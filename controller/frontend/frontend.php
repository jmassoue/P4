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

	public function addComment($postId, $user_id, $content){

		$affectedLines = $this->commentManager->addComments($postId, $user_id, $content);


		if ($affectedLines === false) {
			die('Impossible d\'ajouter le commentaire !');
		}
		else {
			header('Location: index.php?action=postViewId&id_post=' . $postId);
		}

	require('view/frontend/postView.php');
	}

	public function addPosts(){

		
		if(isset($_POST['title']) && !empty($_POST['title']) && isset($_POST['user_id']) &&  !empty($_POST['user_id']) && isset($_POST['content']) && !empty($_POST['content'])) {
				$affectedPost = $this->postManager->addPosts($_POST['title'], $_POST['user_id'], $_POST['content']);
		
		}else {
			echo('au moin un champs est vide');
		}
	require('view/frontend/addPost.php');
	}

	public function reported($id_comment){

		$reported = $this->commentManager->reportedComment($id_comment);
		
	require('view/frontend/reported.php');
	}

	public function update(){

		$editPost = $this->postManager->getPost($_GET['id_post']);
		if(isset($_POST['title']) &&  !empty($_POST['title']) && isset($_POST['content']) && !empty($_POST['content'])) {
			$update = $this->postManager->updatePost($_POST['title'], $_POST['content'], $_GET['id_post']);
		
		}else {
			echo('aucune modification effectuer');
		}
	require('view/frontend/editPost.php');
	}

	public function delete($id_post){

		$deletePost = $this->postManager->getPost($_GET['id_post']);
		if(isset($_GET['id_post']) && !empty($_GET['id_post'])) {
			$delete = $this->postManager->deletePost($_GET['id_post']);
		}
	
	require('view/frontend/deletePost.php');
	}

}

?>