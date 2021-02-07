
<?php

session_start();

function isf($num){

  if( is_numeric($num) || (is_numeric($num) && stripos($num,'.') !== false) )
      {
    //definitely a floate

            return 1;

      }


      return 0;



}




$servername = "localhost";
      $server_user = "root";
      $server_pass = "";
      $dbname = "darna";
//$name = $_SESSION['name'];
//$role = $_SESSION['role'];
     $con = new mysqli($servername, $server_user, $server_pass, $dbname);




//$mail=$_SESSION['mail'];
$titre_a="";
$detail_a="";
$prix="";
$superficie="";
$validation="";




if(!empty($_POST)){


/*
  $titre_a=$_POST['titre_a'];
  $type_a=$_POST['type_a'];
  $detail_a=$_POST['detail_a'];
  $type_b=$_POST['type_b'];

*/


  $type_a=$_POST['type_a'];
  $gouvernorat=$_POST['gouvernorat'];
  $ville=$_POST['ville'];
  $prix=$_POST['prixmax'];




  if(isf($prix)){


      


/*select mail,titre_a,type_b,detail_a,type_b,gouvernorat,ville,prix,superficie,nb_pieces,etage,materiel,nom,prenom,telephone from annonce a, users u where  
a.gouvernorat='Tunis' AND
a.ville='Carthage' and
a.mail=u.email
;
*/


$rq="SELECT mail,titre_a,type_a,type_b,detail_a,type_b,gouvernorat,ville,prix,superficie,nb_pieces,etage,materiel,nom,prenom,telephone from annonce a, users u where  
a.gouvernorat='$gouvernorat' AND
a.ville='$ville' and
a.prix<='$prix' and
a.mail=u.email";

    $res=mysqli_query($con,$rq);


    



                }






  //$superficie=$_POST['superficie'];


  //$nb_piece=$_POST['nb_piece'];
  //$etage=$_POST['etage'];
  //$lista=$_POST['list'];






                  }

else{


  $rq="SELECT mail,titre_a,type_a,type_b,detail_a,type_b,gouvernorat,ville,prix,superficie,nb_pieces,etage,materiel,nom,prenom,telephone from annonce a, users u where  a.mail=u.email";

    $res=mysqli_query($con,$rq);




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

<!-- annonces container -->

<div class="container ">
  <div class="col-lg-12 annonces-cont">
   <div class="row">
     

     <div class="px-0 col-md-5">
      <div class="radio1">
       <input class="tap-input" type="radio" value="toutes" name="tap" id="tap_toutes">
       <label class="btn tap-label mt-1 py-2 px-3" for="tap_toutes">Toutes</label>

       <input class="tap-input" type="radio" value="toutes" name="tap" id="tap_particuliers">
       <label class="btn tap-label mt-1 py-2 px-3" for="tap_particuliers">Particuliers</label>

       <input class="tap-input" type="radio" value="toutes" name="tap" id="tap_agences">
       <label class="btn tap-label mt-1 py-2 px-3" for="tap_agences">Agences</label>
      </div>
     </div>

     <div class="col-md-2"></div>
    <div class=" px-0 col-md-2 justify-element-right"> <form>
    <div class="form-group">
      <label for="sel1"></label>
      <select class="form-control" id="sel1" name="sellist1">
        <option>Plus recentes</option>
        <option>Plus anciennes</option>
        <option>Plus chers</option>
        <option>Moins chers</option>
      </select>
      </div>
  </form>

<?php

//echo $gouvernorat." ".$type_a." ".$ville." ".$prix;

?>

</div>

    <div class="col-md-3  ">
      <button type="button" class="btn mt-2 btn-info mt-1"  data-toggle="modal" data-target="#st-modal" style="width:100%;"><i class="fa fa-search" style="padding: 0px 10px;"></i>Modifier la recherche</button></div>
     
   </div>




   <!-- les annonces lenna yabdew --> 
<div class="lennatest row"></div>

<div class="row">
  <div class="col-lg-4 col-md-6 anno-box-cont"> <div class="anno-box">hi</div></div>
  <div class="col-lg-4 col-md-6 anno-box-cont"> <div class="anno-box"></div></div>
  <div class="col-lg-4 col-md-6 anno-box-cont"> <div class="anno-box"></div></div>
  <div class="col-lg-4 col-md-6 anno-box-cont"> <div class="anno-box"></div></div>
</div>

   <!-- les annonces lenna youfew -->

<?php 


 foreach($res as $i){ 



?>
   <div style="
    padding-top: 30px; background-color:yellow; margin-top:20px;">
  <?php echo "Titre annonce: ".$i['titre_a']."<br>"; 

        echo "type annonce : ".$i['type_a']."<br>";
        echo "<strong> Detail : </strong>".$i['detail_a']."<br>";
        echo "type du bien : ".$i['type_b']."<br>";
        echo "gouvernorat : ".$i['gouvernorat']."<br>";
        echo "Ville : ".$i['ville']."<br>";
        echo "Prix : ".$i['prix']."<br>";
        echo "superficie : ".$i['superficie']."<br>";
        echo "Nombre de pièces : ".$i['nb_pieces'][0]."<br>";
        $et=$i['etage'];
        if($et[0]=='R')echo "étage : Rez de chaussée <br>";
        else if($et[0]=='1') echo "étage : 1ère étage <br>";
        else echo "étage : ".$et[0]."ème étage <br>";
        echo "materiel : ".$i['materiel']."<br>";









  ?>
    
   </div>
   <?php } 
 ?>

  </div>
</div>

<!-- annonces cont end-->

</div>

<!-- footer -->
<div class="container-fluid footer">
  <p>© Copyright EDDAR.inc 2020. All rights reserved</p>
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

</body>
</html>