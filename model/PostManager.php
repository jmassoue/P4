<?php //modele articles

require_once('model/ModelManager.php');

class PostManager extends ModelManager {


	public function getPosts(){

		$db = $this->connectDb();

		$postsHome = $db->query('SELECT id_post, title, content, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation FROM post ORDER BY id_post DESC LIMIT 0, 5' );
   
    	return $postsHome;

	}

<<<<<<< HEAD
	public function getPost($postId){

		$db = $this->connectDb();

		$postId = $db->prepare('SELECT id_post, title, content, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation FROM post WHERE id_post= ?');
		$postId->execute(array($postId));
		$postViewId = $postId->fetch();

		return $postViewId;
	}

=======
>>>>>>> 8178d0bb627918d28798f6d308c2d693ffcce828
	public function allPosts(){

		$db = $this->connectDb();

		$posts = $db->query('SELECT id_post, title, content, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation FROM post ORDER BY id_post');

		return $posts;
	}

	public function addPosts(){

		$db = $this->connectDb();

		$addPosts = $db->query('INSERT id_post, title, content, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation FROM post ORDER BY id_post');
   
    	return $addPosts;

	}

	public function updatePost(){

		$db = $this->connectDb();

		$updatePost = $db->query('UPDATE id_post, title, content, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation FROM post ORDER BY id_post');
   
    	return $updatePost;

    }

    public function deletePost(){

		$db = $this->connectDb();

		$deletePost = $db->query('DELETE id_post, title, content, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation FROM post ORDER BY id_post');
   
    	return $deletePost;

    }
}

?>


