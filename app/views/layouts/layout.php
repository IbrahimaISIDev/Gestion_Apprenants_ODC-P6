<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion d'etudiants ODC</title>
    <link rel="stylesheet" href="../public/css/main.css">
    <link rel="stylesheet" href="../public/css/<?= $page ?>.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <input type="checkbox" id="menu_checkbox">
    <?php include_once("../app/views/layouts/header.html.php"); ?>
    <?php include_once("../app/views/layouts/sidebar.html.php"); ?>
    <section class="home-section">
        <?php include_once("../app/views/" . $page . ".html.php"); ?>
    </section>
    <?php include_once("../app/views/layouts/footer.html.php"); ?>
    <?php var_dump($page); ?>
</body>

</html>