 
<?php
session_start();
include "connexion.php"; 
if(!$_SESSION['id'])
{
    header('Location: index.php');
}

$getid=$_GET['id'];
$_SESSION['ids']=$getid;
if(isset($_GET['id']) and !empty($_GET['id']))
    {
        
        $recuperUser= $bdd->prepare('SELECT psychologue.*,patient.*  from psychologue, patient where psychologue.idpsc=? OR patient.id=?');
        $recuperUser->execute(array($getid, $getid));
       if($recuperUser->rowCount() > 0)
        {
           if(isset($_POST['envoyer']))
            {
                   
                $message= nl2br(htmlspecialchars($_POST['message']));
                $insererMessage=  $bdd->prepare('INSERT INTO message(message, id_destinateur, id_auteur) VALUES (?,?,?)');
                $insererMessage->execute(array($message,$getid ,$_SESSION['id']));
            }
        }
        else
    {
        echo "aucun utilisateur n'a été trouvé";
    }
        
       
    }
    else
    {
        echo "aucun identifiant n'a été trouvé";
    }

?>

 <style >
  section
    {
      width: 45%;
      padding-top: 8%;
      padding-bottom: 8%;
    }
    .OK
    {
      width: 45%;
    }
    .form
    {
      width: 45%;
    }
    .btn
    {
       margin-right:10%;
    }
    @media (max-width: 55em)
  {
    section
    {
      width: 60%;
      padding-top: 13%;
       padding-bottom: 10%;
    }
    .OK
    {
      width: 60%;
    }
    .form
    {
      width: 60%;
    }
  }
  @media (max-width: 35em)
  {
    section
    {
      width: 100%;
      padding-top: 18%;
       padding-bottom: 15%;
    }
    .OK
    {
      width: 100%;
    }
    .form
    {
      width: 100%;
    }
    .btn
    {
       margin-right:3%;
    }

  }
</style>
 <link rel="stylesheet" href="css/bootstrap.min.css">
   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

 <body style="background-color: #f1f1f1">
   
 

<section id="message" style=" margin: auto;   background: #FFFF" class=" ">
  
  <div  style=" height: 10vh;  top: 0; position: fixed ;    " class="OK text-white bg-primary align-items-center ">
    
           
            <p class="mb-0 fw-bold text-center"  style=" margin-top: 3%;">Block de la discussion</p>
          
             <a href="index.php" class="text-primary btn bg-white " style="margin-top: -3%; margin-left: 2%;">Fermer</a>

  </div>


  
  


  
  <?php

 include "connexion.php"; 
 $getid=$_SESSION['id'];
 
 $getid=$_GET['id'];
     $recupererMessage= $bdd->prepare('SELECT * FROM message WHERE id_auteur = ? AND id_destinateur = ? OR id_auteur = ? AND id_destinateur = ? ' );
     $recupererMessage->execute(array($_SESSION['id'], $_GET['id'], $_GET['id'],$_SESSION['id']  ));
        while ($message = $recupererMessage->fetch())
        {
            if($message['id_destinateur']== $getid)
            {
                ?>
                    
                <div class="d-flex flex-row justify-content-end mb-4">
    <div class="p-3 me-3 border    bg-primary text-white" style="border-radius:15px 15px 0px 10px;">
      <p class="small mb-0"><?= $message['message'];?></p>
    </div>
   
  </div>

                           

                <?php 
            }
            # code... message reissie
            elseif($message['id_destinateur']== $_SESSION['id'])
            {
            ?>

            <div class="d-flex flex-row justify-content-start mb-4">
   
    <div class="p-3 ms-3 border comming" style="border-radius:15px  15px 10px 0px ;  ">
      <p class="small mb-0"><?= $message['message'];?></p>
    </div>
  </div>
                        
                                            </div>
                                    </div>
                <?php 
            }
                    
        }

?>
  
           

<form method="post" >
  <div class="form bg-primary" style=" height: 9vh;  bottom: 0; position: fixed; padding-top: 1%; padding-left: 2%;">
    
    <textarea autocomplete="off" class="form-control" rows="1" style="width: 66%; border-radius:10px 0 0   10px  ; margin-left: 3%; /*padding: 2%;*/  display: inline-block;" name="message" placeholder="Entrer un message..." required></textarea>
   
    <button  style="float: right;   border: none;" class="text-primary btn bg-white" type="submit"  name="envoyer">envoyer</button>


 </body>
  


</form>
 </section>

 <script >
     setInterval('load_messages()', 500);
     function load_messages(){
        $('#messages').load('lord.php');
     } 
</script>
</body>