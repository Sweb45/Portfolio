<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mon Header avec Bootstrap</title>
  <!-- Chargement de Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- Chargement de notre propre feuille de style -->
  <link rel="stylesheet" href="assets/css/header.css">
</head>
<header>
  <div class="container">
    <div class="row">
    <div class="col-sm-4">
  <div class="logo">
    <a href="index.php?uc=profil"><img src="images/logo.png" alt="Votre logo"></a>
  </div>
</div>

      <div class="col-sm-8">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li><a  href="index.php?uc=accueil">Accueil</a></li>
            <li><a href="index.php?uc=profil">Profil</a></li>
            <li><a href="index.php?uc=situation">Situations professionnelles</a></li>
            <li><a href="index.php?uc=veille">Veilles technologiques</a></li>
            <li><a href="index.php?uc=contact">Contact</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</header>