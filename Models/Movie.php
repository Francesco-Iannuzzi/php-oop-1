<?php 

require __DIR__ . '/Genre.php';
class Movie
{
    //add class attribute
    public $title;
    public $director;
    public $star;
    public $genre;
    public $year;

    //add composition


    //add a constructor
    public function __construct(string $title, string $director, string $star, Genre $genre, int $year) {
        $this->title = $title;
        $this->director = $director;
        $this->star = $star;
        $this->genre = $genre;
        $this->year = $year;
    }
}