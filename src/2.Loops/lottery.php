<?php
$icons = ["pizza.png", "hamburger.png", "fries.png"];

if (isset($_POST["reset"])) {
    header("Location: lottery.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lottery Machine</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <header>
        <nav class="navbar bg-dark navbar-dark fixed-top">
            <span class="navbar-brand">PHP Intro: <?php echo $_SERVER['SCRIPT_FILENAME'] ?></span>
        </nav>
    </header>

    <div class="container-fluid mt-3 pt-5">

        <h1>Lottery Machine</h1>

        <form method="post">
            <div class="form-check form-check-inline mx-auto">
                <input type="radio" name="pic" value="0" class="m-3"><img src="pizza.png" alt="pizza">
                <input type="radio" name="pic" value="1" class="m-3"><img src="hamburger.png" alt="hamburger">
                <input type="radio" name="pic" value="2" class="m-3"><img src="fries.png" alt="fries">
            </div>
            <button type="submit" name="submit">Guess which ...</button>
        </form>


        <?php
        if (isset($_POST["submit"])) {
            $rand = random_int(0, 2);
            $computer = $icons[$rand];

            if ($_POST['pic'] == $rand) {
                print("<div class=\"alert alert-success px-3 mt-5\" role=\"alert\">
                                        We have a WINNER!<br>
                                        I also picked <img src=\"{$computer}\">.
                                        </div>");
                print("<form method=\"post\">
                <button type=\"submit\" name=\"reset\">Play again</button>
                </form>");
            } else {
                print("<div class=\"alert alert-warning px-3\" role=\"alert\">
                        Nope, try again ... My pick was this one:
                        <img src=\"{$computer}\">
                        </div>");
            }
        }

        ?>
    </div>


    </div>

    <script src=" https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>