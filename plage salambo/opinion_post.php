<?php

$pseudoAajoute = $_POST['name'];
$messageAajoute = $_POST['opinion'];

setcookie('pseudo',$pseudoAajoute,time()+365*24*3600,null,null,false,true);

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=id17133995_salammbo;charset=utf8;port=3306', 'root' , 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); //derniere partie pour activer les erreurs
}
catch(Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

if(!empty($pseudoAajoute) AND !empty($messageAajoute))
{
    $req = $bdd->prepare('INSERT INTO salammbobeach(name_opinion, opinion, date_opinion) VALUES(:pseudoAajoute , :messageAajoute, NOW())');
    $req->execute(array(
    'pseudoAajoute' => $pseudoAajoute,
    'messageAajoute' => $messageAajoute
));
}

header('Location: opinion.php');

?>