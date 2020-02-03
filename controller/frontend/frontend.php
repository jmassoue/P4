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
=======
<<<<<<< HEAD
>>>>>>> 8178d0bb627918d28798f6d308c2d693ffcce828
	public function postHome(){

		$postsHome = $this->postManager->getPosts();
		
		
	require('view/frontend/home.php');

	}

<<<<<<< HEAD
	public function postcommentsView(){

		$postViewId = getPost($_GET['id_post']);
		$commentsId = getComments($_GET['id_comment']);

		require('postView.php');
=======
	public function commentView(){

		
=======
	public function postAndCommentHome(){

		$postsHome = $this->postManager->getPosts();
		$commentsHome = $this->commentManager->getComment();

		require('view/frontend/home.php');

>>>>>>> ea943d880097c893997a0d91670cc2a9e76d7df3
>>>>>>> 8178d0bb627918d28798f6d308c2d693ffcce828
	}

}

?>