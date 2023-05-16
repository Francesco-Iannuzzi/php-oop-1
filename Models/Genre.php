<?php 
class Genre
{
    public $primary;
    public $secondary;

    public function __construct(string $primary, string $secondary) {
        $this->primary = $primary;
        $this->secondary = $secondary;
    }
}