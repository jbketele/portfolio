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
    <title>JB Kétèle - Contact</title>
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

        @media (min-width:767px) {
            body {
                background-image: url(imgs/AdobeStock_202119788.jpeg);
                background-size: 100vw 100vh;
            }
        }

        @media (max-width:767px) {
            body {
                background-color: peachpuff;
            }
        }
    </style>
</head>

<body>

<?php require_once(__DIR__ . '/header.php'); ?>

<form method="post" action="submit_form.php">
 
<p>
    <label>Nom : <input type="text" name="lastname" /></label>
</p>
<p>
    <label>Prénom : <input type="text" name="firstname" /></label>
</p>
<p>
    <label>Email : <input type="email" name="email" /></label>
</p>

<p>
    <label class="message">Message : <textarea name="message"></textarea></label>
</p>
<p class="envoyer">
    <button type="submit">Envoyer</button>
</p>
 
</form>
    <section>

        <main>
            <div>
                <div class="d-flex justify-content-around" id="connexion">
                    <div>
                        <h3 class="mt-3 text-white text-center" style="backdrop-filter: contrast(0.5);">Formulaire</h3>
                        <form class="contact" name="contact" method="POST" netlify>
                            <p>
                                <label>Nom : <input type="text" name="lastname" /></label>
                            </p>
                            <p>
                                <label>Prénom : <input type="text" name="firstname" /></label>
                            </p>
                            <p>
                                <label>Email : <input type="email" name="email" /></label>
                            </p>

                            <p>
                                <label class="message">Message : <textarea name="message"></textarea></label>
                            </p>
                            <p class="envoyer">
                                <button type="submit">Envoyer</button>
                            </p>
                        </form>


                    </div>
                    <div>
                        <div class="text-white">
                            <h3 class="mt-3 text-center" style="backdrop-filter: contrast(0.5);">Coordonnées</h3>
                            <div class="coordonnees" style="backdrop-filter: brightness(0.5);">
                                <p>06 42 68 76 28</p>
                                <p>jbaptisteketele@gmail.com</p>
                                <p>44 rue du Manoir 14360 Trouville sur mer </p>
                            </div>
                        </div>
                    </div>
                </div>
        </main>

    </section>
</body>

</html