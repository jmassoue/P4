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

	public function update($id_post, $title, $content, $date_modification){

		if(isset($_POST['id_post']) && !empty($_POST['id_post']) && isset($_POST['title']) &&  !empty($_POST['title']) && isset($_POST['content']) && !empty($_POST['content']) && isset($_POST['date_modification']) && !empty($_POST['date_modification'])) {
			$update = $this->postManager->updatePost($_POST['id_post'], $_POST['title'], $_POST['content'],
			$_POST['date_modification']);
		}else {
			echo('aucune modification effectuer');
		}
	require('view/frontend/postView.php');
	}

}

?>