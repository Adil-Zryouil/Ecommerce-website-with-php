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
  <?php 
                     $id=Escape_string($_GET['id']);
                     $req="select * from products where product_id = $id";
                     $res=Query($req);
                     if($res->num_rows >0){
                     $row=fecth_array($res);
    
                 ?>
    <div class="col-md-5 ml-5"  >
    <div class="card mt-4 p-1 mx-3">
        <div class="card-body"
            <h5 class="card-header bg-dark text-white " ><i class="fa fa-list"></i> Boutique</h5>
                
                 <div class=" mt-2 card-img-top">
                   <img src="<?php echo $row["product_image"]; ?>" class="w-100 img-fluid" alt="">
                 </div>
                 <h4 class="card-title"><?php echo $row["product_title"]; ?></h4>
                 <p><span class="badge badge-success"><?php echo $row["product_price"]; ?> dh</span>  <span class="text-danger"><strike> <?php echo $row["old_price"]; ?> dh</strike></span></p>
                  <p class="lead card-text" ><?php echo $row["product_description"]; ?></p>
                 
               
        </div>
    </div>
    </div>
    <div class="col-md-4 mt-5">
        <form action="checkout.php" method="post" class="p-2">
            <div class="form-group">
                <label for="">Qte*</label><input type="number" value="1" min="1" max="<?php echo $row["product_quantity"]; ?>" name="qte" style="width:20%" id="" class="form-control">
                <input type="hidden" name="id" value="<?php echo $row["product_id"]; ?>">
            </div>
            <div class="form-group">
                <label for="">
                <button class="btn btn-primary" type="submit"><i class="fa fa-shopping-cart"></i> Ajouter au panier</button>
            </div>
        </form>
    </div>
    <?php }
    else{ ?>
        <div class="alert alert-info mx-3 w-100 mt-4">
    <strong>Vide</strong> Aucune produit.
  </div>
   <?php }
        
    ?>
    </div><!--hadi nihayate had row tani-->
    <footer class="bg-dark mt-3" >
    <p class="lead text-center text-white mt-2">Zryouil Adil &copy;2021</p>
</footer>


<?php
include 'includes/footer.php';

?>
