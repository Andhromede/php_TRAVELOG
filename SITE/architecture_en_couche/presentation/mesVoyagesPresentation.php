<?php

    function voyagesHead(){
        echo'<!DOCTYPE html>
        <html lang="fr">
        <head>
            <meta charset="utf-8">
            <title>Mes voyages</title>
            <link href="https://fonts.googleapis.com/css2?family=Halant&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
                  integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
            <link rel="stylesheet" href="../../libs/css/mes_voyages.css">
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        </head>';
    }

    function voyagesHeader(){
        echo'<body>
        <div class="container-fluid">
            <div class="row">';
                include ("navbarCONTROLEUR.php");
            echo'</div>';
    }

    function erreurMesVoyages($errorCode=null, $message){
        if($errorCode && $errorCode == 1049){ // erreur de synthaxe sur la bdd //
            echo 
                "<div class='alert alert-danger text-center'> Ce site est en maintenance. Merci de revenir ultérieurement. </div>";
        } elseif ($errorCode && $errorCode == 1146){ // problème de synthaxe avec une table de la bdd //
            echo 
                "<div class='alert alert-danger text-center'> Erreur de connexion avec la base de données. Merci de réessayer ultérieurement. </div>";
        } elseif ($errorCode && $errorCode == 1045){ // erreur de connexion à la base de données //
            echo 
                "<div class='alert alert-danger text-center'> Erreur avec la base de données. Merci de réessayer ultérieurement. </div>";
        } elseif ($errorCode && $errorCode == 1064){ // erreur de syntaxe de la requête sql //
            echo 
                "<div class='alert alert-danger text-center'> Erreur avec la base de données. Merci de réessayer ultérieurement. </div>";
        } 
    }

    function débutCorpsVisiteur($profil, $info, $nbContinent, $nbPays){
        echo'<div class="col-12">
        <h1 class="titre_mesvoyages">Les voyages de <strong>'. $profil['pseudo'] .'</strong></h1>
        <p class="rsvoyages">'. $info .' voyages - '. $nbContinent .' continents visités - '. $nbPays .' pays visités</p>
        ';
    }

    

    function débutCorpsUtilisateur($info, $nbContinent, $nbPays){
        echo'<div class="col-12">
        <h1 class="titre_mesvoyages">Mes voyages</h1>
        <p class="rsvoyages">'. $info .' voyages - '. $nbContinent .' continents visités - '. $nbPays .' pays visités</p>
        ';
    }

    function tableauEntete(){
        echo
            '<div class="row">
            <table class="table table-sm" id="tableVoyage">
                <thead class="thead" id="enteteTableVoyage">
                    <tr>
                        <th scope="col">TITRE</th>
                        <th scope="col">EN IMAGE</th>
                        <th scope="col">EN BREF</th>
                    </tr>
                </thead>';
    }

    function tableauVoyages($data){
        echo
                '<tbody id="corpsTableVoyage">
                <tr>
                    <td><strong>' . $data["titre"] . '</strong></td>
                    <td><img src="../../img/photos/' . $data["couverture"] . '" class="photosVoyage"/></td>
                    <td>' . $data["resume"] . '</br><a href="../controleur/detail_voyageCONTROLEUR.php?code_voyage=' . $data["code_voyage"] . '&code_etape=' . $data["code_etape"] . '" 
                    id="lienVoyage"><button class="btn" id="btnDetailsVoyage">Découvrir</button>
                    </a></td>';
    }
    function finTableau(){
        echo
            '   </tr>
            </tbody>
        </table>
        </div>
        </div>
    </div>';
    }

    function encadreVisiteur($profil){
        echo'
        <div class="encadrevoyage mb-3">';
            if (isset($profil['photoprofil'])) {
                echo'<img src="data:image/jpeg;base64,'.base64_encode($profil['photoprofil']).'" alt="photo de profil"
                class="photoprofilrond" />';
            }else {
                echo'<img src="../../img/photos/photo_profil_defaut.png" alt="photo de profil"
                class="photoprofilrond" />';
            }
            echo'<a href="../controleur/monProfilControleur.php?pseudo='.$profil["pseudo"].'" class="">
                Voir le profil
            </a>
            <a href="../controleur/controleur_contact_user.php?pseudo='.$profil["pseudo"].'" class="">
                Le contacter
            </a>
        </div>
    </div>';
    }

    function encadreUtilisateur($profil){
        echo'
        <div class="encadrevoyage mb-3">';
            if (isset($profil['photoprofil'])) {
                echo'<img src="data:image/jpeg;base64,'.base64_encode($profil['photoprofil']).'" alt="photo de profil" class="photoprofilrond"/>';
            }else {
                echo'<img src="../../img/photos/photo_profil_defaut.png" alt="photo de profil" class="photoprofilrond" />';
            }
            echo'<a href="../controleur/creation_voyageCONTROLEUR.php" class="">
                Créer un nouveau voyage
            </a>
        </div>
    </div>';
    }

    function nbPages($page, $profil, $nombreDePage, $precedent, $suivant){
        echo'<div class="pagination pagination justify-content-center mt-5">
        <nav aria-label="Page navigation " class="pages">
  <ul class="pagination class="pagination justify-content-center"">';
    // if ($page>1) {
    //     echo'<li class="page-item">
    //   <a class="page-link" href="mesVoyagesControleur.php?pseudo='.$profil['pseudo'].'&page='. $precedent .'" aria-label="Previous">
    //     <span aria-hidden="true">&laquo;</span>
    //     <span class="sr-only">Previous</span>
    //   </a>
    // </li>';
    // }
    for ($page=1; $page<=$nombreDePage;$page++){
    echo'<li class="page-item" id="encadreNoPage"><a class="page-link" id="noPage" href="mesVoyagesControleur.php?pseudo='.$profil['pseudo'].'&page='. $page .'">'. $page .'</a></li>';
    }
    // if($page<$nombreDePage){
    //     echo'<li class="page-item">
    //   <a class="page-link" href="mesVoyagesControleur.php?pseudo='.$profil['pseudo'].'&page='. $suivant .'" aria-label="Next">
    //     <span aria-hidden="true">&raquo;</span>
    //     <span class="sr-only">Next</span>
    //   </a>
    // </li>';
    // }
    echo'</ul>
    </nav>
    </div>';
    }

    function footer(){
        include ("footerCONTROLEUR.php");
    }

    function finPage(){
        echo'</div>
        </body>
        </html>';
    }

    function voyagesDebut(){
        voyagesHead();
        voyagesHeader();
    }

    function afficherVoyagesUtilisateur($data){
        tableauVoyages($data);
    }

    function voyagesFin(){
        footer();
        finPage();
    }

?>