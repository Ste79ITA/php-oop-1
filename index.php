<?php
include_once __DIR__ . '/models/Production.php';
include_once __DIR__ . '/models/Movie.php';
include_once __DIR__ . '/models/Serie.php';


$movie1 = new Movie('Avatar', 'English', 8, 2923, 162);

$movie2 = new Movie('Avatar 2: The way of water', 'English', 8, 2243, 192);

$movie3 = new Movie('Ghostbusters', 'English', 7, 240, 105);

$serie1 = new Serie('Hannibal', 'english', 4, 6);


$movies = [$movie1, $movie2, $movie3, $serie1];

foreach ($movies as $movie) {
    // echo $movie->getDetails() . '<br><br>';
    if ($movie instanceof Movie) {
        echo "$movie->getDetails()";
    }
}
