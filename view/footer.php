<footer class="color-blue">
	<div class="container">
		<div class="row mt-4">
			<div class="col-6 col-md-3 mt-4">
				<p class="text-light text-uppercase">Plan du site</p>
				<ul class="list-unstyled">
					<li class="mb-3">
						<a class="text-decoration-none link" href="index.php?action=home">Accueil</a>
					</li>
					<li>
						<a class="text-decoration-none link" href="index.php?action=biography">Biographie</a>
					</li>
				</ul>
			</div>
			<div class="col-6 col-md-3 mt-4">
				<p class="text-light text-uppercase">Résaux sociaux</p>
				<ul class="list-unstyled">
					<li class="mb-2">
						<a class="text-decoration-none link" href="#"><i class="fab fa-facebook-square"></i> Facebook</a>
					</li>
					<li class="mb-2">
						<a class="text-decoration-none link" href="#"><i class="fab fa-twitter-square"></i> Twitter</a>
					</li>
					<li>
						<a class="text-decoration-none link" href="#"><i class="fab fa-instagram"></i> Instagram</a>
					</li>
				</ul>
			</div>
			<div class="col-6 col-md-3 mt-4">
				<p class="text-light text-uppercase">EN PLUS</p>
				<ul class="list-unstyled">
					<li>
						<a class="text-decoration-none link" href="#">Conditions générales d'utilisation</a>
					</li>
					<li class="mt-3">
						<a class="text-decoration-none link" href="#">Politique de Protection des données personnelles</a>
					</li>
				</ul>
			</div>
			<div class="col-6 col-md-3 mt-4">
				<p class="text-light text-uppercase">Administration</p>
				<ul class="list-unstyled">
					<?php
						if (isset($_SESSION['loger'])) 
						{
							?>
							<li class="mb-3">
								<a class="text-decoration-none link" href="index.php?action=dashboard">Administration</a>
							</li>
							<li>
								<a class="text-decoration-none link" href="index.php?action=disconnect">Déconnexion</a>
							</li>
							<?php
						}
						else
						{
							?>						
							<li>
								<a class="text-decoration-none link" href="#" data-toggle="modal" data-target="#connection">Se connecter</a>
								<div class="modal fade" id="connection" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
									      	<div class="modal-header">
									        	<h5 class="modal-title" id="exampleModalLabel">Connexion</h5>
									        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									          		<span aria-hidden="true">&times;</span>
									        	</button>
									      	</div>
									      	<form method="post" action="index.php?action=connect">
										      	<div class="modal-body">
										        	<div class="form-group">
														<label for="idMail">Adresse mail</label>
														<input type="email" class="form-control" id="idMail" name="email">
													</div>
													<div class="form-group">
														<label for="idPassword">Mot de passe</label>
														<input type="password" class="form-control" id="idPassword" name="password">
													</div>							        
										    	</div>
										      	<div class="modal-footer">
										        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
										        	<button type="submit" class="btn btn-primary">Se connecter</button>
										      	</div>
										    </form>
									   	</div>
									</div>
								</div>
							</li>
							<?php
						}
					?>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<hr class="bg-secondary">
			</div>
		</div>
		<div class="row text-center">
			<div class="col">
				<p class="text-light">Copyright © Carlo Roevens - 2020. Tous droits réservés</p>
			</div>
		</div>
	</div>
</footer>