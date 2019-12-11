
<?php include("./include/header.php");
      include ("./Core/produitCore.php");
      include ("./Entities/photo.php");
      include ("./Core/photoCore.php");

      
if (isset($_GET['id'])){
   
$produitCoreInstance=new produitCore();

$listProduits = $produitCoreInstance->afficherListProduits();

 $result= $produitCoreInstance->recupererProduit($_GET['id']);
  foreach($result as $row){
    $id   = $row['id'];
    $nom = $row['nom'];
   ?>





   <!-- Begin Page Content -->
          <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart">
            <!--CUSTOM CHART START -->
            <div class="border-head">
              <h3>Photos d'immoblilier</h3>
           
              <a href="form2.php">+ Ajouter une photo</a>
                  


            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                       <tr>
                      <th>Image</th>
                      

            <th>supprimer</tH>
           
                    </tr>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Image</th>
            <th>supprimer</tH>
                      

                    </tr>
                  </tfoot>
                  <tbody>
             <?PHP
                    $photoCoreInstance=new photoCore();
                    $id_photo=$id;
                    $listPhotos = $photoCoreInstance->afficherlistPhotosParCat($id_photo)
  ?>
  
        
           
            <?PHP
                   foreach($listPhotos as $row){
                    ?>
                     
             <tr> <td>
                   <?PHP 
                                                                   echo '<img src="uploads/'.$row['img'].'"  width="100" height="100"/>';
                                                                
                                                                  ?>
                </td>
                <td>
            <form method="POST" action="deletePhoto.php">
                <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
                <input type="submit" id="delete" name="supprimer" class="btn delicious-btn"' value="" style="background-image: url('img/b_drop.png') ; background-repeat: no-repeat;  background-size: 32px">
            </form>
        </td>  </tr>
                <?PHP
              }
              ?>

       
       


  </tbody>
                </table>
  <?PHP
}

}
?>
                  
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
  <?php include("./include/footer.php");?>
    
    



