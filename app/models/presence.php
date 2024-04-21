<?php

function listPresence($id){  
    $presence  = listerpresence($id);
    return $presence;
}

function filter($param,$Id){

    $recupererDonnee = [];
    foreach(listPresence($Id) as $utilisateur){
        if($utilisateur["statut"] == $param){
            $recupererDonnee[] = $utilisateur;
        }
    }
    return $recupererDonnee;
}

function filterreferentiel($referentiel, $listeUtilisateur){

    $recupererDonnee = [];
    foreach($listeUtilisateur as $utilisateur){
        if($utilisateur["referentiel"] == $referentiel){
            $recupererDonnee[] = $utilisateur;
        }
    }

    return $recupererDonnee;
}

function filterdate($date,$Id){
    
    $listeUtilisateur= filter("absent",$Id);
    $listeUtilisateur= filterreferentiel("REFDIG",$listeUtilisateur);
    $recupererDonnee = [];
    foreach($listeUtilisateur as $utilisateur){
        if($utilisateur["date"] == $date){
            $recupererDonnee[] = $utilisateur;
        }
    }

    return $recupererDonnee;
}

?>