


<?php include("include/header.php");?>

<body>
  <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart">
            <!--CUSTOM CHART START -->
            <div class="border-head">
              <h3>Liste des produits</h3>



 
              </div>
                <div class="card-body">
<form name="formSaisie" method="POST" action="addProduit.php" enctype="multipart/form-data">
   

  
<div class="form-group">
        <label for="nom">Nom  : </label>
        <input id="nom" class="form-control form-control-user" placeholder="Veuillez saisir le nom" name="nom" required="true" "required="true" >
     </div>
     <div class="form-group">
        <label for="prix">Prix :<em>*</em></label>
        <input id="prix" type="text" class="form-control form-control-user" name="prix" placeholder="Veuillez saisir le prix" required="true" ><br>

      </div>
      <div class="form-group">
        <label for="nb_chambre">Nombre de chambre : <em>*</em></label>
        <input id="nb_chambre" type="text" class="form-control form-control-user" name="nb_chambre" placeholder="Veuillez saisir le nombre des chambres " required="true" ><br>

      </div>
       <div class="form-group">
        <label for="localisation">Localisation : <em>*</em></label>
        <input id="localisation" type="text" class="form-control form-control-user" name="localisation" placeholder="Veuillez saisir la localisation " required="true" ><br>

      </div>


   
         <div class="form-group">
        <label   for="Description">DESCRIPTION</label>
    
        <textarea class="form-control form-control-user"   id="description" name="description" required="true"></textarea>
    </div>
  
     <input type="hidden" class="form-control form-control-user" id="id_photo" name="id_photo" value="<?php echo '1'?>">
     
    

    <p id="s1">
        <button class="btn btn-primary" type="submit" name="action" onclick="valider();">Envoyer
        <!--<i class="material-icons right">send</i>-->
    </button></p>
   
</form>
  
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart">
            <!--CUSTOM CHART START -->
            <div class="border-head">
              
                <!-- /panel -->
              </div>
              <!--/ col-md-4 -->
             
                </div>
              </div>
            </div>
            <!-- / calendar -->
          </div>
          <!-- /col-lg-3 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    
    <!--footer end-->
  </section>
  <?php include("include/footer.php");?>
</body>

</html>
