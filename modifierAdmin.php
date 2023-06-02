
<?php 
session_start();
include "connexion.php";
$id=$_GET['id'];
if (isset($_POST['envoyer'])) {
    $nom= htmlspecialchars($_POST['nom']);
    $prenom= htmlspecialchars($_POST['prenom']);
    $genre= htmlspecialchars($_POST['genre']);
    $motdepasse= htmlspecialchars($_POST['motdepasse']);


     $req=$bdd->prepare("UPDATE admin SET nom= '$nom', prenom = '$prenom', genre = '$genre', motdepasse='$motdepasse' WHERE id='$id'");
        $req->execute(array());

                if($req)
                {
                    header("location:Admin.php");
                }
            }

 ?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login - srtdash</title>
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
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
   

   <?php 

                  $recuperUser= $bdd->prepare("SELECT * FROM admin where id='$id' ");
                 $recuperUser->execute(array());
                 while($user = $recuperUser->fetch())
                 {
                    ?>

                     
                                

                             

              
    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--100">
                <form method="post">
                    <div class="login-form-head">
                         <a href="Admin.php" class="text-primary btn bg-white  " style="margin-top: -3%; float: right;">Fermer</a><br>
                        <h4>Creer un compte</h4>
                       
                    </div>
                    <div class="login-form-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nom</label>
                            <input class="form-control" type="text" id="exampleInputEmail1" name="nom" required autocomplete="off" value="<?php echo $user['nom']; ?>">
                           
                        </div>

                       

                        <div class="form-group">
                            <label for="exampleInputEmail1">Prenom</label>
                            <input class="form-control" type="text" id="exampleInputEmail1" name="prenom" required autocomplete="off" value="<?php echo $user['prenom']; ?>">
                           
                        </div>

                        <div class="form-group">

                            <select name="genre"  id="" class="form-control" >
                                
                                <option value="M" value="">M</option>
                                <option value="F">F</option>
                            </select>
                            
                           
                        </div>

                        
                        
                        <div class="form-group">
                            <label for="" class="mb-2">Password</label>
                            <input class="form-control"  type="text" id="exampleInputPassword1" name="motdepasse" required autocomplete="off" value="<?php echo $user['motdepasse']; ?>">
                            
                        </div>
                     <p class="text-success text-center mb-2">
                             <?php 
                                 if(isset($erreur))
                                 echo $erreur;
                           ?>
                                  
                     </p>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit" name="envoyer">Confirmer</button>
                            
                        </div>
                       
                    </div>
                </form>
            </div>
        </div>
    </div>

          <?php 


                }
            ?>
    <!-- login area end -->

    <!-- jquery latest version -->
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