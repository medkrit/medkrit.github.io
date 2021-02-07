
<?php




$validation="";
$nom="";
$prenom="";
$mail="";
$pwd="";
$cpwd="";
$tel="";

if(!empty($_POST)){

  $nom=$_POST['nomm'];
  $prenom=$_POST['prenom'];
  $mail=$_POST['email'];

  $pwd=$_POST['pwd'];
  $cpwd=$_POST['cpwd'];

  $tel=$_POST['tel'];

  $p=1;
  $e=1;

  ;

//  echo "name ".$nom." prenom : ".$prenom." mail : ".$mail." pwd = ".$pwd." cpwd = ".$cpwd." tel = ".$tel;

  $phone = '00000000';

if(!preg_match("/^[0-9]{8}$/", $tel)) {
  
      $validation="format du téléphone invalide";
      $p=0;
                                      }
else if(strlen($nom)<3 || strlen($prenom)<3 || strlen($mail)<3 || strlen($pwd)<3 || strlen($cpwd)<3){
      $e=0;
      $validation="Veuillez remplir tous les champs";
                                                                                               }



else if($p==1 && $e==1){


      if($pwd!=$cpwd){

            $validation="les mots de passes ne sont pas identiques";
                     }
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
          break;
          //echo "email : ".$d. " id = ".$id. " phone =".$i['telephone'];
      
                          }

      if($d==$mail){

          $validation="email déjà existant";

                   }
      else{



          $rq="INSERT into users(nom,prenom,email,password,telephone) VALUES('$nom','$prenom','$mail','$pwd','$tel')";

          mysqli_query($con,$rq);

          header("Location: login.php");
          $validation="succès de l'inscription";
          
          }


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
    <li class="nav-item"><a class="nav-link" href="index.html">Accueil</a></li>
    <li class="nav-item"><a class="nav-link" href="créer-une-annonce.html">Créer une annonce</a></li>
    <li class="nav-item"><a class="nav-link" href="annonces.html">Annonces</a></li>
    <li class="nav-item"><a class="nav-link" href="login.html">Se connecter</a></li>
   </ul>
  </div>
</nav> 

<!-- register -->

<div class="container register-cont">
    <h2 class="p-3">INSCRIPTION</h2>
  <div class="col-lg-12">
  <div class="row">
        <form action="register.php" name="registerr" style="width: 100%;" method="post" >

          <div class="col-sm-12">
            <div class="row">
              <div class="col-sm-6 form-group">
                <label>Nom *</label>

                <?php ?>
                <input type="text" placeholder="Nom" value="<?php echo $nom;?>" name="nomm" class="form-control">
              </div>
              <div class="col-sm-6 form-group">
                <label>Prénom *</label>
                <input type="text" placeholder="Prénom" value="<?php echo $prenom;?>" name="prenom" class="form-control">
              </div>
          </div> 
            <div class="form-group">
            <label>Adresse e-mail *</label>
            <input type="email" placeholder="E-mail " value="<?php echo $mail;?>" name="email" class="form-control">
          </div>           
            <div class="row">
              <div class="col-sm-6 form-group">
                <label>Mot de passe *</label>
                <input type="password" placeholder="*******" name="pwd" value="<?php echo $pwd;?>" class="form-control">
              </div>    
              <div class="col-sm-6 form-group">
                <label>Confirmer le mot de passe *</label>
                <input type="password" placeholder="*******"  name="cpwd" value="<?php echo $cpwd;?>" class="form-control">
              </div>  
            </div>            
          <div class="form-group">
            <label>Téléphone *</label>
            <input type="text" placeholder="Numéro de téléphone" name="tel" value="<?php echo $tel;?>" class="form-control">
          </div>   

          <div class="row">
            <p class="p-3" style="color:red;"><?php echo $validation;?>
            </p>
            </div>  
          <div class="row">
            <p class="p-3"> En cliquant sur le bouton ci-dessous J'accepte <a href="CGU.html"> les Conditions Générales d’Utilisation.</a>
            </p>
            </div>     
          <button type="submit" class="btn btn-lg btn-block btn-info">Submit</button>         
          </div>
        </form> 
        </div>
  </div>
  </div>


<!-- footer -->
<div class="container-fluid footer">
  <p>© Copyright EDDAR.inc 2020. All rights reserved</p>
</div>

</body>
</html>