<?php
$Id = $_SESSION['promotion'];
$datas = listerpresence($Id);
if (isset($_POST['status']) && $_POST["status"] != "statut") {
    // var_dump($_POST);
    /* $param = $_POST['status'] ?? 'Present'; */
    $status = $_POST['status'];
    /* $reference = $_POST['referent']; */
    if (!empty($status)) {
        $datas = filter($status, $Id);
    }
}

if (isset($_POST['referent'])) {
    // var_dump($_POST);
    /* $param = $_POST['status'] ?? 'Present'; */
    $referentiel = $_POST['referent'];
    /* $reference = $_POST['referent']; */
    if (!empty($referentiel)) {
        $datas = filterreferentiel($referentiel, $datas);
    }
    // $datas = filterreferentiel($referentiel,$listUtilisateur);
}

?>
<div class="promotions">
    <h2>promotions</h2>
    <span>Promos * Création</span>
</div>


<div class="presence">
    <form method="POST" action="" class="recherhe">

        <select name="status" id="etat">
            <option value="statut">statut</option>
            <option value="Present">PRESENT</option>
            <option value="Absent">ABSENT</option>
        </select>


        <select name="referent" id="reference">
            <option value="refdig">Référent Digial</option>
            <option value="devdata">Développement Data</option>
            <option value="devweb">Développement Web/Mobile</option>
            <option value="hackeuse">Hackeuse</option>
            <option value="aws">AWS</option>name="promo"
        </select>

        <!-- <input type="hidden" value="filtr" name="sect"> -->
        <input type="date" name="" id="date">
        <button type="submit" name="rafraichir">Rafraichir</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>matricule</th>
                <th>Prénoms</th>
                <th>Noms</th>
                <th>telephone</th>
                <th>referentiel</th>
                <th>Heure d'arrivée</th>
                <th>Statut</th>
            </tr>
        </thead>
        <tbody>
            <?php
            /* $datas = listPresence(); */

            foreach ($datas as $pres) : ?>
                <tr>
                    <td><?= $pres['Date'] ?></td>
                    <td><?= $pres['matricule'] ?></td>
                    <td><?= $pres['prenoms'] ?></td>
                    <td><?= $pres['nom'] ?></td>
                    <td><?= $pres['telephone'] ?></td>
                    <td><?= $pres['referentiel'] ?></td>
                    <td><?= $pres["Heure d'arrivee"] ?></td>
                    <td><?= $pres['statut'] ?></td>


                </tr>
            <?php endforeach; ?>

            <div class="bas">
                <div class="numero">
                    <span>Item par page:</span>
                    <select name="choix" id="choix">
                        <option> <a href="?filtre=10"> 10 </a> </option>
                        <option> <a href="?filtre=20"> 20 </a> </option>
                        <option> <a href="?filtre=30"> 30 </a> </option>
                    </select>
                </div>

                <div class="pagination">
                    <?php
                    $total_pages = ceil(count($donnees) / $par_page);

                    for ($i = 1; $i <= $total_pages; $i++) : ?>
                        <a href="?page=pre&pagination=<?= $i ?>"><?= $i ?></a>
                    <?php endfor; ?>
                </div>
            </div>
        </tbody>
    </table>


</div>


<!-- <td><input type="checkbox" class="check"></td> -->