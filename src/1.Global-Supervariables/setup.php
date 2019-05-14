<?php session_start();

$tvshows = ["The Bridge", "The Fall", "La Casa De Papel", "Homeland", "Revenge", "De Dag"];

$movies = ["The Aristocats", "Sleepless in Seattle", "Into the Wild", "The Negotiator", "Titanic"];

?>
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



    <div class="container-fluid mt-3 pt-5">



        <h1>A simple page for a POST and a GET</h1>

        <p>Hello <?php echo $_SESSION['userName'] ?>! </p>

        <p>This page just needs to allow submitting some form data; one set of data to be sent with GET method, and one with POST method.</p>

        <div class="card">
            <div class="card-body">
                <h2>Try GET</h2>

                <form action="result.php" method="get">

                    <div class="form-group">
                        <label for="favCountry">Favourite country: </label>
                        <input class="form-control" type="text" name="favCountry" id="favCountry" value="Sweden">
                    </div>

                    <div class="form-group">
                        <label for="worstMovie">Worst movie ever seen: </label>
                        <input class="form-control" type="text" name="worstMovie" id="worstMovie" value="I don't remember what I did last summer">
                    </div>

                    <button class="btn btn-primary" type="submit">Submit GET</button>

                </form>

                <p>Or just a link with the query, like this:<br>
                    <a href="result.php?favCountry=Sweden&worstMovie=I%20don't%20remember%20what%20I%20did%20last%20summer">result.php?favCountry=" Sweden"&worstMovie="I don't remember what I did last summer" </a></p>

            </div>
        </div>

        <div class="card mt-3 mb-5">
            <div class="card-body">
                <h2>Try POST</h2>

                <form action="result.php" method="post">

                    <div class="form-group">
                        <label for="tvshows">Five favourite tv shows: </label>
                        <input class="form-control" type="text" name="tvshows" id="tvshows" value="'The Bridge','The Fall', 'La Casa De Papel' , 'Homeland' , 'Revenge' , 'De Dag'">
                    </div>

                    <div class="form-group">
                        <label for="movies">Five favourite movies: </label>
                        <input class="form-control" type="text" name="movies" id="movies" value="'The Aristocats', 'Sleepless in Seattle' , 'Into the Wild' , 'The Negotiator' , 'Titanic'">
                    </div>

                    <button class="btn btn-primary" type="submit">Submit POST</button>

                </form>

            </div>
        </div>
    </div>

</body>

</html>