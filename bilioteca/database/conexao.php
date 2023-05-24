<?php

$dbname = "biblioteca";
$host = "localhost";
$user = "root";
$pass = "usbw";
$port = 3308;

try {
$conn = new PDO('mysql:host='.$host.';port='.$port.';dbname='.$dbname, $user, $pass);
} catch(PDOException $e) {
    echo '<br>
        <div align="center">
         <h3 style="color: red;"> ERROR: </h3>
         <h3>' . $e->getMessage(). '</h3>
        </div>
   <br>';
}

?>