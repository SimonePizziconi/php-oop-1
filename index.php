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

    function _construct($_title, $_director, $_genre, $_year, $_leading_actors, $_duration, $_original_language){
        $this->title = $_title;
        $this->director = $_director;
        $this->genre = $_genre;
        $this->year = $_year;
        $this->leading_actors = $_leading_actors;
        $this->duration = $_duration;
        $this->original_language = $_original_language;
    }

    
}


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