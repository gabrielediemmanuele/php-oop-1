<!-- php -->
<?php
//*Collegamento a movie.php (ispeziona file).
require_once __DIR__ . '/movies.php';
require_once __DIR__ . '/genre.php';

//todo: variabili d'istanza $LOTR, $HP, $Avengers
$LOTR = new Movie("The Lord of the rings", "Fantasy, Action, Adventure", "2001");

$HP = new Movie("Harry Potter", "Fantasy, Action, Adventure", "2001");

$Avengers = new Movie("Avengers", "Fantasy, Action, Adventure", "2012");



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