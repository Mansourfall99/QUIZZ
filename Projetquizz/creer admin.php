<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <nav class="navbar navbar-expand-sm navbar-dark " style="height:100px;text-align:center ; background-color: #042425;" >
      <img src="logo.png" class="img-fluid" style="height:100px; margin-right: 500px;"> 
      <p class="text-center" style="align-items: center;color: #f8fdfd;font-size: 40px;">Le plaisir de jouer</p>
         
      </nav>
      <style> 
      body{
        background:url('./img-bg.jpg') ;
        background-repeat: no-repeat;
        background-size: cover;
      }

      .left-trois p{
          margin-left: 10px;
      }

      </style>
      <form class="container mt-1 " style="background-color:#f8fdfd; width:1600px;" >
        <div style="background-color: #51bfd0; height: 80px;padding-top: 5px; width: 1150px; margin: 0px -25px 0px -15px; display: flex;align-items: center;">
        <p style="color: #f8fdfd; margin: 10px 125px 0px 410px ; font-size: 28px;">Créer et Paramétrer vos Quizz</p>
        <a name="c" type="submit" class="btn col-2 ml-5 pt-2" href="connection.html" style=" width:200px; background-color:#3addd6 ; color: #f8fdfd;margin: 10px 7px 0px 0px" role="button">Deconnexion</a>
        </div>
        <div class="containterbottom" style="display: flex;flex-direction: row;">
        <div class="container left" style="width: 400px; height: 450px;border-radius: 10px; border: solid #184736 1px;margin: 55px 30px 0px -12px;">
           <div style="height: 150px;background-color:#3addd6 ;width: 398px;margin: 0px 7px 0px -15px ;padding-left: 20px;padding-top: 7px;border-radius: 10px;">
            <div class="rounded-circle"  style="width: 120px; height: 120px;border: solid #184736 2px;">

            <div class="left-deux" style="margin: 9px 0px 0px 8px;">
                <img src="avatar.png" class="rounded-circle" style="border:solid white 1px ;height: 100px; width: 100px; ;">
                <h4 style="margin: -65px 0px 0px 134px"> NOM        PRENOM </h4>
            </div>
        </div>
           </div>
           <div class="left-trois" style="margin: 13px 0px 0px -3px;">
            <div style="height: 60px; width: auto; border: solid white 3px;">
            <p style="font-size: 22px;">Liste Questions</p>
            <img src="ic-liste.png" style=" margin: -90px -18px -26px 323px;height: 25px;width: 25px;">
            </div>
            <div style="height: 60px; width: auto; border: solid white 3px; display: flex; flex-direction: column;">
                <div style="width: 5px;height: 60px;background-color:#184736 ; "></div>
                <a style="font-size: 22px;margin-top: -50px; margin-left: 10px;" href="#">Créer Admin</a>
                <img src="ic-ajout-active.png" style=" margin: -29px -18px -26px 323px;height: 25px;width: 25px;">
            </div>
            <div style="height: 60px; width: auto; border: solid white 3px;">

                <p style="font-size: 22px;">Liste Joueurs</p>
                <img src="ic-liste.png" style=" margin: -90px -18px -26px 323px;height: 25px;width: 25px;">
            </div>
            <div style="height:60px; width:auto; border: solid white 3px;">
                <p style="font-size: 22px;">Créer Questions</p>
                <img src="ic-ajout.png" style=" margin: -90px -18px -26px 323px;height: 25px;width: 25px;">
            </div>
           </div>
        </div>
        <div class="container right" style="width: 700px; height:auto;border-radius: 10px; border: solid #818181 1px; display:flex;flex-direction:row;margin-top:21px">
        <div class="right-one">
             
        
            <form class="container mt-5 " style="background-color:#f8fdfd; width:600px;" >
                <h3>S'inscrire</h3>
                <p>Pour proposer des quizz</p>
                <div class="form-group ">
                  <label>Prénom</label>
                  <input type="email" class="form-control  ml-2 pt-2 " style="height: 50px; width:450px" placeholder="Jooo" id="exampleInputEmail1" aria-describedby="emailHelp">
                  
                </div>
                <div class="form-group ">
                    <label>Nom</label>
                  <input type="passwrd" class="form-control  ml-2 pt-2" style="height: 40px; width:450px" placeholder="WWW"  id="exampleInputPassword1">
                
                </div>
                <div class="form-group ">                <label>Login</label>
                    <input type="passwrd" class="form-control  ml-2 pt-2" style="height: 40px; width:450px" placeholder="jow"  id="exampleInputPassword1">
                  
                  </div>
                  <div class="form-group ">
                    <label>Password</label>
                    <input type="passwrd" class="form-control  ml-2 pt-2" style="border-color: #3addd6; height: 40px; width:450px" placeholder="........."  id="exampleInputPassword1">
                  
                  </div>
                  <div class="form-group ">
                    <label>Confirmer Password</label>
                    <input type="password" class="form-control  ml-2 pt-2" style="border-color: #3addd6; height: 40px; width:450px" placeholder=".........."  id="exampleInputPassword1">
                  
                  </div>
                  <a style="margin: 0px 233px 0px 8px">
                    Avatar
                  </a>
                <button type="submit" class="btn col-6 ml-2 pt-2" style=" width:180px; background-color:#3addd6 ;margin: 0px 14px 0px 8px ;color: #f8fdfd;" >Choisir un fichier</button>
                <button type="submit" class="btn col-4 pt-2" style=" width:200px; background-color:#3addd6 ; margin: 0px 233px 0px 82px;color: #f8fdfd;" >Créer compte</button>
              </form>
        </div>
        <div class="right-deux">
            <img src="avatar.png" class="rounded-circle" style="border:solid #3addd6 2px ;height: 150px; width: 150px;">
            <h4> Avatar Admin</h4>
        </div>
        </div>
    </div>
         <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>