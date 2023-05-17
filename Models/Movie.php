<?php 

class Movie
{

    public function __construct(public string $title,public string $director,public string $star,public array $genres,public int $year,public string $cover) {
        $this->title = $title;
        $this->director = $director;
        $this->star = $star;
        $this->genres = $genres;
        $this->year = $year;
        $this->cover = $cover;
    }

}