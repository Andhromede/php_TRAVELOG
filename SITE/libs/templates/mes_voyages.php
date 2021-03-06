<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Mes voyages</title>
    <link href="https://fonts.googleapis.com/css2?family=Halant&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="../css/mes_voyages.css">

</head>

<body>
    <div class="container-fluid">

        <!-- RESULTATS FILTRES VOYAGES -->
        <div class="row">
            <?php include ("navbar.php")?>
        </div>

        <div class="row">
            <?php include ("menulat.php")?>
            <h1 class="titre_mesvoyages">Les voyages de <strong>Utilisateur</strong></h1>

            <p class="rsvoyages">XX voyages - XX continents visités - XX pays visités</p>

            <div class="row">
                <!-- Profil / Suivre / Contacter -->


                <div class="encadrevoyage">
                    <img src="../../../images/photos/photo_profil_detail_voyage.jpg" class="photoprofilrond" />
                    <a href="detail_voyage.php" class="">
                        Voir le profil
                    </a>
                    <a href="detail_voyage.php" class="">
                        Le suivre
                    </a>
                    <a href="detail_voyage.php" class="">
                        Le contacter
                    </a>
                </div>
            </div>

        </div>

        <div class="row">
            <!-- MON VOYAGE 1 -->
            <img src="../../../images/photos/photo_profil_detail_voyage.jpg" class="photoprofil1 ghost" />
            <h1 class="titrevoyage1">Titre</h1>
            <img src="../../../images/photos/trevi.jpg" class="photovoyage1" />
            <div class="encadrevoyage1">
                <p class="textevoyage1">
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla."
                </p>
                <a href="detail_voyage.php" class="lienvoyage1">
                    Découvrir ce voyage
                </a>
            </div>
        </div>

        <!-- MON VOYAGE 2 -->
        <div class="row">
            <img src="../../../images/photos/photo_profil_detail_voyage.jpg" class="photoprofil2 ghost" />
            <h1 class="titrevoyage2">Titre</h1>
            <img src="../../../images/photos/beijing_temple_du_ciel.jpg" class="photovoyage2" />
            <div class="encadrevoyage2">
                <p class="textevoyage2">
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla."
                </p>
                <a href="" class="lienvoyage2">
                    Découvrir ce voyage
                </a>
            </div>
        </div>

        <!-- MON VOYAGE 3 -->
        <div class="row">
            <img src="../../../images/photos/photo_profil_detail_voyage.jpg" class="photoprofil3 ghost" />
            <h1 class="titrevoyage3">Titre</h1>
            <img src="../../../images/photos/st_petersburg_russia.jpg" class="photovoyage3" />
            <div class="encadrevoyage3">
                <p class="textevoyage3">
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla."
                </p>
                <a href="" class="lienvoyage3">
                    Découvrir ce voyage
                </a>
            </div>
        </div>

        <!-- VOYAGE 4 -->
        <div class="row">
            <img src="../../../images/photos/photo_profil_detail_voyage.jpg" class="photoprofil4 ghost" />
            <h1 class="titrevoyage4">Titre</h1>
            <img src="../../../images/photos/palais_gyeongbok.jpg" class="photovoyage4" />
            <div class="encadrevoyage4">
                <p class="textevoyage4">
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla."
                </p>
                <a href="" class="lienvoyage4">
                    Découvrir ce voyage
                </a>
            </div>
        </div>

        <!-- PAGES -->
        <div class="row">
            <p class="pages">
                < 1 2 ... 4>
            </p>
        </div>

        <?php include ("footer.php")?>

    </div>

</body>

</html>