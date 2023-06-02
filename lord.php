 <?php

 include "connexion.php"; 
 $getid=$_GET['id'];
 
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