<!-- php -->
<?php
//*Collegamento a movie.php (ispeziona file).
require_once __DIR__ . '/Composition/Genre.php';
require_once __DIR__ . '/Media/Production.php';
require_once __DIR__ . '/Media/Movie.php';
require_once __DIR__ . '/Media/TvSerie.php';

//todo: variabili del Genre

$movie_genre1 = new Genre("Fantasy");
$movie_genre2 = new Genre("Adventure");


$Products = [

    new Movie(),
    new TvSerie(),
];

?>









<!-- HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP Object-oriented programming 1</title>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Gabriele Di Emmanuele" />
    <meta name="description" content="php-oop-1" />
</head>

<body>
    <ul>
        <!--* stampo dinamicamente la descrizione dei film tramite metodo-->
        <?php foreach ($Movies as $Movie): ?>
            <li>
                <?php echo $Movie->getDescription() ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>