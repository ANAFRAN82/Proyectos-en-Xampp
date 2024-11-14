<?php 

      require_once ("lib/carrito.class.php"); 
      session_start(); 
       
      function do_sql ($sql) { 
         $cn = mysqli_connect ("localhost","root","02351236","carrito"); 
         
          
         $res = mysqli_query ($cn,$sql) or die ("SQL incorrecto : $sql"); 
         return $res;       
      } 
       
       
?> 
