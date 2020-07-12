<?php
/*Connexion à la base de données*/
    function connect_db(){
        $host ="localhost";
        $db = "quizz_sa";
        $user ="root";
        $psswd ="";
        try{
        $conn = new PDO("mysql:host=$host;port=3308;dbname=$db",$user,$psswd);
        return $conn;
        
        }catch(PDOException $pe){
            return 'nieuwoul dh '.$pe->getMessage();
        die();
        }
    }

/*Connexion de l'utilisateur*/
    function getUserConnexion($login,$password){
        try{
            $conndb = connect_db();
            
            $query = $conndb -> query ("SELECT * FROM utilisateurs WHERE Login='$login' and Password = '$password'");

            if($query->rowCount() > 0){
                $user = $query -> fetch(PDO::FETCH_ASSOC);   
                return $user;
            }else{
                return false;
            }
        }catch(PDOException $e){

        exit($e -> getMessage());
        }          
    }


?>