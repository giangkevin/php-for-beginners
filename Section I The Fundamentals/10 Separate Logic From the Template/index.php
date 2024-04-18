<?php

$books = 
[
    [
        'name' => "Do Androids Dream of Electric Sheep",
        'author' => "Philip K. Dick",
        'purchaseUrl' => 'http://exemple.com',
        'releaseYear' => 1968
    ],

    [
        'name' => "Project Hail Mary",
        'author' => "Andy Weir",
        'purchaseUrl' => 'http://exemple.com',
        'releaseYear' => 2021
    ],

    [
        'name' => "The Martian",
        'author' => "Andy Weir",
        'purchaseUrl' => 'http://exemple.com',
        'releaseYear' => 2011   
    ]
];

//   function filter($items, $fn){
//     $filteredItems = [];

//     foreach($items as $item){
//         if($fn($item)){
//             $filteredItems [] = $item;
//         }
//     }

//     return $filteredItems;
// };

$filteredBooks = array_filter($books, function ($book) {
    return $book['releaseYear'] >= 1950 && $book['releaseYear'] <= 2020;
});
require "index.view.php";
