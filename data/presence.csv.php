<?php
function listerpresence($Id) {
    $apprenants = [];
        $csv_file = '../data/presence.csv';
        if (file_exists($csv_file)) {
            $file_c = fopen($csv_file, 'r');
            while (($line = fgetcsv($file_c)) !== false) {
                if($line[8] == $Id){
                $apprenants[] = [
                    "Date" => $line[0],
                    "matricule" => $line[1],
                    "prenoms" => $line[2],
                    "nom" => $line[3],
                    "telephone" => $line[4],
                    "referentiel" => $line[5],
                    "Heure d'arrivee" => $line[6],
                    "statut" => $line[7],
                    "Id" => $line[8]
                    ];
                }
            }
        }
            fclose($file_c);
    return $apprenants;
}