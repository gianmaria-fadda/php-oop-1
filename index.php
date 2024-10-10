<?php

class Movie {

    public $title;
    public $genre;
    public $year;

    function __costruct($title, $genre, $year) {
        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
    }

    public function myMovie($title) {
        if (is_string($title) && strlen($title) > 0) {
            $this->title = $title;
        } 
        else {
            $this->title = null;
        }
    }
}

$giaccoMovie = new Movie("Giacco's film", 'Horror', 2000);

var_dump($giaccoMovie);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
</head>
<body>
    
</body>
</html>