<nav class="navbar navbar-expand-lg text-white mt-4 navbar-dark bg-info ">
  <a class="navbar-brand" href="index.php">Accueil</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <?php 
             $req="select * from categories";
             $res=Query($req);
             while($row = fecth_array($res)):
          ?>
          <a class="dropdown-item bg-light" href="category.php?idc=<?php echo $row["cat_id"]; ?>"><?php echo $row["cat_title"]; ?></a>
          <?php endwhile; ?>
        </div>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="products.php">Produits <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>  
    </ul>
  
        <form action="search.php" method="post" class="form-inline ml-auto" >
            <input type="text" name="search" placeholder="Recherche" class="mr-sm-2 form-control">
            <button class="btn btn-success" type="submit" ><i class="fa fa-search"></i></button>
        </form>
    
  </div>
</nav>