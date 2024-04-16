<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Arrays</title>
    </head>
    <body>
        <h1>Recommended Books</h1>

        <?php
            $books = [
                "Do Androids Dream of Electric Sheep",
                "The Langoliers",
                "Hail Mary"

            ];
        ?>

        <ul>
            <?php foreach($books as $book) : ?>
                <li><?= $book ?></li>
            <?php endforeach; ?>
        </ul>

        <!-- Create an array of any three usernames -
         perhaps for a "Top Performing Users" section of your website.
         Then, create a loop that displays each username within a list item. -->


        <?php 
            $topUsers = [
                "Maria",
                "Keith",
                "Minato"
            ]; 
        ?>
        <ul>
            <?php foreach($topUsers as $user) : ?>
                <li><?= $user ?></li>
            <?php endforeach ?>
        </ul>
    </body>
</html>