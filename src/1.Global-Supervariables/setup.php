<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A simple page to issue requests</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <header>
        <nav class="navbar bg-dark navbar-dark fixed-top">
            <span class="navbar-brand">PHP Intro: <?php echo $_SERVER['SCRIPT_FILENAME'] ?></span>
        </nav>
    </header>


    <?php

    $tvshows = array("The Bridge", "The Fall", "La Casa De Papel", "Homeland", "Revenge", "De Dag");

    $movies = array("The Aristocats", "Sleepless in Seattle", "Into the Wild", "The Negotiator", "Titanic");

    $curl = curl_init();

    ?>

    <div class="container-fluid mt-3 pt-5">

        <h2>A simple page</h1>

            <p>This page just needs to allow submitting some form data; one set of data to be sent with GET method, and one with POST method.</p>

            <ul>
                <li>Link using GET:
                    <form action="result.php" method="get">
                        <input type="text" name="favCountry" id="favCountry" value="Sweden">
                        <input type="text" name="worstMovie" id="worstMovie" value="I don't remember what I did last summer">
                        <button type="submit">Submit GET</button>
                    </form>
                    <a href="result.php?favCountry=Sweden&worstMovie=I%20don't%20remember%20what%20I%20did%20last%20summer">result.php?favCountry=" Sweden"&worstMovie="I don't remember what I did last summer" </a> </li>

                <li>Link using POST:
                    <form action="result.php/" method="post">
                        <input type="text" name="tvshows" id="tvshows" value="'The Bridge','The Fall', 'La Casa De Papel' , 'Homeland' , 'Revenge' , 'De Dag'">
                        <input type="text" name="movies" id="movies" value="'The Aristocats', 'Sleepless in Seattle' , 'Into the Wild' , 'The Negotiator' , 'Titanic'">
                        <button type="submit">Submit POST</button>
                    </form>

                </li>
            </ul>
    </div>
</body>

</html>