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
            <h5 class="card-header bg-dark text-white text-center " ><i class="fa fa-sign-in"></i> Connexion</h5>
            <form action="login.php" method="get" class="mt-2"> 
                    <?php
                    if(isset($_GET["login"])) {
                        $email=$_GET["email"];
                        $pass=sha1($_GET["pass"]);
                        $req="SELECT * FROM users WHERE pass='$pass' AND email='$email';";
                        $res=Query($req);
                        if($res->num_rows > 0){
                            $row=fecth_array($res);
                           
                            $_SESSION["logged"]=true;
                            $_SESSION["username"]=$row["username"];
                            $_SESSION["id"]=$row["user_id"];
                            $_SESSION["usermail"]=$row["email"];
                            redirect("index.php");
                        }else {
                            ?>
                            <div class="alert alert-danger">Le mot de passe ou l'email est inccorrect</div>
                            <?php
                        }
                    }
                      
                    ?>
                    <div class="form-group">
                    <label for="">Email*</label>
                    <input type="email" name="email" class="form-control" placeholder="Entre votre email">
                    </div>
                    <div class="form-group">
                    <label for="">Pass*</label>
                    <input type="password" name="pass" class="form-control" placeholder="Entre votre mot de passe">
                    </div>
                    <div class="form-group">
                    <button type="submit" name="login" class="btn btn-primary">Valider</button>
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
