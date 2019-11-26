


<?php include("include/header.php");?>

<body>
   <div class="container-fluid">
  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div align="center">
        
        <div class="row">
        
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">



 <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4"><b>ADD TASK</b></h1>
              </div>
<form name="formSaisie" method="POST" action="addSite.php" enctype="multipart/form-data">
   

  
<div class="form-group">
        <label for="nom">NAME : </label>
        <input id="nom" class="form-control form-control-user" placeholder="NAME OF TASK" name="nom" required="true" " >
     </div>
     <div class="form-group">
        <label for="url">URL<em>*</em></label>
        <input id="url" type="text" class="form-control form-control-user" name="url" placeholder="Exemple : www.mywebsite.com"  ><br>

      </div>
      <div class="form-group">
        <label for="url">TYPE<em>*</em></label>
        <input id="url" type="text" class="form-control form-control-user" name="type" placeholder="Exemple : WebSite,MobileAPP"  ><br>

      </div>


   
         <div class="form-group">
        <label   for="Description">DESCRIPTION</label>
    
        <textarea class="form-control form-control-user"   id="description" name="description" required="true"></textarea>
    </div>
     <input type="hidden" class="form-control form-control-user" id="dateT" name="dateT" value="<?php echo date("Y-m-d H:i:s");?>">
     <input type="hidden" class="form-control form-control-user" id="id_photo" name="id_photo" value="<?php echo '1'?>">
      <?PHP $id=$userinfo['id'];?>
     <input type="hidden" class="form-control form-control-user" id="id_user" name="id_user" value="<?php echo $id?>">

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
