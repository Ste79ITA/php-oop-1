<?php 
include_once __DIR__ . '/Movie.php';
include_once __DIR__ . '/Serie.php';

class Production {
    protected $title;
    protected $language;
    protected $rating = 0;

    function __construct(string $title,string $language,int $rating = 0) {

        $this->title = $title;
        $this->language = $language;
        // $this->rating = $rating;
        $this->setLanguage($language);
        $this->setRating($rating);
    }

    // SETTER

    public function setRating(int $rating) {
        if (is_numeric($rating) && $rating >=1 && $rating <=10) {
            $this->rating = $rating;
        }
    }
    public function setTitle(string $title) {
        if ($title)  {
            $this->title = $title;
        }
    }
    public function setLanguage(string $language) {
        if ($language)  {
            $this->language = $language;
        }
    }
    // GETTER
    public function getRating() {
        return $this->rating;
    }
    public function getTitle() {
        return $this->title;
    }
    public function getLanguage() {
        return $this->language;
    }
    public function getDetails() {
        return "Title: $this->title <br> Language: $this->language <br> Rating: $this->rating";
    }
};

?>