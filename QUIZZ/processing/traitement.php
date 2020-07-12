<?php
    session_start();
    require_once("./data/bd.php");
    function pageConnexion($post)
    {
        $login=$post['login'];
        $password=$post['password'];

         //Validation des Champs en Php
        $result = getUserConnexion($login, $password);

        if($result !== false)
        {
            $_SESSION['userConnect']=$result;
            if($result['Profil']=='Admin')
                {
                   
                    echo 'admin';
                }
                else
                {
                    echo 'joueur';
                }

        }else{
            echo "error";
        }
    }

   

/*Authentification de l'utilisateur*/    
    function is_connect(){
        if(isset($_SESSION['userConnect'])){
            return true;
        }else{
           return false;
        }
    }

//Destruction de la session de connexion de l'utilisateur
    function deconnection(){
        session_destroy();
        unset( $_SESSION['userConnect']);
         echo "logout";
     }



?>