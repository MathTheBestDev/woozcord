<!DOCTYPE html>
<html lang="FR">
<?php require('config.php');
session_start (); ?>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Woozcord - Profil</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php require('right.php'); ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?php require('top.php'); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

         <!--  Content -->
         <div>
          <?php 
          $username=$_SESSION['user'];
          $requete = "SELECT * FROM user WHERE pseudo='$username'";
          foreach($conn->query($requete) as $row) { ?>
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><img class="img-profile rounded-circle" src="<?php echo $_SESSION['pdp'] ?>" width="50" higth="50">Profil de <?php echo $row['pseudo']?>.</h1>
            
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="card mb-3 border-bottom-message">
          <div class="card-body">
          <div class="mb-1"><img src="img/message.png" width="20" hight="20"/> | MESSAGE: <?php echo format_number($row['nbMess']); ?> messages</div>
          <img src="img/message_multi.png" width="20" hight="20"/>
                  <div class="progress mb-4">
                    <div class="progress-bar-message" role="progressbar" style="width:
                    <?php
                    if ($row['nbMess']<1000){
                      $pourMessage=$row['nbMess']/1000*100;
                      echo $pourMessage;
                    }
                    elseif ($row['nbMess']<5000){
                      $pourMessage=$row['nbMess']/5000*100;
                      echo $pourMessage;
                    }
                    elseif ($row['nbMess']<10000){
                      $pourMessage=$row['nbMess']/10000*100;
                      echo $pourMessage;
                    }
                    elseif ($row['nbMess']<25000){
                      $pourMessage=$row['nbMess']/25000*100;
                      echo $pourMessage;
                    } ?>%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" ><div text-align="center"><?php echo floor($pourMessage); ?>%</div></div>

                  </div><img src="img/message_bronze.png" width="20" hight="20"/>
                </div>
              </div>
              <div class="card mb-3 border-bottom-vocal">
          <div class="card-body">
          <div class="mb-1"><img src="img/vocal.png" width="20" hight="20"/> | VOCAL: <?php echo floor($row['hVoc']/60); ?> heures</div>
                  <div class="progress mb-4">
                    <div class="progress-bar-vocal" role="progressbar" style="width:
                    <?php
                    $heureVoc=$row['hVoc']/60;
                    if ($heureVoc<24){
                      $pourMessage=$heureVoc/24*100;
                      echo $pourMessage;
                    }
                    elseif ($heureVoc<72){
                      $pourMessage=$heureVoc/72*100;
                      echo $pourMessage;
                    }
                    elseif ($heureVoc<168){
                      $pourMessage=$heureVoc/168*100;
                      echo $pourMessage;
                    }
                    elseif ($heureVoc<336){
                      $pourMessage=$heureVoc/336*100;
                      echo $pourMessage;
                    } ?>%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" ><div text-align="center"><?php echo floor($pourMessage); ?>%</div></div>
                  </div>
                </div>
              </div>
          <div class="card mb-3 border-bottom-amongus">
          <div class="card-body">
          <div class="mb-1"><img src="img/amongus.png" width="20" hight="20"/> | AMONG US: <?php echo $row['amongus']; ?>x</div>
                  <div class="progress mb-4">
                    <div class="progress-bar-amongus" role="progressbar" style="width:
                    <?php
                    if ($row['amongus']<2){
                      $pourAmongus=$row['amongus']/2*100;
                      echo $pourAmongus;
                    }
                    elseif ($row['amongus']<5){
                      $pourAmongus=$row['amongus']/5*100;
                      echo $pourAmongus;
                    }
                    elseif ($row['amongus']<10){
                      $pourAmongus=$row['amongus']/10*100;
                      echo $pourAmongus;
                    }
                    elseif ($row['amongus']<5){
                      $pourAmongus=$row['amongus']/25*100;
                      echo $pourAmongus;
                    } ?>%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" ><div text-align="center"><?php echo floor($pourAmongus); ?>%</div></div>
                  </div>
                </div>
              </div>
          <div class="card mb-3 border-bottom-skribbl">
          <div class="card-body">
          <div class="mb-1"><img src="img/skribbl.png" width="20" hight="20"/> | SKRIBBL: <?php echo $row['skribbl']; ?>x</div>
                  <div class="progress mb-4">
                    <div class="progress-bar-skribbl" role="progressbar" style="width:
                    <?php
                    if ($row['skribbl']<1){
                      $pourSkribbl=$row['skribbl']/1*100;
                      echo $pourSkribbl;
                    }
                    elseif ($row['skribbl']<3){
                      $pourSkribbl=$row['skribbl']/3*100;
                      echo $pourSkribbl;
                    }
                    elseif ($row['skribbl']<5){
                      $pourSkribbl=$row['skribbl']/5*100;
                      echo $pourSkribbl;
                    }
                    elseif ($row['skribbl']<10){
                      $pourSkribbl=$row['skribbl']/10*100;
                      echo $pourSkribbl;
                    } ?>%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" ><div text-align="center"><?php echo floor($pourSkribbl); ?>%</div></div>
                  </div>
                </div>
              </div>
              <div class="card mb-3 border-bottom-loupgarou">
          <div class="card-body">
          <div class="mb-1"><img src="img/loupgarou.png" width="20" hight="20"/> | LOUP GAROU: <?php echo $row['loupgarou']; ?>x</div>
                  <div class="progress mb-4">
                    <div class="progress-bar-loupgarou" role="progressbar" style="width:
                    <?php
                    if ($row['loupgarou']<2){
                      $pourSkribbl=$row['loupgarou']/2*100;
                      echo $pourSkribbl;
                    }
                    elseif ($row['loupgarou']<5){
                      $pourSkribbl=$row['loupgarou']/5*100;
                      echo $pourSkribbl;
                    }
                    elseif ($row['loupgarou']<10){
                      $pourSkribbl=$row['loupgarou']/10*100;
                      echo $pourSkribbl;
                    }
                    elseif ($row['loupgarou']<25){
                      $pourSkribbl=$row['loupgarou']/25*100;
                      echo $pourSkribbl;
                    } ?>%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" ><div text-align="center"><?php echo floor($pourSkribbl); ?>%</div></div>
                  </div>
                </div>
              </div>
              <div class="card mb-3 border-bottom-tea">
          <div class="card-body">
          <div class="mb-1"><img src="img/tea.png" width="20" hight="20"/> | TEA: <?php echo $row['tea']; ?>x</div>
                  <div class="progress mb-4">
                    <div class="progress-bar-tea" role="progressbar" style="width:
                    <?php
                    if ($row['tea']<2){
                      $pourSkribbl=$row['tea']/2*100;
                      echo $pourSkribbl;
                    }
                    elseif ($row['tea']<5){
                      $pourSkribbl=$row['tea']/5*100;
                      echo $pourSkribbl;
                    }
                    elseif ($row['tea']<10){
                      $pourSkribbl=$row['tea']/10*100;
                      echo $pourSkribbl;
                    }
                    elseif ($row['tea']<25){
                      $pourSkribbl=$row['tea']/25*100;
                      echo $pourSkribbl;
                    } ?>%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" ><div text-align="center"><?php echo floor($pourSkribbl); ?>%</div></div>
                  </div>
                </div>
              </div>
              <div class="card mb-3 border-bottom-enigme">
          <div class="card-body">
          <div class="mb-1"><img src="img/enigme.png" width="20" hight="20"/> | ENIGME: <?php echo $row['enigme']; ?>x</div>
                  <div class="progress mb-4">
                    <div class="progress-bar-enigme" role="progressbar" style="width:
                    <?php
                    if ($row['enigme']<2){
                      $pourSkribbl=$row['enigme']/2*100;
                      echo $pourSkribbl;
                    }
                    elseif ($row['enigme']<5){
                      $pourSkribbl=$row['enigme']/5*100;
                      echo $pourSkribbl;
                    }
                    elseif ($row['enigme']<10){
                      $pourSkribbl=$row['enigme']/10*100;
                      echo $pourSkribbl;
                    }
                    elseif ($row['enigme']<25){
                      $pourSkribbl=$row['enigme']/25*100;
                      echo $pourSkribbl;
                    } ?>%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" ><div text-align="center"><?php echo floor($pourSkribbl); ?>%</div></div>
                  </div>
                </div>

              </div>
              <div class="card mb-3 border-bottom-blindtest">
          <div class="card-body">
          <div class="mb-1"><img src="img/blindtest.png" width="20" hight="20"/> | BLIND TEST: <?php echo $row['blindtest']; ?>x</div>
                  <div class="progress mb-4">
                    <div class="progress-bar-blindtest" role="progressbar" style="width:
                    <?php
                    if ($row['blindtest']<1){
                      $pourSkribbl=$row['blindtest']/1*100;
                      echo $pourSkribbl;
                    }
                    elseif ($row['blindtest']<3){
                      $pourSkribbl=$row['blindtest']/3*100;
                      echo $pourSkribbl;
                    }
                    elseif ($row['blindtest']<5){
                      $pourSkribbl=$row['blindtest']/5*100;
                      echo $pourSkribbl;
                    }
                    elseif ($row['blindtest']<10){
                      $pourSkribbl=$row['blindtest']/10*100;
                      echo $pourSkribbl;
                    } ?>%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" ><div text-align="center"><?php echo floor($pourSkribbl); ?>%</div></div>
                  </div>
                </div>
              </div>
              <div class="card mb-3 border-bottom-special">
          <div class="card-body">
          <div class="mb-1"><img src="img/star.png" width="20" hight="20"/> | SPECIAL: 
            <?php
            if ($row['special']==null) {
              echo "not found";
            }
            if ($row['special']=="woozcordstory"){
              echo "Gagnant de Secret Woozcord Story";
            }
            if ($row['special']=="woozcordstoryp"){
              echo "Participant de Secret Woozcord Story";
            } ?></div>
                </div>
              </div>
            </div>
        </div>
                  <?php } ?>

                </div>


                <?php require('config.php'); ?>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
<?php
function format_number($number) {
    if($number >= 1000) {
       return $number = ceiling(($number/1000), 0.05) . "k";   // NB: you will want to round this
    }
    else {
        return $number;
    }
}
function ceiling($number, $significance = 1)
    {
        return ( is_numeric($number) && is_numeric($significance) ) ? (ceil($number/$significance)*$significance) : false;
    }
    ?>