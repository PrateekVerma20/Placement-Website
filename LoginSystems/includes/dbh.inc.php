<?php
    
     $servername="localhost";
     $dBUsername="root";
     $dBPassword="";
     $dbName="loginsystem";
     $connection=mysqli_connect($servername,$dBUsername,$dBPassword,$dbName);
     if(!$connection)
     {
         die("connection failed :".mysqli_connect_error()); 
     }
     else
     {
         echo "yes connected!!";
     }
     
?>