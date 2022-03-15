<?php
include 'includes/header.php';

?>


  <div class="card main bg-light">
  <?php 
      include 'includes/logo.php';
  ?>
 
  </div>
   <?php  include 'includes/nav.php';  ?>
  <div class="row">
   
    <div class="col-md-6 mx-auto"  >
    <div class="card mt-4 p-1">
        <div class="card-body">
            <h5 class="card-header bg-dark text-white text-center " ><i class="fa fa-envelope"></i> Contact</h5>
            <form action="contact.php" method="post" class="mt-2"> 
                <?php
                if(isset($_POST["send"])):
                    if(!empty($_POST["email"]))
                    {
                        
                        $email=Escape_string($_POST["email"]);
                        $msj=Escape_string($_POST["msj"]);
                        $req="insert into contacts values (null,'$email','$msj');";
                        if(Query($req))
                        {
                            echo '<div class="alert alert-success" > <strong>Le Message est bien Envoyer</strong> Merci Beaucoup :) </div>';
                        }
                    }else {
                        echo '<div class="alert alert-danger" > <strong>Se connecter d abord pour acheter </strong> </div>';
                    }
                endif;  
                ?>
                    <div class="form-group">
                    <label for="">Email*</label>
                    <input type="email" name="email" class="form-control" value="<?php if(isset($_SESSION["usermail"])) echo $_SESSION ["usermail"]; ?>" placeholder="Connecter vous pour passer un message" readonly>
                    </div>
                    <div class="form-group">
                    <label for="">Message*</label>
                   <textarea name="msj" class="form-control" id="" cols="30" rows="10" placeholder="Message" ></textarea>
                    </div>
                    <div class="form-group">
                    <button type="submit" name="send" class="btn btn-primary">Valider</button>
                    </div>
                
            </form>
        </div>
    </div>
    </div>
    </div><!--hadi nihayate had row tani-->
    <footer class="bg-dark mt-3" >
    <p class="lead text-center text-white mt-2">Zryouil Adil &copy;2021</p>
</footer>


<?php
include 'includes/footer.php';

?>
