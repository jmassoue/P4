<?php // Modele commentaires

require_once('model/ModelManager.php');

class CommentManager extends ModelManager {
	
<<<<<<< HEAD
	public function getComments($postId){

		$db = $this->connectDb();

		$commentsId = $db->prepare('SELECT id_comment, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\'), content, post_id, user_id, AS date_creation FROM comment ORDER BY id_comment WHERE post_id=?' );
		$commentsId->execute(array($postId));
   
    	return $commentsId;
=======
<<<<<<< HEAD
	public function getComments(){

		$db = $this->connectDb();

		$commentsHome = $db->query('SELECT id_comment, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\'), content, post_id, user_id, AS date_creation FROM comment ORDER BY id_comment WHERE post_id=?' );
   
    	return $commentsPostView;
=======
	public function getComment(){

		$db = $this->connectDb();

		$commentsHome = $db->query('SELECT id_comment, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\'), content, post_id, user_id, AS date_creation FROM comment ORDER BY id_comment DESC LIMIT 0, 5' );
   
    	return $commentsHome;
>>>>>>> ea943d880097c893997a0d91670cc2a9e76d7df3
>>>>>>> 8178d0bb627918d28798f6d308c2d693ffcce828
	}


	public function allComments(){

		$db = $this->connectDb();

		$comments = $db->query('SELECT id_comment, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\'), content, post_id, user_id, AS date_creation FROM comment ORDER BY id_comment');
   
    	return $comments;
	}

	public function addComment(){

		$db = $this->connectDb();

		$addComment = $db->query('INSERT id_comment, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\'), content, post_id, user_id, AS date_creation FROM comment ORDER BY id_comment');
   
    	return $addComment;

	}

	public function updateComment(){

		$db = $this->connectDb();

		$updateComment = $db->query('UPDATE id_comment, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\'), content, post_id, user_id, AS date_creation FROM comment ORDER BY id_comment');
   
    	return $updateComment;

    }

    public function deleteComment(){

		$db = $this->connectDb();

		$deleteComment = $db->query('DELETE id_comment, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\'), content, post_id, user_id, AS date_creation FROM comment ORDER BY id_comment');
   
    	return $deleteComment;

    }




}
?>