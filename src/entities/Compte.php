<?php


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
    /**
     * Many compte have one client_entreprise. This is the owning side.
     * @ORM\ManyToOne(targetEntity="ClientEntreprise", inversedBy="comptes")
     * @ORM\JoinColumn(name="id_clientE", referencedColumnName="id")
     */
    private $id_clientE;

    /**
     * Many compte have one client_entreprise. This is the owning side.
     * @ORM\ManyToOne(targetEntity="ClientParticulier", inversedBy="comptes")
     * @ORM\JoinColumn(name="id_clientP", referencedColumnName="id")
     */
    private $id_clientP;


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

    function getId_clientE(){
        return $this->id_clientE;
    }
    function setId_clientE($id_clientE){
        $this->id_clientE =$id_clientE;
        return $this;
    }

    function getId_clientP(){
        return $this->id_clientP;
    }
    function setId_clientP($id_clientP){
        $this->id_clientP =$id_clientP;
        return $this;
    }

}


?>