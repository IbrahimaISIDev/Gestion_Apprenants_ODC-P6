<header class="header"> <!-- Cette ligne commence la section d'en-tête de la page web. -->
        <div class="flex-left"> <!-- Cette ligne crée une division qui contient les éléments situés à gauche de l'en-tête. -->
            <label for="menu_checkbox"> <!-- Cette ligne crée une étiquette pour la case à cocher "menu_checkbox". -->
                <div><i class="fa fa-bars" aria-hidden="true"></i></div> <!-- Cette ligne crée une icône de barres qui est utilisée comme bouton pour ouvrir le menu latéral. -->
                
                <div><i class="fa-solid fa-circle-arrow-right"></i></div> <!-- Cette ligne crée une icône de flèche qui est utilisée comme bouton pour fermer le menu latéral. -->
            </label>
            <div class="icons"> <!-- Cette ligne crée une division qui contient les icônes de l'en-tête. -->
                <div style= "font-size: 3.5em">
                <i class='bx bx-grid-alt'></i>
                </div>
            </div>
            <form action="#" method="post" class="search-form"> <!-- Cette ligne crée un formulaire de recherche. -->
                <input type="text" name="search_box" required placeholder="Rechercher par matricule" maxlength="100"> <!-- Cette ligne crée une boîte de texte pour la recherche. -->
                <button type="submit" class="fas fa-search"></button> <!-- Cette ligne crée un bouton de soumission pour le formulaire de recherche. -->
            </form>
        </div>
        <div class="flex-right"> <!-- Cette ligne crée une division qui contient les éléments situés à droite de l'en-tête. -->
            <input type="date" name="dateofbirth" id="dateofbirth" value="2024-04-01"> <!-- Cette ligne crée une boîte de sélection de date. -->
            <div class="profil"> <!-- Cette ligne crée une division qui contient les informations de profil. -->
                <img src="<?=PATHIMG?>/logo.jpeg" class="image" alt=""> <!-- Cette ligne affiche l'image de profil. -->
                <div class="info"> <!-- Cette ligne crée une division qui contient les informations de profil. -->
                    <p>ADMIN_ADMIN</p> <!-- Cette ligne affiche le nom du profil. -->
                    <small>Admin <i class="fa fa-angle-down" aria-hidden="true"></i></small> <!-- Cette ligne affiche le rôle du profil et une icône de flèche vers le bas pour indiquer un menu déroulant. -->
                </div>
            </div>
        </div>
    </header>