<?php

    require_once __DIR__ . '/classes/Movie.php';

    $movies = [
        new Movie('Kingsman: The Secret Service', 'spy-fiction', 2014),
        new Movie('Murder on the Orient Express', 'crime-thriller', 2017),
        new Movie('Uncharted', 'adventure', 2022),
    ];

    // var_dump($movies);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OOP-1</title>
    </head>
    <body>
        <h1 style="text-align:center;">Movies</h1>
        <ul>
            <?php foreach ($movies as $movie) { ?>
                <li>
                    <h2 style="margin-top: 40px;"><?php echo $movie->title; ?></h2>
                    <p>Genre: <?php echo $movie->genre; ?></p>
                    <p>Year: <?php echo $movie->getYear(); ?></p>
                </li>
            <?php }; ?>
        </ul>
    </body>
</html>