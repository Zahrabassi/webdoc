<?php
ob_start();
session_start();
include("inc/config.php");
include("inc/functions.php");
include("inc/CSRF_Protect.php");
$csrf = new CSRF_Protect();
$error_message='';

if(isset($_POST['form1'])) {
        
    if(empty($_POST['email']) || empty($_POST['password'])) {
        $error_message = 'Email and/or Password can not be empty<br>';
    } else {
    
    $email = strip_tags($_POST['email']);
    $password = strip_tags($_POST['password']);

      $statement = $pdo->prepare("SELECT * FROM tbl_user WHERE email=? AND status=?");
      $statement->execute(array($email,'Active'));
      $total = $statement->rowCount();    
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);    
        if($total==0) {
            $error_message .= 'Email Address does not match<br>';
        } else {       
            foreach($result as $row) { 
                $row_password = $row['password'];
            }
        
            if( $row_password != md5($password) ) {
                $error_message .= 'Password does not match<br>';
            } else {       
            
        $_SESSION['user'] = $row;
                header("location: index.php");
            }
        }
    }

    
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/ionicons.min.css">
  <link rel="stylesheet" href="css/datepicker3.css">
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="css/select2.min.css">
  <link rel="stylesheet" href="css/dataTables.bootstrap.css">
  <link rel="stylesheet" href="css/AdminLTE.min.css">
  <link rel="stylesheet" href="css/_all-skins.min.css">

  <link rel="stylesheet" href="style.css">
  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
 <div id="login-page">
    <div class="container">
      <form class="form-login" action="index.php">
        <h2 class="form-login-heading">sign in now</h2>
        <div class="login-wrap">
     <?php 
      if( (isset($error_message)) && ($error_message!='') ):
          echo '<div class="error">'.$error_message.'</div>';
      endif;
      ?>  
    <form action="" method="post">
      <?php $csrf->echoInputField(); ?>
      <input type="hidden" name="_csrf" value="98771d80f266ac70daf07da4ac446ff5" />     <div class="form-group has-feedback">
        <input class="form-control" placeholder="Email address" name="email" type="email" autocomplete="off" autofocus value="">
      </div>
      <div class="form-group has-feedback">
        <input class="form-control" placeholder="Password" name="password" type="password" autocomplete="off" value="">
      </div>
      <div class="row">
        <div class="col-xs-8"></div>
        <div class="col-xs-4">
          <input type="submit" class="btn btn-primary btn-block btn-flat login-button" name="form1" value="Log In">
        </div>
      </div>
    </form>
  </div
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("img/login-bg.jpg", {
      speed: 500
    });
  </script>

<script src="js/jquery-2.2.3.min.js"></script>
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
<script src="js/app.min.js"></script>
<script src="js/demo.js"></script>


</body>

</html>
