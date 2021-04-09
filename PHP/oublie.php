<?php
//Inclure le fichier de configuration
$ini_file = dirname(__dir__);
$ini = parse_ini_file($ini_file."/admin/bdd.ini");

//Récupération de compte par adresse email
if(isset($_POST['Email'])) {
    
    //Connection à la base
    $mysql = "mysql:host={$ini['db_host']};dbname={$ini['db_name']};charset={$ini['db_charset']}" ;
    try{
        $bdd = new PDO($mysql, $ini['db_user'], $ini['db_passwd']);
    }catch (Exception $e){
    	die('Erreur : ' . $e->getMessage());
    }

    //Récupération du mot de passe et email
    $recup = $bdd->prepare('SELECT Identifiant, Surnom FROM Inscrits WHERE Email = :email');
    $recup->execute(array('email' => $_POST['Email']));
    $donnees = $recup->fetch();

    // Email
    $email_to = $_POST['Email'];
    $email_subject = "Recuperation de compte";

    //Creation de l'email
    $email_message = "Voici un lien de reinitialisation pour le compte de ".$donnees['Surnom']." mot de passe :\n\n";
    $email_message .= "http://lamouscronnoise.be/".$ini['Version']."/index.php?token=".$donnees['Identifiant']."#recover\n";
    
    // creation de l'en-tete
    $headers = 'From: '.$ini['app_email']."\r\n".
    'Reply-To: '.$ini['app_email']."\r\n" .
    'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);  

    header('location: ../index.php?erreur=1#oublie');
    exit;
}
?>