<?php


$recettes = [

    [
        "titre"       => "Pâtes crémeuses aux crevettes",
        "description" => "Des pâtes onctueuses accompagnées de crevettes sautées, d'ail, de citron et de persil frais. Une recette généreuse et facile à préparer !",
        "preparation" => "15 min",
        "cuisson"     => "10 min",
        "difficulte"  => "Facile",
        "lien"        => "pates.php",
        "personnes"   => 2,
        "images"      => ["img/pates-1.png", "img/pates-2.png", "img/pates-3.png"],
        "ingredients" => [
            "200 g de pâtes (tagliatelles ou linguine)",
            "300 g de crevettes décortiquées",
            "2 gousses d'ail",
            "20 cl de crème fraîche liquide",
            "1 citron (zeste et jus)",
            "10 tomates cerises",
            "Persil frais",
            "2 cuillères à soupe d'huile d'olive",
            "Sel, poivre",
            "Parmesan râpé (optionnel)"
        ],
        "ustensiles"  => ["Casserole", "Poêle", "Passoire", "Planche à découper", "Couteau", "Bol"],
        "etapes"      => [
            ["titre" => "Cuire les pâtes", "texte" => "Faites cuire les pâtes dans une grande casserole d'eau bouillante salée selon le temps indiqué sur le paquet."],
            ["titre" => "Sauter les crevettes", "texte" => "Faites chauffer un peu d'huile d'olive dans une poêle. Ajoutez les crevettes et faites-les cuire 2 à 3 minutes. Salez, poivrez et réservez."],
            ["titre" => "Préparer la sauce", "texte" => "Dans la même poêle, faites revenir l'ail haché quelques minutes avec les tomates cerises coupées en deux."],
            ["titre" => "Ajouter la crème", "texte" => "Versez la crème fraîche, le jus et le zeste de citron. Laissez mijoter 2 minutes."],
            ["titre" => "Mélanger", "texte" => "Ajoutez les crevettes et les pâtes cuites dans la poêle. Mélangez bien et laissez chauffer encore 1 à 2 minutes."],
            ["titre" => "Servir", "texte" => "Parsemez de persil frais et de parmesan râpé selon vos goûts. Servez chaud !"]
        ]
    ],

    [
        "titre"       => "Tacos de poisson croustillant",
        "description" => "Du poisson croustillant, du chou frais, une sauce légère et un filet de citron vert. Une recette colorée et pleine de fraîcheur !",
        "preparation" => "20 min",
        "cuisson"     => "15 min",
        "difficulte"  => "Facile",
        "lien"        => "tacos.php",
        "personnes"   => 2,
        "images"      => ["img/tacos-1.png", "img/tacos-2.png", "img/tacos-3.png"],
        "ingredients" => [
            "2 filets de poisson blanc (cabillaud, colin...)",
            "4 tortillas de maïs ou de blé",
            "1/4 de chou rouge",
            "1/4 de chou blanc",
            "1 tomate",
            "1 avocat (optionnel)",
            "1 citron vert",
            "100 g de yaourt nature ou de mayonnaise",
            "1 gousse d'ail",
            "Coriandre fraîche",
            "Épices (paprika, cumin...)",
            "Huile pour la cuisson"
        ],
        "ustensiles"  => ["Poêle", "Spatule", "Planche à découper", "Couteau", "Bol"],
        "etapes"      => [
            ["titre" => "Préparer le poisson", "texte" => "Coupez les filets de poisson en morceaux. Salez, poivrez et ajoutez les épices (paprika, cumin...)."],
            ["titre" => "Cuire le poisson", "texte" => "Faites chauffer un peu d'huile dans une poêle et faites cuire les morceaux de poisson jusqu'à ce qu'ils soient bien dorés et croustillants (3 à 4 minutes par côté)."],
            ["titre" => "Préparer les légumes", "texte" => "Émincez le chou rouge et le chou blanc. Coupez la tomate en dés et l'avocat en tranches (si vous en utilisez)."],
            ["titre" => "Préparer la sauce", "texte" => "Mélangez le yaourt (ou la mayonnaise) avec l'ail haché, le jus de citron vert, du sel et du poivre."],
            ["titre" => "Assembler les tacos", "texte" => "Réchauffez les tortillas, ajoutez le chou, le poisson croustillant, la tomate, l'avocat et la sauce."],
            ["titre" => "Servir", "texte" => "Parsemez de coriandre fraîche et ajoutez un filet de citron vert. Servez immédiatement !"]
        ]
    ],

    [
        "titre"       => "Saumon grillé et légumes rôtis",
        "description" => "Un pavé de saumon tendre, accompagné de légumes de saison et d'une sauce citronnée. Simple et délicieux !",
        "preparation" => "10 min",
        "cuisson"     => "15 min",
        "difficulte"  => "Facile",
        "lien"        => "saumon.php",
        "personnes"   => 2,
        "images"      => ["img/saumon-1.png", "img/saumon-2.png", "img/saumon-3.png"],
        "ingredients" => [
            "2 pavés de saumon",
            "1 courgette",
            "1 poivron rouge",
            "1 carotte",
            "1 oignon rouge",
            "10 tomates cerises",
            "3 cuillères à soupe d'huile d'olive",
            "1 citron (zeste et jus)",
            "Persil frais",
            "Sel, poivre, herbes de Provence"
        ],
        "ustensiles"  => ["Plaque de four", "Poêle", "Planche à découper", "Couteau", "Bol"],
        "etapes"      => [
            ["titre" => "Préchauffer le four", "texte" => "Préchauffez le four à 220 °C (chaleur tournante)."],
            ["titre" => "Couper les légumes", "texte" => "Coupez la courgette, le poivron, la carotte et l'oignon en petits morceaux. Gardez les tomates cerises entières."],
            ["titre" => "Assaisonner", "texte" => "Déposez les légumes sur une plaque, ajoutez 2 cuillères à soupe d'huile d'olive, du sel, du poivre et des herbes de Provence. Mélangez."],
            ["titre" => "Rôtir les légumes", "texte" => "Enfournez 15 minutes en remuant à mi-cuisson."],
            ["titre" => "Griller le saumon", "texte" => "Faites chauffer le reste d'huile dans une poêle. Cuisez les pavés 4 minutes côté peau, puis 3 minutes de l'autre côté."],
            ["titre" => "Servir", "texte" => "Arrosez le saumon de jus et de zeste de citron, parsemez de persil et servez avec les légumes rôtis."]
        ]
    ],

    [
        "titre"       => "Burger de poisson",
        "description" => "Un burger gourmand avec un filet de poisson croustillant, des légumes frais et une sauce maison.",
        "preparation" => "15 min",
        "cuisson"     => "10 min",
        "difficulte"  => "Facile",
        "lien"        => "burger.php",
        "personnes"   => 2,
        "images"      => ["img/burger-1.png", "img/burger-2.png", "img/burger-3.png"],
        "ingredients" => [
            "2 filets de poisson blanc (cabillaud, colin...)",
            "2 pains à burger",
            "60 g de chapelure",
            "1 œuf",
            "2 cuillères à soupe de farine",
            "Quelques feuilles de salade",
            "1 tomate",
            "1/2 oignon rouge",
            "3 cuillères à soupe de mayonnaise",
            "1 cornichon et 1 filet de citron",
            "Huile pour la cuisson, sel, poivre"
        ],
        "ustensiles"  => ["Poêle", "3 assiettes creuses", "Spatule", "Planche à découper", "Couteau", "Bol"],
        "etapes"      => [
            ["titre" => "Préparer la panure", "texte" => "Préparez trois assiettes : la farine, l'œuf battu avec du sel et du poivre, puis la chapelure."],
            ["titre" => "Paner le poisson", "texte" => "Passez chaque filet dans la farine, puis dans l'œuf, puis dans la chapelure en appuyant bien."],
            ["titre" => "Cuire le poisson", "texte" => "Faites chauffer 3 cuillères à soupe d'huile dans une poêle et faites dorer les filets 4 à 5 minutes de chaque côté."],
            ["titre" => "Préparer la sauce", "texte" => "Mélangez la mayonnaise avec le cornichon haché, un filet de citron et du poivre."],
            ["titre" => "Préparer les légumes", "texte" => "Lavez la salade, coupez la tomate en rondelles et l'oignon rouge en fines lamelles. Faites toaster les pains."],
            ["titre" => "Monter le burger", "texte" => "Étalez la sauce sur le pain, ajoutez la salade, le poisson, la tomate et l'oignon, puis refermez. Servez aussitôt !"]
        ]
    ]

];
