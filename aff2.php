
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <title>DATA TABLE</title>

  <!-- Favicons -->
  <link href="img/Immo.jpg" rel="icon">
  <link href="img/Immo.jpg" rel="apple-touch-icon">>
  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>Immobilliere<span> Jarreya</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
    
          <!-- settings end -->
          <!-- inbox dropdown start-->
    
          <!-- inbox dropdown end -->
    
          <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li>
            <a class="logout" href="login.html">Logout</a>
          </li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
<aside>
  <div id="sidebar" class="nav-collapse ">
    <!-- sidebar menu start-->
    <ul class="sidebar-menu" id="nav-accordion">
      <p class="centered">
        <a href="profile.html"><img src="img/maki.jpg" class="img-circle" width="80"></a>
      </p>
      <h5 class="centered">ADMIN</h5>
      <li class="mt">
        <a href="index.html">
          <i class="fa fa-dashboard"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="sub-menu">
        <a href="javascript:;">
          <i class="fa fa-book"></i>
          <span>Extra Pages</span>
        </a>
        <ul class="sub">
          <li>
            <a href="login.html">Login</a>
          </li>
          <li>
            <a href="profile.html">Profile</a>
          </li>
          <li>
            <a href="invoice.html">Invoice</a>
          </li>
        </ul>
      </li>
      <li class="sub-menu">
        <a class="active" href="javascript:;">
          <i class="fa fa-th"></i>
          <span>Data Tables</span>
        </a>
        <ul class="sub">
          <li class="active">
            <a href="basic-table.php">Basic Table</a>
          </li>
        </ul>
        <!-- sidebar menu end-->
  </div>
</aside>
<!-- sidebar menu end-->
</div>
</aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Basic Table</h3>
        <div class="row">
          <div class="col-md-12">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i> Clients</h4>
              <hr>
                 <?php
  //connection au serveur:
  $cnx = @mysql_connect( "localhost", "root", "" ) ;
 
  //sélection de la base de données:
  $db = @mysql_select_db( "INFOS" ) ;
 
  //récupération de la variable d'URL,
  //qui va nous permettre de savoir quel enregistrement modifier
  $id  = $_GET["idPersonne"] ;
 
  //requête SQL:
  $sql = "SELECT *
            FROM personnes
	    WHERE id = ".$id ;
 
  //exécution de la requête:
  $requete = mysql_query( $sql, $cnx ) ;
 
  //affichage des données:
  if( $result = mysql_fetch_object( $requete ) )
  {
  ?>
<form name="insertion" action="aff3.php" method="POST">
  <input type="hidden" name="id" value="<?php echo($id) ;?>">
  <table border="0" align="center" cellspacing="2" cellpadding="2">
    <tr align="center">
      <td>nom</td>
      <td><input type="text" name="nom" value="<?php echo($result->nom) ;?>"></td>
    </tr>
    <tr align="center">
      <td>prenom</td>
      <td><input type="text" name="prenom" value="<?php echo($result->prenom) ;?>"></td>
    </tr>
    <tr align="center">
      <td>adresse</td>
      <td><input type="text" name="adresse" value="<?php echo($result->adresse) ;?>"></td>
    </tr>
    <tr align="center">
      <td>code postal</td>
      <td><input type="text" name="codePostal" value="<?php echo($result->cp) ;?>"></td>
    </tr>
    <tr align="center">
      <td>numéro de téléphone</td>
      <td><input type="text" name="telephone" value="<?php echo($result->telephone) ;?>"></td>
    </tr>
    <tr align="center">
      <td colspan="2"><input type="submit" value="modifier"></td>

    </tr>
  </table>
</form>
  <?php
  }//fin if 
  ?>
            </div>
          </div>
        </div>
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Ste El Yosr De Quincaillerie</strong>. All Rights Reserved
        </p>
        <a href="basic_table.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  
</body>

</html>
