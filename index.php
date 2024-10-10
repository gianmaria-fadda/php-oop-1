<?php

class Movie {

    public $title;
    public $genre;
    public $year;

    function __construct($title, $genre, $year) {
        $this->setTitle($title);
        $this->genre = $genre;
        $this->getYear($year);
    }

    public function setTitle($title) {
        if (is_string($title) && strlen($title) > 0) {
            $this->title = $title;
        } 
        else {
            $this->title = null;
        }
    }
    public function getYear($year) {
        if (is_numeric($year)) {
            $this->year = $year;
        } 
        else {
            $this->year = 'Not A Number!!!';
        }
    }
}

$giaccoMovie1 = new Movie("Giacco's film", 'Horror', 2000);
$giaccoMovie2 = new Movie("Il terrore", 'Comico', 2024);

var_dump($giaccoMovie1);
var_dump($giaccoMovie2);

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