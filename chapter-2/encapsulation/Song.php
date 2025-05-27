<?php

class Song{
    public string $name;
    public int $numberOfPlays;

    private int|float $rating;

    public function __construct(string $name, int $numberOfPlays) {
        $this->name = $name;
        $this->numberOfPlays = $numberOfPlays;
    }

    public function setRating(int|float $rating): void{
        $rating = max(0, $rating);
        $this->rating = min(5, $rating);
    }

    public function getRating(): float|int{
        return $this->rating;
    }
}