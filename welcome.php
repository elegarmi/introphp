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
<body id="welcome">
    <?php include 'header.php';?>
    <main>
        <h1>Hi!</h1>
        Welcome <?php echo $_POST["name"]; ?><br>
        Your email is: <?php echo $_POST["email"]; ?><br>
        You checked the RGPD: <?php echo $_POST["check"]; ?><br>
        You want to recieve the newsletter: <?php echo $_POST["yes_no"]; ?>

    </main>
    <?php include 'footer.php';?>

</body>
</html>