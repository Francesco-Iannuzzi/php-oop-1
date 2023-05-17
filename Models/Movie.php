<?php 

class Movie
{
    //add class attribute
    public $title;
    public $director;
    public $star;
    public $genres;
    public $year;
    public $cover;

    public function __construct(string $title, string $director, string $star, array $genres, int $year, string $cover) {
        $this->title = $title;
        $this->director = $director;
        $this->star = $star;
        $this->genres = $genres;
        $this->year = $year;
        $this->cover = $cover;
    }

}