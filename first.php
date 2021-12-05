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
    <?php include 'header.php';?>
    <main>
        <h1>1. HTML list with PHP array</h1>

        <?php $colors = array("aquamarine", "yellow", "coral"); ?>

        <div class="accordion" id="accordionLists">
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    Concatenated
                </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">
                    <h4>My favourite colors are: </h4>
                    <ul>

                        <?php
                        echo "
                            <li>" . $colors[0] . "</li>
                            <li>" . $colors[1] . "</li>
                            <li>" . $colors[2] . "</li>";
                        ?>

                    </ul> 
                    <div class="highlight">
                        <?php highlight_file('highlight1.php'); ?>
                    </div>
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                    Listed variables
                </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                <div class="accordion-body">
                    <h4>My favourite colors are: </h4>
                    <ul>

                        <?php
                        list($a, $b, $c) = $colors;
                        echo "
                        <li>$a</li>
                        <li>$b</li>
                        <li>$c</li>";
                        ?>

                    </ul>
                    <div class="highlight">
                        <?php highlight_file('highlight2.php'); ?>
                    </div>
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    Foreach loop
                </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                <div class="accordion-body">
                    <h4>My favourite colors are: </h4>
                    <ul>
                        <?php     
                        foreach($colors as $color) {
                            echo "<li>$color</li>";
                        }
                        ?>
                    </ul>
                    <div class="highlight">
                        <?php highlight_file('highlight3.php'); ?>
                    </div>
                </div>
                </div>
            </div>
        </div>						
    </main>
    <?php include 'footer.php';?>

</body>
</html>