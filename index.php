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


//todo: variabili d'istanza $LOTR, $HP, $Avengers
$LOTR = new Movie("The Lord of the rings", $movie_genre1, "2001");

$HP = new Movie("Harry Potter", $movie_genre2, "2001");

$Avengers = new Movie("Avengers", $movie_genre1, "2012");




/* echo ($HP->getDescription()); */
/* $LOTR = new Movie();
$LOTR->title = "The Lord of the rings";
$LOTR->genre = "Fantasy";
$LOTR->year = "2001"; */

//* Creo un comodo array che contenga tutti i film
$Movies = [
    $LOTR,
    $HP,
    $Avengers,
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