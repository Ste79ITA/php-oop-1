<?php
include_once __DIR__ . '/Production.php';

class Serie extends Production
{
    protected $seasons;

    public function __construct(string $title, string $language, int $rating, int $seasons)
    {
        parent::__construct($title, $language, $rating);
        $this->setSeasons($seasons);
    }

    public function setSeasons($seasons)
    {
        if (is_numeric($seasons) && $seasons > 0) {
            $this->seasons = $seasons;
        }
    }

    public function getSeasons()
    {
        return "Seasons: $this->seasons";
    }
}
