<?php
 
$con = "";
  
try {
    $servername = "localhost:3306";
    $dbname = "testdb";
    $username = "root";
    $password = "";
  
    $con = new PDO(
        "mysql:host=$servername; dbname=testdb",
        $username, $password
    );
     
   $con->setAttribute(PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
 
?>