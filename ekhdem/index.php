<?php 

session_start();










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
<nav class="navbar navbar-expand-lg">
    <a href="#"><img id="main-logo" src="style/images/logogrey.png" ></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="fa fa-bars fa-lg" style="color: white"></span>
  </button>

  <div class="collapse navbar-collapse" id="collapsibleNavbar">
   <ul class="nav navbar-nav ml-auto">
    <li class="nav-item"><a class="nav-link" href="index.php">Accueil</a></li>
    <li class="nav-item"><a class="nav-link" href="annonce.php">Créer une annonce</a></li>
    <li class="nav-item"><a class="nav-link" href="annonces.php">Annonces</a></li>
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
<!-- hedhi el search tool -->
<div class="container" style="padding-bottom: 120px;">
    <div class="col-lg-12 st-box">
    <div class="row">
      <form  action="annonces.php" method="post" style="width: 100%;">
         <div class="col-md-12 py-3" >
            <div class="row">
              <div class="col-md-3 form-group">
                <label>Type d'annonce</label>
                 <select style="width:100%;" name="type_a" class="form-control">
                        <option value="Location">Location</option>
                        <option value="Vente">Vente</option>
                        <option value="Colocation">Colocation</option>
                  </select>
              </div>
              <div class="col-md-3 form-group">
                <label>Type de bien</label>
                  <select style="width:100%;" name="type_b" class="form-control">
                        <option value="*">*</option>
                        <option value="Appartement, Maison">Appartement, Maison</option>
                        <option value="Appartement">Appartement</option>
                        <option value="Maison">Maison</option>
                        <option value="Construction neuve">Construction neuve</option>
                        <option value="Terrain">Terrain</option>
                        <option value="local commercial">local commercial</option>
                        <option value="Bureau">Bureau</option>
                        <option value="Usine / Dépôt">Usine / Dépôt</option>
                        <option value="Agriculture">Agriculture</option>
                        <option value="Maison d'hôtes">Maison d'hôtes</option>
                        <option value="Salle des fêtes">Salle des fêtes</option>
                        <option value="Place de Parc">Place de Parc</option>
                        <option value="Autre">Autre</option>
                  </select>
              </div>
              <div class="col-md-3 form-group">
                <label>Gouvernorat</label>
                 <select style="width:100%;" id="selectC" name="gouvernorat" onchange="changeFunc();" class="form-control">
                        <option value="Tunis">Tunis</option>
                        <option value="Ariana">Ariana</option>
                        <option value="Ben Arous">Ben Arous</option>
                        <option value="Manouba">Manouba</option>
                        <option value="Béja">Béja</option>
                        <option value="Bizerte">Bizerte</option>
                        <option value="Gabès">Gabès</option>
                        <option value="Gafsa">Gafsa</option>
                        <option value="Jendouba">Jendouba</option>
                        <option value="Kairouan">Kairouan</option>
                        <option value="Kasserine">Kasserine</option>
                        <option value="Kebili">Kebili</option>
                        <option value="Kef">Kef</option>
                        <option value="Mahdia">Mahdia</option>
                        <option value="Medenine">Medenine</option>
                        <option value="Monastir">Monastir</option>
                        <option value="Nabeul">Nabeul</option>
                        <option value="Sfax">Sfax</option>
                        <option value="Sidi Bouzid">Sidi Bouzid</option>
                        <option value="Siliana">Siliana</option>
                        <option value="Sousse">Sousse</option>
                        <option value="Tataouine">Tataouine</option>
                        <option value="Tozeur">Tozeur</option>
                        <option value="Zaghouen">Zaghouen</option>
                  </select>
              </div>
              <div class="col-md-3 form-group">
                <label>ville</label>
                 <select style="width:100%;" id="villeV"  name="ville" class="form-control" >

                  </select>
              </div>
            </div>
            <div class="row">
              <div class="col-md-2 form-group">
                  <label>Surface Min</label>
                   <input type="text" placeholder="Surface en m²" name="minsurface" class="form-control" style="word-spacing: 4px;">
              </div>
              <div class="col-md-2 form-group">
                 <label>Max pièces</label>
                   <select style="width:100%;"  name="maxnb_piece" class="form-control">
                        <option value="1 Pièces">1 Pièces</option>
                        <option value="2 Pièces">2 Pièces</option>
                        <option value="3 Pièces">3 Pièces</option>
                        <option value="4 Pièces">4 Pièces</option>
                        <option value="5 Pièces">5 Pièces et +</option>
                  </select>
              </div>
              <div class="col-md-2 form-group">
                <label>Prix Max</label>
                 <input type="text" placeholder="Prix en DT" name="prixmax" class="form-control" style="word-spacing: 4px;">
              </div>
              <div class="col-md-3 mt-4 form-group">
                 <button type="button" class="btn mt-2 btn-info btn-block"  data-toggle="modal" data-target="#st-modal"><i class="fa fa-plus" style="padding: 0px 10px;"></i>Plus de Critères</button>
              </div>
              <div class="col-md-3 mt-4 form-group">
                 <button class="btn mt-2 btn-primary btn-block"><i class="fa fa-search" style="padding: 0px 10px;"></i>Rechercher</button>
              </div>
            </div>
          </div>
      </form>
    </div>
    </div>
  </div>

