<?php // Modele commentaires

require_once('model/ModelManager.php');

class CommentManager extends ModelManager {
	
	public function getComments($postId){

		$db = $this->connectDb();

		$commentsId = $db->prepare('SELECT id_comment,content, post_id, user_id, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation FROM comment WHERE post_id=? ORDER BY date_creation');
		$commentsId->execute(array($postId));
   
    	return $commentsId;
	}


	public function allComments(){

		$db = $this->connectDb();

		$comments = $db->query('SELECT id_comment,content, post_id, user_id, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation FROM comment ORDER BY id_comment');
   
    	return $comments;
	}

	public function addComments($postId, $user_id, $content){

		$db = $this->connectDb();

		$addComments = $db->prepare('INSERT INTO comment(post_id, user_id, content, id_comment, content, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\')) VALUES(?, ?, ?, NOW())');
		$affectedLines = $addComments->execute(array($postId, $user_id, $content));
   
    	return $affectedLines;

	}

	public function updateComment(){

		$db = $this->connectDb();

		$updateComment = $db->query('UPDATE id_comment, content, post_id, user_id, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation FROM comment ORDER BY id_comment');
   
    	return $updateComment;

    }

    public function deleteComment(){

		$db = $this->connectDb();

		$deleteComment = $db->query('DELETE id_comment, content, post_id, user_id, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation FROM comment ORDER BY id_comment');
   
    	return $deleteComment;

    }




}
?>