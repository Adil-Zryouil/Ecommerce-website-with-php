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
        <div class="col-md-12">
            <div class="card mt-2 mb-2 mx-2">
                
                <table class="table table-hover" >
                     <thead>
                         <th>Produit</th>
                         <th>Prix</th>
                         <th>Quantité</th>
                         <th>Total</th>
                         <th>Action</th>
                     </thead>
                     
                     <tbody>
                     <?php  
                       foreach($_SESSION as $name => $product):
                            if(substr($name,0,8) == "product_"):     
                    ?>
                    <tr>
                         <td><?php echo !empty($product["title"]) ? $product["title"] : ""; ?></td>
                         <td><?php echo !empty($product["price"]) ? $product["price"] : ""; ?></td>
                         <td><?php echo !empty($product["qte"]) ? $product["qte"] : ""; ?></td>
                         <td><?php echo !empty($product["total"]) ? $product["total"] : ""; ?></td>
                         <td><a href="delete_produit.php?id=<?php echo !empty($product['id']) ? $product['id'] : '0'; ?>&price=<?php echo !empty($product["total"]) ? $product["total"] : "0"; ?>" class="btn btn-danger">
                         <div class="fa fa-trash"></div>
                        </a></td>
                    </tr>
                    <?php
                          endif;
                        endforeach;
                    ?>
                     </tbody>
                     
                </table>
                <div class="row">
                <?php 
                if(isset($_SESSION["logged"]) && isset($_SESSION["count"]) ):
                    if( $_SESSION["logged"]  && $_SESSION["count"]>0):
                ?>
                <form action="Buy.php" method="post">
                <button type="submit" style="width:150px; height:60px;" class="mr-auto ml-5 btn btn-outline-success" >Acheter</button>
                </form>
                <?php 
                 else:
                ?>
                <button type="submit" style="width:150px; height:60px;" title="Se connecter et ajouter un produit dans le panier pour acheter" class="mr-auto ml-5 btn btn-outline-danger" disabled >Acheter</button>
                <?php
                endif; 
            endif;
            ?> 
                <div class="col-md-4 ml-auto">
             <table class="table table-bordered mr-4">
                 <thead>
                     <th>Produits</th>
                     <th>Total HT</th>
                 </thead>
                 <tbody>
                     <td><?php echo !empty($_SESSION["count"]) ? $_SESSION["count"] : ""; ?></td>
                     <td><?php echo !empty($_SESSION["totaux"]) ? $_SESSION["totaux"]."DH" : ""; ?></td>
                 </tbody>
             </table>
         </div>
         
    </div><!--hadi nihayate had row tawa-->
            </div>
           
        </div>
    </div><!--hadi nihayate had row tani-->
    
    <footer class="bg-dark mt-3" >
    <p class="lead text-center text-white mt-2">Zryouil Adil &copy;2021</p>
</footer>


<?php
include 'includes/footer.php';

?>

