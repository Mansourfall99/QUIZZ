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
      .right-deux p{
        font-size: 23px;
        margin: 14px 0px 0px 31px;
      }
      .left-trois p{
margin-left: 10px;
      }

      </style>
      <form class="container mt-1 " style="background-color:#f8fdfd; width:1600px;" >
        <div style="background-color: #51bfd0; height: 80px;padding-top: 5px; width: 1150px; margin: 0px -25px 0px -15px; display: flex;align-items: center;">
        <p style="color: #f8fdfd; margin: 10px 118px 0px 407px ; font-size: 28px;"> Créez et Paramétrez vos Quizz </p>
        <a name="c" type="submit" class="btn col-2 ml-5 pt-2" href="connection.html" style=" width:200px; background-color:#3addd6 ; color: #f8fdfd;margin: 10px 7px 0px 0px" role="button">Deconnexion</a>
        </div>
        <div class="containterbottom" style="display: flex;flex-direction: row;">
        <div class="container left" style="width: 400px; height: 450px;border-radius: 10px; border: solid #184736 1px;margin: 55px 30px 0px -12px;">
           <div style="height: 150px;background-color:#3addd6 ;width: 398px;margin: 0px 7px 0px -15px ;padding-left: 20px;padding-top: 7px;border-radius: 10px;">
            <div class="rounded-circle"  style="width: 120px; height: 120px;border: solid #184736 2px;">

            <div class="left-deux" style="margin: 9px 0px 0px 8px;">
                <img src="avatar.png" class="rounded-circle" style="border:solid white 1px ;height: 100px; width: 100px; ;">
                <h4 style="margin: -65px 0px 0px 134px"> NOM  PRENOM </h4>
            </div>
        </div>
           </div>
           <div class="left-trois" style="margin: 13px 0px 0px -3px;">
            <div style="height: 60px; width: auto; border: solid white 3px;">
               
            <p style="font-size: 22px;;">Liste Questions</p>
            <img src="ic-liste.png" style=" margin: -107px -18px -26px 323px;height: 25px;width: 25px;">
            </div>
            <div style="height: 60px; width: auto; border: solid white 3px; display: flex; flex-direction: column;">
            
                <p style="font-size: 22px;">Créer Admin</p>
                <img src="ic-ajout.png" style=" margin: -43px -18px -26px 323px;height: 25px;width: 25px;">
            </div>
            <div style="height: 60px; width: auto; border: solid white 3px;">

                <p style="font-size: 22px;">Liste Joueurs</p>
                <img src="ic-liste.png" style=" margin: -90px -18px -26px 323px;height: 25px;width: 25px;">
            </div>
            <div style="height:60px; width:auto; border: solid white 3px;">
               
                <a style="font-size: 23px;margin-top: 2px" href="#">Créer Questions</a>
                <img src="ic-ajout-active.png" style=" margin: -104px -18px -26px 323px;height: 25px;width: 25px;">
            </div>
           </div>
        </div>
        
             
          <div class="container right" style="width: 650px; height:auto; display:flex;flex-direction:column; margin-top:21px">
            <h3 style="color: #51bfd0;">PARAMETRER VOTRE QUESTION  </h3>
            <div class="right-one" style="display: flex; align-content: center; ">
                
                
            </div>
            <div class="right-deux" style="border:solid 1px #3addd6; height: auto;border-radius: 10px; padding-top: 10px;">
              <div style="display: flex; margin-bottom: 20px;">
       <p >Questions </p>
          <input type="email" class="form-control  ml-2 pt-2 " style="border:solid 1px #3addd6; height: 80px; width:450px;margin-top:10px;" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div style="display: flex;margin-bottom: 20px;">
                <p>Nbre de Points </p>
               
                <select type="email" class="form-control  ml-2 pt-2 " style="border:solid 1px #3addd6;height: 40px; width:80px;margin-top:10px;" id="exampleInputEmail1" aria-describedby="emailHelp">
                </select>
                </div>
              <div style="display: flex;margin-bottom: 20px;">
                <p>Type de Reponse </p>
                <select type="email" class="form-control  ml-2 pt-2 " style="border:solid 1px #3addd6;height: 40px; width:300px;margin-top:10px;margin-right: 5px;"  id="exampleInputEmail1" aria-describedby="emailHelp">
                </select>
               <img src="ic-ajout-réponse.png" height="40px" width="40px" style="margin-top: 10px;">
              </div>
              <div style="display: flex;margin-bottom: 20px;">
                <p>Reponse 1 </p>
                <input type="email" class="form-control  ml-2 pt-2 " style="border:solid 1px #3addd6;height: 40px; width:350px;margin-top:10px;"  id="exampleInputEmail1" aria-describedby="emailHelp">
                <input type="email" class="form-control  ml-2 pt-2 " style="height: 30px; width:30px;margin-top:10px;"  id="exampleInputEmail1" aria-describedby="emailHelp">
                <input type="email" class="form-control  ml-2 pt-2 " style="height: 30px; width:30px;margin-top:10px; border-radius: 20px;"  id="exampleInputEmail1" aria-describedby="emailHelp">
                <img src="ic-supprimer.png" width="20px" height="20px" style="margin: 21px 0px 0px 6px;">
              </div>
              <button type="submit" class="btn   pt-2" style=" width:100px;height:40px ; background-color:#3addd6 ; color: #f8fdfd;margin: 160px 7px 9px 500px" > Enregistrer </button>
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