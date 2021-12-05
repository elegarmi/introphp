<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Intro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="scss/main.css">
</head>

<body>
    <?php include 'header.php'; ?>
    <main>
        <h1>4. Object</h1>

        <?php
        class Film
        {
            public string $title;
            public int $year;
            public $posterPath;
            public $poster;

            public function __construct(string $title, int $year = 1895, $posterPath)
            {
                $this->title = $title;
                $this->year = $year;
                $this->posterPath = $posterPath;
            }
        }

        $firstFilmEver = new Film('La sortie des ouvriers', 1895, 'assets/lumiere.jpg');
        $firstFilm = new Film('1408', 2007, 'assets/1408.jpg');
        $secondFilm = new Film('Toc toc', 2017, 'assets/toc-toc.jpg');
        $thirdFilm = new Film('Wall-E', 2008, 'assets/wall-e.jpg');
        $fourthFilm = new Film('Moana', 2016, 'assets/moana.jpg');
        $fifthFilm = new Film('Up', 2009, 'assets/up.jpg');

        $films = [$firstFilmEver, $firstFilm, $secondFilm, $thirdFilm, $fourthFilm, $fifthFilm];

        echo "<div class='row gx-5'>
        
        ";
        foreach ($films as $film) {
            echo "
                <div class='col-sm-6 col-md-3 col-lg-3'>
                    <div class='card'>
                        <div class='card-img'>
                            <img src='$film->posterPath' class='card-img-top' alt='img'>
                        </div>
                        <div class='card-body'>
                            <h5 class='card-title'>$film->title</h5>
                            <p class='card-text'>$film->year</p>
                        </div>
                    </div>
                </div> 
            ";
            }
        echo "</div>";
        ?>

    </main>
    <?php include 'footer.php'; ?>

</body>

</html>