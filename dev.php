<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-MZH9X7TZ0V"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-MZH9X7TZ0V');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jean-Baptiste Kétèle - Web</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="icon" type="image/x-icon" href="imgs/my-logo-fr.png">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap.min.js">
    <link rel="stylesheet" href="styles.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            border: 0;
            outline: 0;
            font-size: 100%;
            vertical-align: baseline;
            background: transparent;
            box-sizing: border-box;
        }

        html {
            line-height: 1.15;
            /* 1 /
  -webkit-text-size-adjust: 100%; / 2 */
            padding: 0;
            margin: 0;
        }

        body {
            background-image: url(imgs/colorful-farm-fields-from-sunflower-wheat-rye-corn.jpg);
            background-size: 100vw 100vh;
            backdrop-filter: brightness(0.5);
            height: 100vh;
        }
    </style>
</head>

<body>

<?php require_once(__DIR__ . '/header.php'); ?>

    <div class="intro" style="margin-top: 2vh;">
        <div style="position: absolute; margin-left: 2rem;"><a href="realisations.php" class="btn btn-success">Prev</a>
        </div>
        <div>
            <h2 class="text-center text-white">Développement web</h2>
        </div>
        <div class="container row row-cols-1 row-cols-md-4" style="padding-bottom: 5vh;">
            <div class="col cards">
                <div class="container card border-light shadow-lg">
                    <img src="imgs/logo_gites_locavores.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Gites Locavores</h5>
                        <p class="card-text">Projet de site de locations de gites ruraux avec la possibilités de voir
                            les
                            produits locaux
                        </p>
                        <a href="https://github.com/jbketele/gites-locavores" target="_blank"
                            class="btn btn-success">Code
                            source <i class="fa-brands fa-github"></i></a>
                    </div>
                </div>
            </div>

            <div class="col cards">
                <div class="container card border-light shadow-lg">
                    <img src="imgs/my-logo-slogan.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Portfolio</h5>
                        <p class="card-text">Comment je développe ce site portfolio !
                        </p>
                        <a href="https://github.com/jbketele/portfolio" target="_blank" class="btn btn-success">Code
                            source <i class="fa-brands fa-github"></i></a>
                    </div>
                </div>
            </div>

            <div class="col cards">
                <div class="container card border-light shadow-lg">
                    <img src="imgs/selective-focus-shot-several-dices-table.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Jeux - JavaScript</h5>
                        <p class="card-text">Divers jeux en HTML CSS JS
                        </p>
                        <a href="https://github.com/jbketele/jeux" target="_blank" class="btn btn-success">Code
                            source <i class="fa-brands fa-github"></i></a>
                    </div>
                </div>
            </div>

            <div class="col cards">
                <div class="container card border-light shadow-lg">
                    <img src="imgs/JavaScript-logo.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Exercices - JavaScript</h5>
                        <p class="card-text">Divers mini-projets en HTML CSS JS
                        </p>
                        <a href="https://github.com/jbketele/exercices/tree/main/test-js" target="_blank"
                            class="btn btn-success">Code
                            source <i class="fa-brands fa-github"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://kit.fontawesome.com/4f2c3f58c1.js" crossorigin="anonymous"></script>
</body>

</html