<div class="container-admin">

    <div class="header-admin">
        <div class="container-header-acc">
            <div class="titre">CREER ET PARAMETRER VOS QUIZZ</div> 
            <div class="btn">
                <button id="btn_deconnexion">DECONNEXION</button>
            </div>
        </div>
    </div>

    <div class="body-admin">
    <div class="container-left">
        <div class="avatar">
                <div class="avatar-header">
                   
                </div>
            <div class="liste">
                <nav class="nav flex-column py-3">
                    <a class="nav-link" lien="index.php?lien=accueil&page=listQ" href="#">Liste Questions</a><img src="Icônes/ic-liste.png" alt=""><br><br>
                    <a class="nav-link" lien="index.php?lien=accueil&page=add" href="#">Créer Admin</a><img src="Icônes/ic-ajout.png" alt=""></li><br><br>
                    <a class="nav-link" lien="index.php?lien=accueil&page=listJ" href="#">Liste Joueurs</a><img src="Icônes/ic-liste-active.png" alt=""></li><br><br>
                    <a class="nav-link" lien="index.php?lien=accueil&page=addQ" href="#">Créer Questions</a><img src="Icônes/ic-ajout.png" alt=""></li><br><br>
                </nav>
            </div>
        </div>
        </div>
    <div class="container-right">
            <?php
                if(isset($_GET['page'])){
                    $page = $_GET['page'];
                    switch($page){
                        case 'listQ':
                            include("listeQuestions.php");
                        break;
                        case 'add':
                            include("inscription.php");
                        break;
                        case 'listJ':
                            include("listeJoueurs.php");
                        break;
                        case 'addQ':
                            include("creerQuestions.php");
                    }
                }
            ?>
            
    </div>

    </div>
            








</div>