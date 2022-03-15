<?php

require 'includes/functions.php';
if(isset($_POST["id"])):
$id=Escape_string($_POST["id"]);
$qte=$_POST["qte"];

$sql="SELECT * FROM products WHERE product_id='$id';";

$res=Query($sql);
$row=fecth_array($res);
if(isset($_SESSION["product_".$id]))
{
    $_SESSION["product_".$id] = array(
        'id'=>$row["product_id"],
        'title'=>$row["product_title"],
        'price'=>$row["product_price"],
        'qte'=>$qte+$_SESSION["product_".$id]["qte"],
        'total'=>$row["product_price"]*($qte+$_SESSION["product_".$id]["qte"])
    );

}else{
    $_SESSION["product_".$id] = array(
        'id'=>$row["product_id"],
        'title'=>$row["product_title"],
        'price'=>$row["product_price"],
        'qte'=>$qte,
        'total'=>$row["product_price"]*$qte
    );
    $_SESSION["count"]+=1;
}

$_SESSION["totaux"]+=($row["product_price"]*$qte);

redirect("cart.php");
endif;
