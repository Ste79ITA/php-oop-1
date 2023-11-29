<?php 
include_once __DIR__ . '/Production.php';

class Movie extends Production {
protected $profit;
protected $duration;

public function __construct($title, $language, $rating, int $profit, int $duration)
{
    parent::__construct($title, $language, $rating);
    $this->setProfit($profit);
    $this->setDuration($duration);
}

    // SET

public function setProfit(int $profit) {
    if ($profit) {
        $this->profit = $profit . 'Billions';
    }
}

public function setDuration(int $duration) {
    if ($duration) {
        $this->duration = $duration . ' min';
    }
}

    //GET

public function getDuration() {
    return "Duration: $this->duration";
}
public function getProfit() {
    return "Profit: $this->profit";
}

}

?>