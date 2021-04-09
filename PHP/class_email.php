<?php 

class email{

    //Variable 
    private $email_to;

    //Constructeur de class
    //_construct()

    //Envoyer un email
    public function sent_Mail(){

        //Récupération de compte par adresse email
        if(isset($_POST['Surnom'])) {
            
            //Vérification de l'entrée
            $string = "/^[A-Za-z0-9.'-]+$/";
            if(!preg_match($string,$_POST['Surnom'])) {
            header('location: ../index.php#connect');
            exit;
            }
            
            // Email
            $email_to = $donnees['Email'];
            $email_subject = "Récupération de mot de passe";

            //Creation de l'email
            $email_message = "Votre mot de passe sur le site de la mouscronnoise est :\n\n";
            $email_message .= $donnees['Password']."\n";
            
            // creation de l'en-tete
            $headers = 'From: '.$ini['app_email']."\r\n".
            'Reply-To: '.$ini['app_email']."\r\n" .
            'X-Mailer: PHP/' . phpversion();
            @mail($email_to, $email_subject, $email_message, $headers);  

            header('location: ../index.php#connect');
            exit;
        }
    }
}

?>