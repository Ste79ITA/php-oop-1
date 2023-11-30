<?php
include_once __DIR__ . '/Production.php';

class Movie extends Production
{
    protected $profit;
    protected $duration;

    public function __construct($title, $language, $rating, int $profit, int $duration)
    {
        parent::__construct($title, $language, $rating);
        $this->setProfit($profit);
        $this->setDuration($duration);
    }

    // SET

    public function setProfit(int $profit)
    {
        if ($profit) {
            $this->profit = $profit;
        }
    }

    public function setDuration(int $duration)
    {
        if ($duration) {
            $this->duration = $duration;
        }
    }

    //GET

    public function getDuration()
    {
        return "Duration: $this->duration min";
    }
    public function getProfit()
    {
        return "Profit: $this->profit Billions";
    }
}
