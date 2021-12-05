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
<body id="array">
    <?php include 'header.php';?>
    <main>
        <h1>3. Array key-value</h1>
        
        <?php
        $birthYear = 1986; 
        $currentYear = date('Y'); 
        $age = $currentYear - $birthYear;

        $person = [
            "Name" => "Peter",
            "Age" => $age,
        ];

        ?>

        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <?php
                    foreach($person as $key => $value) {
                        echo "<th scope='col'>$key</th>";
                    }
                    ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    foreach($person as $key => $value) {
                        echo "<td>$value</td>";
                    }
                    ?>
                </tr>
            </tbody>
        </table>
    </main>
    <?php include 'footer.php';?>

</body>
</html>



