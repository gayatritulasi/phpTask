<?php
     
     $servername = "td5l74lo6615qq42.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
     $username = "y1wg4kylnfmlib7h";
     $password = "xfvj98yg2braoyww";
 
 try {
   $conn = new PDO("mysql:host=$servername;dbname=lu0lb5uqa9ske47p", $username, $password);
   // set the PDO error mode to exception
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
 } 
 catch(PDOException $e) {
   echo "Connection failed: " . $e->getMessage();
 }
 
?>
