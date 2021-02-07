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
  <link rel="stylesheet" type="text/css" href="style/wtfcss.css">
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


<!-- profile cont -->

<div style="margin-top: 70px; padding-bottom: 70px; margin-left: 8px; margin-right: 8px;">

<div class="container p-0" style="box-shadow: 6px 6px 22px black;">

  <div class="row profile-bar m-0" style="width:100%;">
      <div class="col-md-2 py-2"><a href="profile.php" class="btn btn-light" style="width:100%;">profile</a></div>
      <div class="col-md-2 py-2"><a href="profile-saved.php" class="btn btn-outline-light" style="width:100%;">anoonces sauvé</a></div>
      <div class="col-md-2 py-2"><a href="edit-profile.php" class="btn btn-outline-light" style="width:100%;">modifier profile</a></div>
  </div>

  <div class="row profile-cont m-0">
       <!-- les annonces lenna yabdew --> 
<div class="container">
<div class="lennatest row"></div>

<div class="row">
  <div class="col-lg-4 col-md-6 anno-box-cont"> <div class="anno-box"></div></div>
  <div class="col-lg-4 col-md-6 anno-box-cont"> <div class="anno-box"></div></div>
  <div class="col-lg-4 col-md-6 anno-box-cont"> <div class="anno-box"></div></div>
  <div class="col-lg-4 col-md-6 anno-box-cont"> <div class="anno-box"></div></div>
</div>
</div>

   <!-- les annonces lenna youfew -->
  </div> 

</div>


</div>



</div>




<!-- footer -->
<div class="container-fluid footer">
  <p>© Copyright EDDAR.inc 2020. All rights reserved</p>
</div>

</body>
</html>