<!-- Pour afficher des erreurs dans votre page de navigation -->
<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Apprenants ODC</title>
</head>

<body>

  <?php

    session_start();

    $Pages = array(
        "app" => "apprenant",
        "dash" => "dashboard",
        "even" => "evenement",
        "pre" => "presence",
        "ref" => "referentiel",
        "vis" => "visiteurs",
        "pro" => "promotion",

    );

    $uri = $_REQUEST['page'];
    include_once("../config/config.php");
    include_once("../data/presence.csv.php");
    include_once("../app/models/presence.php");
    /* include_once(ROOT."/app/models/presence.php"); */
    $date_selected = $_POST['date'] ?? date("d-m-y");
    /* if (isset($_POST['sect'])&&($_POST['sect'] == "filtr")){
    include_once("../app/views/presence.html.php");
} */
    include_once("../app/models/apprenant.php");
    /* include_once(ROOT."/app/models/apprenant.php"); */

    if (isset($uri)) {
        if (array_key_exists($uri, $Pages)) {
            $page = $Pages[$uri];
            include_once("../app/views/layouts/layout.php");
        } else {
            include_once("../app/views/error.html.php");
        }
    } else {
        include_once("../app/views/connexion.html.php");
    }

    ?>

</body>

</html>
