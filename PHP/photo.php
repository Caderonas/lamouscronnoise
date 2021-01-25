<?php 
//Inclure le fichier de configuration
$ini = parse_ini_file('http://lamouscronnoise.be/19072018/admin/bdd.ini');

//Demarrage de la session pour récuper l'id
session_start();
$maxsize = 150000000;
$maxheight = 3000;
$maxwidth = 3000;
$Nom = $_FILES['Icone']['name'];
$Type = $_FILES['Icone']['type'];
$Size = $_FILES['Icone']['size'];
$Path_tmp = $_FILES['Icone']['tmp_name'];
$Error = $_FILES['Icone']['error'];

//Gestion d'erreur
if ($Error > 0){
    header('location: ../account.php?erreur=1#infos');
    exit;
} 
//Controle de la taille 
if ($Size > $maxsize){
    header('location: ../account.php?erreur=2#infos');
    exit;
}  

//Vérification de l'extension du fichier
$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
$extension_upload = strtolower(  substr(  strrchr($Nom, '.')  ,1)  );
if ( !in_array($extension_upload,$extensions_valides) ){
    header('location: ../account.php?erreur=3#infos');
    exit;
}

//Vérification de la taille du fichier
$image_sizes = getimagesize($Path_tmp);
if ($image_sizes[0] > $maxwidth OR $image_sizes[1] > $maxheight){
    header('location: ../account.php?erreur=4#infos');
    exit;
} 

//Connection à la base
$mysql = "mysql:host={$ini['db_host']};dbname={$ini['db_name']};charset={$ini['db_charset']}" ;
try{
    $bdd = new PDO($mysql, $ini['db_user'], $ini['db_passwd']);
}catch (Exception $e){
    die('Erreur : ' . $e->getMessage());
}
$req = $bdd->prepare('SELECT Surnom FROM Inscrits WHERE Identifiant = :identifiant');
$req->execute(array('identifiant' => $_SESSION['ID']));
$donnees = $req->fetch();

//Si il y a déjà un fichier
$surnom = $donnees['Surnom'];
$path = "../../Shared/photos/$surnom";
$file_parts = pathinfo($path);
if(file_exists("$path.jpg")){
    unlink("$path.jpg");
}elseif(file_exists("$path.jpeg")){
    unlink("$path.jpeg");
}elseif(file_exists("$path.gif")){
    unlink("$path.gif");
}elseif(file_exists("$path.png")){
    unlink("$path.png");
}

//Upload du fichier
$uploads_dir = '../../Shared/photos';
$nom = "{$surnom}.{$extension_upload}";
$resultat = move_uploaded_file($Path_tmp, "$uploads_dir/$nom");
if ($resultat){
    header('location: ../account.php?erreur=0#infos');
    exit;
} 
?>
