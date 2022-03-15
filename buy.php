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
            <h5 class="card-header bg-dark text-white text-center " > Buy</h5>
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" class="mt-2"> 
                <?php
                if(isset($_POST["send"])):
                    if(!empty($_POST["email"]))
                    {
                        $cmd="";
                        foreach($_SESSION as $name => $product):
                            if(substr($name,0,8) == "product_"): 
                                $cmd = $cmd. "|Produit:". $product["title"]." Prix:". $product["price"]." Quantité:". $product["qte"]. " Total:". $product["total"];
                            endif;
                        endforeach;
                        foreach($_SESSION as $name => $product):
                            if($name=="totaux"): 
                                $cmd = $cmd. "| TOTAUX DE TOUS LES PRODUITS ET :".$product;
                            endif;
                        endforeach;
                        $email=Escape_string($_POST["email"]);
                        $num=Escape_string($_POST["num"]);
                        $req="insert into achat values (null,'$email','$num','$cmd');";
                        if(Query($req))
                        {
                            echo '<div class="alert alert-success" > <strong>L\'achat est bien Envoyer</strong> Merci Beaucoup :) nous aurons Passez un Appel avec vous Bientot</div>';
                            echo "<script> 
                            var send=document.getELementById('send');
                            send.disabled=true;
                            </script>";
                        }
                    }else {
                        echo '<div class="alert alert-danger" > <strong>Se connecter d abord pour acheter </strong> </div>';
                    }
                endif;  
                ?>
                    <div class="form-group">
                    <label for="email">Email*</label>
                    <input type="email" name="email" class="form-control" value="<?php if(isset($_SESSION["usermail"])) echo $_SESSION ["usermail"]; ?>" placeholder="Connecter vous pour passer un message" readonly>
                    </div>
                    <div class="form-group">
                    <label for="num">Numero de votre telephone*</label>
                   <input type="text" name="num" id="num">
                    </div>
                    <div class="form-group">
                    <button type="submit" name="send" id="send" class="btn btn-primary">Valider</button>
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
