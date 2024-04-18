<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Homework Asssociative Arrays</title>
    </head>
    <body>
        <?php 
            $books = [
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
                ]
            ]
        
        
        ?>
        <!-- Extend the book list from this episode's example to also include and display the release year immediately after the book's title. -->
        <ul>
            <?php foreach ($books as $book) :?>
                <li><a href="<?= $book['purchaseUrl'] ?>">
                        <?= $book['name'] ?> <?= $book['releaseYear'] ?>
                    </a>
                </li>
                
            <?php endforeach; ?>
        </ul>
    </body>
</html>