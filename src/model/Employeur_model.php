<?php
namespace model ;
use entities\Employeur;  



class Employeur_model extends Base {
    
    function __construct(){
        parent::__construct();
    }

    function ajouterEmployeur(Employeur $employeur){
        $requeteInsertion ="INSERT INTO employeur (numero_identification, raison_social, denomination, adresse) 
        VALUES('".$employeur->getNumero_identification()."', '".$employeur->getRaison_social()."', '".$employeur->getDenomination()."', '".$employeur->getAdresse()."')";
        
    
        if($this->base !=null){
            
            return $this->base->exec($requeteInsertion); 
        }else{
            return null;
        }
        
        
    }



}


?>