<?php
/*
*	Cette class s'occupe des fonction SQL pour les commentaires
*/
class CommentManager extends Manager
{
	public function getComments($postid, $status, $class)
	{
		$db = $this->dbConnect();

		$req = $db->prepare('SELECT *, DATE_FORMAT(date_comment, "le %d/%m/%y à %Hh%imin%ss") AS date_comment FROM comments WHERE id_chapter = ? AND status = ?');
		$req->execute([$postid, $status]);
		$datas = $req->fetchAll(PDO::FETCH_CLASS, $class);

		return $datas;
	}

	public function waitComments($status, $class)
	{
		$db = $this->dbConnect();

		$req = $db->prepare('SELECT id, author, content FROM comments WHERE status = ?');
		$req->execute([$status]);
		$datas = $req->fetchAll(PDO::FETCH_CLASS, $class);

		return $datas;
	}

	public function deleteComment($idComment)
	{
		$db = $this->dbConnect();

		$req = $db->prepare('DELETE FROM comments WHERE id = ?');
		$req->execute([$idComment]);
	}

	public function insertComment($id_chapter, $author, $content)
	{
		$db = $this->dbConnect();

		$req = $db->prepare('INSERT INTO comments (id_chapter, status, author, content, date_comment) VALUES (?, 0, ?, ?, NOW())');
		$result = $req->execute([$id_chapter, $author, $content]);

		return $result;
	}

	public function updateComment($newStatus, $idComment)
	{
		$db = $this->dbConnect();

		$req = $db->prepare('UPDATE comments SET status = ? WHERE id = ?');
		$req->execute([$newStatus, $idComment]);
	}
}