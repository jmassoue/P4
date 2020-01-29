<?php // Modele commentaires

require_once('model/ModelManager.php');

class CommentManager extends ModelManager {
	
	public function getComment(){

		$db = $this->connectDb();

		$commentsHome = $db->query('SELECT id_comment, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\'), content, post_id, user_id, AS date_creation FROM comment ORDER BY id_comment DESC LIMIT 0, 5' );
   
    	return $commentsHome;
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