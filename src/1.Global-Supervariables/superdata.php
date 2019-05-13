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

        function printValues($input)
        {
            print "<div class=\"card\"> <div class=\"card-body\">";
            if (is_array($input)) {
                foreach ($input as $key => $value) {
                    print("<pre>{$key} = {$value}</pre>");
                    if (is_array($value)) {
                        printValues($value);
                    }
                }
            } else {
                if ($input != null) {
                    print("Not an array: {$input} \n");
                } else {
                    print("Found null. \n");
                }
            }
            print "</div> </div>";
        }
        echo "<h1>" . ' $_SESSION' . " </h1>";
        printValues($_SESSION);


        ?>

    </div>
</body>

</html>