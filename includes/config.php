<?php
//had ob_start kat cleani l RAM
  ob_start();
  session_start();
  # hado rahom des constants
  define('host','localhost');
  define('user','root');
  define('pass','');
  define('DB','ecome_DB');
  
  $cnx=mysqli_connect(host,user,pass,DB);
  # hna 7adedna charset bach machi dir mataln é itl3 mochkil
  mysqli_set_charset($cnx,"utf8");
 

?>