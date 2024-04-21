<div class="promotions">
	<h2>Référentiels</h2>

</div>


<div class="containe">

	<div class="left">

		<?php
		function referenceActive($Id)
		{
			include '../app/models/referentiel.php';
			$refer = LireRefCSV();
			$data = [];
			foreach ($refer as $recup) {
				if (($recup['Id']) == $Id)
					$data[] = $recup;
			}
			return $data;
		}

		$Id = $_SESSION['promotion'];
		$refer = referenceActive($Id);

		foreach ($refer as $recup) : ?>

			<div class="img">
				<div class="points">
					<ul>
						<div></div>
						<div></div>
						<div></div>
					</ul>
				</div>
				<img src="../public/img/classe.jpg" class="image" alt="">
				<div class="ref">
					<span><?= $recup['promotion'] ?></span> <br>
					<span class="active"><?= $recup['etat'] ?></span>
				</div>
			</div>
		<?php endforeach; ?>

	</div>

	<div class="right">
		<div class="form">
			<h4>Noueau Référentiel</h4>
			<div class="milieu">
				<label>Libelle</label>

				<!-- <i class="fa-regular fa-user"></i> -->
				<input type="text" placeholder="entrer le Libelle">
				<label>Description</label>

				<!-- <i class="fa-regular fa-user"></i> -->
				<input type="text" name="" id="" placeholder="entrer la description">
			</div>
			<button>Enregistrer</button>
		</div>
	</div>

</div>