<?php
session_start();

$userName = "Raf";
$password = "pass";
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['userName'] != null) {
    if ($_POST['userName'] == $userName && $_POST['password'] == $password) {
        $_SESSION['userName'] = $userName;
        header("Location: setup.php");
        exit;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fake login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <header>
        <nav class="navbar bg-dark navbar-dark fixed-top">
            <span class="navbar-brand">PHP Intro: <?php echo $_SERVER['SCRIPT_FILENAME'] ?></span>
        </nav>
    </header>



    <div class="container-fluid mt-3 pt-5">

        <h1>A fake login page</h1>

        <p>This page just needs to 'fake' a login form.</p>
        <div class="card">
            <div class="card-body">

                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <input class="form-control" type="text" name="userName" id="userName" placeholder="Username">
                    <br>
                    <input class="form-control" type="password" name="password" id="password" placeholder="Password">
                    <br>
                    <button class="btn btn-primary" type="submit">Log in</button>
                </form>

                <?php

                if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['userName'] != null) {
                    if ($_POST['userName'] != $userName || $_POST['password'] != $password) {
                        ?>
                        <div class="alert alert-warning" role="alert">

                            Nope. Wrong username or password ...
                            <br>
                            Try again ...
                        </div>
                    <?php
                }
            }

            ?>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>