</div>

 <!-- The Modal -->
<div class="modal fade" id="st-modal">
<div class="modal-dialog modal-lg">
<div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header" style="padding: 0px 20px;">
          <button type="button" class="close" data-dismiss="modal" style="font-size: 17px;">Fermer <i class="fa fa-times"></i></button>
        </div>
        
        <!-- Modal body -->
  <div class="modal-body">
  <div class="col-lg-12">
  <div class="row">
  <form style="width: 100%;">
      <div class="col-sm-12">

          <div class="row">
             <div class="col-sm-6 form-group">
                 <label>Type d'annonce</label>
                 <select style="width:100%;" class=" form-control">
                        <option value="1">Louer</option>
                        <option value="2">Acheter</option>
                        <option value="3">Colocation</option>
                  </select>
             </div>
             
             <div class="col-sm-6 form-group">
                  <label>Type de bien</label>
                  <select style="width:100%;" class="form-control">
                        <option value="*">*</option>
                        <option value="Appartement, Maison">Appartement, Maison</option>
                        <option value="Appartement">Appartement</option>
                        <option value="Maison">Maison</option>
                        <option value="Construction neuve">Construction neuve</option>
                        <option value="Terrain">Terrain</option>
                        <option value="local commercial">local commercial</option>
                        <option value="Bureau">Bureau</option>
                        <option value="Usine / Dépôt">Usine / Dépôt</option>
                        <option value="Agriculture">Agriculture</option>
                        <option value="Maison d'hôtes">Maison d'hôtes</option>
                        <option value="Salle des fêtes">Salle des fêtes</option>
                        <option value="Place de Parc">Place de Parc</option>
                        <option value="Autre">Autre</option>
                  </select>
             </div>
          </div>

          <div class="row">
               <div class="col-sm-6 form-group">
                <label>Gouvernorat</label>
                 <select style="width:100%;" class="form-control" >
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
               <div class="col-sm-6 form-group">
                <label>ville</label>
                 <select style="width:100%;"  class="ville-select" multiple="true">
                        
                  </select>
               </div>
          </div>
           
          <div class="row">
               <div class="col-sm-6 form-group">
                <label>Prix min</label>
                  <input type="text" placeholder="Prix DT" class="form-control" style="word-spacing: 4px;">
               </div>
               <div class="col-sm-6 form-group">
                <label>Prix Max</label>
                <input type="text" placeholder="Prix DT" class="form-control" style="word-spacing: 4px;">
               </div>
          </div>
          <div class="row">
               <div class="col-sm-6 form-group">
                <label>Min pièces</label>
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
                <label>Max pièces</label>
                   <select style="width:100%;" class="form-control">
                        <option value="1">Studio</option>
                        <option value="2">1 Pièces</option>
                        <option value="3">2 Pièces</option>
                        <option value="4">3 Pièces</option>
                        <option value="5">4 Pièces</option>
                        <option value="6">5 Pièces et +</option>
                  </select>
               </div>
          </div>
           
            <div class="row">
               <div class="col-sm-6 form-group">
                <label>Surface Min</label>
                  <input type="text" placeholder="Surface en m²" class="form-control" style="word-spacing: 4px;">
               </div>
               <div class="col-sm-6 form-group">
                <label>Surface Max</label>
                <input type="text" placeholder="Surface en m²" class="form-control" style="word-spacing: 4px;">
               </div>
          </div>

