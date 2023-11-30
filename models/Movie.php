<?php
include_once __DIR__ . '/Production.php';

class Movie extends Production
{
    protected $profit;
    protected $duration;

    public function __construct(string $title, string $language, int $rating = 0, int $profit = 0, int $duration = 0)
    {
        parent::__construct($title, $language, $rating);
        $this->setProfit($profit);
        $this->setDuration($duration);
    }

    // SET

    public function setProfit(int $profit)
    {
        if (is_numeric($profit) && $profit > 0) {
            $this->profit = $profit;
        }
    }

    public function setDuration(int $duration)
    {
        if (is_numeric($duration) && $duration > 0) {
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
