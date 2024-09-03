<?php

require_once __DIR__ . '/Model/Movie.php';
require_once __DIR__ . '/data/db.php';


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>
    
    <h1>FILM</h1>

    <?php foreach ($db as $movie): ?>
        <div>
            <?= $movie->getMovieDetails(); ?>  
        </div>
    <?php endforeach; ?>
</body>
</html>