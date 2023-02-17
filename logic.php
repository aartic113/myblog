<?php

    $host = 'localhost';
    $username = 'aarti';
    $password = 'password';
    $database = 'blog';
    $conn = mysqli_connect($host, $username, $password, $database);

    if ($conn){
        echo "<h1>No connection</h1>";
    
    }

?>