<?php


class AdminDB extends admin{
     private $_attributs = array();
  
  public function __construct(array $data) {
      $this->hydrate($data);
  }     
  //hydrate
  public function hydrate(array $data) {
     foreach ($data as $key => $value) {
    	$this->$key = $value;       
    //on affecte ï¿½ la clï¿½ sa valeur; le tableau $data est le resultset, tableau associatif
     }
  }
  public function getAdmin($login,$password){
        try{
            $query = "select * from admin where login=:login and password=:password";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':login',$login);
            $resultset->bindValue(':password',$password);
            
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
