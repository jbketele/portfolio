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
    <title>JB Kétèle - Vidéos</title>
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
                background-image: url(imgs/vertical-closeup-shot-sweet-grass-branches-field.jpg);
                background-size: 100vw;
                backdrop-filter: contrast(0.5);
            }
        }

        @media (max-width:767px) {
            body {
                background-color: wheat;
            }
        }
    </style>
</head>

<body>
<?php require_once(__DIR__ . '/header.php'); ?>

    <section class="container">
        <div style="margin-top: 2vh;">
            <div style="position: absolute;"><a href="realisations.php" class="btn btn-success">Prev</a></div>
            <h3 class="text-center">Vidéos</h3>
        </div>
        <div class="video">
            <div class="paille">
                <div class="d-flex justify-content-center"><a
                        href="https://www.concept-bois-jeux.com/fabricant-jeux-en-bois-vente-location" target="_blank"
                        class="video-title btn btn-light">Concept Bois et
                        Jeux</a></div>
                <div class="paille-video">
                    <video controls width="320" height="240" " src=" video/Minotaure 4.mp4"
                        poster="video/minotaure.png"></video>
                    <video controls class="240" height="320" src="video/Recrea billes.mp4"
                        poster="video/recrea_billes.png"></video>
                    <video controls width="320" height="240" src="video/Jo Jack 5.mp4"
                        poster="video/generique jo jack3.jpg"></video>
                </div>
            </div>
            <div class="agrial">
                <div class="d-flex justify-content-center"><a href="https://www.agrial.com/" target="_blank"
                        class="video-title btn btn-success" id="agrial">Agrial</a></div>
                <div class="d-flex justify-content-center">
                    <video controls width="320" height="240" src="video/Tutos_vos_appros.mp4"
                        poster="video/monagrial logo.png"></video>
                </div>
            </div>
            <div class="origen">
                <div class="d-flex justify-content-center"><a href="https://www.origen-normande.com/" target="_blank"
                        class="video-title btn btn-primary" id="agrial">Origen Normande</a></div>
                <div class="d-flex justify-content-center">
                    <video controls width="320" height="240" src="video/Video_SPACE_2022_final__AdobeExpress.mp4"
                        poster="video/origen_normande.png"></video>
                </div>
            </div>

            <div class="AgriMarket">
                <div class="d-flex justify-content-center"><a
                        href="https://www.youtube.com/channel/UCkGqOFKJUpH4UWUP80w8eTQ" target="_blank"
                        class="video-title btn btn-warning mb-3">La chaine AgriMarket</a></div>
                <div class="d-flex justify-content-around flex-wrap">
                    <div><iframe width="320" height="240"
                            src="https://www.youtube.com/embed/yk2QRaA1q1Q?si=Qcu5DqApwCd5yjzs"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe></div>

                    <div><iframe width="320" height="240"
                            src="https://www.youtube.com/embed/sTz3W-XOjjU?si=WiZXMpI7vVS3w8do"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe></div>
                </div>
            </div>
            <br>
        </div>
    </section>
</body>

</html