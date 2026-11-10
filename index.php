<?php
$titre_page = "Marée Gourmande - Recettes de la mer";
$page_active = "accueil";
include_once "includes/header.php";
?>

<main>

    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <p class="petit-titre">Marée Gourmande</p>
                    <h1>Des recettes marines gourmandes et <span class="orange">simples</span></h1>
                    <p class="texte-hero">
                        Découvrez nos recettes de la mer, fraîches, savoureuses et faciles à préparer.
                    </p>
                    <a href="recettes.php" class="bouton">Découvrir nos recettes →</a>
                </div>
            </div>
        </div>
    </section>

    <section class="univers">
        <img src="img/deco-coquillage.png" alt="" class="deco deco-haut-gauche">
        <img src="img/deco-poisson.png" alt="" class="deco deco-haut-droite">
        <img src="img/deco-algue.png" alt="" class="deco deco-bas-gauche">
        <img src="img/deco-algue.png" alt="" class="deco deco-bas-droite">

        <div class="container">
            <div class="row ligne-centree">
                <div class="col-lg-8 centre">
                    <p class="petit-titre">Notre univers</p>
                    <h2>La mer dans votre assiette</h2>
                    <p>
                        Marée Gourmande vous invite à découvrir des recettes à base de poissons
                        et de fruits de mer, faciles à réaliser et pleines de saveurs.
                        Une cuisine généreuse, inspirée par la fraîcheur des produits de la mer.
                    </p>
                    <a href="a-propos.php" class="bouton">En savoir plus →</a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include_once "includes/footer.php"; ?>
