<!doctype html>
<html lang="en">
  <head>
    <title>QUIZZ</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/style/quizz.css">
    <link rel="stylesheet" href="./public/style/accueil.css">
  </head>
  <body>
    <div class="container">

        <div class="container-header">
            <div class="header-logo1"></div>
            <div class="header-logo2"></div>
            <div class="header-text">
                <div class="titre1">BIENVENUE SUR LA PLATEFORME DE JEU QUIZZ</div>
                <div class="titre2"><em>LE PLAISIR DE JOUER!</em></div>
            </div>
        </div>

        <div id="container-body" class="container-body">
            <?php

              require_once("./views/connexion.php");
               
            ?>
        </div>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="./public/js/script.js" ></script>
  </body>
</html>