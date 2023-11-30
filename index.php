<?php
include_once __DIR__ . '/models/Movie.php';
include_once __DIR__ . '/models/Serie.php';

// MOVIES
$movie1 = new Movie('Avatar', 'English', 8, 2923, 162);

$movie2 = new Movie('Avatar 2: The way of water', 'English', 8, 2243, 192);

$movie3 = new Movie('Ghostbusters', 'English', 7, 240, 105);

$movie4 = new Movie('Ghostbusters 2', 'English', 7, 240, 105);

$movie5 = new Movie('Leon', 'English', 8, 240, 105);

// SERIES

$serie1 = new Serie('Hannibal', 'english', 4, 6);

$serie2 = new Serie('Peaky Blinders', 'english', 4, 6);

$serie3 = new Serie('The good doctor', 'english', 4, 6);

$serie4 = new Serie('The Witcher', 'english', 4, 6);

$serie5 = new Serie('Castlevania', 'english', 4, 6);


$products = [$movie1, $movie2, $movie3, $movie4, $movie5, $serie1, $serie2, $serie3, $serie4, $serie5];


foreach ($products as $product) {
    echo $product->getDetails() . '<br>';

    if ($product instanceof Movie) {
        echo $product->getDuration() . '<br><br>';
    } else if ($product instanceof Serie) {
        echo $product->getSeasons() . '<br><br>';
    }
}
