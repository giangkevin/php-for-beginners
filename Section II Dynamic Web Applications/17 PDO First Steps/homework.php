<?php
require 'functions.php';

// require 'router.php';


// connect to our MySQL database.

// Create a prepared statement to fetch the post that has an id of 1. 
// Then, experiment with calling fetch() instead of fetchAll(). How is the output different?

$dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=root;charset=utf8mb4";

$pdo = new PDO($dsn);

$statement = $pdo->prepare("SELECT * FROM posts WHERE id = 1;");
$statement->execute();

$posts = $statement->fetch(PDO::FETCH_ASSOC);


echo "<li>" . $posts['title'] . "</li>";