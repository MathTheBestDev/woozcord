<!DOCTYPE html>
<html lang="en">
<?php require('config.php'); ?>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Woozcord</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-white mb-4">Connecte toi à ton profil Woozcord</h1>
                  </div>
                  <form id="userCo" action="login.php" method="post" class="user">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="pseudoCo" aria-describedby="emailHelp" placeholder="Pseudo">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="mdpCo" placeholder="Mot de passe">
                    </div>
                    <div>
                      <input type="submit" class="btn btn-primary btn-user btn-block" value="Connexion"/>
                    </div>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Tu as oublié ton mot de passe?</a>
                  </div>
                  <?php
// On définit un login et un mot de passe de base pour tester notre exemple. Cependant, vous pouvez très bien interroger votre base de données afin de savoir si le visiteur qui se connecte est bien membre de votre site
$login_valide = "moi";
$pwd_valide = "lemien";

// on teste si nos variables sont définies
if (isset($_POST['pseudoCo']) && isset($_POST['mdpCo'])) {
	$pseudoConnexion=$_POST['pseudoCo'];
	foreach($conn->query("SELECT * FROM user WHERE pseudo='$pseudoConnexion'") as $loginUser) {

	// on vérifie les informations du formulaire, à savoir si le pseudo saisi est bien un pseudo autorisé, de même pour le mot de passe
	if ($loginUser['mdp'] == $_POST['mdpCo']) {
		// dans ce cas, tout est ok, on peut démarrer notre session

		// on la démarre :)
		session_start ();
		// on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
		$_SESSION['user'] = $loginUser['pseudo'];
		$_SESSION['mdp'] = $loginUser['mdp'];
		$_SESSION['pdp'] = $loginUser['photo'];

		// on redirige notre visiteur vers une page de notre section membre
		header ('location: index.php');
	}
	else {
		// Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
		echo '<body onLoad="alert(\'Pseudo ou mot de passe incorrect...\')">';
	}
}
}
else {
	return;
}
?>
                </div>
              </div>
            </div>
          </div>
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

</body>

</html>
