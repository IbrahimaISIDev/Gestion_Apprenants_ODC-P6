<!-- <!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulaire de Connexion</title>
<link rel="stylesheet" href="<?= WEBROOT ?>/public/css/connexion.css">

</head>
<body>
  <div class="tout">

  <div class="container">
    <img class="logo" src="<?= PATHIMG ?>/logo.jpeg" alt="">
    <div class="login-form">
      <div class="first">Email et Mot de Passe Requis</div>
      <label for="email">Adresse Email <span>*</span></label>
      <input type="email" id="email" placeholder="Entrez votre adresse email*" required>
      <label for="password">Mot de Passe <span>*</span></label>
      <input type="password" id="password" placeholder="Entrez votre mot de passe*" required>
    </div>
    <div class="checkbox">
      <label>
        <input type="checkbox" name="remember"> Se souvenir de moi
      </label>
      <a href="#">Mot de passe Oublié?</a>
    </div>
    <button class="btn" type="submit"><a href="?page=dash">Login</a></button>
  </div>
  </div>
</body>
</html> -->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <link rel="stylesheet" href="/public/css/main.css">
  <link rel="stylesheet" href="/public/css/connexion.css">
  <title>Sonatel Academy-Promo 6</title>
</head>

<body>
  <div class="container">
    <img src="/images/Logo-SA.png" alt="Logo de la Sonatel Academy" width="150">

    <form action="">
      <div class="content">
        <p class="message">Email et Mot de Passe Requis</p>
        <div class="input-box">
          <label for="">Email Address</label>
          <span>*</span>
          <input type="text" name="" id="" placeholder="Enter email address*" required>
        </div>
        <div class="input-box">
          <label for="">Password</label>
          <span>*</span>
          <input type="password" name="" id="" placeholder="Enter your password*" required>
          <!-- <span class="eye-slash"> --><i class="las la-eye-slash"></i><!-- </span> -->
        </div>
      </div>
      <span>
        <div class="remember-me">
          <input type="checkbox" name="" id="">
          <p>Remember me</p>
        </div>
        <a href="#" class="password">Mot de passe Oublié?</a>
      </span>
      <div class="btn">
        <a href="/Home-promotion/index.html"><button type="submit">Log In</button></a>

      </div>
    </form>

  </div>
</body>

</html>