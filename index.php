<!-- php -->
<?php
//*Collegamento a movie.php (ispeziona file).
require_once __DIR__ . '/Composition/Genre.php';
require_once __DIR__ . '/Media/Production.php';
require_once __DIR__ . '/Media/Movie.php';
require_once __DIR__ . '/Media/TvSerie.php';

//todo: variabili del Genre

$product_genre1 = new Genre("Fantasy");
$product_genre2 = new Genre("Adventure");
$product_genre3 = new Genre("Science fiction");


$Products = [
    new Movie("The Lord of the Ring", $product_genre1, "300 ", "2001"),
    new TvSerie("Fringe", $product_genre3, "2009", "2013", "100", "5"),
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
        <?php foreach ($Products as $Product): ?>
            <li>
                <h3>Product</h3>
                <?php echo $Product->getDescription() ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>