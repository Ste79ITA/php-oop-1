<?php 
include_once __DIR__ . '/Production.php';

class Movie extends Production {
protected $profit;
protected $duration;

public function __construct(string $title,string $language,int $rating = 0, int $profit, int $duration)
{
    parent::__construct($title, $language, $rating);
    $this->setProfit($profit);
    $this->setDuration($duration);
}

    // SET

public function setProfit(int $profit) {
    if ($profit) {
        $this->profit = $profit;
    }
}

public function setDuration(int $duration) {
    if ($duration) {
        $this->duration = $duration;
    }
}

    //GET

public function getDuration() {
    return $this->duration;
}
public function getProfit() {
    return $this->profit;
}

}

?>