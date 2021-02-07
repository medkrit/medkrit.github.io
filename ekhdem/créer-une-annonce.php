

<?php

session_start();
if(!isset($_SESSION['uid'])) header("Location: login.php");


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
    <li class="nav-item"><a class="nav-link" href="logout.php">Se déconnecter</a></li>
   </ul>
  </div>
</nav> 

<!-- créer une annonce -->
<div class="container pb-5">
  <div class="col-lg-10 create-cont">
    <div class="row">
        <form style="width: 100%;">
          <div class="col-lg-12 p-4">
            <div class="row"><h2 style="color: #141f28;">Ajouter une annonce</h2></div>
            <div class="row pt-3"><h4 style="color: #007bff">Description d'annonce</h4></div>
            <hr style="color:#007bff">
              
            <div class="row">
           <div class="col-md-6 form-group">
             <label>Titre d'annnonce *</label>
             <input type="text" placeholder="Titre" class="form-control">
           </div>
           <div class="col-md-6 form-group">
                <label>Type d'annonce *</label>
                 <select style="width:100%;" class="form-control">
                        <option value="1">Location</option>
                        <option value="2">Vente</option>
                        <option value="3">Colocation</option>
                  </select>
              </div>
            </div>

            <div class="row">
              <div class="form-group col-md-6">
               <label for="comment">Detail de votre bein: *</label>
                <textarea class="form-control" rows="4" id="comment"></textarea>
                  </div>
            </div>

            <div class="row pt-3"><h4 style="color: #007bff">Description du bien</h4></div>
            <hr style="color:#007bff">

            <div class="row">
              <div class="col-md-4 form-group">
                <label>Type de bien *</label>
                  <select style="width:100%;" class="form-control">
                        <option value="0">Toutes les catégories</option>
                        <option value="1">Appartement, Maison</option>
                        <option value="2">Appartement</option>
                        <option value="3">Maison</option>
                        <option value="4">Construction neuve</option>
                        <option value="5">Terrain</option>
                        <option value="6">local commercial</option>
                        <option value="7">Bureau</option>
                        <option value="8">Usine / Dépôt</option>
                        <option value="9">Agriculture</option>
                        <option value="10">Maison d'hôtes</option>
                        <option value="11">Salle des fêtes</option>
                        <option value="12">Place de Parc</option>
                        <option value="13">Autre</option>
                  </select>
              </div>
              <div class="col-md-4 form-group">
                <label>Gouvernorat *</label>
                 <select style="width:100%;" class="form-control">
                        <option value="1">Tunis</option>
                        <option value="2">Ariana</option>
                        <option value="3">Ben Arous</option>
                        <option value="4">Manouba</option>
                        <option value="5">Béja</option>
                        <option value="6">Bizerte</option>
                        <option value="7">Gabès</option>
                        <option value="8">Gafsa</option>
                        <option value="9">Jendouba</option>
                        <option value="10">Kairouan</option>
                        <option value="11">Kasserine</option>
                        <option value="12">Kebili</option>
                        <option value="13">Kef</option>
                        <option value="14">Mahdia</option>
                        <option value="15">Medenine</option>
                        <option value="16">Monastir</option>
                        <option value="17">Nabeul</option>
                        <option value="18">Sfax</option>
                        <option value="19">Sidi Bouzid</option>
                        <option value="20">Siliana</option>
                        <option value="21">Sousse</option>
                        <option value="22">Tataouine</option>
                        <option value="23">Tozeur</option>
                        <option value="24">Zaghouen</option>
                  </select>
              </div>
              <div class="col-md-4 form-group">
                <label>ville *</label>
                 <select style="width:100%;" class="ville-select" multiple="true">
                        <option value="1">ya</option>
                        <option value="2">Sofien</option>
                        <option value="3">3awenni</option>
                        <option value="4">yarhem bouk</option>
                  </select>
              </div>
            </div>


            <div class="row">
               <div class="col-sm-6 form-group">
                <label>Prix *</label>
                  <input type="text" placeholder="Prix en DT" class="form-control" style="word-spacing: 4px;">
               </div>
               <div class="col-sm-6 form-group">
                <label>Superficie</label>
                <input type="text" placeholder="en m²" class="form-control" style="word-spacing: 4px;">
               </div>
            </div>

             <div class="row">
               <div class="col-sm-6 form-group">
                <label>Nombre de pièces *</label>
                   <select style="width:100%;" class="form-control">
                        <option value="1">Studio</option>
                        <option value="2">1 Pièces</option>
                        <option value="3">2 Pièces</option>
                        <option value="4">3 Pièces</option>
                        <option value="5">4 Pièces</option>
                        <option value="6">5 Pièces et +</option>
                  </select>
               </div>
               <div class="col-sm-6 form-group">
                <label>Etage(s)</label>
                   <select style="width:100%;" class="form-control">
                        <option value="1">Réz de chaussée</option>
                        <option value="2">1ere étage</option>
                        <option value="3">2eme étage</option>
                        <option value="4">3eme étage</option>
                        <option value="5">4eme étage</option>
                        <option value="6">5eme étage ou +</option>
                  </select>
               </div>
          </div>
          <hr>

            <div class="row">  
              <div class="form-check-inline p-3">
            <label class="form-check-label" for="check1">
        <input type="checkbox" class="form-check-input" id="check1">Parking / Garage
      </label>
    </div>
    <div class="form-check-inline p-3">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2">Balcom / Terrasse
      </label>
    </div>
    <div class="form-check-inline p-3">
            <label class="form-check-label" for="check3">
        <input type="checkbox" class="form-check-input" id="check3">Jardin
      </label>
    </div>
                <div class="form-check-inline p-3">
            <label class="form-check-label" for="check4">
        <input type="checkbox" class="form-check-input" id="check4">Chauffage
      </label>
    </div>
    <div class="form-check-inline p-3">
            <label class="form-check-label" for="check5">
        <input type="checkbox" class="form-check-input" id="check5">Climatiseur
      </label>
    </div>
    <div class="form-check-inline p-3 ">
            <label class="form-check-label" for="check6">
        <input type="checkbox" class="form-check-input" id="check6">Ascenseur
      </label>
    </div>
                <div class="form-check-inline p-3">
            <label class="form-check-label" for="check7">
        <input type="checkbox" class="form-check-input" id="check7">Piscine
      </label>
    </div>
    <div class="form-check-inline p-3">
      <label class="form-check-label" for="check8">
        <input type="checkbox" class="form-check-input" id="check8">Cave
      </label>
    </div>
    <div class="form-check-inline p-3">
      <label class="form-check-label" for="check9">
        <input type="checkbox" class="form-check-input" id="check9">Location Meublée
      </label>
    </div>
        </div>
        <hr>
        <button class="btn mt-2 btn-primary btn-block">Publier l'annonce</button>


            </div>
          </div>
        </form>
      
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