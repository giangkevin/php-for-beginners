<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Conditionals and Booleans</title>
        <style>
            body{
                display: grid;
                place-items: center;
                height: 100vh;
                margin: 0;
                font-family: sans-serif;
            }
        </style>
    </head>
    <body>
        <!-- Use a PHP short echo tag to display the string, "Hello World" on the page. -->
        <?php 
            $name = "Dark Matter";
            $read = true;
            $message = "You have read $name";
        ?>
        <h1><?= $message ?></h1>

        <h2><?="Hello World"?></h2>
    </body>
</html>