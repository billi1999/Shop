<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of peo_acteurDB
 *
 * @author Jules
 */
class pro_acteurDB {
    private $_db;
    private $_array = array();
    //private $listes_act=array(pro_client);
    
    public function __construct($db){//contenu de $cnx (index)
        $this->_db = $db;
    }
    
    public function getPro_acteurs(){
        try{
           // $this->_db->beginTransaction();
            $query = "select * from pro_acteurs";
            $resultset = $this->_db->prepare($query);
            $resultset->execute();
            //$this->_db->commit();
            while($data = $resultset->fetch()){
                //$_array[] = new pro_acteur($data);
                 $_array[] = new Accueil($data);
                
                
            }        
        }
        catch(PDOException $e){
            print $e->getMessage();
            }
        if(!empty($_array)){
            return $_array;
        }
       
        else {
            return null;
        }
    }
}
