<?php
    session_start();

    //Appele de fonction par rapport au formulaire
    if(isset($_GET['fct'])){
        //Connection/Inscritpion
        if($_GET['fct'] == "connect_session") class_bdd::connect_Session(strtolower($_POST['Surnom']),$_POST['Password']);
        if($_GET['fct'] == "create_account" && class_bdd::validate_Variable(strtolower($_POST['Nom']), strtolower($_POST['Prenom']), strtolower($_POST['Surnom']), $_POST['Email'], $_POST['Password'], $_POST['Password1']))
        	class_bdd::create_account(strtolower($_POST['Nom']), strtolower($_POST['Prenom']), strtolower($_POST['Surnom']), $_POST['Email'], $_POST['Password'], $_POST['Password1']);
        //Mise à jour
        if($_GET['fct'] == "update_autorisation") class_bdd::update_Autorisation($_POST['autorisation'], $_GET['index']);
        if($_GET['fct'] == "update_password") class_bdd::update_Password($_SESSION['ID'], $_POST['Password'], $_POST['Password1']);
        if($_GET['fct'] == "update_email") class_bdd::update_Email($_SESSION['ID'], $_POST['Email']);
        //Suppression
        if($_GET['fct'] == "delete_account") class_bdd::delete_Account($_GET['index']);
        if($_GET['fct'] == "delete_debt") class_bdd::delete_Debt($_GET['index']);
        if($_GET['fct'] == "delete_message") class_bdd::delete_Message($_GET['index']);
        //Ajout
        if($_GET['fct'] == "add_debt") class_bdd::add_Debt($_SESSION['ID'], $_POST['debiteur'], $_POST['titre'], $_POST['montant']);
        if($_GET['fct'] == "add_event") class_bdd::add_Event(strtolower($_POST['titre']), strtolower($_POST['details']));
        if($_GET['fct'] == "add_eventinscrit") class_bdd::add_EventInscrit(strtolower($_GET['index']), strtolower($_POST['forfait']));
        if($_GET['fct'] == "add_message") class_bdd::add_Message($_POST['destinataire'], $_SESSION['ID'], $_POST['message']);
        if($_GET['fct'] == "add_rapport") class_bdd::add_Rapport($_POST['Sujet'], $_POST['Rapport'], $_SESSION['ID'], $_GET['poste']);
        //Récupération
        if( $_GET['fct'] == "update_passwordforgot" && isset($_GET['token']) ) class_bdd::update_ForgotPassword($_GET['token'], $_POST['Password'], $_POST['Password1']);

        if($_GET['fct'] == "kill_session") class_session::kill_Session();
    }
    
    //Classe acces à base de donnée
    class class_bdd{

        //Connection bdd
            private function connect_Bdd(){
                //Fichier de configuration

                $ini_file = dirname(__dir__);
                $ini = parse_ini_file($ini_file."/admin/bdd.ini");

                //Connection et gestion d'erreur
                $mysql = "mysql:host={$ini['db_host']};dbname={$ini['db_name']};charset={$ini['db_charset']}" ;
                    try{
                        $bdd = new PDO($mysql, $ini['db_user'], $ini['db_passwd']);
                    }catch (Exception $e){
                        die('Erreur : ' . $e->getMessage());
                    }
                return $bdd;
            }
        
        //Générer un token aléatoire
            private function create_Token($surnom){
                //Génération du token
                $Temp1 = rand(5000, 999999999);
                $Temp2 = crypt('md5', $surnom+$Temp1);
                return "$Temp2";
            }

        //Validation des données de creation d'un compte
            public function validate_Variable($Nom, $Prenom, $Surnom, $Email, $Password, $Password1){
                //Variable de test 
                $emailv = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
                $string = "/^[A-Za-z.'-ï]+$/";
                $stringpnum = "/^[A-Za-z0-9.'-]+$/";

                //Vérification dde l'existence des donnees
                if(!isset($Nom) ||
                !isset($Prenom) ||
                !isset($Surnom) ||
                !isset($Email) ||
                !isset($Password) ||
                !isset($Password1)){
                    header('location: ../index.php?erreur=6#connect');
                    exit;
                //Validation des donnees
                }else{
                    if($Password != $Password1){
                        header('location: ../index.php?erreur=7#connect');
                        exit;
                    }elseif(!preg_match($emailv,$Email)){
                        header('location: ../index.php?erreur=8#connect');
                        exit;
                    }elseif(!preg_match($string,$Nom) || !preg_match($string,$Prenom)){
                        header('location: ../index.php?erreur=8#connect');
                        exit;
                    }elseif(!preg_match($stringpnum,$Surnom)){
                        header('location: ../index.php?erreur=8#connect');
                        exit;
                    }elseif(!preg_match($stringpnum,$Password)){
                        header('location: ../index.php?erreur=8#connect');
                        exit;
                    }else{
                        return 1;
                    }
                }
            }

        //Connection à une session
            public function connect_Session($surnom, $password){
                //Récuperation des infos liés au Surnom
                $req = class_bdd::connect_Bdd()->prepare('SELECT Password, Identifiant FROM Inscrits WHERE Surnom = :surnom');
                $req->execute(array('surnom' => $surnom));
                $donnees = $req->fetch();

                //Vérification de l'existence du Surnom dans la bdd
                if(!isset($donnees['Password'])){
                    header('location: ../index.php?erreur=4#connect');
                    exit;
                }else{

                    //Vérification du mot de passe associé
                    if(hash_equals($donnees['Password'], crypt($password, $donnees['Password']))){
                        $token = class_bdd::Create_Token($surnom);
                        class_bdd::add_Token($surnom, $token);
                        class_session::create_Session($token);
                    }else{
                        header('location: ../index.php?erreur=5#connect');
                        exit;
                }
                $req->closeCursor();
                }
            }

        //Creation d'un nouveau compte
            public function create_Account($Nom, $Prenom, $Surnom, $Email, $Password, $Password1){
                
                //Récuperation des infos liés à l'adresse mail
                $req = class_bdd::connect_Bdd()->prepare('SELECT Password FROM Inscrits WHERE Email = :email');
                $req->execute(array('email' => $Email));
                $donnees = $req->fetch();
                
                //Vérification de l'existence de l'adresse Email pour éviter les doublons
                if(isset($donnees['Password'])){
                    header('location: ../index.php?erreur=9#connect');
                    exit;
                }
                $req->closeCursor();

                //Récuperation des infos liés au Surnom
                $req = class_bdd::connect_Bdd()->prepare('SELECT Password FROM Inscrits WHERE Surnom = :surnom');
                $req->execute(array('surnom' => $Surnom));
                $donnees = $req->fetch();

                if(isset($donnees['Password'])){
                    $req->closeCursor();
                    header('location: ../index.php?erreur=9#connect');
                    exit;
                }else{
		    $Identifiant = class_bdd::Create_Token($Surnom);
                    //Insertion des informations dans la bdd
                    $req->closeCursor();
                    $req = class_bdd::connect_Bdd()->prepare('INSERT INTO Inscrits(Identifiant, Nom, Prenom, Surnom, Email, Password) VALUES(:identifiant, :nom, :prenom, :surnom, :email, :password)');
                    $req->execute(array(
                        'identifiant' => $Identifiant,
                        'nom' => $Nom,
                        'prenom' => $Prenom,
                        'surnom' => $Surnom,
                        'email' => $Email,
                        'password' => crypt($Password)
                        ));
                    
                    class_session::create_Session($Identifiant);

                }
            }
        
        //Mise à jour du niveau d'autorisation
            public function update_Autorisation($autorisation, $index){

                //Vérifier l'entrée
                if($autorisation != 0 && 
                $autorisation != 1 &&
                $autorisation != 2 &&
                $autorisation != 3 &&
                $autorisation != 4 &&
                $autorisation != 5){
                    header('location: ../account.php#gestion');
                    exit;
                }
                //Update autorisation
                $req = class_bdd::connect_bdd()->prepare('UPDATE Inscrits SET Autorisation = :autorisation WHERE Id = :index');
                $req->execute(array('autorisation' => $autorisation, 'index' =>  $index));
                header('location: ../account.php#gestion');
                exit;
            }

        //Mise à jour du mot de passe
            public function update_Password($identifiant, $password, $password1){

                //Vérifier l'entrée
                if($password != $password1 || !isset($password) || !isset($password1)){
                    header('location: ../account.php#infos');
                    exit;
                }
                
                //Vérification du mot de passe
                $req = class_bdd::connect_bdd()->prepare('UPDATE Inscrits SET Password = :password WHERE Identifiant = :identifiant');
                $req->execute(array('identifiant' =>  $identifiant, 'password' => crypt($password) ));
                header('location: ../account.php?erreur=12#infos');
                exit;
            }
        
        //Mise à jour du mot de passe
            public function update_ForgotPassword($token, $password, $password1){

                //Vérifier l'entrée
                if($password != $password1 || !isset($password) || !isset($password1)){
                    header('location: ../account.php#infos');
                    exit;
                }
                
                //Vérification du mot de passe
                $req = class_bdd::connect_bdd()->prepare('UPDATE Inscrits SET Password = :password WHERE Identifiant = :identifiant');
                $req->execute(array('identifiant' =>  $token, 'password' => crypt($password) ));
                $token = class_bdd::Create_Token($surnom);
                class_bdd::add_Token($surnom, $token);
                class_session::create_Session($token);
                header('location: ../account.php');

                exit;
            }

        //Mise à jour de l'adresse email
        public function update_Email($identifiant, $email){

            //récupération du formulaire
            $Email = $_POST['Email'];
            $emailv = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
            
            //Vérification des 2 mots de passe et les donnees
            if(!isset($Email)){
                header('location: ../account.php?erreur=5#infos');
                exit;
                
            }else{
                if(!preg_match($emailv,$email)) {
                    header('location: ../account.php?erreur=6#infos');
                    exit;
                }else{
                    
                    //Récuperation des infos liés à l'adresse mail
                    $req = class_bdd::connect_bdd()->prepare('UPDATE Inscrits SET Email = :email WHERE Identifiant = :identifiant');
                    $req->execute(array('identifiant' => $_SESSION['ID'],'email' => $email));
                    header('location: ../account.php?erreur=7#infos');
                    exit;
                    }
                }
                
        }

        //Suppression d'un compte
            public function delete_Account($index){

                //Récuperation de l'autorisation
                $req = class_bdd::connect_bdd()->prepare('SELECT Autorisation FROM Inscrits WHERE Identifiant = :identifiant');
                $req->execute(array('identifiant' => $_SESSION['ID']));
                $autorisation = $req->fetch();

                //Vérification que la requete vient bien de l'auteur
                if(!$autorisation['Autorisation']){

                    //Surppression du message de la bdd
                    $req = class_bdd::connect_bdd()->prepare('DELETE FROM Inscrits WHERE Id = :index');
                    $req->execute(array('index' => $index));
                    header('location: ../account.php#gestion');
                    exit;
                }
        }

        //Suppression d'une dette
            public function delete_Debt($index){

                //Récupération de l'auteur
                $req = class_bdd::connect_bdd()->prepare('SELECT Creancier, Debiteur FROM Dettes WHERE Id = :index');
                $req->execute(array('index' => $index));
                $auteur = $req->fetch();

                //Récuperation de la session
                $req = class_bdd::connect_bdd()->prepare('SELECT Surnom, Autorisation FROM Inscrits WHERE Identifiant = :identifiant');
                $req->execute(array('identifiant' => $_SESSION['ID']));
                $surnom = $req->fetch();

                //Conditions
                $cond1 = $surnom['Surnom'] == $auteur['Debiteur'];
                $cond2 = $surnom['Surnom'] == $auteur['Creancier'];
                $cond3 = "MSC" == $auteur['Creancier'] && $surnom['Autorisation'] < 3;

                //Vérification que la requete vient bien de l'auteur
                if($cond1 || $cond2 || $cond3){

                    //Suppression de la dette de la bdd
                    $req = class_bdd::connect_bdd()->prepare('DELETE FROM Dettes WHERE Id = :index');
                    $req->execute(array('index' => $index));
                    header('location: ../account.php#dettes');
                    exit;
                }
        }

        //Suppression d'un message
            public function delete_Message($index){

                //Récupération de l'auteur
                $req = class_bdd::connect_bdd()->prepare('SELECT Expediteur FROM Messages WHERE Id = :index');
                $req->execute(array('index' => $index));
                $auteur = $req->fetch();

                //Récuperation de la session
                $req = class_bdd::connect_bdd()->prepare('SELECT Surnom FROM Inscrits WHERE Identifiant = :identifiant');
                $req->execute(array('identifiant' => $_SESSION['ID']));
                $surnom = $req->fetch();

                //Vérification que la requete vient bien de l'auteur
                if($surnom['Surnom'] == $auteur['Expediteur']){

                    //Suppression du message de la bdd
                    $req = class_bdd::connect_Bdd()->prepare('DELETE FROM Messages WHERE Id = :index');
                    $req->execute(array('index' => $index));
                    header('location: ../account.php#message');
                    exit;
                }
        }

        //Information session
            public function get_SessInfo(){
                //Récupération des donnees par rapport à l'identifiant
                $req = class_bdd::connect_Bdd()->prepare('SELECT Surnom, Prenom, Nom, Email, Autorisation FROM Inscrits WHERE Identifiant = :identifiant');
                $req->execute(array('identifiant' => $_SESSION['ID']));
                $donnees = $req->fetch();

                //Si personne n'est associé à l'identifiant
                if(!isset($donnees['Surnom'])){
                    header('location: index.php');
                    exit;
                }
                return $donnees;
        }

        //Information dettes
            public function get_Debt($surnom, $prestataire){

                //Récupération des donnees par rapport à l'identifiant
                if($prestataire == "Debiteur")
                    $dettes = class_bdd::connect_Bdd()->prepare('SELECT * FROM Dettes WHERE Debiteur = :prestataire ');
                else
                    $dettes = class_bdd::connect_Bdd()->prepare('SELECT * FROM Dettes WHERE Creancier = :prestataire ');
                $dettes->execute(array('prestataire' => $surnom));
                return $dettes;
        }

        //Liste inscrits
            public function get_Inscrit(){

                //Récupération des noms, prénoms et surnoms 
                return class_bdd::connect_Bdd()->query('SELECT Nom, Prenom, Surnom FROM Inscrits ORDER BY Autorisation');
     
        }

        //Liste Evenement
            public function get_Event(){

                //Récupération des evenements
                return class_bdd::connect_Bdd()->query('SELECT * FROM Evenements');
 
        }

        //Liste inscrits evenement
            public function get_EventInscrit($index){

                //Récupération des inscrits à un evenement
                $event_inscrits = class_bdd::connect_Bdd()->prepare('SELECT * FROM Event_inscrits WHERE Id_event = :id_event');
                $event_inscrits->execute(array('id_event' => $index));
                return $event_inscrits;
 
        }

        //Récupération d'un surnom par rapport à son index
            public function get_Surnom($index){

                //Récupération du surnom
                $surnoms = class_bdd::connect_Bdd()->prepare('SELECT Surnom FROM Inscrits WHERE Id = :index');
                $surnoms->execute(array('index' => $index));
                return $surnoms;

        }

        //Récupération d'un index par rapport à son token
            function get_Index($identifiant){

                //Récupération de l'index
                $index = class_bdd::connect_Bdd()->prepare('SELECT Id FROM Inscrits WHERE Identifiant = :identifiant');
                $index->execute(array('identifiant' => $identifiant));
                return $index;

            }
        
        //Liste autorisation
            public function get_Autorisation(){

                //Récupération de toutes les données de la table inscrit
                return class_bdd::connect_Bdd()->query('SELECT * FROM Inscrits ORDER BY Autorisation');
 
        }

        //Liste message 
            public function get_Message($destinataire){

                //Récupération des noms, prénoms et surnoms 
                $messages = class_bdd::connect_Bdd()->prepare('SELECT * FROM Messages WHERE Destinataire = :destinataire ');
                $messages->execute(array('destinataire' => $destinataire )); 
                return $messages;
 
        }

        //Liste message 
            public function get_Rapport($poste){

                //Récupération des noms, prénoms et surnoms 
                $rapports = class_bdd::connect_Bdd()->prepare('SELECT * FROM Livres_dor WHERE Poste = :poste ');
                $rapports->execute(array('poste' => $poste )); 
                return $rapports;

        }

        //Ajouter un token (identifiant) associé à un identifiant
            public function add_Token($surnom, $identifiant){

                //Stockage du token dans la bdd
                $req = class_bdd::connect_Bdd()->prepare('UPDATE Inscrits SET Identifiant = :identifiant WHERE Surnom = :surnom');
                $req->execute(array('identifiant' => $identifiant,'surnom' => $surnom));
        }

        //Ajouter une dette
            public function add_Debt($id, $debiteur, $titre, $montant){

                //Récupération de l'exepediteur
                $req = class_bdd::connect_Bdd()->prepare('SELECT Surnom FROM Inscrits WHERE Identifiant = :identifiant');
                $req->execute(array('identifiant' => $id));
                $donnees = $req->fetch();
                $creancier = $donnees['Surnom'];
               
                //Dette au nom de la regio  (MSC -> Treso || msc -> Dette)
                if(isset($_POST['msc']) || isset($_POST['MSC'])){
                    if($_POST['msc'] || $_POST['MSC']){
                        $creancier = "MSC";
                    }
                }

                //Ajout de la dette 
                $req = class_bdd::connect_Bdd()->prepare('INSERT INTO Dettes(Debiteur, Creancier, Titre, Montant) VALUES(:debiteur, :creancier, :titre, :montant)');
                            $req->execute(array(
                                'debiteur' => $debiteur,
                                'creancier' => $creancier,
                                'titre' => $titre,
                                'montant' => $montant
                                ));
                header('location: ../account.php#dettes');
                exit;
        }

        //Ajouter un evenement
            public function add_Event($titre, $details){

                //Ajout de l'evenement à la bdd
                $req = class_bdd::connect_Bdd()->prepare('INSERT INTO Evenements(Titre, Details) VALUES(:titre, :details)');
                            $req->execute(array(
                                'titre' => $titre,
                                'details' => $details
                                ));
                header('location: ../account.php#event');
                exit;
        }

        //Ajouter un inscrit à un evenement
            public function add_EventInscrit($id_event, $forfait){
                
                //Récupération de l'identifiant
                $req = class_bdd::connect_Bdd()->prepare('SELECT Id FROM Inscrits WHERE Identifiant = :identifiant');
                $req->execute(array('identifiant' => $_SESSION['ID']));
                $donnees = $req->fetch();
                
                //Ajout de l'inscrit à l'evenement
                $req = class_bdd::connect_Bdd()->prepare('INSERT INTO Event_inscrits(Forfait, Id_event, Id_inscrit) VALUES(:forfait, :id_event, :id_inscrit)');
                            $req->execute(array(
                                'forfait' => $forfait,
                                'id_event' => $id_event, 
                                'id_inscrit' => $donnees['Id']
                                ));
                header('location: ../account.php#event');
                exit;
        }
        //Ajouter un inscrit à un evenement
            public function add_Message($conv_id, $id, $message){
                
                //Récupération de l'exepediteur
                $req = class_bdd::connect_Bdd()->prepare('SELECT Surnom FROM Inscrits WHERE Identifiant = :identifiant');
                $req->execute(array('identifiant' => $id));
                $donnees = $req->fetch();
                $expe = $donnees['Surnom'];

                //Création du message
                $req = class_bdd::connect_Bdd()->prepare('INSERT INTO Messages(Id_conv, Expediteur, Message) VALUES(:id_conv, :expediteur, :message)');
                            $req->execute(array(
                                'destinataire' => $id_conv,
                                'expediteur' => $expe,
                                'message' => $message,
                                ));
                header('location: ../account.php#message');
                exit;
        }
        //Ajouter un rapport
            public function add_Rapport($sujet, $rapport, $identi, $poste){

                //Récupération de l'index par rapport au token
                $index = class_bdd::get_Index($identi);
                $index = $index->fetch();

                //Récupération du surnom par rapport à l'index
                $surnom = class_bdd::get_Surnom($index['Id']);
                $surnom = $surnom->fetch();

                //Remplace les sauts de ligne par la balise html pour garder la forme du texte
                $rapport = str_replace(array("\r\n","\n"),'<br />',$rapport);

                //Création du rapport
                $req = class_bdd::connect_Bdd()->prepare('INSERT INTO Livres_dor(Sujet, Rapport, Date, Poste, Auteur ) VALUES(:sujet, :rapport, now(), :poste, :auteur)');
                            $req->execute(array(
                                'sujet' => $sujet,
                                'rapport' => $rapport,
                                'poste' => $poste,
                                'auteur' => $surnom['Surnom']
                                ));
                header('location: ../livresdors.php#'.$poste);
                exit;
        }
        //Imprimer un les rapports d'un poste
            public function print_Rapport($poste){

            $rapports = class_bdd::get_Rapport($poste);

            while($rapport = $rapports->fetch()){
            
                print
                    '<h3>'.$rapport['Sujet'].'</h3>'
                    .'<blockquote>'.$rapport['Rapport'].'</blockquote>'
                    .'<h4>'.$rapport['Auteur'].' : '.$rapport['Date'].'</h4>';
            }

            print
                '<form method="post" action="PHP/main.php?fct=add_rapport&amp;poste='.$poste.'">'
                .    '<!-- Sujet -->'
                .    '<div class="field">'
                .    '<label for="demo-category">Sujet</label>'
                .    '<input type="text" name="Sujet" id="subject" required />'
                .    '</div>'
                .    '<!-- Rapport -->'
                .    '<div class="field">'
                .        '<label for="message">Rapport</label>'
                .        '<textarea name="Rapport" id="rapport" rows="4" required></textarea>'
                .    '</div>'
                .    '<ul class="actions">'
                .        '<li><input type="submit" value="Envoyer rapport" class="special" /></li>'
                .    '</ul>'
                .'</form>';
        }
    }

    class class_session{

        //Connection : Creation de la session et stockage du token 
            public function create_Session($identifiant){

                //Debut de session
                session_start();
                $_SESSION['ID'] = $identifiant;

                header('location: ../account.php');
                exit;
            }
        
        //Deconnection : Supression de la session et retour sur l'acceuil
            public function kill_Session(){

                //Fin de session
                session_start();
                unset($_SESSION['ID']);
                session_destroy();

                header('location: ../index.php');
                exit;
            }
    }
?>
