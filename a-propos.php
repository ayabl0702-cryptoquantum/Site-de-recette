<?php
$titre_page = "À propos - Marée Gourmande";
$page_active = "a-propos";
include_once "includes/header.php";
?>

<main>

    <section class="hero hero-apropos">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <p class="petit-titre">À propos</p>
                    <h1>Notre passion,<br>les <span class="orange">produits de la mer</span></h1>
                    <p class="texte-hero">
                        Marée Gourmande est né d'une simple envie : partager des recettes de la mer,
                        faciles à réaliser, savoureuses et pleines de fraîcheur.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="univers">
        <img src="img/deco-coquillage.png" alt="" class="deco deco-haut-gauche">
        <img src="img/deco-algue.png" alt="" class="deco deco-bas-droite">

        <div class="container">
            <div class="row aligne-centre g-4">

                <div class="col-lg-7">
                    <p class="petit-titre">Notre histoire</p>
                    <h2>Une envie de <span class="orange">partager</span></h2>
                    <p>
                        Nous croyons qu'une bonne cuisine n'a pas besoin d'être compliquée.
                        Avec des produits de la mer frais et de qualité, chacun peut préparer
                        des plats savoureux à la maison.
                    </p>
                    <p>
                        À travers ce site, nous partageons nos recettes préférées, avec l'envie
                        de faire découvrir une cuisine saine, gourmande et conviviale,
                        inspirée par la mer et ses richesses.
                    </p>
                </div>

                <div class="col-lg-5">
                    <figure>
                        <img src="img/restaurant.png" alt="Salle du restaurant Marée Gourmande" class="photo-carte">
                        <figcaption>L'ambiance Marée Gourmande</figcaption>
                    </figure>
                </div>

            </div>
        </div>
    </section>

    <section class="fond-bleu">
        <div class="container">
            <h2 class="centre">Notre équipe</h2>
            <div class="row g-4">

                <div class="col-md-4">
                    <article class="carte centre">
                        <h3>Kaan Kokes</h3>
                        <p>Étudiant ESGI, groupe 3</p>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="carte centre">
                        <h3>Thiziri Yanes</h3>
                        <p>Étudiante ESGI, groupe 3</p>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="carte centre">
                        <h3>Aya Ballout</h3>
                        <p>Étudiante ESGI, groupe 3</p>
                    </article>
                </div>

            </div>
        </div>
    </section>

</main>

<?php include_once "includes/footer.php"; ?>