<!-- option more -->
          <div class="row">
            <div class="col-sm-12">
              

            
            <div class="form-check-inline p-3">
            <label class="form-check-label" for="check1">
        <input type="checkbox" class="form-check-input" id="check1">Parking / Garage
      </label>
    </div>

    <div class="form-check-inline p-3">
            <label class="form-check-label" for="check3">
        <input type="checkbox" class="form-check-input" id="check3">Jardin
      </label>
    </div>

          
                <div class="form-check-inline p-3">
            <label class="form-check-label" for="check7">
        <input type="checkbox" class="form-check-input" id="check7">Piscine
      </label>
    </div>
    
    <div class="form-check-inline p-3">
      <label class="form-check-label" for="check9">
        <input type="checkbox" class="form-check-input" id="check9">Location Meublée
      </label>
    </div>
    
            </div>
          </div>
<!-- end of more option -->
    </div>
  </form>
  </div>
  </div>
  </div>   
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-block btn-info"><i class="fa fa-search" style="padding: 0px 10px;"></i>Rechercher</button>
        </div>

</div>
</div>
</div> <!-- end of modal -->

<!-- bkeyet el page -->
<div class="container-fluid test">
  <div class="row">

    <div class="col-md-4 mini-fact">
      <h3>Économique</h3>
      <span class="fa fa-dollar fa-3x"></span>
      <p>EDDAR ne prend aucune commission. Vous économisez des milliers de TND.</p>
    </div>

    <div class="col-md-4 mini-fact"> 
      <h3>Outil de recherche avancée</h3>    
      <span class="fa fa-laptop fa-3x"></span>
      <p>Grâce à ses outils de recherche avancés, el dar vous aide à trouver les meilleures offres aux meilleurs prix.</p>
    </div>

    <div class="col-md-4 mini-fact">
      <h3>Direct</h3>
      <span class="fa fa-group fa-3x"></span>
      <p>Vendez ou louez votre logement de particulier à particulier.</p>
   </div>

  </div>
</div>

<div class="container-fluid test2">
  <div class="container referen1"><p><span class="fa fa-quote-left fa-2x fa-pull-left " style="color: #141f28;"></span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
       magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
       dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
        sunt in culpa qui officia deserunt mollit anim id est laborum.</p> </div>
</div>

<!-- footer -->
<div class="container-fluid footer">
  <p>© Copyright EDDAR.inc 2020. All rights reserved</p>
</div>




<script>



var selectBox = document.getElementById("selectC");
    var selectedValue = selectBox.options[selectBox.selectedIndex].text;
    if(selectedValue=="Tunis"){


        deleteOptions();

        var ville = ["Tunis", "Le Bardo", "El Menzah", "Le kram", "La Goulette", "Les Berges du Lac", "El Aouina",  "Carthage", "Sidi Bou Said", "La Marsa", "Sidi Hassine"];

        var x = document.getElementById("villeV");

        for(i = 0;i<=ville.length -1 ;i++){


              var option = document.createElement("option");
              option.text = ville[i];
              x.add(option);
                                          }
        

                              }








