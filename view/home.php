<!DOCTYPE html>
<html>
	<head>

		<title>Jean Forteroche | Écrivain</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="public/css/header.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
		<link rel="icon" type="image/png" sizes="16x16" href="public/img/logo.png">

	</head>
	<body>

		<!--header-->
		<div id="top"></div>
		
		<?php require('header.php') ?>
		
		<header class="hero">
			<div class="container">
				<div class="row">
					<div class="col mt-5">
						<div class="mt-5">
							<h1 class="text-center text-white pt-5">Jean Forteroche</h1>
							<blockquote class="blockquote text-center">
						 		<p class="mb-0 mt-4 text-white-50">La vraie vie est vécue lorsque de minuscules changements se produisent.</p>
								<footer class="blockquote-footer quote-author"><em>Jean Forteroche</em></footer>
							</blockquote>
						</div>
					</div>
				</div>
			</div>
		</header>
		<section>

			<!--Welcome message-->

			<div class="container">
				<div class="row jumbotron mt-5">
					<p class="col-12 col-md-4 text-center mt-1">Bienvenue sur mon site. Je suis Jean Rochefort écrivain et acteur mais nous s'en reparleront plus tard, laisser moi d'abord vous présentez le concept de ce site qui ma foi, est assez simple.</p>

					<p class="col-12 col-md-4 text-center mt-1">J'ai décidé de sortir mon prochain livre sur le web plutôt que de façon traditionnelle, il devrait donc il y avoir 3 chapitres à l'ouverture de ce site et étre agrémentais d'un autre chapitre chaque semaine jusqu'a sa publication compléte.</p>
										
					<p class="col-12 col-md-4 text-center mt-1">Ceci me permettra d'avoir votre ressenties directement aprés votre lecture grace aux commentaires. Vous trouverez le synopsis juste en dessous .</p>
						
				</div>
			</div>
		</section>

		<section>
			<div class="container">

				<!--synopsis-->

				<div class="row">
					<div class="col">
						<p class="h1 text-center my-3 ">Synopsis</p>
						<p class="h4 text-center mb-4">Un billet simple pour l'Alaska</p>
						<p class="text-center mb-5 lead">Peter Flectcher avait tout juste 2 ans quand sa mère a quitté l’Alaska, fuyant la vie trop rude, et laissant derrière elle le père de Peter. Peter a aujourd’hui 26 ans et mène une vie bien remplie à Toronto. Lorsqu’il apprend que les jours de son père, très malade, sont peut-être comptés, il entreprend le voyage jusqu’à son village natal. Il va alors découvrir le quotidien « à la dure » , les journées qui comptent peu d’heures de clarté, les nuits à la belle étoile… Il va en profiter pour mieux connaître son père, à qui il tient beaucoup malgré les erreurs qu’il a commises.</p>
					</div>
				</div>

				<!--chapter-->

				<div class="row">

				<?php foreach ($postManager->getPosts(0, 4, 'PostController') as $posts): ?>
				
					<div class="col-12 col-md-6">
						<div class="card shadow mb-5 mb-md-4">
							<div class="card-body">
								<h5 class="card-title text-center"><a class="stretched-link text-decoration-none card-title" href="<?= $posts->getUrl() ?>"><?= $posts->title; ?></a></h5>
							    <h6 class="card-subtitle mb-2 text-muted">Chapitre n°<?= $posts->chapter_number; ?></h6>
							    <p class="card-text"><?= $posts->getContent(); ?></p>
							    <p class="card-text text-right"><?= $posts->date_chapter; ?></p>
							</div>
						</div>
					</div>
				
				<?php endforeach; ?>

				</div>
			</div>
		</section>

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