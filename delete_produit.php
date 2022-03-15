<?php
  require 'includes/functions.php';
  
  $_SESSION["totaux"]=$_SESSION["totaux"]-$_GET["price"];
  $_SESSION["count"]=$_SESSION["count"]-1;
  unset($_SESSION["product_".$_GET["id"]]);
  redirect("cart.php");

