<?php
require 'functions.php';
require 'Database.php';

$db = new Database();

$post = $db->query("SELECT * FROM posts WHERE id = 1")->fetchAll(PDO::FETCH_ASSOC);

dd($post);