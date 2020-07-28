<?php
namespace entities;

use Doctrine\ORM\Mapping AS ORM; 

/**
 * @ORM\Entity @ORM\Table (name="compte") 
*/


class Compte{
  
     /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;
    /** @ORM\Column (type="string") */
    private $type_compte;
    /** @ORM\Column (type="integer") */
    private $agence;
    /** @ORM\Column (type="integer") */
    private $numero_compte;
    /** @ORM\Column (type="integer") */
    private $cle_rib;
    /** @ORM\Column (type="integer") */
    private $frais_ouverture; 
    /** @ORM\Column (type="integer") */
    private $_cni;
    /** @ORM\Column (type="integer") */
    private $_ninea;
    
    function __construct(){

    }

    function getId(){
        return $this->id;
    }

    function getType_compte(){
        return $this->type_compte;
    }
    function setType_compte($type_compte){
        $this->type_compte =$type_compte;
        return $this;
    }

    function getAgence(){
        return $this->agence;
    }
    function setAgence($agence){
        $this->agence =$agence;
        return $this;
    }

    function getNumero_compte(){
        return $this->numero_compte;
    }
    function setNumero_compte($numero_compte){
        $this->numero_compte =$numero_compte;
        return $this;
    }

    function getCle_rib(){
        return $this->cle_rib;
    }
    function setCle_rib($cle_rib){
        $this->cle_rib =$cle_rib;
        return $this;   
    }


    function getFrais_ouverture(){
        return $this->frais_ouverture;
    }
    function setFrais_ouverture($frais_ouverture){
        $this->frais_ouverture =$frais_ouverture;
        return $this;
    }

    
    function get_cni(){
        return $this->_cni;
    }
    function set_cni($_cni){
        $this->_cni =$_cni;
        return $this;
    }


    function get_ninea(){
        return $this->_ninea;
    }
    function set_ninea($_ninea){
        $this->_ninea =$_ninea;
        return $this;
    }

}


?>