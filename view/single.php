<!DOCTYPE html>
<html>
	<head>

		<title>Jean Forteroche | Écrivain</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="public/css/header.css">
		<link rel="icon" type="image/png" sizes="16x16" href="public/img/logo.png">

	</head>
	<body>

		<!--header-->

		
		<?php require('header.php') ?>
		

		<!--chapter-->
		<div class="container mt-5">
			<div class="row mb-5">
				<div class="col">
					<h1 class="text-center color-yellow display-3"><?= $post->title; ?></h1>
					<p class="h5 mb-4">Chapitre <?= $post->chapter_number; ?></p>
					<p class="mb-4"><?= $post->content; ?></p>
					<p class="text-muted"><?= $post->date_chapter; ?></p>
				</div>
			</div>
		
		<!--write comment-->

			<div class="row mb-5">
				<div class="col">
					<form action="index.php?action=addcomment&amp;idChapter=<?= $post->id ?>" method="post">
						<div class="form-group">
							<label for="author">Nom</label><span class="text-muted"> (Pseudo)</span><br/>
							<input class="form-control w-25" type="text" id="author" name="author" />
						</div>
						<div class="form-group">
							<label for="content">Votre commentaire</label><br/>
							<textarea class="form-control" rows="3" id="content" name="content"></textarea>
						</div>
						
						<button class="btn btn-primary" type="submit">Envoyer !</button>
					</form>
				</div>
			</div>

		<!--list of comments-->

			<div class="row">
				<div class="col">
					<?php foreach ($getCommentList = $commentManager->getComments($_GET['idChapter'], '1', 'CommentController') as $comment): ?>
					
					<div class="media">
						<div class="media-body">
							<h5 class="mt-0"><?php echo htmlspecialchars($comment->author) ?></h5>
							<p class="text-muted"><?= $comment->date_comment ?></p>
					    	<p class="lead"><?php echo htmlspecialchars($comment->content) ?> </p>
					    	<a class="btn btn-secondary mb-3" href="index.php?action=signalcomment&amp;idcomment=<?= $comment->id ?>&amp;idchapter=<?= $post->id; ?>">Signaler le commentaire</a>
						</div>
					</div>

					<?php endforeach; ?>
				</div>
			</div>
		</div>

		<!--footer-->

		<div id="scrollUp">
			<a href="#top"><img src="public/img/top.png"/></a>
		</div>

		<?php require('footer.php') ?>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	    <script src="public/js/topbutton.js"></script>

	</body>
</html>