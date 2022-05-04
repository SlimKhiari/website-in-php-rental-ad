<?php

$civilite = $_POST['civilite'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$adresseMail = $_POST['email'];
$telephone = $_POST['mobile'];
$typeLog = $_POST['housingtype'];
$adresseLog = $_POST['adresse'];
$codePostaleLog = $_POST['cp'];
$prix = $_POST['prix'];
$cityLog = $_POST['city'];

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=id17133995_salammbo;charset=utf8;port=3306', 'root' , 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); //derniere partie pour activer les erreurs
}
catch(Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}


$req = $bdd->prepare('INSERT INTO infoowner(civil, nom,	prenom,	mail, telephone, typelog, adresselog, cp, prix,	citylog, date_publication) 
VALUES(:civilite , :nom, :prenom, :adresseMail, :telephone, :typeLog, :adresseLog, :codePostaleLog, :prix, :cityLog, NOW())');
$req->execute(array(
    'civilite' => $civilite,
    'nom' => $nom,
    'prenom'=>$prenom,
    'adresseMail'=>$adresseMail,
    'telephone'=>$telephone,
    'typeLog'=>$typeLog,
    'adresseLog'=>$adresseLog,
    'codePostaleLog'=>$codePostaleLog,
    'prix'=>$prix,
    'cityLog'=>$cityLog
));

header('Location: rent.php');

?>