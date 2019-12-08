<?php
ob_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Immobiliere Jarraya</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <!-- Favicons -->
  <link href="img/sj.png" rel="icon">
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
      <a href="index.html" class="logo"><b>Immobiliere <span>Jarraya</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-tasks"></i>
              <span class="badge bg-theme">4</span>
            </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 4 pending tasks</p>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Dashio Admin Panel</div>
                    <div class="percent">40%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                      <span class="sr-only">40% Complete (success)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Database Update</div>
                    <div class="percent">60%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                      <span class="sr-only">60% Complete (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Product Development</div>
                    <div class="percent">80%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Payments Sent</div>
                    <div class="percent">70%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                      <span class="sr-only">70% Complete (Important)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li class="external">
                <a href="#">See All Tasks</a>
              </li>
            </ul>
          </li>
          <!-- settings end -->
          <!-- inbox dropdown start-->
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-theme">5</span>
            </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 5 new messages</p>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-zac.jpg"></span>
                  <span class="subject">
                    <span class="from">Zac Snider</span>
                    <span class="time">Just now</span>
                  </span>
                  <span class="message">
                    Hi mate, how is everything?
                  </span>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-divya.jpg"></span>
                  <span class="subject">
                    <span class="from">Divya Manian</span>
                    <span class="time">40 mins.</span>
                  </span>
                  <span class="message">
                    Hi, I need your help with this.
                  </span>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-danro.jpg"></span>
                  <span class="subject">
                    <span class="from">Dan Rogers</span>
                    <span class="time">2 hrs.</span>
                  </span>
                  <span class="message">
                    Love your new Dashboard.
                  </span>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-sherman.jpg"></span>
                  <span class="subject">
                    <span class="from">Dj Sherman</span>
                    <span class="time">4 hrs.</span>
                  </span>
                  <span class="message">
                    Please, answer asap.
                  </span>
                </a>
              </li>
              <li>
                <a href="index.html#">See all messages
                </a>
              </li>
            </ul>
          </li>
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-bell-o"></i>
              <span class="badge bg-warning">7</span>
            </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow">You have 7 new notifications</p>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span> Server Overloaded.
                  <span class="small italic">4 mins.</span>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-warning"><i class="fa fa-bell"></i></span> Memory #2 Not Responding.
                  <span class="small italic">30 mins.</span>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span> Disk Space Reached 85%.
                  <span class="small italic">2 hrs.</span>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-success"><i class="fa fa-plus"></i></span> New User Registered.
                  <span class="small italic">3 hrs.</span>
                </a>
              </li>
              <li>
                <a href="index.html#">See all notifications</a>
              </li>
            </ul>
          </li>
          <!-- notification dropdown end -->
        </ul>
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
            <a href="profile.html"><img src="img/sj.jpg" class="img-circle" width="80"></a>
          </p>
          <h5 class="centered">Med Ali Jarraya</h5>
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
                <a href="blank.html">Blank Page</a>
              </li>
              <li>
                <a href="login.html">Login</a>
              </li>
              <li>
                <a href="lock_screen.html">Lock Screen</a>
              </li>
              <li>
                <a href="profile.html">Profile</a>
              </li>
              <li>
                <a href="invoice.html">Invoice</a>
              </li>
              <li>
                <a href="pricing_table.html">Pricing Table</a>
              </li>
              <li>
                <a href="faq.html">FAQ</a>
              </li>
              <li>
                <a href="404.html">404 Error</a>
              </li>
              <li>
                <a href="500.html">500 Error</a>
              </li>
            </ul>
          </li>
          <li class="sub-menu">
            <a class="active" href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Promotion</span>
            </a>
            <ul class="sub">

              <li class="active"><a href="Ajouter_promotion.php">Ajouter Promotion</a></li>
              <li><a href="afficherpromotion.php">Afficher Promotion</a>
              </li>
            </ul>
          <li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>calcule Promo</span>
            </a>
            <ul class="sub">
              <li><a href="calcul_promotion.html">calcul Promotion</a></li>
              <li><a href="affichercalculpromotion.php">Afficher calcul Promotion</a></li>
            </ul>
          </li>
          <li>

          <li>
            <a href="inbox.html">
              <i class="fa fa-envelope"></i>
              <span>Mail </span>
              <span class="label label-theme pull-right mail-info">2</span>
            </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class=" fa fa-bar-chart-o"></i>
              <span>Charts</span>
            </a>
            <ul class="sub">
              <li>
                <a href="morris.html">Morris</a>
              </li>
              <li>
                <a href="chartjs.html">Chartjs</a>
              </li>
              <li>
                <a href="flot_chart.html">Flot Charts</a>
              </li>
              <li>
                <a href="xchart.html">xChart</a>
              </li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-comments-o"></i>
              <span>Chat Room</span>
            </a>
            <ul class="sub">
              <li>
                <a href="lobby.html">Lobby</a>
              </li>
              <li>
                <a href="chat_room.html"> Chat Room</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="google_maps.html">
              <i class="fa fa-map-marker"></i>
              <span>Google Maps </span>
            </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <?PHP
    include "core/promotionC.php";
    $promotion1C = new promotionC();
    $listepromotion = $promotion1C->afficherpromotion();

    //var_dump($listepromotions->fetchAll());
    ?>
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> DATA TABLES </h3>
        <!-- row -->
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> Produits en Promotion</h4>
                <hr>
                <thead>

                  <th><i class="fa fa-bullhorn"></i> Reference</th>
                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Nom Produit</th>
                  <th><i class=" fa fa-edit"></i> Photo produit </th>
                  <th><i class="fa fa-bookmark"></i> Prix initiale</th>
                  <th><i class=" fa fa-edit"></i> Pourcentage </th>
                  <th><i class=" fa fa-edit"></i> Fin de Promotion</th>
                  <th><i class=" fa fa-edit"></i> Gérer </th>

                  <th></th>

                  </tr>

                </thead>


                <p>Rechercher<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name"></p>

                <p align="center"><button onclick="sortTable()">TRIER</button></p>
                <tbody id="myTable">
                  <?PHP
                  $i = 0;
                  foreach ($listepromotion as $row) {
                    $i++;

                    ?>
                    <tr>
                      <td>
                        <a href="basic_table.html#"><?PHP echo $row['ref']; ?></a>
                      </td>
                      <td class="hidden-phone"><?PHP echo $row['nomp']; ?></td>
                      <td style="width:150px;"><img src="img/<?php echo $row['photop']; ?>" alt="img description" style="width:140px;"></td>
                      <td><?PHP echo $row['prixi']; ?></td>
                      <td><span class="label label-warning label-mini"><?PHP echo $row['pourcentage']; ?>%</span></td>
                      <td class="hidden-phone"><?PHP echo $row['prixf']; ?></td>
                      <td>

                        <button class="btn btn-primary btn-xs" name="kk" data-toggle="modal" data-target="#myModal" <?php $ref = $row['ref']; ?>><i class="fa fa-pencil"></i></button>
                        <input type="hidden" value="<?PHP echo $row['ref']; ?>" name="reff<?php echo $i ?>">

                        <input type="hidden" value="<?PHP echo $row['ref']; ?>" name="ref">
                        <form style="display: inline;" method="POST" action="supprimerpromotion.php">
                          <button class="btn btn-danger btn-xs" name="supprimer"><i class="fa fa-trash-o"></i></button>
                          <input type="hidden" value="<?PHP echo $row['ref']; ?>" name="ref">
                        </form>

                      </td>
                    </tr>
                  <?PHP
                  }

                  ?>
                </tbody>
              </table>
            </div>
            <script>
              function myFunction() {
                var input, filter, table, tr, td, i, txtValue;
                input = document.getElementById("myInput");
                filter = input.value.toUpperCase();
                table = document.getElementById("myTable");
                tr = table.getElementsByTagName("tr");
                console.log(tr);
                for (i = 0; i < tr.length; i++) {
                  td = tr[i].getElementsByTagName("td")[1];
                  console.log(td);
                  if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                      tr[i].style.display = "";
                    } else {
                      tr[i].style.display = "none";
                    }
                  }
                }
              }

              function sortTable() {
                var table, rows, switching, i, x, y, shouldSwitch;
                table = document.getElementById("myTable");
                switching = true;
                /*Make a loop that will continue until
                no switching has been done:*/
                while (switching) {
                  //start by saying: no switching is done:
                  switching = false;
                  rows = table.rows;
                  /*Loop through all table rows (except the
                  first, which contains table headers):*/
                  for (i = 1; i < (rows.length - 1); i++) {
                    //start by saying there should be no switching:
                    shouldSwitch = false;
                    /*Get the two elements you want to compare,
                    one from current row and one from the next:*/
                    x = rows[i].getElementsByTagName("td")[1];
                    y = rows[i + 1].getElementsByTagName("td")[1];
                    //check if the two rows should switch place:
                    if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                      //if so, mark as a switch and break the loop:
                      shouldSwitch = true;
                      break;
                    }
                  }
                  if (shouldSwitch) {
                    /*If a switch has been marked, make the switch
                    and mark that a switch has been done:*/
                    rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                    switching = true;
                  }
                }

              }
              $(document).ready(function1 () {
  $('#dtBasicExample').DataTable({
    "pagingType": "simple" // "simple" option for 'Previous' and 'Next' buttons only
  });
  $('.dataTables_length').addClass('bs-select');
});
            </script>
