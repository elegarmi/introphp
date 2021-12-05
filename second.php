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
        <h1>2. Form</h1>

        <form action="welcome.php" method="post">
            <div class="mb-3">
                <select class="form-select" aria-label="Default select example" required>
                    <option selected>What's your role?</option>
                    <option value="teacher">Teacher</option>
                    <option value="student">Student</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="inputName" class="form-label">Name</label>
                <input type="text" class="form-control" id="inputName" name="name" required>
            </div>
            <div class="mb-3">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" name="email" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="inputPass" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPass">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" name="check" value="Yes" class="form-check-input checkmark" id="check" required>
                <label class="form-check-label" for="check">Agree to the RGPD</label>
            </div>
            <div class="mb-3">
                <label for="yes_no_radio" class="form-check-label">Do you want to recieve the newsletter?</label>
                <input type="radio" name="yes_no" value="Yes" class="form-check-input" checked> Yes</input>
                <input type="radio" name="yes_no" value="No" class="form-check-input"> No</input>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </main>
    <?php include 'footer.php';?>

</body>
</html>