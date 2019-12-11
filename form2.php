
<?PHP include("./include/header.php");?>
   <!-- Begin Page Content -->
       <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart">
            <!--CUSTOM CHART START -->
            <div class="border-head">
                <h1 class="h4 text-gray-900 mb-4"><b>Ajouter une photo a un immobilier</b></h1>
              </div>
<form name="formSaisie" method="POST" action="addPhoto.php" enctype="multipart/form-data" class="user">

  
        <label for="nom" >Immobiliers disponibles : </label>
             <?PHP
            include "./core/produitCore.php";

            $produitCoreInstance=new produitCore();
          
            $listProduits = $produitCoreInstance->afficherListProduits();

         ?>
         <div class="form-group">
        <select class="form-control" id="Options" name="Options" align="center">
            <option value="0">Select immobilier</option>
            <?PHP foreach($listProduits as $key=>$row){?>
                     <?php
                            $chb=$row['id'];
                        ?>
                     <option id="<?PHP echo $key+1; ?>" value="<?PHP echo $row['id']; ?>">
                        
                        <?PHP            
	                        echo $row['nom'];
                          ?>

                     </option>
             <?PHP } ?>

        </select>
      </div>




            


             <div class="form-group" align="center">
                <span >Images de l'immobilier</span>
                  </div>
                   <div class="form-group" align="center">
                <input name="image" type="file" >
          
</div>
       <br>
       
    
          <input type="hidden" class="form-control form-control-user" id="id_photo" name="id_photo" value="<?php echo $chb?>">

   

<script>
	var selectElem = document.getElementById('Options');
	var selectedValue = document.getElementById('id_photo');

	selectElem.addEventListener('change', function() {
	 var val = selectElem.value;
	selectedValue.value = val;
	})
</script>

    <p id="s1">
        <button class="btn btn-primary" type="submit" name="action" >Envoyer
        <!--<i class="material-icons right">send</i>-->
    </button></p>
</form>

<?php include("./include/footer.php");?>





 