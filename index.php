<?php

/*

Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
- all'interno della classe sono dichiarate delle variabili d'istanza
- all'interno della classe è definito un costruttore
- all'interno della classe è definito almeno un metodo

vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà.
Tra le varie proprietá, la classe Movie 'ha un' genere (sfruttare il concetto di composizione).



Bonus 1:

Creare un layout completo per stampare a schermo una lista di movies.
Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle.
Possiamo ad esempio organizzare il codice:
- creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
- mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/
- organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.



Bonus 2 (opzionale)

- Modificare la classe Movie in modo che accetti piú di un genere.

*/


echo "<pre>";
//define the class
class Movie
{
    //add class attribute
    public $title;
    public $director;
    public $star;
    public $genre;
    public $year;


    //add a constructor
    public function __construct(string $title, string $director, string $star, string $genre, string $year) {
        $this->title = $title;
        $this->director = $director;
        $this->star = $star;
        $this->genre = $genre;
        $this->year = $year;

    }
}

//first instance
$django = new movie('Django Unchained', 'Quentin Tarantino', 'Jamie Foxx', 'Western', '2012');
// $django->title = 'Django Unchained';
// $django->director = 'Quentin Tarantino';
// $django->star = 'Jamie Foxx';
// $django->genre = 'Western';
// $django->year = '2012';


//second instance
$inception = new movie('Inception', 'Christopher Nolan', 'Leonardo Di Caprio', 'Science Fiction', '2010');
// $inception->title = 'Inception';
// $inception->director = 'Christopher Nolan';
// $inception->star = 'Leonardo Di Caprio';
// $inception->genre = 'Science Fiction';
// $inception->year = '2010';

var_dump($django, $inception);

echo "<pre>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
</head>

<body>

</body>

</html>