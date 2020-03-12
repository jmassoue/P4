<?php //modele articles

require_once('model/ModelManager.php');

class PostManager extends ModelManager {


	public function getPosts(){

		$db = $this->connectDb();

		$postsHome = $db->query('SELECT id_post, title, content, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation FROM post ORDER BY id_post DESC LIMIT 0, 5' );
   
    	return $postsHome;

	}

	public function getPost($postId){

		$db = $this->connectDb();

		$req = $db->prepare('SELECT id_post, title, content, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation FROM post WHERE id_post= ?');
		$req->execute(array($postId));
		$postViewId = $req->fetch();

		return $postViewId;
	}

	public function allPosts(){

		$db = $this->connectDb();

		$posts = $db->query('SELECT id_post, title, content, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation FROM post ORDER BY id_post');

		return $posts;
	}

	public function addPosts($title, $user_id, $content){

		$db = $this->connectDb();
		$addPosts = $db->prepare('INSERT INTO post(title, user_id, content, date_creation) VALUES(?, ?, ?, NOW())');
		$affectedPost = $addPosts->execute(array($title, $user_id, $content));
		
    	return $affectedPost;
    }

	public function updatePost($id_post, $title, $content, $date_modification){

		$db = $this->connectDb();

		$update = $db->prepare('UPDATE post SET(title, content, date_modification) VALUES(?, ?, NOW()) WHERE id_post = ?'); 
		$update->execute(array($id_post));

		return $update;

    }

    public function deletePost(){

		$db = $this->connectDb();

		$deletePost = $db->query('DELETE id_post, title, content, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation FROM post ORDER BY id_post');
   
    	return $deletePost;

    }
}

?>


