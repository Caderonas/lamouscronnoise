<?php 

function Fun_nom($surnom){
    //Inclure le fichier de configuration
    $ini = parse_ini_file('./admin/bdd.ini');
    
    //Connection à la base
    $mysql = "mysql:host={$ini['db_host']};dbname={$ini['db_name']};charset={$ini['db_charset']}" ;
    try{
        $bdd = new PDO($mysql, $ini['db_user'], $ini['db_passwd']);
    }catch (Exception $e){
    	die('Erreur : ' . $e->getMessage());
    }
    //Récupération du nom et prenom
    $req = $bdd->prepare('SELECT Nom, Prenom FROM Inscrits WHERE surnom = :surnom');
    $req->execute(array('surnom' => $surnom));
    $donnees = $req->fetch();
    //Vérifie l'existence de données 
    if(!isset($donnees['Prenom'])){
        return $surnom;
    }else{
        $prenom = ucfirst($donnees['Prenom']);
        $nom = ucfirst($donnees['Nom']);
        return "$prenom $nom";
    }
}

function Fun_photo($surnom){
    //Chemin de stockage
    $path = "../Shared/photos/$surnom";
    $file_parts = pathinfo($path);

    //Trouve l'extension du fichier uploadé
    if(file_exists("$path.jpg")){
        return "$path.jpg";
    }elseif(file_exists("$path.jpeg")){
        return "$path.jpeg";
    }elseif(file_exists("$path.gif")){
        return "$path.gif";
    }elseif(file_exists("$path.png")){
        return "$path.png";
    }else{ return  "../Shared/photos/overlay.png";}
}
?>