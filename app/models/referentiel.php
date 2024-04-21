<?php

function LireRefCSV()
{
    $ref = "../data/referentiel.csv";
    $file_ref = fopen($ref, 'r');
    $refer = [];
    if ($file_ref) {
        while (($tiel = fgetcsv($file_ref)) != false) {
            $refer[] = [
                "promotion" => $tiel[0],
                "etat" => $tiel[1],
                "Id" => $tiel[2]
            ];
        }
        fclose($file_ref);
    } else {
        echo "erreur";
    }
    return $refer;
}
