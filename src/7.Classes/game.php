<?php
require 'blackjack.php';
require 'functions.php';

session_start();


$title = 'Blackjack Game';
$currentPlayer = $_SESSION['currentplayer'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo ($title); ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <header>
        <nav class="navbar bg-dark navbar-dark fixed-top">
            <span class="navbar-brand">PHP Intro: <?php echo $_SERVER['SCRIPT_FILENAME'] ?></span>
        </nav>
    </header>

    <div class="container-fluid mt-3 pt-5">

        <h1><?php echo ($title); ?></h1>

        <p>Current player: <?php echo $_SESSION['currentplayer']; ?></p>

        <div class="row w-75 m-auto">

            <div class="col-sm card mr-5 p-3">
                <form method="post" action="home.php">
                    <button type="submit"  name="home" class="btn btn-primary m-auto">Back home</button>
                </form>
            </div>
            <div class="col-sm card mr-5 p-3">
                <form method="post" action="game.php">
                    <button type="submit"  name="destroy_session" class="btn btn-primary m-auto">Destroy session</button>
                </form>
            </div>
            <div class="col-sm card mr-5 p-3">
                <form method="post">
                    <button type="submit"  name="hit" class="btn btn-primary m-auto">Hit</button>
                </form>
            </div>
            <div class="col-sm card mr-5 p-3">
                <form method="post" action="game.php">
                    <button type="submit" name="stand" class="btn btn-primary m-auto">Stand ...</button>
                </form>
            </div>
            <div class="col-sm card p-3">
                <form  method="post" action="game.php">
                    <button type="submit" name="surrender" class="btn btn-primary m-auto">Surrender!</button>
                </form>
            </div>

        </div>

    <?php 
    
    if (isset($_REQUEST['destroy_session'])){
        session_unset();
        session_destroy();
        status();
    }

    if ($_POST != null) {
        if (isset($_POST['hit'])) {
            $_SESSION[$currentPlayer]->Hit();
        }
        if (isset($_POST['stand'])) {
            $_SESSION[$currentPlayer]->Stand();
            $_SESSION['currentplayer'] = 'dealer';
        }

        if (isset($_POST['surrender'])) {
            $_SESSION[$currentPlayer]->Surrender();
            $_SESSION['currentplayer'] = 'dealer';
        }
    }
    
    status(); 
    
    ?>


    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>