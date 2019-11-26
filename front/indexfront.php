
 <?PHP
    include("include/header.php");

     include ("../Core/produitCore.php");
       include "../Entities/photo.php";
      include "../Core/photoCore.php";

    
  
    ?>

   <div class="site-section site-section-sm bg-light">
      <div class="container">
      
        <div class="row mb-5">
        <?PHP
          $produitsCoreInstance=new produitCore();

$listProduits = $produitsCoreInstance->afficherListProduits();
   

foreach($listProduits as $row){
$nom=$row['nom'];
$prix=$row['prix'];
$nb_chambre=$row['nb_chambre'];
$description=$row['description'];
$localisation=$row['localisation'];
$id=$row['id'];
 $photoCoreInstance=new photoCore();
  $id_photo=$id;
  $listPhotos = $photoCoreInstance->afficherlistPhotosParCat2($id_photo);
  ?>
  
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="property-entry h-100">
              <a href="property-details.php?id=<?php echo $row['id'] ?>&stat=true" class="property-thumbnail">
                <div class="offer-type-wrap">
                  
                  
                </div>
                <?PHP foreach($listPhotos as $rows){ ?>
                <img src="<?PHP echo '../uploads/'.$rows['img'].''?> "alt="Image" class="img-fluid">
                
              </a>
              <?PHP } ?>
              <div class="p-4 property-body">
               
                <h2 class="property-title"><a href="property-details.php?id=<?php echo $row['id'] ?>&stat=true"><?PHP echo $nom ?></a></h2>
                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span><?PHP echo $localisation ?></span>
                <strong class="property-price text-primary mb-3 d-block text-success"><?PHP echo $prix ?> $ </strong>
                <ul class="property-specs-wrap mb-3 mb-lg-0">
                  <li>
                    <span class="property-specs">Chambres</span>
                    <span class="property-specs-number"><?PHP echo $nb_chambre ?> <sup>+</sup></span>
                    
                 

              </div>
            </div>
          </div>
          <?PHP 
        }
         ?>

          
    
  </body>
   <?PHP include("./include/footer.php");?>
