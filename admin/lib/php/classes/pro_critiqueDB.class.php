<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pro_critiqueDB
 *
 * @author Jules
 */
class pro_critiqueDB {
  private $_db;
    private $_array = array();
    
    public function __construct($db){//contenu de $cnx (index)
        $this->_db = $db;
    }
    
    public function getPro_critique(){
        try{
            $query = "select * from pro_critique";
            $resultset = $this->_db->prepare($query);
            $resultset->execute();

            while($data = $resultset->fetch()){
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
