<?php


use Doctrine\ORM\Mapping AS ORM; 

/**
 * @ORM\Entity @ORM\Table (name="client_particulier") 
*/

class ClientParticulier {

     /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;
    /** @ORM\Column (type="string") */
    private $nom;
    /** @ORM\Column (type="string") */
    private $prenom;
    /** @ORM\Column (type="integer") */
    private $date_de_naissance;
    /** @ORM\Column (type="string") */
    private $cni;
    /** @ORM\Column (type="string") */
    private $adresse; 
    /** @ORM\Column (type="string") */
    private $téléphone;
    /** @ORM\Column (type="string") */
    private $email; 
    /** @ORM\Column (type="string") */
    private $profession;
    /** @ORM\Column (type="integer") */
    private $statut;
    /** @ORM\Column (type="integer") */
    private $salaire;
    /** @ORM\OneToMany(targetEntity="Compte", mappedBy="id_client") */
    private $comptes;
    /** 
     * @ORM\ManyToOne(targetEntity="Employeur", inversedBy="employes") 
     * @ORM\JoinColumn(name="employeur", referencedColumnName="id")
    */
    private $employeur;
    
    function __construct(){

    }
    function getId(){
        return $this->id;
    }

    function getNom(){
        return $this->nom;
    }
    function setNom($nom){
        $this->nom =$nom;
        return $this;
    }

    function getPrenom(){
        return $this->prenom;
    }
    function setPrenom($prenom){
        $this->prenom =$prenom;
        return $this;
    }

    function getDate_de_naissance(){
        return $this->date_de_naissance;
    }
    function setDate_de_naissance($date_de_naissance){
        $this->date_de_naissance =$date_de_naissance;
        return $this;
    }

    function getCni(){
        return $this->cni;
    }
    function setCni($cni){
        $this->cni =$cni;
        return $this;
    }


    function getAdresse(){
        return $this->adresse;
    }
    function setAdresse($adresse){
        $this->adresse =$adresse;
        return $this;
    }

    function getTéléphone(){
        return $this->téléphone;
    }
    function setTéléphone($téléphone){
        $this->téléphone =$téléphone;
        return $this;
    }


    function getEmail(){
        return $this->email;
    }
    function setEmail($email){
        $this->email =$email;
        return $this;
    }


    function getProfession(){
        return $this->profession;
    }
    function setProfession($profession){
        $this->profession =$profession;
        return $this;
    }


    function getStatut(){
        return $this->statut;
    }
    function setStatut($statut){
        $this->statut =$statut;
        return $this;
    }

    function getSalaire(){
        return $this->salaire;
    }
    function setSalaire($salaire){
        $this->salaire =$salaire;
        return $this;
    }

    function getComptes(){
        return $this->comptes;
    }
    function setComptes($comptes){
        $this->comptes =$comptes;
        return $this;
    }

    function getEmployeur(){
        return $this->employeur;
    }
    function setEmployeur($employeur){
        $this->employeur =$employeur;
        return $this;
    }


}


?>