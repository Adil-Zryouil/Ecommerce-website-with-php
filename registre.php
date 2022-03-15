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
            <h5 class="card-header bg-dark text-white text-center " ><i class="fa fa-user-plus"></i> Inscription</h5>
            <?php
                if(isset($_GET["send"])) {
                    if(!empty($_GET["nom"]) && !empty($_GET["prenom"]) && !empty($_GET["email"]) && !empty($_GET["pass"])) {
                    $nom=Escape_string($_GET["nom"]." ".$_GET["prenom"]);
                    $email=Escape_string($_GET["email"]);
                    $pass=Escape_string(sha1($_GET["pass"]));
                    $req="insert into users values (null,'$nom','$email','$pass');";
                    if(Query($req))
                    {
                        echo '<div class="alert alert-success" > Le compte est bien créer. </div>';
                    }
                }else{
                    echo '<div class="alert alert-danger" > Rempliez s il vous plait tous les données. </div>';
                }
                }
            ?>
            <form action="registre.php" method="get" class="mt-2"> 
                <div class="form-group">
                    <label for="">Nom*</label>
                    <input type="text" name="nom" class="form-control" placeholder="Entre votre nom">
                    </div>
                    <div class="form-group">
                    <label for="">Prenom*</label>
                    <input type="text" name="prenom" class="form-control" placeholder="Entre votre prenom">
                    </div>
                    <div class="form-group">
                    <label for="">Email*</label>
                    <input type="email" name="email" class="form-control" placeholder="Entre votre email">
                    </div>
                    <div class="form-group">
                    <label for="">Pass*</label>
                    <input type="password" name="pass" class="form-control" placeholder="Entre votre mot de passe">
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
