<?php
/* Photos 2 et 3 du carousel */
$photos = [
    ['fichier' => 'images/doigts-sorciere-1.jpg', 'alt' => 'Assiette de biscuits doigts de sorcière', 'legende' => 'Doigts de sorcière'],
    ['fichier' => 'images/cupcake-2.jpg', 'alt' => "Cupcakes d'Halloween orange et blanc", 'legende' => "Et plein d'autres douceurs..."],
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Recettes maudites : des recettes d'Halloween effrayantes mais délicieuses.">
    <title>Accueil - Recettes maudites</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

    <!-- Menu -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand logo" href="index.php">Recettes maudites</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Ouvrir le menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="menu">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link active" href="index.php">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link" href="recettes.php">Recettes</a></li>
                        <li class="nav-item"><a class="nav-link" href="a-propos.php">À propos</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>

        <!-- Bannière -->
        <section class="banniere">
            <div class="container">
                <h1>Cuisine de l'au-delà</h1>
                <p>Des recettes effrayantes... mais délicieuses, pour une soirée d'Halloween réussie.</p>
                <a href="recettes.php" class="bouton">Voir les recettes</a>
            </div>
        </section>

        <!-- Carousel -->
        <section class="container section">
            <h2>Nos plus belles créations</h2>
            <div id="carousel-accueil" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- 1re photo -->
                    <div class="carousel-item active">
                        <img src="images/soupe-potiron-1.jpg" alt="Deux bols de soupe de potiron décorés d'une toile d'araignée">
                        <div class="carousel-caption">
                            <p>Soupe de potiron</p>
                        </div>
                    </div>
                    <!-- Autres photos -->
                    <?php foreach ($photos as $photo) { ?>
                        <div class="carousel-item">
                            <img src="<?php echo $photo['fichier']; ?>" alt="<?php echo $photo['alt']; ?>">
                            <div class="carousel-caption">
                                <p><?php echo $photo['legende']; ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel-accueil" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Précédent</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel-accueil" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Suivant</span>
                </button>
            </div>
        </section>

        <!-- Recettes du moment -->
        <section class="container section">
            <h2>Nos recettes du moment</h2>
            <div class="row g-4">
                <div class="col-md-6">
                    <article class="carte-recette">
                        <img src="images/soupe-potiron-1.jpg" alt="Bols de soupe de potiron">
                        <div class="carte-contenu">
                            <h3>Soupe de potiron</h3>
                            <p>Une soupe veloutée et réconfortante, parfaite pour commencer le repas.</p>
                            <a href="soupe-potiron.php" class="bouton">Voir la recette</a>
                        </div>
                    </article>
                </div>
                <div class="col-md-6">
                    <article class="carte-recette">
                        <img src="images/doigts-sorciere-1.jpg" alt="Biscuits doigts de sorcière">
                        <div class="carte-contenu">
                            <h3>Doigts de sorcière</h3>
                            <p>Des biscuits sablés effrayants, avec un ongle en amande et un peu de « sang ».</p>
                            <a href="doigts-sorciere.php" class="bouton">Voir la recette</a>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- Présentation -->
        <section class="container section">
            <h2>Bienvenue dans notre cuisine hantée</h2>
            <p>
                Chaque année, Halloween est l'occasion de cuisiner des plats qui font
                <em>peur</em> mais qui restent <strong>délicieux</strong>. Retrouvez ici
                nos recettes préférées, testées et approuvées par notre équipe.
            </p>
        </section>

    </main>

    <!-- Pied de page -->
    <footer>
        <div class="container">
            <p>&copy; 2026 Recettes maudites - Projet ESGI 1A6</p>
            <p>Réalisé par Yoni Coulibaly, Illia Ivanchenko et Claudy LALONG</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>