<div class="promotions">
		<h2>promotions</h2>
		<span>Promos * Création</span>
	</div>

    <div class="container-top">
		<h3>Promotion: <span>Promotion 6</span></h3>
		<h3>Référentiel: <span>Dév Web / Mobile</span></h3>
	</div>


		<!-- =================================body================================ -->
		<div class="containe">
			<span class="t1">1</span>
			<h3 class="">Apprenant</h3>
			<div class="title">
				<h2>Liste des apprenants <span>(50)</span> </h2>
			</div>
			<div class="buttons">
				<a href="#popup" class="b1"><i class="fa-regular fa-add"></i> Nouveau</a> &nbsp; &nbsp;
				<a href="#insert" class="b2">Insertion en masse</a>&nbsp; &nbsp;
				<a href="#" class="b3"><i class="fa-regular fa-circle-down"></i> Liste model</a> &nbsp; &nbsp;
				<a href="#" class="b4">Liste des exclus</a> &nbsp; &nbsp;
			</div>
			<div class="filtre">
				<i class="fa-regular fa-add"></i><input type="text" class="search">
			</div>
			<div class="folder-icon">
				<i class="fa-regular fa-folder"></i>
			</div>
			<table class="table">
				<thead>
					<tr>
						<th>Image</th>
						<th>Nom</th>
						<th>Prénom</th>
						<th>Email</th>
						<th>Genre</th>
						<th>Téléphone</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach (findAllStudents() as $app) :  ?>
					<tr>
						<td><p style="font-size: xx-large;">👨</p></td>
					
						<td><?= $app['nom']?></td>
						<td><?= $app['prenom']?></td>
						<td><?= $app['email']?></td>
						<td><?= $app['genre']?></td>
						<td><?= $app['telephone']?></td>
						<td>
						<input type="checkbox" id="my-checkbox-0" <?php if ($app['action']) : ?> checked <?php endif; ?>>
						</td>
                            
					</tr>
					<?php endforeach;  ?>
				</tbody>
			</table>
	


<!-- Le Modal (popup) -->
<div id="popup" class="modal">

  <!-- Contenu du Modal -->
  <form action="" method="post" class="modal-content">
    <div class="head">
    <a href="#" class="close">× </a>
    <h2>Nouvel Apprenant</h2>
</div>
    <div class="section informations-perso">
      <div class="line flex">
        <span><i class="fa-solid fa-1"></i></span>
        <span>Informations Perso.</span>
        <span></span>
        <span><i class="fa-solid fa-2" style="color: #038e89;background: #f2f1ff"></i></span>
        <span>Informations Supplémentaires</span>
      </div>
      <div class="input-group">
        <div>
          <label for="nom_tuteur">Nom et Prénom tuteur</label>
          <input type="text" id="nom_tuteur" placeholder="Nom & Prénom tuteur" required>
        </div>
        <div>
          <label for="contact_tuteur">Contact Tuteur</label>
          <input type="text" id="contact_tuteur" placeholder="Contact Tuteur" required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" placeholder="Entrer l'email" required class="input-group input[type='email']">
        </div>
         <div>
          <label for="telephone">Telephone</label>
          <input type="text" id="telephone" placeholder="Entrer le telephone" required>
        </div>
        <div>
            <label for="sexe">Sexe</label>
            <select name="sexe" id="sexe" class="input-group select">
                <option value="masculin">Masculin</option>
                <option value="feminin">Feminin</option>
            </select>
        </div>
        <div class="date-input-container">
          <label for="casier_judiciaire">Date de Naissance</label>
          <input type="date" id="date_naissance" placeholder="MM/DD/YYYY" required>
          <i class="fa-solid fa-calendar-day"></i>
        </div>
        <div>
          <label for="visite_medicale">Lieu de Naissance</label>
          <input type="text" id="lieu_naissance" placeholder="Entrer le lieu de naissance" required>
        </div>
        <div>
            <label for="visite_medicale">Ṇ̣° CNI</label>
            <input type="text" id="lieu_naissance" placeholder="Entrer le numero de votre carte d'identité" required>
          </div>
      </div>
    </div>
    <br>
    <div class="section">
      <div class="btn-container">
        <a href="#popup2" class="btn" class="btn underline">Suivant</a>
      </div>
    </div>
  </form>
</div>



<div id="popup2" class="modal">

    <!-- Contenu du Modal -->
    <form action="" method="post" class="modal-content">
      <div class="head">
      <a href="#" class="close">×</a>
      <h2>Nouvel Apprenant</h2>
  </div>
      <div class="section informations-perso">
        <div class="line flex">
          <span><i class="fa-solid fa-pen"></i></span>
          <span>Informations Perso.</span>
          <span></span>
          <span><i class="fa-solid fa-2"></i></span>
          <span>Informations Supplémentaires</span>
        </div>
        <div class="input-group">
          <div>
            <label for="nom_tuteur">Nom et Prénom tuteur</label>
            <input type="text" id="nom_tuteur" placeholder="Nom & Prénom tuteur" required>
          </div>
          <div>
            <label for="contact_tuteur">Contact Tuteur</label>
            <input type="text" id="contact_tuteur" placeholder="Contact Tuteur" required>
          </div>
          <div>
            <label for="photocopie_cni">Photocopie CNI</label>
            <input type="file" id="photocopie_cni" placeholder="Photocopie CNI" required>
          </div>
          <div>
            <label for="extrait_naissance">Extrait de naissance</label>
            <input  type="file" id="extrait_naissance" placeholder="Extrait de naissance" required>
          </div>
          <div>
            <label for="diplome">Diplôme</label>
            <input  type="file" id="diplome" placeholder="Diplôme">
          </div>
          <div>
            <label for="casier_judiciaire">Casier Judiciaire</label>
            <input type="file" id="casier_judiciaire" placeholder="Casier Judiciaire" required>
          </div>
          <div>
            <label for="visite_medicale">Visite Médicale</label>
            <input type="file" id="visite_medicale" placeholder="Visite Médicale" required>
          </div>
        </div>
      </div>
      <br>
      <div class="section">
        <div class="btn-container">
          <a href="#" class="btn underline-none cancel-btn " > X  Annuler</a>
          <a href="#" type="submit" class="btn underline">+  Créer nouvel apprenant</a>
        </div>
      </div>
    </form>
  
  </div>




<div class="excel" id="insert">
  <div class="popup">
    <div class="popup-header">Choisir un Fichier Excel</div>
    <div class="upload">
    <div class="chose-file"><input type="file" class="hidden-input" id="fileInput" accept=".xlsx, .xls, .ods" hidden>
      <label for="fileInput" class="drop-zone">
        <span class="drop-zone-text">Drop file here or click to upload</span>
      </label></div>
    </div>
    <div class="footer-btns">
      <a href="#" class="btn btn-red">Fermer</a>
      <button type="submit" form="formExcel" class="btn btn-green">Enregistrer</button>
    </div>
  </div>
</div>