<?php global $conn;
   
   $sname= "localhost";

   $unmae= "root";
   
   $password = "";
   
   $db_name = "ptwebn7";
   
   $conn = mysqli_connect($sname, $unmae, $password, $db_name);
   
   if (!$conn) {
   
       echo "Connection failed!";
   
   }?>