function changeFunc() {
    var selectBox = document.getElementById("selectC");
    var selectedValue = selectBox.options[selectBox.selectedIndex].text;
    if(selectedValue=="Tunis"){


        deleteOptions();

        var ville = ["Tunis", "Le Bardo", "El Menzah", "Le kram", "La Goulette", "Les Berges du Lac", "El Aouina",  "Carthage", "Sidi Bou Said", "La Marsa", "Sidi Hassine"];

        var x = document.getElementById("villeV");

        for(i = 0;i<=ville.length -1 ;i++){


              var option = document.createElement("option");
              option.text = ville[i];
              x.add(option);
                                          }
        

                              }
    else if(selectedValue=="Bizerte"){

            deleteOptions();

            var ville = ["Bizerte Nord","Bizerte Sud","El Alia","Ghar El Melh","Mateur","Menzel Bourguiba","Menzel Jemil","Menzel Abderrahmane","Ras Jebel","Sejnane" ,"Tinja","Utique","Zarzouna", "Aousja", "Metline", "Raf Raf"];


            var x = document.getElementById("villeV");

        for(i = 0;i<=ville.length -1 ;i++){


              var option = document.createElement("option");
              option.text = ville[i];
              x.add(option);
                                          }

            
                              }


    else if(selectedValue=="Ben Arous"){

            deleteOptions();

            var ville = ["Ben Arous","El Mourouj","Hammam Lif","Hammam Chott","Bou Mhel el-Bassatine","Ezzahra", "Radès", "Mégrine", "Mohamedia-Fouchana", "Mornag", "Khalidia"];


            var x = document.getElementById("villeV");

        for(i = 0;i<=ville.length -1 ;i++){


              var option = document.createElement("option");
              option.text = ville[i];
              x.add(option);
                                          }

            
                              }

    else if(selectedValue=="Ariana"){

            deleteOptions();

            var ville = ["Ariana","La Soukra","Raoued","Kalâat el-Andalous","Sidi Thabet","Ettadhamen-Mnihlae"];


            var x = document.getElementById("villeV");

        for(i = 0;i<=ville.length -1 ;i++){


              var option = document.createElement("option");
              option.text = ville[i];
              x.add(option);
                                          }

            
                              }


    else if(selectedValue=="Manouba"){

            deleteOptions();

            var ville = ["Manouba","Den Den","Douar Hicher","Oued Ellil","Mornaguia","Borj El Amri", "Djedeida", "Tebourba", "El Battan"];


            var x = document.getElementById("villeV");

        for(i = 0;i<=ville.length -1 ;i++){


              var option = document.createElement("option");
              option.text = ville[i];
              x.add(option);
                                          }

            
                              }


    else if(selectedValue=="Nabeul"){

            deleteOptions();

            var ville = ["Nabeul","Dar Chaabane","Béni Khiar","El Maâmoura","Somâa","Korba", "Tazerka","Menzel Temime","Menzel Horr","El Mida","Kelibia","Azmour", "Hammam Ghezèze","Dar Allouch","El Haouaria","Takelsa","Soliman","Korbous","  Menzel Bouzelfa","Béni Khalled","Zaouiet Djedidi","Grombalia" ," Bou Argoub","Hammamet Nord","Hammamet Sud"];


            var x = document.getElementById("villeV");

        for(i = 0;i<=ville.length -1 ;i++){


              var option = document.createElement("option");
              option.text = ville[i];
              x.add(option);
                                          }

            
                              }


    else if(selectedValue=="Zaghouen"){

            deleteOptions();

            var ville = ["Zaghouan","Zriba","Bir Mcherga","Djebel Oust","El Fahs","Nadhour"];


            var x = document.getElementById("villeV");

        for(i = 0;i<=ville.length -1 ;i++){


              var option = document.createElement("option");
              option.text = ville[i];
              x.add(option);
                                          }

            
                              }


    else if(selectedValue=="Béja"){

            deleteOptions();

            var ville = ["  Béja","El Maâgoula","Zahret Medien","Nefza","Téboursouk","Testour","Goubellat","Majaz al Bab"];


            var x = document.getElementById("villeV");

        for(i = 0;i<=ville.length -1 ;i++){


              var option = document.createElement("option");
              option.text = ville[i];
              x.add(option);
                                          }

            
                              }


    else if(selectedValue=="Jendouba"){

            deleteOptions();

            var ville = ["Jendouba","Bou Salem"," Tabarka","Aïn Draham","Fernana","Beni M'Tir","Ghardimaou","Oued Melliz"];


            var x = document.getElementById("villeV");

        for(i = 0;i<=ville.length -1 ;i++){


              var option = document.createElement("option");
              option.text = ville[i];
              x.add(option);
                                          }

            
                              }

else if(selectedValue=="Kef"){

            deleteOptions();

            var ville = ["El Kef","Nebeur","Touiref","Sakiet Sidi Youssef","Tajerouine","Menzel Salem", "Kalaat es Senam","Kalâat Khasba","Jérissa","El Ksour","Dahmani","Sers"];


            var x = document.getElementById("villeV");

        for(i = 0;i<=ville.length -1 ;i++){


              var option = document.createElement("option");
              option.text = ville[i];
              x.add(option);
                                          }

            
                              }




                            else if(selectedValue=="Siliana"){

            deleteOptions();

            var ville = ["Siliana","Bou Arada","Gaâfour","El Krib","Sidi Bou Rouis","Maktar", " Rouhia","Kesra","Bargou","El Aroussa"];


            var x = document.getElementById("villeV");

        for(i = 0;i<=ville.length -1 ;i++){


              var option = document.createElement("option");
              option.text = ville[i];
              x.add(option);
                                          }

            
                              }



            else if(selectedValue=="Sousse"){

            deleteOptions();

            var ville = ["Sousse","Ksibet Thrayet","Ezzouhour","Zaouiet Sousse","Hammam Sousse","Akouda", "Kalâa Kebira","Sidi Bou Ali","Hergla","Enfidha","Bouficha","Sidi El Hani", "M'saken","Kalâa Seghira","Messaadine","Kondar"];


            var x = document.getElementById("villeV");

        for(i = 0;i<=ville.length -1 ;i++){


              var option = document.createElement("option");
              option.text = ville[i];
              x.add(option);
                                          }

            
                              }



  else if(selectedValue=="Monastir"){

            deleteOptions();

            var ville = ["Monastir","Khniss","Ouerdanin","Sahline Moôtmar","Sidi Ameur","Zéramdine", "Beni Hassen","Ghenada","Jemmal","Menzel Kamel","Zaouiet Kontoch","Bembla-Mnara", "Menzel Ennour","El Masdour","Moknine","Sidi Bennour","Menzel Farsi","Amiret El Fhoul", "Amiret Touazra","Amiret El Hojjaj","Cherahil","Bekalta","Téboulba","Ksar Hellal", "Ksibet El Mediouni","Benen Bodher","Touza","Sayada","Lemta","Bouhjar","Menzel Hayet"];


            var x = document.getElementById("villeV");

        for(i = 0;i<=ville.length -1 ;i++){


              var option = document.createElement("option");
              option.text = ville[i];
              x.add(option);
                                          }

            
                              }



  else if(selectedValue=="Mahdia"){

            deleteOptions();

            var ville = ["Mahdia","Rejiche","Bou Merdes","Ouled Chamekh","Chorbane","Hebira", "Essouassi"," El Djem","Kerker","Chebba","Melloulèche","Sidi Alouane", "Ksour Essef","El Bradâa"];


            var x = document.getElementById("villeV");

        for(i = 0;i<=ville.length -1 ;i++){


              var option = document.createElement("option");
              option.text = ville[i];
              x.add(option);
                                          }

            
                              }


        else if(selectedValue=="Sfax"){

            deleteOptions();

            var ville = ["Sfax","Sakiet Ezzit","Chihia","Sakiet Eddaïerr","Gremda","El Ain", "Thyna","Agareb","Jebiniana","El Hencha","Menzel Chaker","Ghraïba", "Bir Ali Ben Khélifa","Skhira","Mahares","Kerkennah"];


            var x = document.getElementById("villeV");

        for(i = 0;i<=ville.length -1 ;i++){


              var option = document.createElement("option");
              option.text = ville[i];
              x.add(option);
                                          }

            
                              }


           else if(selectedValue=="Kairouan"){

            deleteOptions();

            var ville = ["Kairouan","Chebika","Sbikha","Oueslatia","Aïn Djeloula","Haffouz", "Alaâ","Hajeb El Ayoun","Nasrallah","Menzel Mehiri","Echrarda","Bou Hajla"];


            var x = document.getElementById("villeV");

        for(i = 0;i<=ville.length -1 ;i++){


              var option = document.createElement("option");
              option.text = ville[i];
              x.add(option);
                                          }

            
                              }

           else if(selectedValue=="Kasserine"){

            deleteOptions();

            var ville = ["Kasserine","Sbeitla","Sbiba","Jedelienne","Thala","Haïdra", "Foussana","Fériana","Thélepte","Magel Bel Abbès"];


            var x = document.getElementById("villeV");

        for(i = 0;i<=ville.length -1 ;i++){


              var option = document.createElement("option");
              option.text = ville[i];
              x.add(option);
                                          }

            
                              }

         else if(selectedValue=="Sidi Bouzid"){

            deleteOptions();

            var ville = ["Sidi Bouzid","Jilma","Cebalet","Bir El Hafey","Sidi Ali Ben Aoun","Menzel Bouzaiane", "Meknassy","Mezzouna","Regueb","Ouled Haffouz"];


            var x = document.getElementById("villeV");

        for(i = 0;i<=ville.length -1 ;i++){


              var option = document.createElement("option");
              option.text = ville[i];
              x.add(option);
                                          }

            
                              }

         else if(selectedValue=="Gabès"){

            deleteOptions();

            var ville = ["Gabès","Chenini Nahal","Ghannouch","Métouia","Oudhref","El Hamma", "Matmata","Nouvelle Matmataa","Mareth","Zarat"];


            var x = document.getElementById("villeV");

        for(i = 0;i<=ville.length -1 ;i++){


              var option = document.createElement("option");
              option.text = ville[i];
              x.add(option);
                                          }

            
                              }

         else if(selectedValue=="Medenine"){

            deleteOptions();

            var ville = ["Mednine","Beni Khedache","Ben Gardane","Zarzis","Houmt El Souk (Djerba)","Midoun (Djerba)", "Ajim (Djerba)"];


            var x = document.getElementById("villeV");

        for(i = 0;i<=ville.length -1 ;i++){


              var option = document.createElement("option");
              option.text = ville[i];
              x.add(option);
                                          }

            
                              }

       else if(selectedValue=="Tataouine"){

            deleteOptions();

            var ville = ["Tataouine","Bir Lahmar","Ghomrassen","Dehiba","Remada"];


            var x = document.getElementById("villeV");

        for(i = 0;i<=ville.length -1 ;i++){


              var option = document.createElement("option");
              option.text = ville[i];
              x.add(option);
                                          }

            
                              }



         else if(selectedValue=="Gafsa"){

            deleteOptions();

            var ville = ["Gafsa","El Ksar","Moularès","Redeyef","Métlaoui","Mdhila", "El Guettar","Sened"];


            var x = document.getElementById("villeV");

        for(i = 0;i<=ville.length -1 ;i++){


              var option = document.createElement("option");
              option.text = ville[i];
              x.add(option);
                                          }

            
                              }


             else if(selectedValue=="Tozeur"){

            deleteOptions();

            var ville = ["Tozeur","Degache","Hamet Jerid","Nafta","Tamerza"];


            var x = document.getElementById("villeV");

        for(i = 0;i<=ville.length -1 ;i++){


              var option = document.createElement("option");
              option.text = ville[i];
              x.add(option);
                                          }

            
                              }

             else if(selectedValue=="Kebili"){

            deleteOptions();

            var ville = ["Kebili","Djemna","Douz","El Golâa","Souk Lahad"];


            var x = document.getElementById("villeV");

        for(i = 0;i<=ville.length -1 ;i++){


              var option = document.createElement("option");
              option.text = ville[i];
              x.add(option);
                                          }

            
                              }

         
    //alert(selectedValue);
   }

  function deleteOptions()

  {

      var sel = document.getElementById('villeV');
            for (i = sel.length - 1; i >= 0; i--) {
                  sel.remove(i);
                                                  }


  }

</script>



</body>
</html>