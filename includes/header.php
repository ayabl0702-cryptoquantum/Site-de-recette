<?php

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titre_page; ?></title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@600&family=Nunito+Sans:wght@400;700&family=Playfair+Display:wght@700;800&display=swap" rel="stylesheet">

    <!-- Notre feuille de style (le ?v=time() évite le cache du navigateur) -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
</head>
<body>

<header>
    <nav class="navbar navbar-expand-md">
        <div class="container">

            <a class="navbar-brand logo" href="index.php">
                <img src="img/logo.png" alt="Logo Marée Gourmande">
                <span>
                    <strong>Marée Gourmande</strong>
                    <small>Recettes de la mer</small>
                </span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Afficher le menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav menu-droite">
                    <li class="nav-item">
                        <a class="nav-link <?php echo $page_active == "accueil" ? "active" : ""; ?>" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $page_active == "recettes" ? "active" : ""; ?>" href="recettes.php">Recettes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $page_active == "a-propos" ? "active" : ""; ?>" href="a-propos.php">À propos</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
</header>
