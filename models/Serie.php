<?php
include_once __DIR__ . '/Production.php';

class Serie extends Production
{
    protected $seasons;

    public function __construct($title, $language, $rating, int $seasons)
    {
        parent::__construct($title, $language, $rating);
        $this->setSeasons($seasons);
    }

    public function setSeasons($seasons)
    {
        if ($seasons) {
            $this->seasons = $seasons;
        }
    }

    public function getSeasons()
    {
        return "Seasons: $this->seasons";
    }
}
