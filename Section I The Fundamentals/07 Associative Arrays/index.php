<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Asssociative Arrays</title>
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
        <ul>
            <?php foreach ($books as $book) :?>
                <li><a href="<?= $book['purchaseUrl'] ?>">
                        <?= $book['name'] ?>
                    </a>
                </li>
                
            <?php endforeach; ?>
        </ul>
    </body>
</html>