<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework Function and Filters</title>
</head>
<body>
    <!-- Create an array of your favorites movies, including their respective release dates.
     Then, write a function that filters your list of movies down to only those that were released in the year 2000 or higher.
     Display the results in an unordered list. -->
    <?php

        $movies = 
        [
            [
                'name' => "Ninja Scroll",
                'author' => "Yoshiaki Kawajiri",
                'releaseYear' => 1993,
                'purchaseUrl' => "http://exemple.com"
            ],

            [
                'name' => "Parasite",
                'author' => "Bong Joon-ho",
                'releaseYear' => 2019,
                'purchaseUrl' => "http://exemple.com"
            ],

            [
                'name' => "Princess Mononoké",
                'author' => "Hayao Miyazaki",
                'releaseYear' => 2000,
                'purchaseUrl' => "http://exemple.com"
            ]

        ];

        function filterByYear($movies, $year){
            $filteredMovies = [];

            foreach($movies as $movie){
                if($movie['releaseYear'] >= $year){
                    $filteredMovies [] = $movie;
                }
            }

            return $filteredMovies;
        }
    ?>


    <ul>
        <?php foreach(filterByYear($movies, 2000) as $movie) :?>
            <li>
                <a href="<?= $movie['releaseYear'] ?>">
                    <?= $movie['name'] ?> (<?= $movie['releaseYear'] ?>)
                </a>
            </li>
        <?php endforeach; ?>
    </ul>


</body>
</html>