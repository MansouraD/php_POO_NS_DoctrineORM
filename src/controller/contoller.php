<?php

require_once ('../entities/ClientParticulier.php');
require_once ('../entities/ClientEntreprise.php');
require_once ('../entities/Compte.php');
require_once ('../entities/Employeur.php');

require_once ('../../bootstrap.php');



if(isset($_POST['soumettre'])){
    extract($_POST);

    if($_POST['check1']=='Particulier'){

        $verif = FALSE;
        $rv = FALSE;

        if(!empty($nom_client)  && !empty($prenom_client) && !empty($datenaiss) && !empty($cni) && !empty($adresse_client) && !empty($tel_client)){
           
            $ccpp = new ClientParticulier();
            
            $ccpp->setNom($nom_client);
            $ccpp->setPrenom($prenom_client);
            $ccpp->setDate_de_naissance($datenaiss);
            $ccpp->setCni($cni);
            $ccpp->setAdresse($adresse_client);
            $ccpp->setTéléphone($tel_client);
            $ccpp->setEmail($email_client);
            $ccpp->setProfession($profession);
            $ccpp->setStatut($statut);
            $ccpp->setSalaire($salaire);

            $entityManager->persist($ccpp);
            $entityManager-> flush();
            $verif = TRUE;


            if($verif==TRUE){
                //if(!empty($type_compte)){
                    $liaison = $cni;

                    $cc = new Compte();

                    $cc->setType_compte($type_compte);
                    $cc->setAgence($numero_agence);
                    $cc->setNumero_compte($numero_compte);
                    $cc->setCle_rib($cle_rib);
                    $cc->setFrais_ouverture($frais_ouverture);
                    $cc->set_cni($liaison);
                    
                    $entityManager->persist($cc);
                    $entityManager-> flush();
                
               // }

                if($_POST['check3']=='salarie'){
                    if(!empty($denomination)  && !empty($adresse_employeur)){ 
                        $statut = 1;
                        
                        $ee = new Employeur();

                        $ee->setNumero_identification($numero_identification);
                        $ee->setDenomination($denomination);
                        $ee->setRaison_social($raison_social);
                        $ee->setAdresse($adresse_employeur);

                        $entityManager->persist($ee);
                        $entityManager-> flush();

                        
                    }  

                }else if($_POST['check3']=='autres'){
                    $statut = 0;

                }
                $rv = TRUE;
            }header("location:../view/index.php?ok=$rv");  
        }header("location:../view/index.php?ok= $rv");

    }else if($_POST['check1']=='Entreprise'){

        $verif = FALSE;
        $rv = FALSE;
        
        if(!empty($statut_juridique)  && !empty($nom_entreprise) && !empty($adresse_entreprise) && !empty($tel_entreprise)&& !empty($ninea)){
 
            $ccee = new ClientEntreprise();

            $ccee->setStatut($statut_juridique);
            $ccee->setDenomination($nom_entreprise);
            $ccee->setNinea($ninea);
            $ccee->setAdresse($adresse_entreprise);
            $ccee->setTelephone($tel_entreprise);
            $ccee->setMail($email_entreprise);

            $entityManager->persist($ccee);
            $entityManager-> flush();
            $verif = TRUE;
            
        }    

        if($verif==TRUE){
           // if(!empty($type_compte)){
                $liaison = $ninea;

                $cc = new Compte();

                $cc->setType_compte($type_compte);
                $cc->setAgence($numero_agence);
                $cc->setNumero_compte($numero_compte);
                $cc->setCle_rib($cle_rib);
                $cc->setFrais_ouverture($frais_ouverture);
                $cc->set_ninea($liaison);

                $entityManager->persist($cc);
                $entityManager-> flush();
                $rv = TRUE;
           // }
        }header("location:../view/index.php?ok=$rv");
    }header("location:../view/index.php?ok=$rv"); 

}
?>