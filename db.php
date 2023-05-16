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

require __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/Models/Genre.php';

$movies = [];

//first instance
$django = new Movie('Django Unchained', 'Quentin Tarantino', 'Jamie Foxx', new Genre('Drama', 'Western'), 2012);

//second instance
$inception = new Movie('Inception', 'Christopher Nolan', 'Leonardo Di Caprio', new Genre('Action', 'Science Fiction'), 2010);


array_push($movies, $django, $inception);
//var_dump($movies);

echo "</pre>";