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

      </style>
      <form method="post" class="container mt-5 " style="background-color:#f8fdfd; width:600px; "action="" >
        <div style="background-color: #51bfd0; height: 60px;padding-top: 5px; width: 600px; margin: 0px 0px 40px -15px;">
        <p style="color: #f8fdfd; margin: 10px 30px ; font-size: 22px;"> Login Form </p>
        </div>
        <div class="form-group ">
          
          <input  type="text" class="form-control  ml-2 pt-2 " style="height: 70px; width:500px" name="login"  value="" placeholder="Login" >
          <img src="login.png" style="height:40px; margin: -90px 0px 0px 450px;"> 
        </div>
        <div class="form-group ">
          
          <input type="password" class="form-control  ml-2 pt-2" style="height: 70px; width:500px" name="pwd" value="" placeholder="Passwrd"  id="exampleInputPassword1">
          <img src="passwrd.png"  style="height:40px;margin: -90px 0px 0px 450px;"> 
        </div>
        
        <button type="submit" class="btn col-6 ml-2 pt-2" name="btn-submit" style=" width:200px; background-color:#3addd6 ;margin-right: 50px;margin-bottom: 20px; color: #f8fdfd;" >Connexion</button>
        <a href="creer user.html">
          S'inscrire pour jouer?
        </a>
      </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>