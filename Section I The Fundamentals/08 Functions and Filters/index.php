<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Functions And Filters</title>
    </head>
    <body>
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
        
            function filterByAuthor($books, $author){
                $filteredBooks = [];

                foreach($books as $book){
                    if($book['author'] === $author){
                        $filteredBooks [] = $book;
                    }
                }

                return $filteredBooks;
            }
        ?>

        
        <ul>
            <?php foreach (filterByAuthor($books, 'Philip K. Dick') as $book) :?>
                <li><a href="<?= $book['purchaseUrl'] ?>">
                        <?= $book['name'] ?> <?= $book['releaseYear'] ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>