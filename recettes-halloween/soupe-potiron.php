<?php
/* Photos 2 et 3 du carousel */
$photos = [
    ['fichier' => 'images/soupe-potiron-2.jpg', 'alt' => "Soupe de potiron décorée d'yeux en fromage frais et olives", 'legende' => 'Version effrayante : des yeux qui flottent'],
    ['fichier' => 'images/soupe-potiron-3.jpg', 'alt' => 'Soupe servie dans une citrouille évidée', 'legende' => 'Servie dans une citrouille'],
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Recette de la soupe de potiron pour Halloween.">
    <title>Soupe de potiron - Recettes maudites</title>
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
                        <li class="nav-item"><a class="nav-link" href="index.php">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link active" href="recettes.php">Recettes</a></li>
                        <li class="nav-item"><a class="nav-link" href="a-propos.php">À propos</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container section">
        <article class="recette">

            <!-- Titre -->
            <h1>Soupe de potiron</h1>
            <p class="infos-recette">Entrée · 45 min · 4 personnes · Facile</p>

            <!-- Galerie -->
            <section class="galerie">
                <h2>Galerie</h2>
                <div id="carousel-soupe" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <!-- 1re photo -->
                        <div class="carousel-item active">
                            <img src="images/soupe-potiron-1.jpg" alt="Deux bols de soupe de potiron décorés d'une toile d'araignée">
                            <div class="carousel-caption">
                                <p>Une toile d'araignée à la crème</p>
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
                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel-soupe" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Précédent</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel-soupe" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Suivant</span>
                    </button>
                </div>
            </section>

            <!-- Ingrédients et ustensiles -->
            <div class="row g-4">
                <section class="col-md-6">
                    <div class="bloc">
                        <h2>Ingrédients</h2>
                        <ul>
                            <li>1 kg de potiron</li>
                            <li>2 pommes de terre</li>
                            <li>1 oignon</li>
                            <li>1 litre de bouillon de légumes</li>
                            <li>20 cl de crème fraîche</li>
                            <li>20 g de beurre</li>
                            <li>1 pincée de noix de muscade</li>
                            <li>Sel et poivre</li>
                        </ul>
                    </div>
                </section>
                <section class="col-md-6">
                    <div class="bloc">
                        <h2>Ustensiles</h2>
                        <ul>
                            <li>Un couteau</li>
                            <li>Une planche à découper</li>
                            <li>Un épluche-légumes</li>
                            <li>Une grande casserole (faitout)</li>
                            <li>Un mixeur plongeant</li>
                            <li>Une louche</li>
                        </ul>
                    </div>
                </section>
            </div>

            <!-- Préparation -->
            <section class="bloc">
                <h2>Préparation</h2>
                <ol>
                    <li>Épluchez le potiron, retirez les graines et coupez la chair en cubes.</li>
                    <li>Épluchez les pommes de terre et l'oignon, puis coupez-les en morceaux.</li>
                    <li>Faites fondre le beurre dans la casserole et faites revenir l'oignon 3 minutes.</li>
                    <li>Ajoutez le potiron et les pommes de terre, puis versez le bouillon.</li>
                    <li>Laissez cuire 25 minutes à feu moyen : les légumes doivent être tendres.</li>
                    <li>Mixez la soupe, ajoutez la crème, la muscade, le sel et le poivre.</li>
                    <li>Pour la toile d'araignée, dessinez une spirale de crème puis tirez des traits du centre vers le bord avec un cure-dent.</li>
                </ol>
            </section>

            <!-- Avis et note -->
            <div class="row g-4">
                <aside class="col-md-8">
                    <div class="bloc commentaire">
                        <h2>Notre avis</h2>
                        <p><em>« Simple, rapide et très douce. Avec sa toile d'araignée, elle fait toujours son effet ! »</em></p>
                        <p>- Illia</p>
                    </div>
                </aside>
                <section class="col-md-4">
                    <div class="bloc note">
                        <h2>Note</h2>
                        <p class="etoiles">★★★★☆</p>
                        <p><strong>4 / 5</strong></p>
                    </div>
                </section>
            </div>

        </article>
    </main>

    <!-- Pied de page -->
    <footer>
        <div class="container">
            <p>&copy; 2026 Recettes maudites - Projet ESGI 1A</p>
            <p>Réalisé par Yoni Coulibaly, Illia Ivanchenko et Claudy LALONG</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>