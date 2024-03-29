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
    <title>JB Kétèle - Réalisations</title>
    <link rel="icon" type="image/x-icon" href="imgs/my-logo-fr.png">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="bootstrap.min.js">
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

        @media (min-width:767px) {


            body {
                background-image: url(imgs/superbe-photo-epis-grain-champ-ble.jpg);
                background-size: cover;
            }
        }

        @media (max-width:767px) {
            body {
                background-color: burlywood;
            }
        }
    </style>
</head>

<body>
    <section>
    <?php require_once(__DIR__ . '/header.php'); ?>

    </section>
    <h3 class="text-center text-white" style="padding-top: 2vh;padding-bottom: 2vh; backdrop-filter: brightness(0.5)">
        RÉALISATIONS</h3>
    <section class="container">
        <div class="container row row-cols-1 row-cols-md-4" style="padding-bottom: 5vh;">
            <div class="col cards">
                <div class="container card border-light shadow-lg">
                    <img src="imgs/Photos2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Photos</h5>
                        <p class="card-text">Retrouvez toutes mes photos prises en formation ou pendant mes temps libres
                        </p>
                        <a href="photos.php" class="btn btn-success">En savoir plus</a>
                    </div>
                </div>
            </div>

            <div class="col cards">
                <div class="container card border-light shadow-lg">
                    <img src="imgs/video-marketing_2696537.png" class="card-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Vidéos</h5>
                        <p class="card-text">Retrouvez tous mes montages vidéos fait en formation ou en stage</p>
                        <a href="videos.php" class="btn btn-success">En savoir plus</a>
                    </div>
                </div>
            </div>

            <div class="col cards">
                <div class="container card border-light shadow-lg">
                    <img src="imgs/social-media-icons-arranged-row-blue-background.jpg" class="card-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Réseaux sociaux</h5>
                        <p class="card-text">Retrouvez mes différents posts pour les réseaux sociaux pendant mes stages
                        </p>

                        <a href="social-media.php" class="btn btn-success">En savoir plus</a>
                    </div>
                </div>
            </div>

            <div class="col cards">
                <div class="container card border-light shadow-lg">
                    <img src="imgs/close-up-man-writing-code-laptop.jpg" class="card-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Développement web</h5>
                        <p class="card-text">Retrouvez les différents site codés que j'ai codé pendant ma formation
                        </p>

                        <a href="dev.php" class="btn btn-success">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html