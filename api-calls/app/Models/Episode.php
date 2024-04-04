<?php

namespace App\Models;

class Episode {
    public $name;
    public $imageUrl;
    public $season;
    public $episode;
    public $summary;

    public function __construct($name, $imageUrl, $season, $episode, $summary) {
        $this->name = $name;
        $this->imageUrl = $imageUrl;
        $this->season = $season;
        $this->episode = $episode;
        $this->summary = $summary;
    }

    public function __toString() {
        return "Name: $this->name, " .
               "Image URL: $this->imageUrl, " .
               "Season: $this->season, " .
               "Episode: $this->episode, " .
               "Summary: $this->summary";
    }
}
