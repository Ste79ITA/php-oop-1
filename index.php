<?php
include_once __DIR__ . '/models/Production.php';


$avatar = new Production('Avatar','English', 8 );

$ghostbusters = new Production('Ghostbusters','English', 7);

$movies = [$avatar, $ghostbusters];

foreach($movies as $movie) {

echo $movie->getDetails() . '<br>';
 };

?>

