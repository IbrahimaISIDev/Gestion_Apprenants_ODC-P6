<?php

function LirePromoCSV() {

$csv = "../data/promos.csv";
$file = fopen($csv, 'r');

$promos=[];
if($file){
while (($donnee = fgetcsv($file)) != false){
        $promos[] = [
            "libelle" => $donnee[0],
            "DateDebut" => $donnee[1],
            "DateFin" => $donnee[2],
            "statut" => $donnee[3],
            "Id" => $donnee[4]
            
        ];
    
    
} 
fclose($file);
}else{
    echo "erreur";
}

return $promos;

}



?>