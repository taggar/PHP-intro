<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Decoding Superglobals</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <header>
        <nav class="navbar bg-dark navbar-dark fixed-top">
            <span class="navbar-brand">PHP Intro: <?php echo $_SERVER['SCRIPT_FILENAME'] ?></span>
        </nav>
    </header>

    <div class="container-fluid mt-3 p-5 pt-5">
        <?php

        require "printvalues.php";

        echo ("<h1>" . ' $_SESSION' . " </h1>");

        echo ("<h2>Output from var_dump</h2>");
        echo ("<pre>");
        var_dump($_SESSION);
        echo ("</pre>");

        echo ("<h2>Output from printValues</h2>");

        printValues($_SESSION);

        session_unset();

        session_destroy();

        ?>
    </div>
</body>

</html>