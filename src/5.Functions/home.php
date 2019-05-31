<?php
session_start();

require 'security.php';
include 'functions.php';

if (isset($_REQUEST['answer']) 
        || isset($_REQUEST['nicknameSeed']) 
        || isset($_REQUEST['destroy_session']) 
        || isset($_REQUEST['generate_object']) 
        || isset($_REQUEST['revert_object'])) {

    if ($_REQUEST['answer'] == 'ammaBot') {
        echo (nickname_generate('ammaBot'));
    } else  {
        // if ($_REQUEST['answer'] == 'notaBot' || isset($_REQUEST['nicknameSeed']) || isset($_REQUEST['destroy_session']) 
        // || isset($_REQUEST['generate_object']) || isset($_REQUEST['revert_object']))
        showPage();
    } 
} else {
    showSecurityPage();
}


function handleClick() {
        if (isset($_REQUEST['nicknameSeed'])) {
            echo ("<p>Your new nickname is: ");
            echo (nickname_generate($_REQUEST['nicknameSeed']));
            echo ("</p>");
        }

        if (isset($_REQUEST['destroy_session'])){
            destroy_session();
            status();
        }

        if (isset($_REQUEST['generate_object'])) {
            object_generate();
            status();
        }

        if (isset($_REQUEST['revert_object'])) {
            if (!isset($_SESSION['theObject'])) {
                object_generate();
            }
            $reverted = object_revert($_SESSION['theObject']);
            echo ("<pre>");
            print_r ($reverted);
            echo ("</pre>");
            status();
        }

}

function showPage() {
    print <<< P1
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Functions - Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <header>
        <nav class="navbar bg-dark navbar-dark fixed-top">
            <span class="navbar-brand">PHP Intro: {$_SERVER['SCRIPT_FILENAME']}</span>
        </nav>
    </header>

    <div class="container-fluid mt-3 pt-5">

        <h1>Functions - Home</h1>

        <div class="row w-75 m-auto">


            <div class="col-sm card mr-5 p-3">
                <form method="post">
                    <button type="submit"  name="destroy_session" class="btn btn-primary m-auto">Destroy session</button>
                </form>
            </div>
            <div class="col-sm card mr-5 p-3">
                <form method="post">
                    <button type="submit" name="generate_object" class="btn btn-primary m-auto">Generate object</button>
                </form>
            </div>
            <div class="col-sm card p-3">
                <form  method="post">
                    <button type="submit" name="revert_object" class="btn btn-primary m-auto">Revert object</button>
                </form>
            </div>
            <div class="col-sm card ml-5 p-3">
                <form method="post">
                    <div class="form-group m-auto">
                        <button type="submit" class="btn btn-primary">Get a nickname</button>

                        <label for="nicknameSeed">Nick this name:</label>
                        <input class="form-control" type="text" name="nicknameSeed" id="nicknameSeed">
                    </div>
                </form>
            </div>
        </div>
P1;
handleClick(); 

print <<< P2
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>

P2;
}



?>
