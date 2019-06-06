<?php


class AdminDB extends admin{
     private $_db;
    private $_array = array();
  
  public function __construct($db){
        $this->_db = $db;
    }   
  //hydrate
  public function hydrate(array $data) {
     foreach ($data as $key => $value) {
    	$this->$key = $value;       
     }
  }
  public function getAdmin($nom,$adressemail){
        try{
            
            $query="select * from pro_client where nom=:nom and adressemail=:adressemail";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':nom',$nom);
            $resultset->bindValue(':adressemail',$adressemail);
            
            $resultset->execute();

            while($data = $resultset->fetch()){
                $_array[] = new Admin($data);
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

 //getters
  public function __get ($nom) { 
      if (isset ($this->_attributs[$nom])){  
        return $this->_attributs[$nom];
      }
  }
  
  //setters
  public function __set ($nom, $valeur) { //$key, $value de hydrate
     $this->_attributs[$nom] = $valeur;    
  }
}
