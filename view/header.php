	<div class="color-blue sticky-top">
		<div class="container">
			<div class="row p-2">
				<nav class="col navbar navbar-expand-lg navbar-dark">
					<a class="navbar-brand" href="index.php?action=home">
						<img class="logo" alt="logo Jean Forteroche" src="public/img/logo-header.png">
					</a>
					<button class="navbar-toggler" type="button" data-toggle='collapse' data-target='#navbarContent'>
						<span class="navbar-toggler-icon"></span>
					</button>
					<div id="navbarContent" class="collapse navbar-collapse">
						<ul class="navbar-nav">
							<?php
							if (isset($_GET['action']) && $_GET['action'] === 'biography') {
								?>
								<li class="nav-item">
							    	<a class="nav-link" href="index.php?action=home">Accueil</a>
								</li>
							
								<li class="nav-item active">
							    	<a class="nav-link" href="index.php?action=biography">Biographie</a>
								</li>

								<li class="nav-item">
							    	<a class="nav-link" href="index.php?action=chapter&amp;pagenumber=1">Chapitres</a>
								</li>
								<?php
							}elseif (isset($_GET['action']) && $_GET['action'] === 'chapter') {
								?>
								<li class="nav-item">
							    	<a class="nav-link" href="index.php?action=home">Accueil</a>
								</li>
							
								<li class="nav-item">
							    	<a class="nav-link" href="index.php?action=biography">Biographie</a>
								</li>

								<li class="nav-item active">
							    	<a class="nav-link" href="index.php?action=chapter&amp;pagenumber=1">Chapitres</a>
								</li>
								<?php
							}else {
								?>
								<li class="nav-item active">
							    	<a class="nav-link" href="index.php?action=home">Accueil</a>
								</li>
							
								<li class="nav-item">
							    	<a class="nav-link" href="index.php?action=biography">Biographie</a>
								</li>

								<li class="nav-item">
							    	<a class="nav-link" href="index.php?action=chapter&amp;pagenumber=1">Chapitres</a>
								</li>
								<?php
							}
							?>
						</ul>
						<ul class="navbar-nav ml-md-auto">
							<?php
								if (isset($_SESSION['loger'])) 
								{
									?>
									<li class="nav-item active">
										<a class="nav-link" href="index.php?action=dashboard">Administration</a>
									</li>
									<li class="nav-item active">
										<a class="nav-link" href="index.php?action=disconnect">Déconnexion</a>
									</li>
									<?php
								}
								else
								{
									?>						
									<li class="nav-item active">
										<a class="nav-link" href="#" data-toggle="modal" data-target="#connection">Se connecter</a>
										<div class="modal fade" id="connection" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
										  	<div class="modal-dialog modal-zindex">
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
				</nav>
			</div>
		</div>
	</div>