<?php
/*
*	Cette class s'occupe des fonction SQL pour les posts
*/
class PostManager extends Manager
{
	public function getPosts($page, $nbparpage, $class)
	{
		$db = $this->dbConnect();

		$req = $db->query('SELECT *, DATE_FORMAT(date_chapter, "Publié le %d/%m/%y") AS date_chapter FROM chapter LIMIT '. $page . "," . $nbparpage);
		
		$datas = $req->fetchAll(PDO::FETCH_CLASS, $class);

		return $datas;
	}

	public function getSinglePost($postId, $class)
	{
		$db = $this->dbConnect();

		$req = $db->prepare('SELECT *, DATE_FORMAT(date_chapter, "Publié le %d/%m/%y") AS date_chapter FROM chapter WHERE id = ?');
		$req->execute(array($postId));
		$req->setFetchMode(PDO::FETCH_CLASS, $class);
		$datas = $req->fetch();

		return $datas;
	}

	public function getNumberPost()
	{
		$db = $this->dbConnect();

		$req = $db->query('SELECT COUNT(id) FROM chapter');
		$datas = $req->fetch();
		$data = intval($datas['COUNT(id)']);

		return $data;
	}

	public function deletePost($postId)
	{
		$db = $this->dbConnect();

		$req = $db->prepare('DELETE FROM chapter WHERE id = ?');
		$req->execute(array($postId));
	}

	public function addPost($title, $content, $chapter_number)
	{
		$db = $this->dbConnect();

		$req = $db->prepare('INSERT INTO chapter (chapter_number, title, content, date_chapter) VALUES (?, ?, ?, NOW())');
		$req->execute([$chapter_number, $title, $content]);
	}

	public function updatePost($title, $content, $lastid, $chapter_number)
	{
		$db = $this->dbConnect();

		$req = $db->prepare('UPDATE chapter SET chapter_number = ?, title = ?, content = ?, date_chapter = NOW() WHERE id = ?');
		$req->execute([$chapter_number, $title, $content, $lastid]);
	}
}