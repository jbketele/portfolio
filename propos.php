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
    <title>JB Kétèle - À propos</title>
    <link rel="icon" type="image/x-icon" href="imgs/my-logo-fr.png">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
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
                background-image: url(imgs/field-with-spikelets-close-up-background-with-wheat-spikelets.jpg);
                background-size: 100vw;
            }

            .propos {
                width: 50vw;
            }

            .propos-content {
                display: flex;
            }
        }

        @media (max-width:767px) {
            body {
                background-color: tan;
            }

            .propos {
                width: 90vw;
            }
        }
    </style>
</head>

<body>
<?php require_once(__DIR__ . '/header.php'); ?>

    <div class="container">
        <h2 class="text-center text-white"
            style="margin-top: 5vh;margin-bottom: 5vh; padding-top: 2vh;padding-bottom: 2vh; backdrop-filter: brightness(0.5)">
            À propos</h2>
        <div class="propos-content">
            <img src="imgs/IMG_4059.JPG" style="width: 50vh; margin-bottom: 2rem;">
            <div class="propos container">
                <h4 class="text-center">JEAN-BAPTISTE KÉTÈLE</h4>
                <p>Après avoir travaillé plusieurs années dans la ferme familiale, je me suis rendu compte que le métier
                    n'était pas fait pour moi. Je me suis donc tourné vers le domaine du numérique qui se développe de
                    jour
                    en jour. J'ai commencé par le marketing digital en obtenant un Titre pro Chargé de communication et
                    webmarketing (Bac +2). Je prépare en ce momment un Titre pro Développeur web et web mobile.</p>
                <p>Par la suite, j'aimerais préparer un autre titre liant webmarketing et développement web : Conception
                    -
                    Design UI.</p>
                <a class="btn btn-primary" href="https://linktr.ee/jbktl">En savoir plus</a>
                <a class="btn btn-danger" href="imgs/CV_UI.pdf" download="CV JB Kétèle.pdf">Télécharger mon CV</a>
            </div>
        </div>

    </div>
    <script src="main.js"></script>
</body>

</html