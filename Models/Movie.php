<?php 

class Movie
{
    //add class attribute
    public $title;
    public $director;
    public $star;
    public $genre;
    public $year;

    public function __construct(string $title, string $director, string $star, array $genre, int $year) {
        $this->title = $title;
        $this->director = $director;
        $this->star = $star;
        $this->genre = $genre;
        $this->year = $year;
    }

}