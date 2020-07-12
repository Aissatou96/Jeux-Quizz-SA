<?php
/*Ajout d'un utilisateur dans la base de données*/

    function addUser($prenom,$nom,$profil,$login,$password)
    {
            $result = 0;
            if(isset($_SESSION['user'])){ //c'est un admin qui ajoute un autre admin
                $profil = 'admin';
            
            }
            else{ //c'est un joueur qui s'inscrit
            $profil = 'joueur';
        
                }
        try{
        $conndb = connect_db();

        $query = $conndb -> prepare("INSERT INTO utilisateurs (Prenom, Nom, Profil, Login, Password) 
        VALUES(:prenom, :nom, :profil, :login, :password)");
                $query->bindParam(':prenom', $prenom);
                $query->bindParam(':nom', $nom);
                $query->bindParam(':profil', $profil);
                $query->bindParam(':login', $login);
                $query->bindParam(':password', $password);
                $query->execute();
                return 1;
        }catch(PDOException $e){
        exit($e -> getMessage());
        }           
    }
?>