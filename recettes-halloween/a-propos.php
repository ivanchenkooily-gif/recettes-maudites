<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Présentation du site Recettes maudites et de son équipe.">
    <title>À propos - Recettes maudites</title>
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
                        <li class="nav-item"><a class="nav-link" href="recettes.php">Recettes</a></li>
                        <li class="nav-item"><a class="nav-link active" href="a-propos.php">À propos</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container section">

        <!-- Présentation -->
        <section>
            <h1>À propos</h1>
            <p>
                <strong>Recettes maudites</strong> est un site de recettes sur le thème
                d'Halloween, réalisé dans le cadre du projet trimestriel de première année
                à l'ESGI. Notre objectif : proposer des recettes <em>réelles</em>, simples à
                réaliser et qui font sensation pendant les fêtes.
            </p>
        </section>

        <!-- Équipe -->
        <section class="section">
            <h2>Notre équipe</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <article class="membre">
                        <img src="images/cupcake-1.jpg" alt="Cupcake chauve-souris">
                        <h3>Yoni Coulibaly</h3>
                        <p>Page d'accueil et page À propos</p>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="membre">
                        <img src="images/cupcake-2.jpg" alt="Cupcake orange et blanc">
                        <h3>Illia Ivanchenko</h3>
                        <p>Recette de la soupe de potiron</p>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="membre">
                        <img src="images/cupcake-3.jpg" alt="Cupcake toile d'araignée">
                        <h3>Claudy LALONG</h3>
                        <p>Recette des doigts de sorcière</p>
                    </article>
                </div>
            </div>
        </section>

        <!-- Contact -->
        <section class="section">
            <h2>Nous contacter</h2>
            <p>Une question ou une recette à partager ? <a href="mailto:contact@recettes-maudites.fr">Écrivez-nous</a>.</p>
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