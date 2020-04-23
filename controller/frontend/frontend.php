<?php //controleur

require('model/PostManager.php');
require('model/CommentManager.php');
require('model/UserManager.php');

class Frontend

{
	
	public function __construct(){

		$this->postManager = new PostManager();
		$this->commentManager = new CommentManager();
		$this->userManager = new UserManager();
	}

	public function addMember(){
		
		
		if(isset($_POST['pseudo']) && !empty($_POST['pseudo']) && isset($_POST['password']) &&  !empty($_POST['password'])) {
		
		if(empty($_POST['pseudo']) || empty($_POST['password'])) {
			echo('Impossible d\'ajouter le nouveau membre !');
		

		}else {
			
			$affectedMember = $this->userManager->addMember($_POST['pseudo'], $_POST['password']);
		
		}}

	require('view/frontend/log.php');
	}

	public function verifyMember(){

		if(isset($_POST['connexion']))
		{
			$pseudo = htmlspecialchars($_POST['pseudo']);
			$password = $_POST['password'];
			if(!empty($pseudo) AND !empty($password))
			{
				$checkMember = $this->userManager->verifyMember();
				$isPasswordCorrect = password_verify($_POST['password'], $checkMember['password']);
				if($isPasswordCorrect = true);
				{
					$_SESSION['pseudo'] = $userinfo['pseudo'];
		        	$_SESSION['password'] = $userinfo['password']; 
				}
			}
			else
			{
				die("Tous les champs doivent être complétés !");
			}
		}
	require('view/frontend/log.php');
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
		
		if(empty($_POST['title']) || empty($_POST['content'])) {
			echo('Impossible d\'ajouter l\'article !');
		

		}else {
			
			$affectedPost = $this->postManager->addPosts($_POST['title'], $_POST['user_id'], $_POST['content']);

		}}
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

	public function delete(){

		$deletePost = $this->postManager->getPost($_GET['id_post']);
		if(isset($_GET['id_post']) && !empty($_GET['id_post'])) {
			$delete = $this->postManager->deletePost($_GET['id_post']);
		}
	
	require('view/frontend/deletePost.php');
	}

	public function connect(){

	}

}

?>