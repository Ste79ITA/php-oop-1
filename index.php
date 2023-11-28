<?php 

class Production {
    public $title;
    public $language;
    public $rating;
    public $isBlockbuster;

    function __construct($title, $language, $rating) {

        $this->title = $title;
        $this->language = $language;
        $this->rating = $rating;
    }
    public function setIsBlockbuster() {

    }
};

$avatar = new Production('Avatar','English', 8 );

$ghostbusters = new Production('Ghostbusters','English', 7);

$movies = [$avatar, $ghostbusters];

foreach($movies as $movie) {?>
<ul>
    <li><?= $movie->title; ?></li>
    <li><?= $movie->language; ?></li>
    <li><?= $movie->rating;?>/10</li>
</ul>
<?php };

?>

