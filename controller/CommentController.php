<?php
/*
*	Cette class sert à gérer les fonctionnalité en rapport avec la base de données pour les commentaires 
*/
class CommentController
{
	public function addComment($id_chapter, $author, $content)
	{
		$commentManager = new CommentManager();

		$addComment = $commentManager->insertComment($id_chapter, $author, $content);

		if ($result === false) {
			throw new Exception('Imposible d\'ajouter le commentaire');
		}else {
			header('location: index.php?action=single&idChapter=' . $id_chapter);
		}
	}

	public function updateComment($idComment)
	{
		$commentManager = new CommentManager();

		$updateComment = $commentManager->updateComment('1', $idComment);

		header('location: index.php?action=waitcomments');
	}

	public function signalComment($idComment, $idChapter)
	{
		$commentManager = new CommentManager();

		$signalComment = $commentManager->updateComment('0', $idComment);

		header('location: index.php?action=single&idChapter=' . $idChapter);
	}

	public function deleteComment($idComment)
	{
		$commentManager = new CommentManager();

		$deleteComment = $commentManager->deleteComment($idComment);

		header('location: index.php?action=waitcomments');
	}

}