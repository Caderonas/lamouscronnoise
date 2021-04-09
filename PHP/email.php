<?php
//Inclure le fichier de configuration
$ini = parse_ini_file('../admin/bdd.ini');
//Envoi d'un email via le formulaire de contact
if(isset($_POST['email'])) {
 
    // Email
    $email_to = $ini['app_email'];
    $email_subject = "Email site de".$_POST['name'];
 
 
    // Vérification de l'existence des variables
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['message']) ) {
        header('location: ../index.php?erreur=1#contact');
        exit;
        
    }
    // Récupération des variables
    $name = $_POST['name']; 
    $email = $_POST['email']; 
    $message = $_POST['message']; 

    //Vérification de la validité des entrées
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
    if(!preg_match($email_exp,$email)) {
      header('location: ../index.php?erreur=2#contact');
      exit;
    }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
    if(!preg_match($string_exp,$name) && !preg_match($string_exp,$message)) {
      header('location: ../index.php?erreur=3#contact');
      exit;
    }
    //Creation de l'email
    $email_message = "Message du site.\n\n";
 
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
    $email_message .= "Nom: ".clean_string($name)."\n";
    $email_message .= "Message: ".clean_string($message)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";
    
    // creation de l'en-tete
    $headers = 'From: '.$email."\r\n".
    'Reply-To: '.$email."\r\n" .
    'X-Mailer: PHP/' . phpversion();
    //@mail($email_to, $email_subject, $email_message, $headers);  

    header('location: ../index.php?erreur=0#contact');
    exit;
}
?>