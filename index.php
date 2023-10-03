<!-- php -->
<?php
//*Collegamenti ai vari file.
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


//*Creo due array separati

//*MOVIES
$Products_Movies = [
    new Movie("https://m.media-amazon.com/images/M/MV5BN2EyZjM3NzUtNWUzMi00MTgxLWI0NTctMzY4M2VlOTdjZWRiXkEyXkFqcGdeQXVyNDUzOTQ5MjY@._V1_.jpg", "The Lord of the Ring", $product_genre2, "en", "208 ", "2001"),
    new Movie("data:image/jpeg;base64,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", "Avatar", $product_genre1, "en", "178 ", "2009"),
    new Movie("https://www.mepiute.com/wordpress/wp-content/uploads/2023/05/John-Wick-_-Chapter-4.jpg", "Jhon Wick 4", $product_genre5, "en", "169 ", "2023"),
];

//*TV SERIES
$Products_TvSeries = [
    new TvSerie("https://m.media-amazon.com/images/I/91gfltVUFwL._AC_UF1000,1000_QL80_.jpg", "Fringe", $product_genre3, "en", "2009", "2013", "100", "5"),
    new TvSerie("https://i0.wp.com/traveltherapists.it/wp-content/uploads/2020/10/danbam-location-itaewon-class-seoul-traveltherapists-e1626112895761.jpg?fit=1042%2C1295&ssl=1", "이태원 클라쓰", $product_genre4, "kr", "31/01/2020", "21/03/2020", "16", "1"),
    new TvSerie("https://upload.wikimedia.org/wikipedia/en/thumb/7/78/Stranger_Things_season_4.jpg/220px-Stranger_Things_season_4.jpg", "Stranger Things", $product_genre3, "en", "2016", "Working On", "34", "4"),
    new TvSerie("https://www.orientaserie.it/wp-content/uploads/2022/09/the-boys-season-2-poster-butcher-karl-urban-1231881.webp", "The Boys", $product_genre1, "en", "2019", "Working On", "24", "3"),
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
    <!-- Container principale -->
    <div class="container mt-3 mb-3">
        <div class="row g-3">
            <!-- MOVIES CARDS -->
            <h1 class="text-danger">Movies</h1>
            <?php foreach ($Products_Movies as $Movies): ?>
                <div class="col-3">
                    <div class="card">
                        <img src="<?php echo ($Movies->getImage()) ?>" class="card-img-top" style="height: 380px" alt="...">
                        <div class="card-body">
                            <?php echo $Movies->getDescription() ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <hr>
            <!-- TV SERIES CARDS -->
            <h1 class="text-danger">Tv Series</h1>
            <?php foreach ($Products_TvSeries as $Series): ?>
                <div class="col-3">
                    <div class="card">
                        <img src="<?php echo ($Series->getImage()) ?>" class="card-img-top" style="height: 380px" alt="...">
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