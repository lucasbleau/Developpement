<?php

function retournerIdentit√©(string $prenom, string $nom) : string {
    return ucfirst(strtolower($prenom)) . ' ' . strtoupper($nom) ;
}

$prenom = readline("Saisir un prenom : ") ;
$nom = readline("Saisir un nom : ") ;

echo "votre identit√© est " . retournerIdentit√©($prenom,$nom) ;