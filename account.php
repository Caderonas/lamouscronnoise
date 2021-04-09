<?php 
//Fonctions php 
include 'PHP/main.php';

//Vérification de l'existence d'une session
if(!isset($_SESSION['ID'])){
	header('location: index.php');
	exit;
}

//Vérification des données passé en Url
$chiffre = '/[0-9]/';
if(isset($_GET['erreur']) && preg_match($chiffre,$_GET['erreur'])){
    $erreur = $_GET['erreur'];
}

//Récupération des donnees par rapport à l'identifiant
$donnees = class_bdd::get_SessInfo($_SESSION['ID']);

?>
<!DOCTYPE HTML>
<html>
	<head>
		<base href="./account.php"/>
		<title>La Mouscronnoise</title>
		<link rel="shortcut icon" href="../Shared/images/icone_msc.svg" />
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<script src="https://www.google.com/recaptcha/api.js"></script>
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<!--<div class="logo">-->
                        <a href="index.php"><img src="../Shared/images/logo_msc.svg" width="90" alt="" /></a>
						<div class="content">
							<div class="inner">
								<h1>Compte de <?php echo $donnees['Surnom']; ?></h1>
								<p><?php echo $donnees['Prenom'].' '.$donnees['Nom']; ?></p>
							</div>
						</div>
						<nav>
							<!-- ligne 1 -->
							<ul>
								<li><a href="#infos">Mes Infos</a></li>
								<li><a href="#message">Messages</a></li>
								<li><a href="#dettes">Dettes</a></li>
								<?php if($donnees['Autorisation'] < 5){?>
									<li><a href="#livresdor">Livre d'or's</a></li>
								<?php } ?>
								<?php if($donnees['Autorisation'] < 5 && $donnees['Autorisation'] > 2){?>
									<li><a href="#event">Evenements</a></li>
								<?php } ?>
								<?php if($donnees['Autorisation'] > 2){?><li><a href="#souvenir">Souvenirs/Chti's</a></li><li></li><?php } ?>
							</ul>
							<!-- ligne 2 (uniquement tréso, prési, admin) -->
							<?php if($donnees['Autorisation'] < 3 ){ ?>
							<ul>
								<?php if($donnees['Autorisation'] == 0 ){?><li><a href="#gestion">Gestion</a></li><?php } ?>
								<?php if($donnees['Autorisation'] < 3 ){?><li></li><li><a href="#treso">Comptes</a></li>
								<li><a href="#souvenir">Souvenirs/Chti's</a></li><?php } ?>
								<?php if($donnees['Autorisation'] != 0 && $donnees['Autorisation'] != 3 ){?><li></li><?php } ?>
								<li><a href="#event">Evenements</a></li>
							</ul>
							<?php } ?>
						</nav>
					</header>
                <!-- Main -->
					<div id="main">
                        
                    <!-- Infos -->
                            <article id="infos">
								<h2 class="major">Mes infos</h2>
                                <h3>Modifier une infos :</h3>
								<form method="post" action="PHP/main.php?fct=update_email">
									<div class="field">
										<label for="email">Email</label>
										<h4><?php if(isset($erreur)){
                                            if($erreur == 5){
                                                echo "Adresse email vide";
                                            }if($erreur == 6){
                                                echo "Format d'adresse email invalide";
                                            }if($erreur == 7){
                                                echo "Adresse email modifié avec succé";
                                            }    
                                        }
                                    ?></h4>
										<input type="text" name="Email" id="email" value="<?php echo $donnees['Email']; ?>" required />
                                    </div>
                                    <ul class="actions">
										<li><input type="submit" value="Modifier" class="special" /></li>
									</ul>
								</form>
                                <form method="post" action="PHP/main.php?fct=update_password">
								<h4><?php if(isset($erreur)){
                                            if($erreur == 8){
                                                echo "Champ(s) de mot de passe vide";
                                            }if($erreur == 9){
                                                echo "Caractère incorrect";
                                            }if($erreur == 10){
                                                echo "Ancien mot de passe incorrect";
                                            }if($erreur == 11){
                                                echo "Nouveau mot de passe identique à l'ancien (tocard!)";
                                            }if($erreur == 12){
                                                echo "Mot de passe modifié avec succé";
                                            }     
                                        }
                                    ?></h4>
                                    <div class="field half first">
										<label for="name">Nouveau mot de passe</label>
										<input type="text" name="Password" id="password" required />
									</div>
									<div class="field half">
										<label for="email">Retaper mot de passe</label>
										<input type="text" name="Password1" id="password" required />
                                    </div>
									<ul class="actions">
										<li><input type="submit" value="Changer" class="special" /></li>
									</ul>
								</form>
								
								<!-- Autorisation d'ajouter une photo pour le comité -->
								<?php if($donnees['Autorisation'] < 5){?>
									<h3>Uploader une photo (15mo max) :</h3>
									<h4><?php if(isset($erreur)){
												if($erreur == 1){
													echo "Erreur lors du transfert";
												}if($erreur == 2){
													echo "Le fichier est trop gros";
												}if($erreur == 3){
													echo "Extension incorrecte";
												}if($erreur == 4){
													echo "Image trop grande";
												}if($erreur == 0){
													echo "Transfert réussi";
												}
		
											}
										?></h4>
									
									<form method="post" action="PHP/photo.php" enctype="multipart/form-data">
										<ul>
											<h4>Icône du fichier (.jpg, .jpeg, .gif, .png) :</h4><br />
											<input type="file" name="Icone" />
											<input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
										</ul>
										<ul class="actions">
											<li><input type="submit" value="Envoyer" class="special" /></li>
										</ul>
									</form>
								<?php } ?>
							</article>

							<!-- Dettes -->
							<article id="dettes">
											<h2 class="major">Comptes</h2>
											<h3>Dettes</h3>
											<?php
											// Récupération des dettes
											$dettes = class_bdd::get_Debt($donnees['Surnom'], "Debiteur");
											$dette = $dettes->fetch();
											$dettetotal = 0;
											if(isset($dette['Montant'])){
												//Dettes
												?><div class="table-wrapper">
												<table class="alt">
													<thead>
														<tr>
															<th>Titre</th>
															<th>Créancier</th>
															<th>Montant</th>
														</tr>
													</thead>
													<tbody> <?php
												do{
													?>
															
													<tr>
														<?php if( $dette['Creancier'] == "MSC" && $donnees['Autorisation'] > 2){?>
															<td><?php echo ucfirst($dette['Titre']); ?></td>
														<?php }else{ ?>
															<td onmouseover="style.color='red'" onmouseout="style.color='white'">
																<a href='PHP/main.php?fct=delete_debt&amp;index=<?php echo $dette['Id']; ?>' >
																	<?php echo ucfirst($dette['Titre']); ?>
																</a>
															</td>
														<?php } ?>
														<td><?php echo ucfirst($dette['Creancier']); ?></td>
														<td><?php echo ucfirst($dette['Montant']); ?>€</td>
													</tr>
															
													<?php
													$dettetotal += $dette['Montant'];
												}while($dette = $dettes->fetch());
													$dettes->closeCursor(); // Termine le traitement de la requête
												?> </tbody>
													<tfoot>
														<tr>
															<td colspan="2">Total :</td>
															<td><?php echo $dettetotal; ?>€</td>
														</tr>
													</tfoot>
												</table> <?php
											}else{echo "Pas de dettes ? Elise doit surement beaucoup t'aimer pour ça.";}
											?>
											
												<h3>Créances</h3>
											<div class="table-wrapper">
														
											<?php
											// Récupération des creances
											$creances = class_bdd::get_Debt($donnees['Surnom'], "Creancier");
											$creance = $creances->fetch();
											$creancetotal = 0;
											if(isset($creance['Montant'])){
												//creances
												?>
												<table class="alt">
															<thead>
																<tr>
																	<th>Titre</th>
																	<th>Débiteur</th>
																	<th>Montant</th>
																</tr>
															</thead>
															<tbody>
												<?php
												do{
													?>
															
													<tr>
														<td onmouseover="style.color='red'" onmouseout="style.color='white'">
															<a href='PHP/main.php?fct=delete_debt&amp;index=<?php echo $creance['Id']; ?>' >
																<?php echo ucfirst($creance['Titre']); ?>
															</a>
														</td>
														<td><?php echo ucfirst($creance['Debiteur']); ?></td>
														<td><?php echo ucfirst($creance['Montant']); ?>€</td>
													</tr>
															
													<?php
													$creancetotal += $creance['Montant'];
												}while($creance = $creances->fetch());
													$creances->closeCursor(); // Termine le traitement de la requête
												?> </tbody>
													<tfoot>
														<tr>
															<td colspan="2">Total :</td>
															<td><?php echo $creancetotal; ?>€</td>
														</tr>
													</tfoot>
												</table> <?php
											}else{echo "Personne ne te doit d'argent. Tu es juste pauvre. Snuf!";}
											?>
													
											</div>
											<?php if($donnees['Autorisation'] < 5 ){
												?>
												<h3>Editer une dette</h3>
													<form method="post" action="PHP/main.php?fct=add_debt">
														<!-- Debiteur -->
														<div class="field half first">
														<label for="debiteur">Débiteur</label>
															<div class="select-wrapper">
																<select name="debiteur" id="debiteur">
																	<?php 
																	//Récupération des noms pour éviter les erreurs d'ecriture à la volé
																	$inscrits = class_bdd::get_Inscrit();
																	while ($inscrit = $inscrits->fetch()){ ?>
																		<option value="<?php echo $inscrit['Surnom']; ?>"> 
																			<?php echo ucfirst($inscrit['Surnom']).' ('.ucfirst($inscrit['Nom']).' '.ucfirst($inscrit['Prenom']).')'; ?>
																		</option>
																	<?php }
																		$inscrits->closeCursor();
																	?>
																</select>
															</div>
														</div>
														<!-- Montant -->
														<div class="field half">
															<label for="montant">Montant</label>
															<input type="number" name="montant" id="montant" min="0,01" max="2000" step="any" required />
														</div>
														<!-- Titre -->
														<div class="field">
															<label for="titre">Titre</label>
															<input type="text" name="titre" id="titre" required />
														</div>
														<!-- MSC -->
														<?php if($donnees['Autorisation'] < 3 ){ ?>
															<div class="field half first">
																<input type="checkbox" id="msc" name="msc">
																<label for="msc">Dette au nom de la MSC</label>
															</div>
														<?php } ?>
														<ul class="actions">
															<li><input type="submit" value="Créer la dette" class="special" /></li>
														</ul>
													</form>
											<?php } ?>
							</article>

							<!-- Livres d'or par poste -->
							<article id="livresdor">
								<h2 class="major">Livres d'or par poste</h2>
								<p>Ces livres d'or sont éditable et on pour but d'avoir un intéret sur le long terme, dans ce but là il donc demandé, l'accès étant limité au comité, de l'utiliser de manière intelligente.</p>
								<p>Il est prévu pour écrire un poste après une activitée permettant d'apporter des astuces et/ou éviter des problèmes rencontrer. Une fois un poste écrit il n'est plus modifiable, faites donc en sorte de structurer correctement les informations avant de le partager.</p>
								<?php if($donnees['Autorisation'] < 3 ){
									?>
									<h3>Haut-comité</h3>
									<table class="alt">
										<tbody>
											<tr>
												<td><a href="livresdors.php#presi">Président</a></td>
												<td><a href="livresdors.php#vp">Vice-président</a></td>
												<td><a href="livresdors.php#treso">Trésorier</a></td>
											</tr>
											<tr>
												<td><a href="livresdors.php#secretaire">Secrétaire</a></td>
												<td><a href="livresdors.php#cb">Chef-bar</a></td>
											</tr>
												
										</tbody>
									</table>
								<?php } ?>
								
									<h3>Comité</h3>
									<table class="alt">
										<tbody>
											<tr>
												<td><a href="livresdors.php#anim">Anim</a></td>
												<td><a href="livresdors.php#culture">Culture</a></td>
												<td><a href="livresdors.php#decor">Décor</a></td>
											</tr>
											<tr>
												<td><a href="livresdors.php#bar">Bar</a></td>
												<td><a href="livresdors.php#relin">Relin</a></td>
												<td><a href="livresdors.php#relex">Relex</a></td>
											</tr>
											<tr>
												<td><a href="livresdors.php#photo">Photos</a></td>
												<td><a href="livresdors.php#sport">Sport</a></td>
												<td><a href="livresdors.php#web">Web</a></td>
											</tr>
											<tr>
												<td><a href="livresdors.php#chti">Ch'ti</a></td>
												<td><a href="livresdors.php#retho">Retho</a></td>
											</tr>
										</tbody>
									</table>
							</article>

							<!-- Messages -->
							<article id="message">
											<h2 class="major">Messages</h2>
											<h3>Boite de messagerie</h3>
											<p>En developpement ...</p>
							</article>

							<!-- Souvenirs -->
							<article id="souvenir">
								<h2 class="major">Souvenirs</h2>
								<h3>Liens vers les groupes Facebook</h3>
								<ul>
									<li><a href="https://www.facebook.com/groups/174596686433089/photos/?filter=albums"> 2017-2018</a></li>
									<li><a href="https://www.facebook.com/groups/1771111909773528/photos/?filter=albums"> 2016-2017</a></li>
								</ul>
								<h2 class="major">Les Ch'tis</h2>
								<p>Le Ch'ti est le journal de la régional, chaque membre y contribue en envoyant un mot aux responsables qui se chargent de mettre en forme.</p>
								<ul class="alt">
									<li>2018</li>
									<p>Mars</p>
									<a href="../Shared/chtis/35.pdf" class="button icon fa-download">Ch'ti N°35</a>
									<li>2017</li>
									<p>Noël</p>
									<a href="#" class="button icon fa-download">Ch'ti N°34</a>
									<li>2017</li>
								</ul>
							</article>
					
							<!-- Gestion reserver Admin -->
							<?php if($donnees['Autorisation'] == 0 ){?>
							<article id="gestion">
								<h2 class="major">Gestion</h2>
								<h3> ATTENTION CETTE SECTION N'EST PAS RESERVE A L'ADMIN POUR RIEN</h3>
								<?php
								// Récupération de tous les inscrits
								$inscrits = class_bdd::get_Autorisation();
								while ($donnees = $inscrits->fetch()){
								?>
								<p>
									<strong><?php echo ucfirst($donnees['Surnom']); ?></strong> ( 
									<?php echo ucfirst($donnees['Prenom']); ?> 
									<?php echo ucfirst($donnees['Nom']); ?>) : 
									<?php echo $donnees['Autorisation']; ?>
									<!-- Modification d'autorisation -->
									<form method="post" action="PHP/main.php?fct=update_autorisation&amp;index=<?php echo $donnees['Id']; ?>">
										<div class="field half first">
											<label for="name">Autorisation</label>
											<input type="number" name="autorisation" id="auto" required />
										</div>
										<ul class="actions">
											<li><input type="submit" value="Modifier" class="special" /></li>
										</ul>
									</form>
									<!-- Suppression de compte -->
									<form method="post" action="PHP/main.php?fct=delete_account&amp;index=<?php echo $donnees['Id']; ?>">
										<ul class="actions">
											<li><input type="submit" value="Supprimer" class="special" /></li>
										</ul>
									</form>
								</p>
								<?php
								}
								$inscrits->closeCursor(); // Termine le traitement de la requête
								?>
								</article>
							<?php } ?>

							<!-- Tresorier(e) -->
							<?php if($donnees['Autorisation'] < 3 ){?>
							<article id="treso">
											<h2 class="major">Compte MSC</h2>
											<div class="table-wrapper">
														
											<?php
											// Récupération des creances
											$creances = class_bdd::get_Debt("MSC","Creancier");
											$creance = $creances->fetch();
											$creancetotal = 0;
											if(isset($creance['Montant'])){
												//creances
												?>
												<table class="alt">
															<thead>
																<tr>
																	<th>Titre</th>
																	<th>Débiteur</th>
																	<th>Montant</th>
																</tr>
															</thead>
															<tbody>
												<?php
												do{
													?>
															
													<tr>
														<td onmouseover="style.color='red'" onmouseout="style.color='white'">
															<a href='PHP/main.php?fct=delete_debt&amp;index=<?php echo $donnees['Id']; ?>' >
																<?php echo ucfirst($creance['Titre']); ?>
															</a>
														</td>
														<td><?php echo ucfirst($creance['Debiteur']); ?></td>
														<td><?php echo ucfirst($creance['Montant']); ?>€</td>
													</tr>
															
													<?php
													$creancetotal += $creance['Montant'];
												}while($creance = $creances->fetch());
													$creances->closeCursor(); // Termine le traitement de la requête
												?> </tbody>
													<tfoot>
														<tr>
															<td colspan="2">Total :</td>
															<td><?php echo $creancetotal; ?>€</td>
														</tr>
													</tfoot>
												</table> <?php
											}else{echo "Personne ne doit d'argent à la MSC. Serait ce un miracle ?";}
											?>
											<h3>Editer une dette</h3>
													<form method="post" action="PHP/main.php?fct=add_debt">
														<!-- Debiteur -->
														<div class="field half first">
														<label for="debiteur">Débiteur</label>
															<div class="select-wrapper">
																<select name="debiteur" id="debiteur">
																	<?php 
																	//Récupération des noms pour éviter les erreurs d'ecriture à la volé
																	$inscrits = class_bdd::get_Inscrit();
																	while ($inscrit = $inscrits->fetch()){ ?>
																		<option value="<?php echo $inscrit['Surnom']; ?>"> 
																			<?php echo ucfirst($inscrit['Surnom']).' ('.ucfirst($inscrit['Nom']).' '.ucfirst($inscrit['Prenom']).')'; ?>
																		</option>
																	<?php }
																		$inscrits->closeCursor();
																	?>
																</select>
															</div>
														</div>
														<!-- Montant -->
														<div class="field half">
															<label for="montant">Montant</label>
															<input type="number" name="montant" id="montant" min="0,01" max="2000" step="any" required />
														</div>
														<!-- Titre -->
														<div class="field">
															<label for="titre">Titre</label>
															<input type="text" name="titre" id="titre" required />
														</div>
														<!-- MSC -->
															<div class="field half first">
																<input type="checkbox" id="MSC" name="MSC">
																<label for="MSC">Dette au nom de la MSC</label>
															</div>
														<ul class="actions">
															<li><input type="submit" value="Créer la dette" class="special" /></li>
														</ul>
													</form>
											</div>
							<?php } ?>
							</article>
						
							<!-- Evenements -->
							<?php if($donnees['Autorisation'] < 5){ ?>
							<article id="event">
								<h2 class="major">Evenements</h2>
								<?php if($donnees['Autorisation'] < 4){ ?>
									<h3>Créer un évènement</h3>
									<form method="post" action="PHP/main.php?fct=add_event">
										<div class="field half first">
											<label for="titre">Titre</label>
											<input type="text" name="titre" id="titre" required />
										</div>
										<div class="field half">
											<label for="titre">Description</label>
											<input type="text" name="details" id="details" required />
										</div>
										<ul class="actions">
											<li><input type="submit" value="Créer l'évènement" class="special" /></li>
										</ul>
									</form>
									</br>
								<?php } 
									//Récupération des noms pour éviter les erreurs d'ecriture à la volé
									$events = class_bdd::get_Event();
									while ($event = $events->fetch()){ ?>
										</br>
										<h2 class="major"><?php echo ucfirst($event['Titre']); ?></h2>
										<p><?php echo ucfirst($event['Details']); ?></p>
										<div class="table-wrapper">
										<table>
											<thead>
												<tr>
													<th>Inscrit</th>
													<th>Forfait</th>
												</tr>
											</thead>
											<tbody>
										<?php 
										//Récupération des inscrits à l'event
										$event_inscrits = class_bdd::get_EventInscrit($event['Id']);

										while ($event_inscrit = $event_inscrits->fetch()){
											$surnoms = class_bdd::get_Surnom($event_inscrit['Id_inscrit']);
											$surnom = $surnoms->fetch()
										?>
												<tr>
													<td><?php echo ucfirst($surnom['Surnom']); ?></td>
													<td><?php echo ucfirst($event_inscrit['Forfait']); ?></td>
												</tr>
									</div>
									<?php }
										$event_inscrits->closeCursor();
										?> 
										</tbody>
											<tfoot>
												<form method="post" action="PHP/main.php?fct=add_eventinscrit&amp;index=<?php echo $event['Id'];?>">
													<tr>
														<td><div class="field">
															<label for="forfait">Forfait</label>
															<input type="text" name="forfait" id="forfait" required />
															</div>
														</td>
														<td>
															<label for="button">Inscritption</label>
															<ul class="actions">
																<li><input type="submit" value="M'inscrire" class="special" /></li>
															</ul>
														</td>
													</tr>
												</form>
											</tfoot>
										</table>
										<?php }
									$events->closeCursor();
										}
									?>
							</article>
							
						<!-- Ch'tis -->
							<article id="chti">
								<h2 class="major">Les Ch'tis</h2>
								<p>Le Ch'ti est le journal de la régional, chaque membre y contribue en envoyant un mot aux responsables qui se chargent de mettre en forme.</p>
                                <ul class="alt">
                                    <li>2018</li>
                                    <p>Mars</p>
                                    <a href="../Shared/chtis/35.pdf" class="button icon fa-download">Ch'ti N°35</a>
                                    <li>2017</li>
                                    <p>Noël</p>
                                    <a href="#" class="button icon fa-download">Ch'ti N°34</a>
                                    <li>2017</li>
                                </ul>
							</article>
						</div>
				
				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy; <a href="PHP/main.php?fct=kill_session">Se déconnecter</a>. Conception: Verhaeghe Loïc.</p>
					</footer>
			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>