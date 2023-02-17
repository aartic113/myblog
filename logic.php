<?php

    $host = 'localhost';
    $username = 'aarti';
    $password = 'password';
    $database = 'blog';
    $conn = mysqli_connect($host, $username, $password, $database);

    if (!$conn){
        echo "<h1>No connection</h1>";
    
    }


    $sql = "SELECT * FROM posts ORDER BY id DESC";
    $query = mysqli_query($conn,$sql);


    if (isset($_REQUEST['new_post'])){
        $title = $_REQUEST['title'];
        $content = $_REQUEST['content'];
        $sql = "INSERT INTO posts(title, content) VALUES ('$title','$content')";

        mysqli_query($conn,$sql);

        header("Location: index.php?info=added");
        exit();
    }

?>