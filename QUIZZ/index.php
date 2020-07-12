<?php
    define("WEBROOT","https://localhost/JEU_QUIZZ/QUIZZ");
    define("ACTION","action");
    require_once("./processing/traitement.php");
    require_once("./data/bd.php");

    if(isset($_GET[ACTION])){
        if($_GET[ACTION]=='connexion'){
            pageConnexion($_POST);
        
        }else if($_GET[ACTION] =='inscription'){
               
            //Vue Incription Joueur
        require_once ('./views/joueur/inscription.php');

    }

    else if($_GET[ACTION]=="admin"){

        //Appel des Vues Admin
        //Avant d'appeler une vue admin on verifie que l'amin est connecté

        if(is_connect()){

                //Appel des Pages Admin
            if(isset($_GET["page"])){
                if($_GET["page"]=="showJoueur"){
                    //Chargement de la liste des Joueurs
                    require_once './views/admin/listeJoueurs.php';
                }elseif($_GET["page"]=="addQuestion"){
                    //Chargement de la Vue qui permet d'ajouter des Questions
                    require_once './views/admin/creerQuestions.php';
                }
            }else{
                //Vue Admin charger par défaut
                require_once './views/accueil.php';
            }
    }else{
             //Page de Connexion
             require_once './views/template.php'; 
        }

    }elseif($_GET[ACTION]=="joueur"){
        if(is_connect()){
            require_once './views/joueur/joueur.php';
        }

    }elseif($_GET[ACTION]=="deconnexion"){
         //Traitement de Deconnexion
         deconnection();
    }

        }
        else
        {
      require_once ('./views/template.php') ;
}
    

?>