<?php
session_start();

$array = [
    ["tv-show" => "24", "rating" => 5],
    ["tv-show" => "Revenge", "rating" => 5],
    ["tv-show" => "Homeland", "rating" => 5],
    ["tv-show" => "The Bridge", "rating" => 5],
    ["tv-show" => "Johan Falk", "rating" => 5],
    ["tv-show" => "Modus", "rating" => 5],
    ["tv-show" => "The Fall", "rating" => 5],
    ["tv-show" => "O Mecanismo", "rating" => 4],
    ["tv-show" => "La Casa De Papel", "rating" => 5],
    ["tv-show" => "Don't Trust the B* in Apartment 23", "rating" => 3]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TV-shows and Ratings</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <header>
        <nav class="navbar bg-dark navbar-dark fixed-top">
            <span class="navbar-brand">PHP Intro: <?php echo $_SERVER['SCRIPT_FILENAME'] ?></span>
        </nav>
    </header>

    <div class="container-fluid mt-3 pt-5">

        <h1>TV-shows and Ratings</h1>

        <table class="table table-sm table-striped table-bordered w-50 mx-auto pt-5">
            <thead class="thead-dark">
                <tr>
                    <th>Title</th>
                    <th>Rating</th>
            </thead>
            <tbody>
                <?php
                foreach ($array as $item) { ?>
                    <tr>
                        <td>
                            <a href="https://www.google.be/search?q=<?php echo $item['tv-show']; ?>+tv-show">
                                <?php echo $item['tv-show']; ?></a>
                        </td>
                        <td>
                            <?php
                            for ($i = 0; $i < $item['rating']; $i++) { ?>
                                <img src="icons8-star-24.png" alt="Star">
                            <?php
                        }
                        ?>
                        </td>
                    </tr>
                <?php
            }
            ?>
            </tbody>
        </table>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>