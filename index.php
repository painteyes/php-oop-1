<?php 

class Movie {

    public $title;
    public $year;
    public $genre;

    public function __construct($movie_title) {
        $this->title = $movie_title;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getYear() {
        if ($this->year) {
            return $this->year;
        } else {
            return 'N/A';
        }
    }

    public function getGenre() {

        if ($this->genre) {

            if (is_array($this->genre)) {

                $genres = '';
                foreach($this->genre as $genre) {
                    $genres .= "$genre, ";
                }                
                return rtrim($genres, ", ") ;

            } else { return $this->genre; }

        } else { return 'N/A'; }
    }

}

$movie_1 = new Movie('La grande bellezza');
$movie_1->year = 2013;

$movie_2 = new Movie('La vita è bella');
$movie_2->genre = ['Commedia', 'Drammatico'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>Titolo: <?php echo $movie_1->getTitle(); ?></li>
        <li>Anno: <?php echo $movie_1->getYear(); ?></li>
        <li>Genere: <?php echo $movie_1->getGenre(); ?></li>
    </ul>

    <ul>
        <li>Titolo: <?php echo $movie_2->getTitle(); ?></li>
        <li>Anno: <?php echo $movie_2->getYear(); ?></li>
        <li>Genere: <?php echo $movie_2->getGenre(); ?></li>
    </ul>
</body>
</html>

