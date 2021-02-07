

<?php




function isf($num){

	if( is_numeric($num) || (is_numeric($num) && stripos($num,'.') !== false) )
			{
    //definitely a floate

						return 1;

			}


			return 0;



}

	

session_start();
if(!isset($_SESSION['uid'])) header("Location: login.php");



$mail=$_SESSION['mail'];
$titre_a="";
$detail_a="";
$prix="";
$superficie="";
$validation="";



if(!empty($_POST)){

	$titre_a=$_POST['titre_a'];
	$type_a=$_POST['type_a'];
	$detail_a=$_POST['detail_a'];
	$type_b=$_POST['type_b'];




	$gouvernorat=$_POST['gouvernorat'];
	$ville=$_POST['ville'];
	$prix=$_POST['prix'];
	$superficie=$_POST['superficie'];


	$nb_piece=$_POST['nb_piece'];
	$etage=$_POST['etage'];
	$lista=$_POST['list'];

	//echo "heehheh ".$titre_a .$type_a.$detail_a.$type_b.$gouvernorat.$ville.$prix.$superficie.$nb_piece.$etage;
	$ch="";
	foreach($lista as $i){

		$ch=$ch.$i;
		//echo $i;
	 					 }

	// echo " hahahahha ahaya ".$ch;

	if(strlen($titre_a)<1 || strlen($detail_a)<1 || strlen($prix)<1 || strlen($superficie)<1){

						$validation="Veuillez remplir tous les champs";
																							 }	

	else {



			
		if(!isf($prix) ||  !isf($superficie)){
						$validation="le prix et superficie doivent être de type réel";
		 											   } 
		else {

			  $validation="succes";

			  echo " hahahah ".$validation;
			  $servername = "localhost";
		      $server_user = "root";
		      $server_pass = "";
		      $dbname = "darna";
		      $con = new mysqli($servername, $server_user, $server_pass, $dbname);


		      echo $mail." ".$titre_a." ".$type_a." ".$detail_a." ".$type_b." ".$gouvernorat." ".$ville." ".$prix." ".$superficie." ".$nb_piece." ".$etage." ".$ch;

		    $rq="INSERT into annonce(mail,titre_a,type_a,detail_a,type_b,gouvernorat,ville,prix,superficie,nb_pieces,etage,materiel) VALUES('gharbisofiene98@gmail.com','$titre_a','$type_a','$detail_a','$type_b','$gouvernorat','$ville','$prix','$superficie','$nb_piece','$etage','$ch')";


		    $stmt = $con->prepare("INSERT INTO annonce(mail,titre_a,type_a,detail_a,type_b,gouvernorat,ville,prix,superficie,nb_pieces,etage,materiel) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
			$stmt->bind_param('sssssssddsss',$mail,$titre_a,$type_a,$detail_a,$type_b, $gouvernorat,$ville, $prix, $superficie,$nb_piece, $etage, $ch);

			$stmt->execute();


		  //  mysqli_query($con,$rq);

		      	// DELETE from annonce where mail='sofiene@gmail.com'

// mail	titre_a	type_a	detail_a	type_b	gouvernorat	ville	prix	superficie	nb_pieces	etage	materiel


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
<?php  if(isset($_SESSION['uid'])) {

    ?>
        <li class="nav-item"><a class="nav-link" href="logout.php">Se Déconnecter</a></li>

<?php
  }
  else{
  ?>

    <li class="nav-item"><a class="nav-link" href="login.php">Se connecter</a></li>
  <?php } ?>   </ul>
  </div>
</nav> 

<!-- créer une annonce -->
<div class="container pb-5">
  <div class="col-lg-10 create-cont">
    <div class="row">
        <form  method="post" action="annonce.php" name="annoncee" style="width: 100%;">
          <div class="col-lg-12 p-4">
            <div class="row"><h2 style="color: #141f28;">Ajouter une annonce</h2></div>
            <div class="row pt-3"><h4 style="color: #007bff">Description d'annonce</h4></div>
            <hr style="color:#007bff">
              
            <div class="row">
           <div class="col-md-6 form-group">
             <label>Titre d'annnonce *</label>
             <input type="text" placeholder="Titre" name="titre_a" value="<?php echo $titre_a;?>" class="form-control">
           </div>
           <div class="col-md-6 form-group">
                <label>Type d'annonce *</label>
                 <select style="width:100%;" name="type_a" class="form-control">
                        <option value="Location">Location</option>
                        <option value="Vente">Vente</option>
                        <option value="Colocation">Colocation</option>
                  </select>
              </div>
            </div>

            <div class="row">
              <div class="form-group col-md-6">
               <label for="comment">Detail de votre bien: *</label>
                <textarea  name="detail_a" class="form-control" rows="4"  id="comment"><?php echo $detail_a;?></textarea>
                  </div>
            </div>

            <div class="row pt-3"><h4 style="color: #007bff">Description du bien</h4></div>
            <hr style="color:#007bff">

            <div class="row">
              <div class="col-md-4 form-group">
                <label>Type de bien *</label>
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
              <div class="col-md-4 form-group">
                <label>Gouvernorat *</label>
                 <select style="width:100%;" name="gouvernorat" id="selectC" onchange="changeFunc();" class="form-control">
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
              <div class="col-md-4 form-group">
                <label>ville *</label>
                 <select style="width:100%;"  name="ville" id="villeV"  class="form-control" >
                        
                  </select>
              </div>
            </div>


            <div class="row">
               <div class="col-sm-6 form-group">
                <label>Prix *</label>
                  <input type="text" placeholder="Prix en DT"  name="prix" value="<?php echo $prix;?>" class="form-control" style="word-spacing: 4px;">
               </div>
               <div class="col-sm-6 form-group">
                <label>Superficie</label>
                <input type="text" placeholder="en m²"  name="superficie" value="<?php echo $superficie;?>" class="form-control" style="word-spacing: 4px;">
               </div>
            </div>

             <div class="row">
               <div class="col-sm-6 form-group">
                <label>Nombre de pièces *</label>
                   <select style="width:100%;"  name="nb_piece" class="form-control">
                        <option value="1 Pièces">1 Pièces</option>
                        <option value="2 Pièces">2 Pièces</option>
                        <option value="3 Pièces">3 Pièces</option>
                        <option value="4 Pièces">4 Pièces</option>
                        <option value="5 Pièces">5 Pièces et +</option>
                  </select>
               </div>
               <div class="col-sm-6 form-group">
                <label>Etage(s)</label>
                   <select style="width:100%;" name="etage" class="form-control">
                        <option value="Réz de chaussée">Réz de chaussée</option>
                        <option value="1ere étage">1ere étage</option>
                        <option value="2eme étage">2eme étage</option>
                        <option value="3eme étage">3eme étage</option>
                        <option value="4eme etage">4eme étage</option>
                        <option value="5eme étage">5eme étage ou +</option>
                  </select>
               </div>
          </div>
          <hr>

            <div class="row">  
              <div class="form-check-inline p-3">
            <label class="form-check-label" for="check1">
        <input type="checkbox" name="list[]" class="form-check-input"  value="Parking/Garage" id="check1">Parking/Garage
      </label>
    </div>
    <div class="form-check-inline p-3">
      <label class="form-check-label" for="check2">
        <input type="checkbox" name="list[]" class="form-check-input"  value="Balcom/Terrasse" id="check2">Balcom/Terrasse
      </label>
    </div>
    <div class="form-check-inline p-3">
            <label class="form-check-label" for="check3">
        <input type="checkbox" name="list[]" class="form-check-input" value="Jardin" id="check3">Jardin
      </label>
    </div>
                <div class="form-check-inline p-3">
            <label class="form-check-label" for="check4">
        <input type="checkbox" name="list[]" class="form-check-input" value="Chauffage" id="check4">Chauffage
      </label>
    </div>
    <div class="form-check-inline p-3">
            <label class="form-check-label" for="check5">
        <input type="checkbox" name="list[]" class="form-check-input" value="Climatiseur" id="check5">Climatiseur
      </label>
    </div>
    <div class="form-check-inline p-3 ">
            <label class="form-check-label" for="check6">
        <input type="checkbox" class="form-check-input" name="list[]"  value="Ascenseur" id="check6">Ascenseur
      </label>
    </div>
                <div class="form-check-inline p-3">
            <label class="form-check-label" for="check7">
        <input type="checkbox" class="form-check-input" name="list[]"  value="Piscine" id="check7">Piscine
      </label>
    </div>
    <div class="form-check-inline p-3">
      <label class="form-check-label" for="check8">
        <input type="checkbox" class="form-check-input" name="list[]"  value="Cave" id="check8">Cave
      </label>
    </div>
    <div class="form-check-inline p-3">
      <label class="form-check-label" for="check9">
        <input type="checkbox" class="form-check-input" name="list[]"  value="Location Meublée" id="check9">Location Meublée
      </label>
    </div>
        </div>
        <hr>

        <?php  echo $validation;?>
        <button type="submit" class="btn mt-2 btn-primary btn-block">Publier l'annonce</button>


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




<script>



	var selectBox = document.getElementById("selectC");
    var selectedValue = selectBox.options[selectBox.selectedIndex].text;
    if(selectedValue=="Tunis"){


        deleteOptions();

        var ville = ["Soukra", "Ariana", "El Mourouj","Raoued","La Marsa","Ben Arous","Douar Hicher","Le kram","Le Bardo","Rades","La Goulette","La Manouba","Carthage"];

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

        var ville = ["Soukra", "Ariana", "El Mourouj","Raoued","La Marsa","Ben Arous","Douar Hicher","Le kram","Le Bardo","Rades","La Goulette","La Manouba","Carthage"];

        var x = document.getElementById("villeV");

        for(i = 0;i<=ville.length -1 ;i++){


              var option = document.createElement("option");
              option.text = ville[i];
              x.add(option);
                                          }
        

                              }
    else if(selectedValue=="Bizerte"){

            deleteOptions();

            var ville = ["Bizerte Nord","Bizerte Sud","El Alia","Ghar El Melh","Ghezala","Joumine","Mateur","Menzel Bourguiba","Menzel Jemil","Ras Jebel","Sejnane" ,"Tinja","Utique","Zarzouna"];


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