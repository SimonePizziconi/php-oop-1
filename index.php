<?php

// Creazione classe Movie

class Movie{

    // Variabili d'istanza

    public $title;
    public $director;
    public $genre;
    public $year;
    public $leading_actors;
    public $duration;
    public $original_language;

    // Costruttore

    function __construct($_title, $_director, $_genre, $_year, $_leading_actors, $_duration, $_original_language){
        $this->title = $_title;
        $this->director = $_director;
        $this->genre = $_genre;
        $this->year = $_year;
        $this->leading_actors = $_leading_actors;
        $this->duration = $_duration;
        $this->original_language = $_original_language;
    }

    public function getMovieDetails() {
        return "<ul>" .
               "<li><strong>Titolo:</strong> " . $this->title . "</li>" .
               "<li><strong>Regista:</strong> " . $this->director . "</li>" .
               "<li><strong>Genere:</strong> " . $this->genre . "</li>" .
               "<li><strong>Anno:</strong> " . $this->year . "</li>" .
               "<li><strong>Attori protagonisti:</strong> " . $this->leading_actors . "</li>" .
               "<li><strong>Durata:</strong> " . $this->duration . " minutes</li>" .
               "<li><strong>Lingua Originale:</strong> " . $this->original_language . "</li>" .
               "</ul>";
    }
}

$movie1 = new Movie("Happy Gilmore", "Dennis Dugan", "Comedy", 1996, "Adam Sandler, Christopher McDonald", 92, "English");
$movie2 = new Movie("Uncut Gems", "Josh Safdie, Benny Safdie", "Thriller", 2019, "Adam Sandler, Julia Fox", 135, "English");

echo $movie1->getMovieDetails();
echo $movie2->getMovieDetails();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>