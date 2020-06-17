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
      <nav class="navbar navbar-expand-sm navbar-dark " style="height:100px;width: 1349px;margin: -13px 0px 1px -10px;text-align:center;background-color: #042425;" >
      <img src="logo.png" class="img-fluid" style="height:100px; margin-right: 500px;"> 
      <p class="text-center" style="align-items: center;color: #f8fdfd;font-size: 40px;">Le plaisir de jouer</p>
         
      </nav>
      <style> 
      body{
        background:url('./img-bg.jpg') ;
        background-repeat: no-repeat;
        background-size: cover;
        padding: 10px;
      }
      * {
  box-sizing: border-box;
}
.tabs {
  display: flex;
    flex-direction: row;
  justify-content: center;
  flex-wrap: wrap;
  max-width: 700px;
  background: #efefef;
  box-shadow: 0 48px 80px -32px rgba(0,0,0,0.3);
}
.input {
  position: absolute;
  opacity: 0;
}
.label {
  width: 100%;
  padding: 20px 30px;
  background: #e5e5e5;
  cursor: pointer;
  font-weight: bold;
  font-size: 18px;
  color: #3addd6;
  transition: background 0.1s, color 0.1s;
}

.label:hover {
  background: #d8d8d8;
}

.label:active {
  background: #ccc;
}

.input:focus + .label {
  box-shadow: inset 0px 0px 0px 3px #2aa1c0;
  z-index: 1;
}

.input:checked + .label {
  background: #fff;
  color: #818181;
}

@media (min-width: 600px) {
  .label {
    width: auto;
  }
}
.panel {
  display: none;
  padding: 20px 30px 30px;
  background: #fff;
}

@media (min-width: 600px) {
  .panel {
    order: 99;
  }
}

.input:checked + .label + .panel {
  display: block;
}

      </style>
      <form class="container mt-1 " style="background-color:#f8fdfd; width:1600px;" >
      <div style="background-color: #51bfd0; height: 80px;padding-top: 5px; width: 1141px; margin: 0px -25px 0px -15px; display: flex;align-items: center;">
        <div class="left-deux" style="margin: 9px 0px 5px 8px;">
            <img src="avatar.png" class="rounded-circle" style="border:solid white 1px ;height: 58px; width: 58px;margin: 6px 0px 0px 0px; ;">
            <div style="margin: -4px 0px 5px 8px;font-size: 12px; color: #f8fdfd;"> NOM PRENOM </div>
        </div>
        <p style="color: #f8fdfd; margin: 10px 2px 7px 210px ; font-size: 25px ;text-align: center;font-family: bold;"> Bienvenue sur la plateforme de jeu de Quizz    Jouer et tester votre niveau de culture generale</p>
        <a name="c" type="submit" class="btn col-2 ml-5 pt-2" href="connection.html" style=" width:200px; background-color:#3addd6 ; color: #f8fdfd;margin: 10px 7px 0px 0px" role="button">Deconnexion</a>
        </div>
        <div class="containterbottom" style="display: flex;flex-direct;">
       
        <div class="container right" style="width: 700px; height:580px;border-radius: 10px; border: solid #51bfd0 3px;margin:19px 0px 0px 0px;align-content: center;">
            <div class="right-one" style="height: 150px; width: 650px; border:solid 1px #51bfd0 ;margin: 17px 0px 0px 6px; background-color: #e7e8e8;">
                  <div style="margin: 46px 0px 0px 236px;font-family: bold underlined; font-size: 28px;font-style: italic;"> QUESTION 1/5:</div>
                  <div style="margin: 6px 0px 0px 228px;font-family: bold ; font-size: 28px;"> Les langages Web</div>
            </div>
            <div class="right-one" style="height: 45px; width: 55px; border:solid 1px #51bfd0 ;margin: 15px 0px 0px 562px; background-color: #e7e8e8;">
              <div style="font-family:bold ;font-size: 25px;text-align: center;"> 3pts</div>
              
        </div>
        <div style=" margin: 86px 0px 0px 64px;font-size: 35px;">
  
          <ul type="square" > 
            <li >HTML </li>
            <li> R </li>
            <li> JAVA</li>
            </ul>
            <button type="submit" class="btn   pt-2" style="font-family: bold; width:100px;height:50px ; background-color:#818181 ; color: #f8fdfd;margin: 21px 0px 0px 0px" > Precédent </button>
            <button type="submit" class="btn   pt-2" style=" font-family: bold;width:100px;height:50px ; background-color:#3addd6 ; color: #f8fdfd;margin: -102px 7px 0px 458px" > Suivant </button>

             
        </div>
        </div>
        <div style="width: 576px;height: 300px ;border-radius: 10px;margin: 44px -13px 0px 12px;">
          
          
          <div class="tabs">
            <input name="tabs" type="radio" id="tab-1" checked="checked" class="input"/>
            <label for="tab-1" class="label">Top scores</label>
            <div class="panel">
              <table  style="color: #000000;font-size: 28px;">
              <tbody>
                <tr>
                  <td scope="row">Ibou DIATTA</td>
                  
                  <td style="border-bottom:solid 3px  #51bfd0 ;">1022pts</td>
                </tr>
                <tr>
                  <td scope="row">Aly NIANG</td>
                  
                  <td style="border-bottom:solid 3px #3addd6;">963pts</td>
                </tr>
                <tr>
                  <td scope="row">Saliou MBAYE</td>
                  
                  <td style="border-bottom:solid 3px yellow;">877pts</td>
                </tr>
                <tr>
                  <td scope="row">Khady DIOUF</td>
                  
                  <td style="border-bottom:solid 3px #e49216;">875pts</td>
                </tr>
                <tr>
                  <td scope="row">Moussa SOW</td>
                
                  <td style="border-bottom:solid 3px #818181;">870pts</td>
                </tr>
              </tbody>
              </table>
            </div>
          
            <input name="tabs" type="radio" id="tab-2" class="input"/>
            <label for="tab-2" class="label">Mon meilleur score</label>
            <div class="panel">
                      <h2>26 points</h2>
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