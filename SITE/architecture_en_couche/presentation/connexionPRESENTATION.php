<?php

// FONCTION GLOBALE //
function displayPageConnexion(){
    displayTopTagHtml();
    displayHead();
    displayTopTagBody();
    displayTopTagContainer();
    displayHeader();
    displayLeftPolaroid();
    displayConnexionFrame();
    displayRightPolaroid();
    displayBottomTagContainer();
    displayBottomTagBody();
    displayBottomTagHTML();
}


// FONCTIONS EN VRAC //

// affichage de base //
function displayTopTagHtml(){
    echo
        '<!DOCTYPE html>
        <html lang="fr">';
}

function displayHead(){
    echo
        '<head>
            <meta charset="utf-8">

            <link rel="stylesheet" href="../../libs/bootstrap/css/bootstrap.css">
            <link rel="stylesheet" href="../../libs/css/connexion.css">

            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
                
            <link href="https://fonts.googleapis.com/css2?family=Halant&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet"> 
    
            <title>
                Connexion
            </title>
        </head>';
}

function displayTopTagBody(){
    echo
        '<body>';
}

function displayTopTagContainer(){
    echo
        '<div class="container-fluid">';
}

function displayHeader(){
    echo
        '<div class="row">

                <img src="../../img/logo_site/Logo_couleurs.png" class="logotravelog"/>

                <h1 class="nomtravelog">TRAVELOG</h1>

        </div>';
}

function displayLeftPolaroid(){
    echo
        '<div class="row">
            <div class="left-polaroid">
                <div id="left-caroussel" class ="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-interval="750">
                            <img src="../../img/photos/photos_carousels/grece.jpg" alt="left-caroussel slide 1" class="d-block w-100">
                        </div>
                        <div class="carousel-item" data-interval="750">
                            <img src="../../img/photos/photos_carousels/hambourg.jpg" alt="Carrousel slide 2" class="d-block w-100">
                        </div>
                        <div class="carousel-item" data-interval="750">
                            <img src="../../img/photos/photos_carousels/lac.jpg" alt="Carrousel slide 3" class="d-block w-100">
                        </div>
                    </div>
                </div>
            </div>';
}

function displayConnexionFrame(){
    echo
        '<div class="encadreconnexion">
            <div class="introencadreconnexion">
                Pr??t(e) ?? partager</br>
                la suite de vos aventures ?
            </div>

            <form class="formulaireconnexion" action="../controleur/connexionCONTROLEUR.php?action=connexion" method="post">
                <div class="form-group">
                    <input type="text" class="pseudoconnexion form-control" name="pseudo" placeholder="Pseudo"
                           pattern="[a-zA-Z._-]{2,20}" title="20 caract??res maximum (caract??res sp??ciaux autoris??s : _ , - et . )" required>
                </div>
                <div class="form-group">
                    <input type="password" class="motdepasseconnexion form-control" name="password" placeholder="Mot de passe"
                           pattern="(?=^.{8,}$)(?=.*\d)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="8 caract??res minimum dont 1 majuscule, 1 minuscule et 1 chiffre" required>
                </div>
                
                <button type="submit" class="boutonconnexion btn"><strong>CONNEXION</strong></button>
            </form>

            <div class="inscription">
                <strong>Pour s\'inscrire, c\'est par <a href="inscriptionCONTROLEUR.php">ici</a></strong>
            </div>
        </div>';
}

function displayRightPolaroid(){
    echo
        '<div class="right-polaroid">
            <div id="right-caroussel" class ="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-interval="750">
                        <img src="../../img/photos/photos_carousels/japon.jpg" alt="left-caroussel slide 1" class="d-block w-100">
                    </div>
                    <div class="carousel-item" data-interval="750">
                        <img src="../../img/photos/photos_carousels/londres.jpg" alt="Carrousel slide 2" class="d-block w-100">
                    </div>
                    <div class="carousel-item" data-interval="750">
                        <img src="../../img/photos/photos_carousels/venise.jpg" alt="Carrousel slide 3" class="d-block w-100">
                    </div>
                </div>
            </div>
        </div>
    </div>';
}

function displayBottomTagContainer(){
    echo
        '</div>';
}

function displayBottomTagBody(){
    echo
        '</body>';
}

function displayBottomTagHTML(){
    echo
        '</html>';
}


// messages d'erreur //
function displayNotIdem(){
    echo
        '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="text-align:center;font-family:Halant,serif;">
            Le pseudo et/ou le mot de passe est incorrect.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">&times;</button>
        </div>';
}

function erreur ($errorCode=null, $message){
    if($errorCode && $errorCode == 1049){ // erreur de synthaxe sur la bdd //
        echo 
            "<div class='alert alert-danger text-center'> Ce site est en maintenance. Merci de revenir ult??rieurement. </div>";
    } elseif ($errorCode && $errorCode == 1146){ // probl??me de synthaxe avec une table de la bdd //
        echo 
            "<div class='alert alert-danger text-center'> Erreur de connexion avec la base de donn??es. Merci de r??essayer ult??rieurement. </div>";
    } elseif ($errorCode && $errorCode == 1045){ // erreur de connexion ?? la base de donn??es //
        echo 
            "<div class='alert alert-danger text-center'> Erreur avec la base de donn??es. Merci de r??essayer ult??rieurement. </div>";
    } elseif ($errorCode && $errorCode == 1064){ // erreur de syntaxe de la requ??te sql //
        echo 
            "<div class='alert alert-danger text-center'> Erreur avec la base de donn??es. Merci de r??essayer ult??rieurement. </div>";
    } 
}

?>