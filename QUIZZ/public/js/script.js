
const URL_ROOT="index.php?action";

$(document).ready(function(){
  
    const  $errorMessage=$("#error")
    const $btn_deconnexion = $("#btn_deconnexion");

        $errorMessage.hide()

    /*Validation de la connexion*/
  $('#form-connexion').submit(function(e){
    e.preventDefault();
    const login = $('#log').val();
    const password = $('#pwd').val();
    $form = $('#form-connexion');
    if(login == '' || password == ''){
      alert("Veuillez saisir un login ou un password");
    }else{
      $.ajax({
        url:$form.attr('action'),
        data:$form.serialize(),
        type:'post',
        dataType:'text',
        success: (data) => {
          if(data == 'admin'){
            
          };
        }
      });
      
    }


  })

    //Page d'inscription du Joueur
    $("#inscription").on("click",function(){
        //Chargent de la vue Inscription dans le fichier template.php
      const container=$("#container-body"); 
      container.load(`${URL_ROOT}=inscription`);
  })


  //Ajout d'un utilisateur dans la base de données
    $('#envoi').submit(function(e){
        e.preventDefault();
        $formIns = $("#form-inscrit");
        $formIns.serialize();
        if(prenom ==' ' || nom == ' ' || profil == ' ' || login == ' ' || pwd == ' ' || cpwd == ' '){
          return false;
        }
        if(pwd !== cpwd){
          alert('Veuillez saisir des mots de passe conformes')
        }
          
          $.post(

            url = "http://localhost/JEU_QUIZZ/QUIZZ/data/addUser.php",
            {
              data: $formIns.serialize(),
            },
              function(data){
                if(data == success){
                  window.location.replace("Inscription réussie!")
                }
              }
            )
        
        })


   //Traitement de Déconnexion
   $btn_deconnexion.on("click",()=>{
    $.get(`${URL_ROOT}=deconnexion`, (data, status)=>{
             window.location.replace("index.php")
        });
  })


})



