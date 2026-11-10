<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Toutes les recettes d'Halloween de Recettes maudites.">
    <title>Nos recettes - Recettes maudites</title>
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

        <section>
            <h1>Toutes nos recettes</h1>
            <p>Entrées, plats ou desserts : de quoi préparer un vrai festin d'Halloween.</p>
        </section>

        <!-- Cartes des recettes -->
        <section class="section">
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <article class="carte-recette">
                        <img src="images/soupe-potiron-1.jpg" alt="Bols de soupe de potiron">
                        <div class="carte-contenu">
                            <h2>Soupe de potiron</h2>
                            <p>Une soupe veloutée et réconfortante, parfaite pour commencer le repas.</p>
                            <ul class="infos">
                                <li>Entrée</li>
                                <li>45 min</li>
                                <li>Facile</li>
                            </ul>
                            <p class="etoiles">Note : 4 / 5</p>
                            <a href="soupe-potiron.php" class="bouton">Voir la recette</a>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <article class="carte-recette">
                        <img src="images/doigts-sorciere-1.jpg" alt="Biscuits doigts de sorcière">
                        <div class="carte-contenu">
                            <h2>Doigts de sorcière</h2>
                            <p>Des biscuits sablés effrayants, avec un ongle en amande et un peu de « sang ».</p>
                            <ul class="infos">
                                <li>Dessert</li>
                                <li>40 min</li>
                                <li>Facile</li>
                            </ul>
                            <p class="etoiles">Note : 5 / 5</p>
                            <a href="doigts-sorciere.php" class="bouton">Voir la recette</a>
                        </div>
                    </article>
                </div>
            </div>
        </section>

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