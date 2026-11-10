<?php


include_once "includes/donnees.php";
$recette = $recettes[$id];
$photos = $recette["images"];


$message = "";
$note = filter_input(INPUT_POST, "note", FILTER_VALIDATE_INT);
if ($note !== null) {
    $nom = filter_input(INPUT_POST, "nom");
    $commentaire = filter_input(INPUT_POST, "commentaire");

    if (!$nom) {
        $nom = "Anonyme";
    }
    if ($commentaire && $note) {
        $etoiles = "";
        for ($i = 0; $i < $note; $i++) {
            $etoiles = $etoiles . "★";
        }
        $message = "Merci " . htmlspecialchars($nom) . " ! Note : " . $etoiles
                 . " - « " . htmlspecialchars($commentaire) . " »";
    } else {
        $message = "Merci d'écrire un commentaire et de choisir une note.";
    }
}

$titre_page = $recette["titre"] . " - Marée Gourmande";
$page_active = "recettes";
include_once "includes/header.php";
?>

<main class="fond-bleu">
    <div class="container">

        <!-- Titre + carousel -->
        <section class="row g-4 aligne-centre entete-recette">

            <div class="col-lg-6">
                <h1><?php echo $recette["titre"]; ?></h1>
                <p><?php echo $recette["description"]; ?></p>
                <ul class="infos">
                    <li>Préparation : <strong><?php echo $recette["preparation"]; ?></strong></li>
                    <li>Cuisson : <strong><?php echo $recette["cuisson"]; ?></strong></li>
                    <li>Difficulté : <strong><?php echo $recette["difficulte"]; ?></strong></li>
                </ul>
            </div>

            <div class="col-lg-6">
                <!-- Carousel Bootstrap : une diapositive par image du tableau -->
                <div id="carousel-recette" class="carousel slide">

                    <div class="carousel-inner">
                        <?php for ($i = 0; $i < count($photos); $i++) {
                            $classe = "carousel-item";
                            if ($i == 0) {
                                $classe = "carousel-item active";
                            }
                        ?>
                        <div class="<?php echo $classe; ?>">
                            <img src="<?php echo $photos[$i]; ?>" class="photo-diapo" alt="<?php echo $recette["titre"]; ?> - photo <?php echo $i + 1; ?>">
                        </div>
                        <?php } ?>
                    </div>

                    <?php if (count($photos) > 1) { ?>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel-recette" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="cache">Précédent</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel-recette" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="cache">Suivant</span>
                    </button>
                    <?php } ?>

                </div>
            </div>

        </section>

        <!-- Ingrédients + ustensiles -->
        <div class="row g-4">

            <section class="col-lg-6">
                <div class="carte">
                    <h2>Ingrédients <small>(pour <?php echo $recette["personnes"]; ?> personnes)</small></h2>
                    <ul>
                        <?php foreach ($recette["ingredients"] as $ingredient) { ?>
                        <li><?php echo $ingredient; ?></li>
                        <?php } ?>
                    </ul>
                </div>
            </section>

            <section class="col-lg-6">
                <div class="carte">
                    <h2>Ustensiles</h2>
                    <ul>
                        <?php foreach ($recette["ustensiles"] as $ustensile) { ?>
                        <li><?php echo $ustensile; ?></li>
                        <?php } ?>
                    </ul>
                </div>
            </section>

        </div>

        <!-- Préparation -->
        <section class="carte">
            <h2>Préparation</h2>
            <ol>
                <?php foreach ($recette["etapes"] as $etape) { ?>
                <li>
                    <h3><?php echo $etape["titre"]; ?></h3>
                    <p><?php echo $etape["texte"]; ?></p>
                </li>
                <?php } ?>
            </ol>
        </section>

        <!-- Commentaire + note -->
        <section class="carte" id="avis">
            <h2>Laisser un commentaire et une note</h2>

            <?php if ($message != "") { ?>
            <p class="message"><?php echo $message; ?></p>
            <?php } ?>

            <form method="post" action="<?php echo $recette["lien"]; ?>#avis">
                <p>
                    <label for="nom">Votre nom</label>
                    <input type="text" id="nom" name="nom">
                </p>
                <p>
                    <label for="commentaire">Votre commentaire</label>
                    <textarea id="commentaire" name="commentaire" rows="3"></textarea>
                </p>
                <p>
                    <label for="note">Votre note</label>
                    <select id="note" name="note">
                        <option value="5">★★★★★ (5/5)</option>
                        <option value="4">★★★★ (4/5)</option>
                        <option value="3">★★★ (3/5)</option>
                        <option value="2">★★ (2/5)</option>
                        <option value="1">★ (1/5)</option>
                    </select>
                </p>
                <button type="submit" class="bouton">Publier</button>
            </form>
        </section>

    </div>
</main>

<?php include_once "includes/footer.php"; ?>
