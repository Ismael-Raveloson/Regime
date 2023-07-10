<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/profil.css">
    <link rel="stylesheet" href="assets/fontawesome-5/css/all.css">
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
    <title>Regime</title>
</head>
<body>
    <!-- <header class="navbar">
        <div class="navbar__logo">
            <img src="assets/img/logo_vert.png" alt="" srcset="">
        </div>
        <div class="navbar__list">
            <a href="index.html" class="navbar__list--links">Accueil</a>
            <a href="commande.html" class="navbar__list--links">Commande</a>
            <a href="statistique.html" class="navbar__list--links">Statistique</a>
        </div>
    </header> -->

    <div class="page">
        <div class="page__formulaire">
            <div class="select-dropdown">
                <form action="<?php echo base_url() ?>FrontController/insertProfil" method="post">
                    <p><input type="number" name="poids" id="" placeholder="Poids"></p>
                    <p><input type="number" name="taille" id="" placeholder="Taille"></p>
                    <p>Genre: <select name="genre" id="" value="">
                        <option value="Masculin">Masculin</option>
                        <option value="Feminin">Feminin</option>
                    </select></p>
                    <p>Objectif: <select name="objectif" id="" value="">
                        <?php
                            foreach($category as $row){ ?>
                                <option value="<?php echo $row['idObjectif']; ?>"><?php echo $row['nomObjectif']; ?></option>
                            <?php } ?>
                        
                       
                    </select></p>

                    <button class="changer" type="submit">Valider le profil</button>
                </form>
            </div>
        </div>
    </div>



    <!-- <footer class="footer">
        <div class="footer__info">
            <img src="assets/img/logo.png" alt="" class="footer__info__imaga">
            <p>Sanctus dolor nam justo illum diam. Ea magna sadipscing sadipscing tempor facilisi et at. Ipsum lorem est diam ipsum et aliquyam facilisis sea minim. Elitr rebum tempor rebum consetetur diam duo rebum at dolor tation et est accusam dolor magna feugait sit duo.©Kalivan 2023</p>
            <div class="footer__info__media">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
            </div>
        </div>
        <div class="footer__newsletter">
            <h2>Stay tuned !!</h2>
            <p>Send us your email for more news</p>
            <p><input type="email" name="" id=""> <button>Envoyer</button></p>
        </div>
    </footer> -->



</body>
</html>