<?php
require 'functions.php';
require 'Database.php';

$config = require ('config.php');


$db = new Database($config['database']);

$post = $db->query("SELECT * FROM posts")->fetchAll();

dd($post);