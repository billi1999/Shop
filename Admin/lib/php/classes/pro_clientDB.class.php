<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pro_clientDB
 *
 * @author Jules
 */
class pro_clientDB {

    private $_db;
    private $_array = array();
    //private $listeCl=array(pro_client);

    public function __construct($db) {//contenu de $cnx (index)
        $this->_db = $db;
    }

    public function addClient($data) {
        try {
            $query = "insert into pro_client "
                    . "(nom,prenom,adressemail,administrateur)"
                    . "values (:nom,:prenom,:adressemail,:administrateur)";


            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':nom', $data['nom']);
            $resultset->bindValue(':prenom', $data['prenom']);
            $resultset->bindValue(':adressemail', $data['adressemail']);
            $resultset->bindValue(':administrateur', 0);
            $resultset->execute();
        } catch (Exception $ex) {
            print "Echec de l'insertion dans la table pro_client" . $ex;
            
            
        }
    }

    public function getPro_client() {
        try {
            //$this->_db->beginTransaction();
            $query = "select * from pro_client";
            $resultset = $this->_db->prepare($query);
            $resultset->execute();
           // $this->_db->commit();
            while ($data = $resultset->fetch()) {
               // $_array[] = new pro_client($data);
                $_array[]=$data;
            }
            
          
        } catch (PDOException $e) {
            print $e->getMessage();
        }
        if (!empty($_array)) {
            return $_array;
        } else {
            return null;
        }
    }

    public function updateClient($champ, $nouveau, $id) {
        try {
            $query = "UPDATE pro_client set " . $champ . " ='" . $nouveau . "'where idclient='" . $id . "'";
            $resultset = $this->_db->prepare($query);
            $resultset->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }

}
