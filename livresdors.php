<?php 
    //Fonctions photos et noms apparaissant dans le comité 
    include 'PHP/main.php';

    //Vérification de l'existence d'une session
    if(!isset($_SESSION['ID'])){
        header('location: index.php');
        exit;
    }

    //Vérification du transfère d'erreur
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
        <base href="./livresdors.php"/>
		<title>Livres d'or</title>
        <link rel="shortcut icon" href="../Shared/images/icone_msc.svg" />
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body>

	<!-- Wrapper -->
		<div id="wrapper">	

            <!-- Header -->
            <header id="header">
                <div class="content">
                    <div class="inner">
                        <h1>Livres d'or</h1>
                    </div>
                </div>
                <nav>
                <?php if($donnees['Autorisation'] < 3 ){ ?>
                    <ul>
                        <li><a href="#presi">Prési</a></li>
                        <li><a href="#vp">Vp</a></li>
                        <li><a href="#treso">Tréso</a></li>
                        <li><a href="#secretaire">Secretaire</a></li>
                        <li><a href="#cb">Chef-bar</a></li>
                    </ul>
                <?php } ?>
                    <ul>
                        <li></li>
                        <li><a href="#anim">Anim</a></li>
                        <li><a href="#culture">Culture</a></li>
                        <li><a href="#bar">Bar</a></li>
                        <li><a href="#relin">Relin</a></li>
                        <li><a href="#relex">Relex</a></li>
                    </ul>
                    <ul>
                        <li><a href="#photo">Photo</a></li>
                        <li><a href="#sport">Sport</a></li>
                        <li><a href="#web">Web</a></li>
                        <li><a href="#chti">Ch'ti</a></li>
                        <li><a href="#retho">Retho</a></li>
                    </ul>
                </nav>
            </header>

        <!-- Main -->
            <div id="main">               
            <?php if($donnees['Autorisation'] < 3 ){ ?>
            <!-- Prési -->
                <article id="presi">
                    <h2 class="major">Président(e)</h2>
                    <?php class_bdd::print_Rapport("presi"); ?>
                </article>

            <!-- VP -->
                <article id="vp">
                    <h2 class="major">Vice-résident(e)</h2>
                    <?php class_bdd::print_Rapport("vp"); ?>
                </article>

            <!-- Tréso -->
                <article id="treso">
                    <h2 class="major">Trésorier(e)</h2>
                    <?php class_bdd::print_Rapport("treso"); ?>
                </article>

            <!-- Secretaire -->
                <article id="secretaire">
                    <h2 class="major">Secrétaire</h2>
                    <?php class_bdd::print_Rapport("secretaire"); ?>
                </article>

            <!-- Chef-bar(cb) -->
                <article id="cb">
                    <h2 class="major">Chef-bar</h2>
                    <?php class_bdd::print_Rapport("cb"); ?>
                </article>
            <?php } ?>
            <!-- Anim -->
                <article id="anim">
                    <h2 class="major">Anim</h2>
                    <?php class_bdd::print_Rapport("anim"); ?>
                </article>

            <!-- Culture -->
            <article id="culture">
                    <h2 class="major">Culture</h2>
                    <?php class_bdd::print_Rapport("culture"); ?>
                </article>

            <!-- decor -->
                <article id="decor">
                    <h2 class="major">Décor</h2>
                    <?php class_bdd::print_Rapport("decor"); ?>
                </article>

            <!-- Bar -->
                <article id="bar">
                    <h2 class="major">Bar</h2>
                    <?php class_bdd::print_Rapport("bar"); ?>
                </article>

            <!-- Relin -->
            <article id="relin">
                    <h2 class="major">Relin</h2>
                    <?php class_bdd::print_Rapport("relin"); ?>
                </article>

            <!-- Relex -->
                <article id="relex">
                    <h2 class="major">Relex</h2>
                    <?php class_bdd::print_Rapport("relex"); ?>
                </article>

            <!-- Photo -->
            <article id="photo">
                    <h2 class="major">Photo</h2>
                    <?php class_bdd::print_Rapport("photo"); ?>
                </article>

            <!-- Sport -->
                <article id="sport">
                    <h2 class="major">Sport</h2>
                    <?php class_bdd::print_Rapport("sport"); ?>
                </article>

            <!-- Web -->
                <article id="web">
                    <h2 class="major">Web</h2>
                    <?php class_bdd::print_Rapport("web"); ?>
                </article>

            <!-- Ch'ti -->
                <article id="chti">
                    <h2 class="major">Ch'ti</h2>
                    <?php class_bdd::print_Rapport("chti"); ?>
                </article>
            
            <!-- Retho -->
            <article id="retho">
                    <h2 class="major">Retho</h2>
                    <?php class_bdd::print_Rapport("retho"); ?>
                </article>
            </div>
        

            <!-- Footer -->
                <footer id="footer">
                    <p class="copyright"> 
                        <?php if(!isset($_SESSION['ID'])){ ?> 
                        <a href="index.php#connect">Se connecter/S'inscrire</a>. 
                        <?php }else{ ?> 
                        <a href="account.php">Mon compte</a> - <a href="PHP/main.php?fct=kill_session">Se déconnecter</a>. 
                        <?php } ?> Conception: Verhaeghe Loïc.&copy;</p>
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
