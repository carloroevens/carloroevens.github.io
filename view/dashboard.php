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

		<header>
			<?php require('header.php') ?>
			
		</header>

		<!--content-->

		<section>
			<div class="container">
				<div class="row p-3 mt-5">
					<div class="col">
						<div class="text-center bg-primary p-5 rounded-pill shadow">
						<i class="fas fa-pencil-alt fa-3x m-2"></i><br/>
						<a class="text-dark text-decoration-none stretched-link" href="index.php?action=writechapter">Écrire un chapitre</a>
						</div>
					</div>
				</div>
				<div class="row m-5">
					<div class="col-12 col-md-6">
						<div class="bg-secondary m-2 text-center py-5 my-2 rounded shadow">
							<i class="fas fa-edit fa-2x m-2"></i><br/>
							<a class="text-dark text-decoration-none stretched-link" href="index.php?action=listmodifychapter&amp;pagenumber=1">Modifier les chapitres</a>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="bg-secondary m-2 text-center py-5 my-2 rounded shadow">
							<i class="fas fa-comment-alt fa-2x m-2"></i><br/>
							<a class="text-dark text-decoration-none stretched-link" href="index.php?action=waitcomments">Commentaires</a>
						</div>
					</div>
				</div>
			</div>
			
		</section>

		<!--footer-->
		
		<?php require('footer.php') ?>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

	</body>
</html>