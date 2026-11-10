<?php
/* Photos 2 et 3 du carousel */
$photos = [
    ['fichier' => 'images/doigts-sorciere-2.jpg', 'alt' => 'Doigts de sorcière verts dans un chaudron noir', 'legende' => 'Version verte, dans un chaudron'],
    ['fichier' => 'images/doigts-sorciere-3.jpg', 'alt' => 'Doigt de sorcière plongé dans un bol de soupe orange', 'legende' => 'Idée de présentation : avec une soupe'],
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Recette des biscuits doigts de sorcière pour Halloween.">
    <title>Doigts de sorcière - Recettes maudites</title>
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
            <h1>Doigts de sorcière</h1>
            <p class="infos-recette">Dessert · 40 min · 20 biscuits · Facile</p>

            <!-- Galerie -->
            <section class="galerie">
                <h2>Galerie</h2>
                <div id="carousel-doigts" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <!-- 1re photo -->
                        <div class="carousel-item active">
                            <img src="images/doigts-sorciere-1.jpg" alt="Assiette de biscuits doigts de sorcière avec des ongles en amande">
                            <div class="carousel-caption">
                                <p>Ongles en amande et « sang »</p>
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
                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel-doigts" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Précédent</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel-doigts" data-bs-slide="next">
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
                            <li>250 g de farine</li>
                            <li>125 g de beurre mou</li>
                            <li>100 g de sucre</li>
                            <li>1 œuf</li>
                            <li>1 sachet de sucre vanillé</li>
                            <li>1 pincée de sel</li>
                            <li>20 amandes entières (pour les ongles)</li>
                            <li>Confiture de framboise (pour le « sang »)</li>
                        </ul>
                    </div>
                </section>
                <section class="col-md-6">
                    <div class="bloc">
                        <h2>Ustensiles</h2>
                        <ul>
                            <li>Un saladier</li>
                            <li>Une spatule</li>
                            <li>Une plaque de cuisson</li>
                            <li>Du papier cuisson</li>
                            <li>Un couteau</li>
                            <li>Un four</li>
                        </ul>
                    </div>
                </section>
            </div>

            <!-- Préparation -->
            <section class="bloc">
                <h2>Préparation</h2>
                <ol>
                    <li>Préchauffez le four à 180 °C.</li>
                    <li>Dans le saladier, mélangez le beurre mou, le sucre et le sucre vanillé.</li>
                    <li>Ajoutez l'œuf, puis la farine et le sel. Mélangez jusqu'à obtenir une boule de pâte.</li>
                    <li>Placez la pâte 20 minutes au réfrigérateur.</li>
                    <li>Prélevez des petits morceaux de pâte et roulez-les en forme de doigts.</li>
                    <li>Enfoncez une amande au bout de chaque doigt pour faire l'ongle et marquez les articulations avec le couteau.</li>
                    <li>Faites cuire 12 à 15 minutes sur la plaque recouverte de papier cuisson.</li>
                    <li>Une fois refroidis, ajoutez un peu de confiture autour des amandes.</li>
                </ol>
            </section>

            <!-- Avis et note -->
            <div class="row g-4">
                <aside class="col-md-8">
                    <div class="bloc commentaire">
                        <h2>Notre avis</h2>
                        <p><em>« Effet garanti à la fête : nos invités n'osaient pas les manger ! »</em></p>
                        <p>- Claudy</p>
                    </div>
                </aside>
                <section class="col-md-4">
                    <div class="bloc note">
                        <h2>Note</h2>
                        <p class="etoiles">★★★★★</p>
                        <p><strong>5 / 5</strong></p>
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