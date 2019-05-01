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
    
    public function __construct($db){//contenu de $cnx (index)
        $this->_db = $db;
    }
    
    public function getPro_client(){
        try{
            $query = "select * from pro_client";
            $resultset = $this->_db->prepare($query);
            $resultset->execute();

            while($data = $resultset->fetch()){
                $_array[] = new accueil($data);
               
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
