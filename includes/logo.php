<div class="row">
    <div class="col-md-4">
         <a href="index.php" class="btn btn-link">
            <span id="logo1" class="text-success display-4 ml-5"> Shop</span>
         <span id="logo2" class="text-success display-4 ">.net</span>
        </a>
    </div>
 
  
  <div class="col-md-8 mt-4">
    <div class="float-right">
         <div class="dropdown">
         <button class="btn btn-link text-success dropdown-toggle" style="margin-right:80px" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Compte
         </button>
         <?php 
            if(isset($_SESSION["logged"]) && $_SESSION["logged"]):
            
         ?>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="registre.php"> <i class="fa fa-user "></i> <?php echo $_SESSION ["username"]; ?></a>
           <a class="dropdown-item" href="logout.php"> <i class="fa fa-sign-out"></i> Deconnexion</a>
        
         </div>
          <?php else: ?>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="registre.php"> <i class="fa fa-user-plus "></i> Insciption</a>
           <a class="dropdown-item" href="login.php"> <i class="fa fa-sign-in"></i> Connexion</a>
        
         </div>
         <?php endif; ?>
       </div>
  </div>
     <div class="float-right">
     <div class="dropdown">
         <button class="btn btn-link text-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fa fa-cart-arrow-down"></i> Panier
         </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="cart.php"><?php echo !empty($_SESSION["count"]) ? $_SESSION["count"] : ""; ?> Produit(s)</a>      
        </div>
     </div>
  </div>
  </div> <!--hadi dial row-->