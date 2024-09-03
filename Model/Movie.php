<?php

// Creazione classe Movie

class Movie{

    // Variabili d'istanza

    public $title;
    public $director;
    public $genres = [];
    public $year;
    public $leading_actors;
    public $duration;
    public $original_language;

    // Costruttore

    function __construct($_title, $_director, $_genres, $_year, $_leading_actors, $_duration, $_original_language){
        $this->title = $_title;
        $this->director = $_director;
        $this->genres = $_genres;
        $this->year = $_year;
        $this->leading_actors = $_leading_actors;
        $this->duration = $_duration;
        $this->original_language = $_original_language;
    }

    // Funzione che genera i dettagli del film e filtra l'array in stringa
    public function getMovieDetails() {
        $genres_str = implode(', ', $this->genres);

        return "<ul>" .
               "<li><strong>Titolo:</strong> " . $this->title . "</li>" .
               "<li><strong>Regista:</strong> " . $this->director . "</li>" .
               "<li><strong>Genere:</strong> " . $genres_str . "</li>" .
               "<li><strong>Anno:</strong> " . $this->year . "</li>" .
               "<li><strong>Attori protagonisti:</strong> " . $this->leading_actors . "</li>" .
               "<li><strong>Durata:</strong> " . $this->duration . " minutes</li>" .
               "<li><strong>Lingua Originale:</strong> " . $this->original_language . "</li>" .
               "</ul>";
    }
}