<p>Click the button to print the current page.</p>

<button onclick="fonction()">Print this page</button>

<script>
function fonction() {
  window.print();
}
</script>

            <?php /*
    if(isset($_GET['reff1'])){ ?>
        <script>
          alert('a');
          myModal('show');
            
        </script>
<?php         
    }*/
            ?>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->


        </div>
        <!-- /row -->
      </section>
    </section>

    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>EL YOSR</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="basic_table.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
        </a>
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
              </div>
              <div class="modal-body">
                <?PHP
                include "entities/promotion.php";
                if (1 == 1) {
                  $promotionC = new promotionC();
                  $result = $promotionC->recupererpromotion($ref);
                  $total = $result->rowCount();
                  ?>
                  <input class=" form-control" id="cref" name="ref" minlength="2" type="text" value="<?PHP echo $ref ?>" required />
                  <?php
                    foreach ($result as $row) {
                      $ref = $row['ref'];
                      $nomp = $row['nomp'];
                      $prixi = $row['prixi'];
                      $pourcentage = $row['pourcentage'];
                      $prixf = $row['prixf'];
                      ?>
                    <form method="POST">
                      <p>Modifier promotion</p>
                      <div style="color:black;" class="row mt">
                        <div class="col-lg-12">
                          <h4><i class="fa fa-angle-right"></i>Ajouter Promotion</h4>
                          <div class="form-panel">
                            <div class=" form">
                              <form class="cmxform form-horizontal style-form" id="commentForm" method="get" action="">
                                <div class="form-group ">
                                  <label for="cref" class="control-label col-lg-2">Reference Produit</label>
                                  <div class="col-lg-10">
                                    <input class=" form-control" id="cref" name="ref" minlength="2" type="text" value="<?PHP echo $ref ?>" required />
                                  </div>
                                </div>
                                <div class="form-group ">
                                  <label for="cref" class="control-label col-lg-2">PHOTO</label>
                                  <div class="col-lg-10">
                                    <img src="img/<?php echo $row['photop']; ?>" alt="img description" style="width:140px;">
                                  </div>
                                </div>

                                <div class="form-group ">
                                  <label for="cenom" class="control-label col-lg-2">Nom Produit</label>
                                  <div class="col-lg-10">
                                    <input class="form-control " id="cnom" name="nomp" type="text" value="<?PHP echo $nomp ?>" required />
                                  </div>
                                </div>
                                <div class="form-group ">
                                  <label for="prixi" class="control-label col-lg-2">Prix Avant Promotion</label>
                                  <div class="col-lg-2">
                                    <input class="form-control " id="cprixi" type="number" name="prixi" value="<?PHP echo $prixi ?>" />
                                  </div>
                                </div>
                                <div class="form-group ">
                                  <label for="pourcentage" class="control-label col-lg-2">Pourcentage (%)</label>
                                  <div class="col-lg-2">
                                    <input class="form-control " id="cpourcentage" type="number" name="pourcentage" value="<?PHP echo $pourcentage ?>" />
                                  </div>
                                </div>
                                <td><input type="hidden" name="ref_ini" value="<?PHP echo $ref; ?>"></td>

                                <div class="form-group">
                                  <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-theme" type="submit" name="modifier">Modifier</button>
                                    <button class="btn btn-theme04" type="button">Cancel</button>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                    <?PHP
                      }
                    }
                    if (isset($_POST['modifier'])) {
                      $ph = 'promotion-40023559.jpg';
                      $p = $_POST['prixi'];
                      $k = $_POST['pourcentage'];
                      $pf = $p - ($p * ($k / 100));
                      $promotion = new promotion($_POST['ref'], $_POST['nomp'], $ph, $_POST['prixi'], $_POST['pourcentage'], $pf);
                      $promotionC->modifierpromotion($promotion, $_POST['ref_ini']);
                      echo $_POST['ref_ini'];
                      header("location:afficherpromotion.php");
                      ob_end_flush();
                    }
                    ?>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
              </div>

            </div>
          </div>

        </div>
      </div>
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