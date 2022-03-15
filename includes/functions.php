<?php
#require bach la tra erreur ihbss
 require 'config.php';

function redirect($location) {
    header("location:".$location);
}

function Query($sql) {
    #had $cnx jay mn require orah global dkchi lach zdna global bach nakhdoh 
    global $cnx;
    return mysqli_query($cnx,$sql);
}

//had function kt7mi string
function Escape_string($string) {
    global $cnx;
    return mysqli_real_escape_string($cnx,$string);
}

// fetch array mni kt executer l query katreturni resultat
function fecth_array($result) {
    return mysqli_fetch_array($result);
}

//had function katkhwi session mn whd var logged bach n deconnectaw
function logout () {
    $_SESSION['logged'] = false;
    session_destroy();
    header("location:index.php");
}

# had lfunction katkhwi lpanier 
function empty_cart($id,$price) {
    //unset ktkhwi gha var whd mn session
   unset($_SESSION["products_".$id]);
   //hna kn9ss whd mn var count lifi session
   $_SESSION['count'] = $_SESSION['count'] - 1;
   //hna kn9ss dak taman dia lpoduit li thayd mn lpanier
   $_SESSION['totaux'] = $_SESSION['totaux'] - $price;
   # had redirect rah gha function li sibna gbila
   redirect("cart.php");
   // MA3MOMA: cart rahiya panier bi anglais*
}

?>