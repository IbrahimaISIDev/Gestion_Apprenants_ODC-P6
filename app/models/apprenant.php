<?php

// fonction pour afficher tous les etudiants
function findAllStudents(){
    $student = [
        [ "image" => 'img1.png',
            "nom" => 'dieng',
            "prenom" => 'kine',
            "email" => 'kine@dieng',
            "genre" => 'F',
            "telephone" => '777777777',
            "action" => false
        
        ],
        [ "image" => 'img1.png',
            "nom" => 'diop',
            "prenom" => 'mouhamed',
            "email" => 'seydina@mouhamed',
            "genre" => 'M',
            "telephone" => '777777777',
            "action" => false
            
        ],
        [ "image" => 'img1.png',
            "nom" => 'fall',
            "prenom" => 'moussa',
            "email" => 'moussa@pathe',
            "genre" => 'M',
            "telephone" => '777777777',
            "action" => true
            
        ], 
        [ "image" => 'img1.png',
            "nom" => 'diouf',
            "prenom" => 'modou',
            "email" => 'modou@diouf',
            "genre" => 'M',
            "telephone" => '777777777',
            "action" => false
            
        ],
        [ "image" => 'img1.png',
            "nom" => 'andaw',
            "prenom" => 'andaw',
            "email" => 'andaw',
            "genre" => 'M',
            "telephone" => '777777777',
            "action" => true
            
        ],
        [ "image" => 'img1.png',
            "nom" => 'diallo',
            "prenom" => 'mamadou',
            "email" => 'mamadou@diallo.com',
            "genre" => 'M',
            "telephone" => '777777777',
            "action" => false
            
        ],
        [ "image" => 'img1.png',
            "nom" => 'sarr',
            "prenom" => 'ablaye',
            "email" => 'ablaye@sarr',
            "genre" => 'M',
            "telephone" => '777777799',
            "action" => false
        
        ]
        ];

    return $student;
}




?>