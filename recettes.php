<?php
$titre_page = "Nos recettes - Marée Gourmande";
$page_active = "recettes";
include_once "includes/donnees.php";
include_once "includes/header.php";
?>

<main class="fond-bleu">
    <div class="container">

        <section class="titre-page centre">
            <h1>Nos <span class="orange">recettes</span></h1>
            <p>Découvrez nos recettes de la mer, simples à préparer et pleines de saveurs.</p>
        </section>

        <section>
            <h2 class="cache">Liste des recettes</h2>
            <div class="row g-4">

                <?php foreach ($recettes as $recette) { ?>
                <div class="col-lg-6">
                    <article class="carte">
                        <div class="row g-3">

                            <div class="col-sm-5">
                                <img src="<?php echo $recette["images"][0]; ?>" alt="<?php echo $recette["titre"]; ?>" class="photo-carte">
                            </div>

                            <div class="col-sm-7">
                                <h3><?php echo $recette["titre"]; ?></h3>
                                <p><?php echo $recette["description"]; ?></p>
                                <ul class="infos">
                                    <li>Préparation : <strong><?php echo $recette["preparation"]; ?></strong></li>
                                    <li>Cuisson : <strong><?php echo $recette["cuisson"]; ?></strong></li>
                                    <li>Difficulté : <strong><?php echo $recette["difficulte"]; ?></strong></li>
                                </ul>
                                <a href="<?php echo $recette["lien"]; ?>" class="bouton">Voir la recette →</a>
                            </div>

                        </div>
                    </article>
                </div>
                <?php } ?>

            </div>
        </section>

    </div>
</main>

<?php include_once "includes/footer.php"; ?>
