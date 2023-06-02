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
        
 <div class="col-lg-8 mt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title text-center">Liste des administrateurs</h4>
                <div class="single-table">
                    <div class="table-responsive">
                        <table class="table text-center">
                            <thead class="text-uppercase bg-primary">
                                <tr class="text-white">
                                    <th scope="col">ID</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Prénom</th>
                                    <th scope="col">Grere</th>
                                     <th scope="col">Actions</th>
                                    
                                </tr>
                            </thead>

            <?php 

                  $recuperUser= $bdd->prepare('SELECT * FROM admin ');
                 $recuperUser->execute(array());
                 while($user = $recuperUser->fetch())
                 {
                    ?>

                     <tbody>
                            <tr>
                                <th scope="row"><?php echo $user['id']; ?></th>
                                 <td><?php echo $user['nom']; ?></td>
                                <td><?php echo $user['prenom']; ?></td>
                                <td><?php echo $user['genre']; ?></td>

                                <td>
                                    <a class="btn bg-primary text-white" href="modifierAdmin.php?id=<?php echo $user['id'] ?>">Modifier</a>

                                </td>
                                   
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



     <div class="col-lg-4 mt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title text-center">Actions </h4>
                <div class="single-table">
                    <div class="table-responsive">
                        <table class="table text-center">
                            <thead class="text-uppercase bg-primary">
                                <tr class="text-white">
                                    <th scope="col">Actions d'entrgistrement</th>
                                    
                                    
                                </tr>
                            </thead>


                     <tbody>
                            <tr>
                                <th scope="row"><a href="comptePsyc.php" class="btn bg-primary text-white">Ajouter un Psychologue </a></th>
                                
                                   
                            </tr>
                            <tr>
                                <th scope="row"><a href="compteAdmin.php" class="btn bg-primary text-white">Ajouter un Administrateur </a></th>
                                
                                   
                            </tr>
                        </tbody>

                           
                               


                           
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
   </div>
   


<div class="container">
    
    <div class="row">
        
         <div class="col-lg-12 mt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title text-center">Liste des Psycologues</h4>
                <div class="single-table">
                    <div class="table-responsive">
                        <table class="table text-center">
                            <thead class="text-uppercase bg-primary">
                                <tr class="text-white">
                                    <th scope="col">ID</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Postnom</th>
                                    <th scope="col">Prénom</th>
                                    <th scope="col">Grere</th>
                                    <th scope="col">Tel</th>
                                    <th scope="col">Mot de passe</th>
                                    <th>Actions</th>
                                    
                                </tr>
                            </thead>

                            <?php 

                                    $recuperUser= $bdd->prepare('SELECT * FROM psychologue ');
                 $recuperUser->execute(array());
                 while($user = $recuperUser->fetch()){
                    ?>

                     <tbody>
                                <tr>
                                    <th scope="row"><?php echo $user['idpsc']; ?></th>
                                    <td><?php echo $user['nom']; ?></td>
                                    <td><?php echo $user['postnom']; ?></td>
                                    <td><?php echo $user['prenom']; ?></td>
                                    <td><?php echo $user['genre']; ?></td>
                                    <td><?php echo $user['telephone']; ?></td>
                                    <td><?php echo $user['motdepasse']; ?></td>
                                    <td>
                                     <a class="btn bg-primary text-white" href="modifierPsych.php?idpsc=<?php echo $user['idpsc'] ?>">Modifier</a>
                                    </td>
                                    </td>

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


<div class="container">
    <div class="row">
    
    <div class="col-lg-12 mt-5 mb-5">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title text-center">Liste des patients</h4>
                <div class="single-table">
                    <div class="table-responsive">
                        <table class="table text-center">
                            <thead class="text-uppercase bg-primary">
                                <tr class="text-white">
                                    <th scope="col">Numero</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Prénom</th>
                                    <th scope="col">Grere</th>
                                    <th scope="col">Actions</th>
                                    
                                </tr>
                            </thead>

                            <?php 

                                    $recuperUser= $bdd->prepare('SELECT * FROM patient ');
                 $recuperUser->execute(array());
                 $num=0;
                 while($user = $recuperUser->fetch()){
                     $num+=1;
                    ?>

                     <tbody>
                                <tr>
                                    <th scope="row"><?php echo$num; ?></th>
                                    <td><?php echo $user['nom']; ?></td>
                                    <td><?php echo $user['prenom']; ?></td>
                                    <td><?php echo $user['genre']; ?></td>
                                    <td> <a onclick="return confirm ('Vous-vous supprimer ce client ? ')"  class="btn bg-danger text-white" href="supprimerPatien.php?id=<?php echo $user['id'] ?>">Supprimer</a></td>
                                    
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