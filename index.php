<?php

include 'includes/header.php';
#session_destroy();
?>


  <div class="card main bg-light">
  <?php 
      include 'includes/logo.php';
  ?>
 
  </div>
   <?php  include 'includes/nav.php';
          
   ?>
  <div class="row">
    <div class="col-md-4 mx-2">
    <div class="card mt-4  " style="text-align:center; font-family:arial;  ">
        <div class="card-body">
            <h5   class="card-header bg-info text-white " >Villes</h5>
            <ul class="list-group">
              <li class="list-group-item" >Casablanca</li>
              <li class="list-group-item" >El jadida</li>
              <li class="list-group-item" >Rabat</li>
              <li class="list-group-item" >Tanger</li>
            </ul>
        </div>
    </div>
    </div>
    <div class="col-md-7 mx-2"  >
    <div class="card mt-4 ">
        <div class="card-body">
            <h5 style="text-align:center" class="card-header bg-success text-white mx-auto" >Boutique</h5>
            <div class="card-deck">
              <?php 
                 $req="select * from products LIMIT 3";
                 $res=Query($req);
                 while($row=fecth_array($res)):
              ?>
               <div class="card">
              <div class="card-body">
                 <div class="card-img-top">
                   <img src="<?php echo $row['product_image']; ?>" class="img-fluid" alt="">
                 </div>
                 <h4 class="card-title"><?php echo $row['product_title']; ?></h4>
                 <p><span class="badge badge-success"><?php echo $row['product_price']." dh"; ?></span>  <span class="text-danger"></span></p>
                  <p class="lead card-text" ><?php echo $row['product_description']; ?></p>
                  <p><a href="product.php?id=<?php echo $row["product_id"]; ?>" class="btn btn-outline-info ">Voir</a></p>
                </div><!--nihayate lcard-body-->
                </div>
             <?php endwhile; ?>
            </div><!--nihayat card-deck-->
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
