
<div class="container-conn">

    <div class="header-connexion">
        <div class="title"><h3>HELLO, CONNECTEZ-VOUS!</h3></div>
    </div>

    <div id="connexion" class="body-connexion">
    
       <form id="form-connexion" action="index.php?action=connexion" method="post">

                <div id="error" class="alert alert-danger" role="alert">
                    <strong>Login ou Mot de Passe Incorrect</strong>
                </div>

                <div class="form-group">
                    <label for="log">Login</label>
                    <input type="text" id="log" name="login" value="" class="col-md-7 form-control">
                </div>  

                <br>

                <div class="form-group">
                    <label for="pwd">Password</label>
                    <input type="password" id="pwd" name="password" value="" class="col-md-7 form-control">
                </div> 

                <br>

                <div class="form-group">
                    <input type="submit" name="envoie" id="bouton" value="Connexion" class="btn btn-primary">
                    <a id="inscription" href="#" class="text-secondary pl-5">S'inscrire pour jouer</a>
                </div>  
        </form>
    </div>
</div>

