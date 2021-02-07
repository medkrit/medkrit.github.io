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
  <script type="text/javascript" src="javascript/javas.js"></script>
  <link rel="stylesheet" type="text/css" href="style/main.css">
    <link rel="stylesheet" type="text/css" href="style/wtfcss.css">
  <title>EDDAR | Immo</title>
</head>
<body>
 <!-- navbar lenna -->
<div class="wrapper pb-5">
<nav class="navbar navbar-expand-md">
    <a href="#"><img id="main-logo" src="style/images/logogrey.png" ></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="fa fa-bars fa-lg" style="color: white"></span>
  </button>

  <div class="collapse navbar-collapse" id="collapsibleNavbar">
   <ul class="nav navbar-nav ml-auto">
    <li class="nav-item"><a class="nav-link" href="index.php">Accueil</a></li>
    <li class="nav-item"><a class="nav-link" href="annonce.php">Créer une annonce</a></li>
    <li class="nav-item"><a class="nav-link" href="annonces.html">Annonces</a></li>
    <?php  if(isset($_SESSION['uid'])) {

    ?>
        <li class="nav-item"><a class="nav-link" href="logout.php">Se Déconnecter</a></li>

<?php
  }
  else{
  ?>

    <li class="nav-item"><a class="nav-link" href="login.php">Se connecter</a></li>
  <?php } ?>
   </ul>
  </div>
</nav>  
<!-- nav bar youfa lenna -->
<div class="container">
  <div class="col-lg-12 annonces-cont">


   <div class="row"><h1 class="anno-title">Une magnifique villa à vendre à soukra</h1></div>

   <div class="row"><p class="anno-price text-primary">710 000 TND</p></div>

   <div class="row">
    <p class="anno-place"><span class="fa fa-map-marker mx-2"></span>Tunis, La Marsa.</p>
   </div>

   <div class="row">
    <p class="anno-place"><span class="fa fa-home mx-2 py-2"></span>Appartement | S+2 | 150m² | 3eme étage.</p> 
   </div>



<!-- lenna pictures carousel-->

<DIV class="carousel-tsawer" style="">

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="tsawer/1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="tsawer/2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="tsawer/3.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="tsawer/4.jpg" alt="fourth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="tsawer/5.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="tsawer/6.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="tsawer/7.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="tsawer/8.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="tsawer/9.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="tsawer/10.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</DIV>

<!-- lenna toufa pictures carousel -->



   <div class="row">
     <p class="anno-place mt-5" style="font-weight: bold;"> Description complète</p>
   </div>

   <div class="row">
     <p class="my-3 p-4">"Appartement S+2 aux Berges du Lac 2 Votre Agence Idéal Immobilier vous propose à la vente, au 3ème étage d’une belle résidence très bien gardée au Lac 2, un appartement S+2 d’une superficie de 150M². L’appartement se compose d’un salon lumineux grâce à ses baies vitrées offrant ainsi une vue sur une spacieuse terrasse de 51M², une cuisine bien équipée donnant sur un séchoir et une salle d’eau visiteurs. La partie nuit abrite deux chambres à coucher avec chacune un dressing et une salle de bain commune.pour de plus amples informations, n’hésitez pas à contacter votre négociateur en immobilier au numéro 53540819 </p>
   </div>
   <DIV STYLE="background-color:#141f28; height:1px; width:100%;"></DIV>

   <div class="row p-3">
    <div style="font-size: 20px;"><p class="mx-3"><span style="color: green;"><i class="fa fa-check-circle green" ></i></span> Parking / Garage</p></div>

     <div style="font-size: 20px;"><p class="mx-3"><span style="color: green;"><i class="fa fa-check-circle green" ></i></span> Balcom / Terrasse</p></div>

     <div style="font-size: 20px;"><p class="mx-3"><span style="color: green;"><i class="fa fa-check-circle green" ></i></span> Jardin</p></div>

     <div style="font-size: 20px;"><p class="mx-3"><span style="color: green;"><i class="fa fa-check-circle green" ></i></span> Chauffage</p></div>

     <div style="font-size: 20px;"><p class="mx-3"><span style="color: green;"><i class="fa fa-check-circle green" ></i></span> Climatiseur</p></div>

     <div style="font-size: 20px;"><p class="mx-3"><span style="color: green;"><i class="fa fa-check-circle green" ></i></span> Ascenseur</p></div>

     <div style="font-size: 20px;"><p class="mx-3"><span style="color: green;"><i class="fa fa-check-circle green" ></i></span> Piscine</p></div>

     <div style="font-size: 20px;"><p class="mx-3"><span style="color: green;"><i class="fa fa-check-circle green" ></i></span> Cave</p></div>


 </div>
   
  
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-4">
      <button class="btn btn-primary btn-block my-1"><span class="fa fa-phone mx-1 py-2"></span> Télephone</button>
    </div>
    <div class="col-md-4">
     <button class="btn btn-primary btn-block my-1"><span class="fa fa-heart mx-1 py-2"></span> Ajouter aux favoris</button>
    </div>
  </div>

<p class="azerty"> zebi</p>
 </div>
</div>


</div>
 <!-- footer hedha -->
<div class="container-fluid footer">
  <p>© Copyright EDDAR.inc 2020. All rights reserved</p>
</div>
</body>
</html>