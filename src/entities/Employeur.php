<?php

use Doctrine\ORM\Mapping as ORM;



/**
 * @ORM\Entity @ORM\Table (name="employeur") 
*/


class Employeur {

   
     /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;
    /** @ORM\Column (type="integer") */
    private $numero_identification;
    /** @ORM\Column (type="string") */
    private $denomination;
    /** @ORM\Column (type="string") */
    private $raison_social;
    /** @ORM\Column (type="string") */
    private $adresse; 
    
    
    function __construct(){

    }

    function getId(){
        return $this->id;
    }

    function getNumero_identification(){
        return $this->numero_identification;
    }
    function setNumero_identification($numero_identification){
        $this->numero_identification =$numero_identification;
        return $this;
    }

    function getRaison_social(){
        return $this->raison_social;
    }
    function setRaison_social($raison_social){
        $this->raison_social =$raison_social;
        return $this;
    }

    function getDenomination(){
        return $this->denomination;
    }
    function setDenomination($denomination){
        $this->denomination =$denomination;
        return $this;
    }

    function getAdresse(){
        return $this->adresse;
    }
    function setAdresse($adresse){
        $this->adresse =$adresse;
        return $this;
    }

}


?>