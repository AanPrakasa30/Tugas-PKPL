<?php
$host = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "barbershop"; 


$pdo = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);
?>