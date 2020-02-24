<?php // Modele commentaires

require_once('model/ModelManager.php');

class CommentManager extends ModelManager {
	
	public function getComments($postId){

		$db = $this->connectDb();

<<<<<<< HEAD
		$commentsId = $db->prepare('SELECT id_comment,content, post_id, author, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation FROM comment WHERE post_id=? ORDER BY date_creation');
=======
		$commentsId = $db->prepare('SELECT id_comment,content, post_id, user_id, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation FROM comment WHERE post_id=? ORDER BY date_creation');
>>>>>>> 38d7719520a0a353160a62392d2e89c0dd6cdd7f
		$commentsId->execute(array($postId));
   
    	return $commentsId;
	}


	public function allComments(){

		$db = $this->connectDb();

<<<<<<< HEAD
		$comments = $db->query('SELECT id_comment,content, post_id, author, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation FROM comment ORDER BY id_comment');
=======
		$comments = $db->query('SELECT id_comment,content, post_id, user_id, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation FROM comment ORDER BY id_comment');
>>>>>>> 38d7719520a0a353160a62392d2e89c0dd6cdd7f
   
    	return $comments;
	}

<<<<<<< HEAD
	public function addComments($postId, $author, $content){

		$db = $this->connectDb();
		$addComments = $db->prepare('INSERT INTO comment(post_id, author, content, date_creation) VALUES(?, ?, ?, NOW())');
		$affectedLines = $addComments->execute(array($postId, $author, $content));
		
    	return $affectedLines;
=======
<<<<<<< HEAD
	public function addComments($postId, $user_id, $content){

		$db = $this->connectDb();

		$addComments = $db->prepare('INSERT INTO comment(post_id, user_id, content, id_comment, content, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\')) VALUES(?, ?, ?, NOW())');
		$affectedLines = $addComments->execute(array($postId, $user_id, $content));
   
    	return $affectedLines;
=======
	public function addComment(){

		$db = $this->connectDb();

		$addComment = $db->query('INSERT id_comment, content, post_id, user_id, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation FROM comment ORDER BY id_comment');
   
    	return $addComment;
>>>>>>> 13a7b56bb96358324dcd346f6f8ff4e5b558a060
>>>>>>> 38d7719520a0a353160a62392d2e89c0dd6cdd7f

	}

	public function updateComment(){

		$db = $this->connectDb();

<<<<<<< HEAD
		$updateComment = $db->query('UPDATE id_comment, content, post_id, author, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation FROM comment ORDER BY id_comment');
=======
		$updateComment = $db->query('UPDATE id_comment, content, post_id, user_id, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation FROM comment ORDER BY id_comment');
>>>>>>> 38d7719520a0a353160a62392d2e89c0dd6cdd7f
   
    	return $updateComment;

    }

    public function deleteComment(){

		$db = $this->connectDb();

<<<<<<< HEAD
		$deleteComment = $db->query('DELETE id_comment, content, post_id, author, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation FROM comment ORDER BY id_comment');
=======
		$deleteComment = $db->query('DELETE id_comment, content, post_id, user_id, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation FROM comment ORDER BY id_comment');
>>>>>>> 38d7719520a0a353160a62392d2e89c0dd6cdd7f
   
    	return $deleteComment;

    }




}
?>