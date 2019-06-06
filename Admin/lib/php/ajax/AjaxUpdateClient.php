<?php
header('Content-Type: application/json');
require '../pgConnect.php';
require '../classes/connexion.class.php';
require '../classes/pro_client.class.php';
require '../classes/pro_clientDB.class.php';

$cnx= Connexion::getInstance($dsn, $user, $pass);

try{
    
    $update=new pro_clientDB($cnx);
    
    extract($_GET,EXTR_OVERWRITE);
    //$parametre='id='.$id.'&champ='.$champ.'$nouveau='.$nouveau;
  
       $parametre = 'id='.$id.'&champ='.$champ.'&nouveau='.$nouveau;
    $update->updateClient($champ, $nouveau, $id);
    print json_encode($retour);  //permet de retourner à ajax ce qui vient de la bdd.      
            
            
    
} catch (PDOException $e) {
    print $e->getMessage()."".$e->getLine()."".$e->getTrace()."".$e->getCode();
}

