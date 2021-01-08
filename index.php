<?php
/*
*	Cette class sert de router, tout passe par la pour ensuite étre redirigé vers les bonnes fonctions
*/
require('controller/Autoloader.php');
Autoloader::register();

if (isset($_GET['action'])) 
{
	$action = $_GET['action'];
} else 
{
	$action = 'home';
}

//initialization of objects
$appController = new AppController();
$postController = new PostController();
$commentController = new CommentController();

try{
	if ($action === 'home')
	{
		$appController->getHomePage();
	}
	elseif ($action === 'single') 
	{	
		if (isset($_GET['idChapter']) && $_GET['idChapter'] <= $postController->number_Post() && $_GET['idChapter'] > 0) 
		{ 			
			$appController->getSinglePage();
		}
		else
		{
			throw new Exception('Mauvaise identifation de billet envoyé');
		}		
	}
	elseif ($action === 'addcomment') {
		if (isset($_GET['idChapter']) && $_GET['idChapter'] > 0 && $_GET['idChapter'] <= $postController->number_Post()) 
		{
			if (!empty($_POST['author']) && !empty($_POST['content'])) 
			{
				$commentController->addComment($_GET['idChapter'], $_POST['author'], $_POST['content']);
			}
			else
			{
				throw new Exception("Tous les champs ne sont pas remplie !");				
			}
		}
		else
		{
			throw new Exception('Mauvaise identifation de billet envoyé');
		}
	}
	elseif ($action === 'biography') 
	{
		if ($action === 'biography') 
		{
			$appController->getBiography();
		}
		else
		{
			throw new Exception("Cette page n'existe pas");
		}	
	}
	elseif ($action === 'connect') 
	{
		if (isset($_POST['email']) && isset($_POST['password'])) 
		{
			$appController->getConnect($_POST['email'], $_POST['password']);
		}
		else
		{
			throw new Exception("Vous n'avez pas remplie tout les champs");
		}
	}
	elseif ($action === 'disconnect') 
	{
		if (isset($_SESSION['loger'])) 
		{
			$appController->disconnect();
		}
		else
		{
			throw new Exception("Vous n'étes pas connecter");
		}
	}
	elseif ($action === 'dashboard') 
	{
		if (isset($_SESSION['loger'])) 
		{
			$appController->getDashboard();
		}
		else
		{
			throw new Exception("Vous n'avez pas les accés pour l'administration");
		}
	}
	elseif ($action === 'waitcomments') 
	{
		if (isset($_SESSION['loger']))
		{
			$appController->getWaitComments();
		}
		else
		{
			throw new Exception("Vous n'avez pas les accés pour les commentaires en attente");
		}
	}
	elseif ($action === 'modifystatus') 
	{
		if (isset($_GET['idComment']) && isset($_SESSION['loger'])) 
		{
			$commentController->updateComment($_GET['idComment']);
		}
		else
		{
			throw new Exception("Vous n'avez pas les accés pour modifier les commentaires en attente");
		}
	}
	elseif ($action === 'deletecomment') 
	{
		if (isset($_GET['idComment']) && isset($_SESSION['loger'])) 
		{
			$commentController->deleteComment($_GET['idComment']);
		}
		else
		{
			throw new Exception("Vous n'avez pas les accés pour suprimmer les commentaires");
		}
	}
	elseif ($action === 'writechapter') 
	{
		if (isset($_SESSION['loger'])) 
		{
			$appController->getWriteChapter();
		}
		else
		{
			throw new Exception("Vous n'avez pas les accés pour écrire un chapitre");
		}
	}
	elseif ($action === 'addchapter') 
	{
		if (isset($_SESSION['loger']) && !empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['id'])) 
		{
			$postController->addChapter($_POST['title'], $_POST['content'], $_POST['id']);
		}
		else
		{
			throw new Exception("Vous n'avez pas les accés pour envoyer un chapitre ou vous n'avez pas remplie tout les champs");
		}
	}
	elseif ($action === 'listmodifychapter') 
	{
		if (isset($_SESSION['loger']) && isset($_GET['pagenumber'])) 
		{
			$appController->getListModifyChapter($_GET['pagenumber']);
		}
		else
		{
			throw new Exception("Vous n'avez pas les accés pour accéder à la liste des chapitres à modifier");
		}
	}
	elseif ($action === 'deletechapter') 
	{
		if (isset($_SESSION['loger']) && isset($_GET['chapterid'])) 
		{
			$postController->deleteChapter($_GET['chapterid']);
		}
		else
		{
			throw new Exception("Vous n'avez pas les accés pour supprimer un chapitre");
		}
	}
	elseif ($action === 'modifychapter') 
	{
		if (isset($_SESSION['loger']) && isset($_GET['chapterid'])) 
		{
			$appController->getModifyChapter($_GET['chapterid']);
		}
		else
		{
			throw new Exception("Vous n'avez pas les accés pour la page de modification des chapitres");
		}
	}
	elseif ($action === 'updatechapter') 
	{
		if (isset($_SESSION['loger']) && isset($_POST['title']) && isset($_POST['content']) && isset($_GET['lastid']) && isset($_POST['newid'])) 
		{
			$postController->updateChapter($_POST['title'], $_POST['content'], $_GET['lastid'], $_POST['newid']);
		}
		else
		{
			throw new Exception("Vous n'avez pas les accés pour modifier un chapitre");
		}
	}
	elseif ($action === 'chapter') 
	{
		if (isset($_GET['pagenumber'])) 
		{
			$appController->getChapter($_GET['pagenumber']);
		}
		else
		{
			throw new Exception("Cette page n'existe pas");
		}
	}
	elseif ($action === 'signalcomment') 
	{
		if (isset($_GET['idcomment']) && isset($_GET['idchapter'])) 
		{
			$commentController->signalComment($_GET['idcomment'], $_GET['idchapter']);
		}
		else
		{
			throw new Exception("vous ne pouvez pas signaler ce commentaire");
		}
	}
}


catch(Exception $e)
{
	echo "Erreur : " . $e->getMessage();
}