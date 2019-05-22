<?php

require 'blackjack.php';
require 'functions.php';

session_unset();
session_start();
// class definitions need to be loaded BEFORE session start to avoid __PHP_Incomplete_Class Object

$dealer = new Blackjack();
$player = new Blackjack();

$_SESSION['player'] = $player;
$_SESSION['dealer'] = $dealer;
$_SESSION['currentplayer'] = 'player';

showPage();

status();
function showPage() {

    print <<< PAGE

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blackjack</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <header>
        <nav class="navbar bg-dark navbar-dark fixed-top">
            <span class="navbar-brand">PHP Intro: {$_SERVER['SCRIPT_FILENAME']}</span>
        </nav>
    </header>

    <div class="container-fluid mt-3 pt-5">

        <h1>Let's Play!</h1>

        <form method="post" action="game.php">
            <table class="table table-sm w-50 mx-auto pt-5">
                <tbody>
                    <tr>
                        <td>
                            <button type="submit">Go!</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>

PAGE;
}

?>