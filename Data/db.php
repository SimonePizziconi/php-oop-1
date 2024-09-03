<?php

require_once __DIR__ . '/../Model/Movie.php';

$db = [
    new Movie("Happy Gilmore", "Dennis Dugan", ["Comedy", "Sports"], 1996, "Adam Sandler, Christopher McDonald", 92, "English"),
    new Movie("Uncut Gems", "Josh Safdie, Benny Safdie", ["Thriller", "Crime", "Drama"], 2019, "Adam Sandler, Julia Fox", 135, "English")
];