
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
   
<?php include "include/header.php";
      include "Core/produitCore.php";
      include "Core/photoCore.php";

      $listProduits = array();
      
if(isset($_GET['search'])){
  $serch = $_GET['search'] ;


    $produitCoreInstance=new produitCore();
    $listProduits = $produitCoreInstance->chercherProduits($serch);
    
 
}else{

  $produitCoreInstance=new produitCore();
  $listProduits = $produitCoreInstance->afficherListProduits();


}

  



//var_dump($listMenus->fetchAll());
?><html>
<head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
  <title>DataTables example - Page length options</title>
  <link rel="shortcut icon" type="image/png" href="/media/images/favicon.png">
  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">
  <link rel="stylesheet" type="text/css" href="/media/css/site-examples.css?_=50d134a99f38dd18b1cce14412acc94f">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
  <style type="text/css" class="init">
  
  </style>
  <script type="text/javascript" src="/media/js/site.js?_=a64810efc82bfd3b645784011efa5963"></script>
  <script type="text/javascript" src="/media/js/dynamic.php?comments-page=examples%2Fadvanced_init%2Flength_menu.html" async></script>
  <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" language="javascript" src="../resources/demo.js"></script>
 
</head>
<body>
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
              <h3>Liste des Immobiliers</h3>

<div id="piechart" style="width: 1000px; height: 300px;"></div>

          <!-- Page Heading -->

          <!-- DataTales Example -->
        
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Immobiliers</h6>
                  <a href="form.php" >+ Ajouter immobiliers</a>
                   <a href="form2.php">+ Ajouter une  photo</a>


            </div>

                  </div></div></div></section>
 <div class="card-header py-3" style="margin-bottom: 15px;">

                  
                  <a href="export_exel.php" style="background: #4CAF50; color: #fff; padding: 4px; margin-left: 20px;">+ Exporter data</a>


           <div class="col-md-12" style="text-align : center ;">
            
            <form action="indexGestproduit.php"  method="GET">
            <input type="text" name="search" id="search" placeholder="search ..." style="text-align:center ;width: 60%; height: 33px; border-top-left-radius: 6px; border-bottom-left-radius: 6px; border: #337ab7 1px solid;">

            <button class="btn btn-primary" type="submit" name="action"  style="margin-left:-16px">Chercher</button>

            </form>
            <?php if(isset($_GET['search'])){ ?>
            <h3 style="color: #000;">Resultat pour <?php echo $_GET['search'] ?></h3>
            <?php } ?>
            </div>



             <p align="center">PRODUIT</button></p>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-dark" id="mytable" width="100%" cellspacing="0">
                  <thead align="center">
                    <tr>
                       <tr>
                      <th>Nom</th>
            <th>Prix</th>
            <th>Nb_chambre</th>
            <th>Description</th>
            <th>Localisation</th>
            <th colspan="3">ACTIONS</tH>
            
                    </tr>
                    </tr>
                  </thead>
                  <tfoot align="center">
                    <tr>
                      <th>Nom</th>
            <th>Prix</th>
            <th>Nb_chambre</th>
            <th>Description</th>
            <th>Localisation</th>
            <th colspan="3">ACTIONS</tH>

                    </tr>
                  </tfoot>
                   <tbody>
             <?PHP       $con=mysqli_connect("localhost","root","","immobilier_db");
        $s=mysqli_query($con,"select * from produit_panier order by prix ")
       ;
                   foreach($listProduits as $row){
                    $photoCoreInstance=new photoCore();
                  //  $nature= $row['nom'];
                   // $listPhotos = $photoCoreInstance->afficherlistPhotosParCat($nature)

                     
  ?>

  <tr>
        <td>
            <?PHP echo $row['nom']; ?>

         </td>
        <td>
             <?PHP echo $row['prix']; ?>
        </td>
        <td>
            <?PHP echo $row['nb_chambre'];?>
        </td>
        <td>
            <?PHP echo $row['description']; ?>
        </td>
        <td>
            <?PHP echo $row['localisation'];
      ?>
      
        
        </td>
       

        <td>
            <form method="POST" action="deleteProduit.php">
                <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
                <input type="submit" id="delete" name="supprimer" class="btn delicious-btn"' value="" style="background-image: url('img/delete.png') ; background-repeat: no-repeat;  background-size: 29px;  height: 32; width: 32;">
            </form>
        </td>        
       

        <td>
              <button style=" background: transparent;
    border: none !important;
    font-size:0;">
              <a name="modifier" class="btn delicious-btn" href="ModifProduit.php?id=<?PHP echo $row['id']; ?>"  value="" style="background-image: url('img/edit.png') ; background-repeat: no-repeat;  background-size: 32px; height: 45; width: 45;">

              </a>
            </button> 
        </td>
         <td>
             <form method="POST" action="gestphoto.php?id=<?PHP echo $row['id']; ?>">
            <input type="submit" id="gphoto" name="view" class="btn delicious-btn"' value="" style="background-image: url('img/camera.png') ; background-repeat: no-repeat;  background-size: 32px; height: 32; width: 32;">
 </form>
        </td>



  </tr>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</section>

 

 <?php  
 $connect = mysqli_connect("localhost", "root", "", "immobilier_db");  
 $query = "
SELECT produit_panier.localisation as types, count(localisation)  AS somme FROM produit_panier group by localisation";  
 $result = mysqli_query($connect, $query);  
 ?>  
 


    


  <script src="js/jquery-2.2.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.dataTables.min.js"></script>
  <script src="js/dataTables.bootstrap.min.js"></script>
  <script src="js/select2.full.min.js"></script>
  <script src="js/jquery.inputmask.js"></script>
  <script src="js/jquery.inputmask.date.extensions.js"></script>
  <script src="js/jquery.inputmask.extensions.js"></script>
  <script src="js/moment.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/icheck.min.js"></script>
  <script src="js/fastclick.js"></script>
  <script src="js/jquery.sparkline.min.js"></script>
  <script src="js/jquery.slimscroll.min.js"></script>
  <script src="js/jquery.fancybox.pack.js"></script>
  <script src="js/app.min.js"></script>
  <script src="js/jscolor.js"></script>
  <script src="js/on-off-switch.js"></script>
    <script src="js/on-off-switch-onload.js"></script>
    <script src="js/clipboard.min.js"></script>
  <script src="js/demo.js"></script>
  <script src="js/summernote.js">

             
 

 
</script>
  <?PHP
}
?>
<?php include "include/footer.php";?>
   
  <!-- js placed at the end of the document so the pages load faster -->
 
