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
   
    <div class="col-md-12"  >
    <div class="card mt-4 p-1">
        <div class="card-body">
            <h5 class="card-header bg-success text-white " ><i class="fa fa-list"></i> Boutique</h5>
         
              <?php 
                 $req="select * from products";
                 $res=Query($req);
                 $counter=0;
                 while($row=fecth_array($res)):
                  if($counter==0):
                 
                    ?>
                      <div class="card-deck">
                     <?php
                     $counter=0;
                   endif;
                 $counter++;
              ?>
               <div class="card">
              <div class="card-body">
                 <div class="card-img-top">
                   <img src="<?php echo $row['product_image']; ?>" width="200" height="200" class="img-fluid" alt="">
                 </div>
                 <h4 class="card-title"><?php echo $row['product_title']; ?></h4>
                 <p><span class="badge badge-success"><?php echo $row['product_price']." dh"; ?></span>  <span class="text-danger"></span></p>
                  <p class="lead card-text" ><?php echo $row['product_description']; ?></p>
                  <p><a href="product.php?id=<?php echo $row["product_id"]; ?>" class="btn btn-outline-info ">Voir</a></p>
                </div><!--nihayate lcard-body-->
                </div>
             <?php
                 if($counter==3):
                 
                  ?>
                 </div><!--nihayat card-deck-->
                   <?php
                   $counter=0;
                 endif;
            endwhile; ?>
            
        </div>
    </div>
    </div>
    </div><!--hadi nihayate had row tani-->
    <footer class="bg-dark mt-3" style="clear:both" >
    <p class="lead text-center text-white mt-2">Zryouil Adil &copy;2021</p>
</footer>


<?php
include 'includes/footer.php';

?>
