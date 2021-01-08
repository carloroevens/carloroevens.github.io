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

		<!--list of chapter-->

		<div class="container mt-5">
			<div class="row">
				<div class="col">
					<h1 class="display-3 color-yellow text-center mb-5">Modifier et suprimer les chapitres</h1>
				</div>
			</div>
			<div class="row">
				<?php foreach ($postManager->getPosts($currentPage, $parPage, 'PostController') as $posts): ?>
				
					<div class="col-12 col-md-6">
						<div class="card shadow mb-5 mb-md-4">
							<div class="card-body">
								<h5 class="card-title text-center"><a class=" text-decoration-none card-title" href="<?= $posts->getUrl() ?>"><?= $posts->title; ?></a></h5>
							    <h6 class="card-subtitle mb-2 text-muted">Chapitre n°<?= $posts->chapter_number; ?></h6>
							    <p class="card-text"><?= $posts->getContent(); ?></p>
							    <div class="text-right">
							    	<button class="btn btn-info">
							    		<a class="text-decoration-none text-dark" href="index.php?action=modifychapter&amp;chapterid=<?= $posts->id; ?>">Modifier</a>
							    	</button>
							    	<button class="btn btn-danger">
							    		<a class="text-decoration-none text-dark" href="index.php?action=deletechapter&amp;chapterid=<?= $posts->id; ?>">Suprimer</a>
							    	</button>
							    </div>
							</div>
						</div>
					</div>
				
				<?php endforeach; ?>
			</div>

			<div class="row my-3">
				<div class="col">
					<nav>
					  	<ul class="pagination justify-content-center">
					    	<?php for ($i=1; $i <= $nombrePage; $i++) { 
								if ($i == $page) {
									?>
									<li class="page-item"><a class="page-link" href="index.php?action=listmodifychapter&amp;pagenumber=<?= $i ?>"><?= $i ?></a></li>
									<?php
								} else {
									?>
									<li class="page-item"><a class="page-link" href="index.php?action=listmodifychapter&amp;pagenumber=<?= $i ?>"><?= $i ?></a></li>
									<?php
								}
							}
							?>
					  	</ul>
					</nav>
				</div>
			</div>
		</div>

		<!--footer-->

		<?php require('footer.php') ?>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

	</body>
</html>