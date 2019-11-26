
   <?PHP
include("include/header.php");
include "../Core/produitCore.php";
include "../Entities/produit.php";
include "../Core/photoCore.php";
include "../Entities/photo.php";
$produitCoreInstance=new produitCore();
$listProduits = $produitCoreInstance->afficherlistProduitParCat($_GET['id']);

//var_dump($listMenus->fetchAll());
foreach($listProduits as $row){
$nom=$row['nom'];
$prix=$row['prix'];
$nb_chambre=$row['nb_chambre'];
$description=$row['description'];
$localisation=$row['localisation'];
$id=$row['id'];
 
   ?>

    <div class="site-section site-section-sm">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div>
               
              <div class="slide-one-item home-slider owl-carousel">
               <?PHP 
                $photoCoreInstance=new photoCore();
                  $id_photo=$id;
                  $listPhotos = $photoCoreInstance->afficherlistPhotosParCat($id_photo);
                  

                foreach($listPhotos as $rows){ ?>
              <img src="<?PHP echo '../uploads/'.$rows['img'].''?> "alt="Image" class="img-fluid" style="height: 400;width: 800;" >
   <?PHP }?>
                
          
              </div>
           
            </div>
            <div class="bg-white property-body border-bottom border-left border-right">
              <div class="row mb-5">
                <div class="col-md-6">
                  <strong class="text-success h1 mb-3"> $ <?PHP echo $prix ?>  </strong>
                </div>
                <div class="col-md-6">
                  <ul class="property-specs-wrap mb-3 mb-lg-0  float-lg-right">
                  <li>
                    <span class="property-specs">Nombre de chambre</span>
                    <span class="property-specs-number"><?PHP echo $nb_chambre ?>   <sup>+</sup></span>
                    
                  </li>
                 
                </ul>
                </div>
              </div>
              <div class="row mb-5">
                 <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text"></span>
                  <strong class="d-block"></strong>
                </div>
               
                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Nom : </span>
                  <strong class="d-block"><?PHP echo $nom ?>  </strong>
                </div>
                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text"></span>
                  <strong class="d-block"></strong>
                </div>
                
              </div>
              <h2 class="h4 text-black">Description</h2>
              <p>L<?PHP echo $description ?>  </p>
             

              <div class="row no-gutters mt-5">
                <div class="col-12">
                  <h2 class="h4 text-black mb-3">Gallery</h2>
                </div>
       <?PHP            $photoCoreInstance=new photoCore();
  $id_photo=$id;
  $listPhotos = $photoCoreInstance->afficherlistPhotosParCat($id_photo);
  ?>            <?PHP foreach($listPhotos as $rows){ ?>
                <div class="col-sm-6 col-md-4 col-lg-3">
                   
                  <a  href="<?PHP echo '../uploads/'.$rows['img'].''?>"class="image-popup gal-item"><img src="<?PHP echo '../uploads/'.$rows['img'].''?>" alt="Image" class="img-fluid" style="height: 200;width: 300;"></a>
              
                </div>
                  <?PHP }?>
                
              </div>
            </div>
          </div>
          <?PHP } ?>

    <div class="site-section site-section-sm bg-light">
      <div class="container">

       
    
  </body>
  <?PHP
include("./include/footer.php");
  ?>
