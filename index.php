<?php 
session_start();
include "connexion.php";

if(isset($_POST['valider']))
{
    $nom=htmlspecialchars($_POST['nom']);
    $motdepasse=htmlspecialchars($_POST['motdepasse']);

       $recuperUser= $bdd->prepare("SELECT * FROM patient WHERE nom='$nom'  and motdepasse='$motdepasse'");
        $recuperUser->execute();
        $recup = $recuperUser->fetch();
        if($recup)
        {
            $_SESSION['id']=$recup['id'];
            header("Location: psycologe.php");
        }
        else
        {
            $erreur= "Mot de passe incorrecte";
        }
}


 ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Table Basic - srtdash</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

    <style>
        .c1{
            height: 100vh;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5 )), url("image/ggggggggg.jpg");
        }
    </style>
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body style="background: #F1F1F1;">


<div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- barre de navigation -->
    <?php 

include "navBar.php";
 ?>

    <!-- KKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKK -->
    <div class="col-lg-12 mt-5">
        <div class="card c1">
            <div class="card-body">
                <h1 class="text-white my-3">Bienvenu à tous sur ce site web</h1>
                <h4 class="text-white">Ce site web vous offre la possibilité de partager avec les Psycologues on line</h4>

                <div class="col-lg-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                
                                <h5>Bienvenu dans la consultaion</h5>
                                <p>Vous pouvez maintenant passer à la consulation avec un psychologue de votre choix.</p>
                                <p>Pour passer une consultation , veuillez vous connecter à votre compte malade en cliquant sur ce buttom.</p>
                                <!-- Button trigger modal -->
                                <button style="border-radius: 10px;" type="button" class="btn btn-primary btn-flat btn-lg mt-3 " data-toggle="modal" data-target="#exampleModalCenter" ><h5>Connectez-vous ici</h5></button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalCenter">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-primary ">Connexion</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                            </div>
                                           
                                             <div class="login-area">

            <div class="login-box">
                <form method="Post">
                    <div class="login-form-head">
                        <h4>Connectez-vous ici</h4>
                       
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="exampleInputEmail1">Entrer le nom</label>
                            <input type="text" id="exampleInputEmail1" name="nom" required autocomplete="off">
                            <i class="ti-user"></i>
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputPassword1">Entrer le mot de passe</label>
                            <input type="password" id="exampleInputPassword1" name="motdepasse" required autocomplete="off">
                            <i class="ti-lock"></i>
                        </div>
                       <p class="text-danger mb-2 text-center"><?php 
                              if(isset($erreur))
                                echo $erreur;
                              ?>  </p>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit" name="valider" class="mb-2">Se connecter </button>
                            
                        </div>
                        <a href="compteMalade.php" style="text-decoration: underline;">créer un nouveau compte</a>
                    </div>
                </form>
            </div>

    </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
            </div>
        </div>
    </div>
    <div class="col-lg-12 mt-5">
        <div class="card bg-dark mb-3" style="height: 20vh;" >
            <div class="card-body text-light text-center">
            </p>
  <p class="text-light">
    ©-Copyright-FEPSI -Tous les droits reservés. Réalisé par Achille Muhima.
    <a href="https://wa.me/+243972272839">Contactez</a> 
  </p>
     
            </div>
        </div>
    </div>











    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>