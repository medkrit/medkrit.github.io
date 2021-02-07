
<?php


session_start();

if(isset($_SESSION['uid'])) header("Location: index.php");



if(!empty($_POST)){

      $mail=$_POST['mail'];
      $pwd=$_POST['pwd'];


      if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {


                $validation="mail invalide";
                                                      }
      else if(strlen($pwd)<1) $validation="mot de passe vide";


      else {


          $servername = "localhost";
      $server_user = "root";
      $server_pass = "";
      $dbname = "darna";
//$name = $_SESSION['name'];
//$role = $_SESSION['role'];
     $con = new mysqli($servername, $server_user, $server_pass, $dbname);

     $rq="SELECT * from users where email='$mail' and password='$pwd'";

     $res=mysqli_query($con,$rq);
     $d="";
      foreach($res as $i) {


          $d=$i['email'];
          $p=$i['password'];
          $id=$i['id'];
          break;
      
                          }

    if($mail==$d && $pwd==$p) {
            
            echo "id === ".$id;

            session_start();

              $_SESSION['uid']=$id;
              $_SESSION['mail']=$mail;
                echo  "id of user == ".$_SESSION['uid'];
                  header("Location: index.php");



                              }  
    else {

      $validation="email ou mot de passe incorrecte";
         }        



           }




                  }


?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

  <!-- my links -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style/main.css">
  <script type="text/javascript" src="javascript/javas.js"></script>
  <title>EDDAR | Immo</title>
</head>



<body>
<!-- navbar lenna -->
<div class="wrapper">
<nav class="navbar navbar-expand-md">
    <a href="#"><img id="main-logo" src="style/images/logogrey.png" ></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="fa fa-bars fa-lg" style="color: white"></span>
  </button>

  <div class="collapse navbar-collapse" id="collapsibleNavbar">
   <ul class="nav navbar-nav ml-auto">
    <li class="nav-item"><a class="nav-link" href="index.php">Accueil</a></li>
    <li class="nav-item"><a class="nav-link" href="annonce.php">Créer une annonce</a></li>
    <li class="nav-item"><a class="nav-link" href="annonces.php">Annonces</a></li>
    <li class="nav-item"><a class="nav-link" href="login.php">Se connecter</a></li>
   </ul>
  </div>
</nav> 
 <!-- login -->

<section class="form my-5 mx-2">
  <div class="container login-cont">
    <div class="row">

      <div class="col-lg-6 login-text-cont px-5 pt-5">
        <h4>Connectez-vous</h4>
        <p class="mt-5">Utilisez le formulaire ci-dessous pour vous connecter a votre compte.</p>

        <form action="login.php" name="loginn" method="post">
          <div class="form-row">
            <div class="col-lg-7">
              <input type="text" placeholder="Email-address *" name="mail" class="form-control mb-3 p-4">
            </div>
          </div>
          <div class="form-row">
            <div class="col-lg-7">
              <input type="password" placeholder="mot de passe *" name="pwd" class="form-control mb-3 p-4">
            </div>
          </div>
          <div class="form-row">
            <div class="col-lg-7">
              <button type="submit" class="btn-login btn-primary btn my-3">CONNEXION</button>
            </div>
          </div>
          <div class="mdp-oub"><a href="reset-pw.html">Mot de passe oublié ?</a> </div>
        </form>
      </div>

       <div class="col-lg-6 login-pic-cont"> 
        <div class="row"><img class="login-pic" src="style/images/login.png"></div>
        <div class="row" id="register-text"><p>Créer votre compte et publier vos annonces sur le meilleur site immobilier en Tunisie.<br>  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#register-Modal" id="register-btn">
    Créer un nouveau compte</button>

  <!-- The Modal -->
 <div class="modal" id="register-Modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div class="row justify-content-center" style="color: #141f28;"><h5>Choisissez votre type de compte :</h5></div>
          <div class="row">
            <div class="col-lg-6 my-3"><a class="btn btn-info px-3" href="register.php" role="button"  style="font-size: 22px; width:80%;">Particulier</a></div>
            <div class="col-lg-6 my-3"><a class="btn btn-info px-3" href="register-pro.html" role="button" style="font-size: 22px; width:80%;">Professionel</a></div>
          </div>
        </div>
</p></div>
        
      </div>
    </div>
  </div>
</section>

<!-- footer -->
<div class="container-fluid footer">
  <p>© Copyright EDDAR.inc 2020. All rights reserved</p>
</div>

</body>
</html>