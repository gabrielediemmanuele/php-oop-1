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
$product_genre4 = new Genre("Drama");
$product_genre5 = new Genre("Action");



$Products_Movies = [
    new Movie("The Lord of the Ring", $product_genre2, "208 ", "2001"),
    new Movie("Avatar", $product_genre1, "178 ", "2009"),
    new Movie("Jhon Wick 4", $product_genre5, "169 ", "2023"),
];

$Products_TvSeries = [
    new TvSerie("Fringe", $product_genre3, "2009", "2013", "100", "5"),
    new TvSerie("이태원 클라쓰", $product_genre4, "31/01/2020", "21/03/2020", "16", "1"),
    new TvSerie("Stranger Things", $product_genre3, "2016", "Working On", "34", "4"),
    new TvSerie("The Boys", $product_genre1, "2019", "Working On", "24", "3"),
];

?>


<!-- HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP Object-oriented programming 1 + Ereditarietà</title>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Gabriele Di Emmanuele" />
    <meta name="description" content="php-oop-1 + Ereditarietà" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-3 mb-3">
        <div class="row g-3">
            <h1 class="text-danger">Movies</h1>
            <?php foreach ($Products_Movies as $Movies): ?>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <?php echo $Movies->getDescription() ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <hr>
            <h1 class="text-danger">Tv Series</h1>
            <?php foreach ($Products_TvSeries as $Series): ?>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <?php echo $Series->getDescription() ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>