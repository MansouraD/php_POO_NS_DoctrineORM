<?php

use Doctrine\ORM\Mapping AS ORM; 



/**
 * @ORM\Entity @ORM\Table(name="client_entreprise") 
*/

class ClientEntreprise {


     /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;
    /** @ORM\Column (type="string") */
    private $statut;
    /** @ORM\Column (type="string") */
    private $denomination;
    /** @ORM\Column(type="string")  */
    private $ninea; 
    /** @ORM\Column (type="string") */
    private $adresse; 
    /** @ORM\Column (type="string") */
    private $telephone;
    /** @ORM\Column (type="string") */
    private $mail; 
    /** @ORM\OneToMany(targetEntity="Compte", mappedBy="id_client")*/
    private $comptes;

    
    function __construct(){

    }
    function getId(){
        return $this->id;
    }

    function getStatut(){
        return $this->statut;
    }
    function setStatut($statut){
        $this->statut =$statut;
        return $this;
    }

    function getDenomination(){
        return $this->denomination;
    }
    function setDenomination($denomination){
        $this->denomination =$denomination;
        return $this;
    }

    function getNinea(){
        return $this->ninea;
    }
    function setNinea($ninea){
        $this->ninea =$ninea;
        return $this;
    }

    function getAdresse(){
        return $this->adresse;
    }
    function setAdresse($adresse){
        $this->adresse =$adresse;
        return $this;
    }

    function getTelephone(){
        return $this->telephone;
    }
    function setTelephone($telephone){
        $this->telephone =$telephone;
        return $this;
    }

    function getMail(){
        return $this->mail;
    }
    function setMail($mail){
        $this->mail =$mail;
        return $this;
    }

    function getComptes(){
        return $this->comptes;
    }
    function setComptes($comptes){
        $this->comptes =$comptes;
        return $this;
    }


}


?>