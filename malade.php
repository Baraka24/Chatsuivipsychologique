<?php 
session_start();
include "connexion.php";


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
            height: 60vh;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5 )), url("image/ggggggggg.jpg");
        }
        .weid
        {
            font-weight: bold;
        }
    </style>
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body style="background: #F1F1F1;">

  <!--  barre de navigation -->

<?php 

include "navBar.php";
 ?>

    <!-- KKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKK -->
    <div class="container">
        
<div class="row">
    
    <div class="col-lg-4 mt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title text-center"> Le psychologue connecté</h4>
                <div class="single-table">
                    <div class="table-responsive">
                        <table class="table text-center">
                            <thead class="text-uppercase bg-primary">
                                <tr class="text-white">
                                    
                                  
                                </tr>
                            </thead>

                            <?php 
                            $ids=$_SESSION['id'];

                                    $recuperUser= $bdd->prepare("SELECT * FROM psychologue where idpsc='$ids'");
                 $recuperUser->execute(array());
                 while($user = $recuperUser->fetch()){
                    ?>
 
                     <tbody class="text-left">
                                <tr>
                                    
                                  
                                   <td> <span class="weid">Nom :  </span> <?php echo $user['nom']; ?></td>
                                   
                                </tr>
                                <tr>
                                    
                                  
                                  
                                   <td><span class="weid">Postnom : </span><?php echo $user['postnom']; ?></td>
                                </tr>

                                <tr>
                                    
                                  
                                  
                                   <td> <span class="weid">Prenom : </span><?php echo $user['prenom']; ?></td>
                                </tr>
                                 </tbody>

                    <?php 


                 }
                             ?>
                           
                               


                           
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-8 mt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title text-center"> Liste de patient</h4>
                <div class="single-table">
                    <div class="table-responsive">
                        <table class="table text-center">
                            <thead class="text-uppercase bg-primary">
                                <tr class="text-white">
                                    
                                  
                                    <th scope="col">Nom</th>
                                    <th scope="col">Prénom</th>
                                   
                                    <th scope="col">message</th>
                                </tr>
                            </thead>

                            <?php 

                                    $recuperUser= $bdd->prepare('SELECT * FROM patient ');
                 $recuperUser->execute(array());
                 while($user = $recuperUser->fetch()){
                    ?>

                     <tbody>
                                <tr>
                                    
                                    
                                    <td><?php echo $user['nom']; ?></td>
                                    <td><?php echo $user['prenom']; ?></td>
                                    <td><a href="chat.php?id=<?php echo $user['id']; ?>   "><img src="image/message.png" style="width: 30px; height: 30px;"></a></td></a>
                                </tr>
                                 </tbody>

                    <?php 


                 }
                             ?>
                           
                               


                           
                        </table>
                    </div>
                </div>
            </div>
        </div>
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