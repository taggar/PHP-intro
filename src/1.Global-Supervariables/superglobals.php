<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>

<body>

    <?php

    echo ("<h1>" . '$_SERVER' . "</h1>");
    printValues($_SERVER);
    echo ("<h1>" . '$_REQUEST' . "</h1>");
    printValues($_REQUEST);
    echo ("<h1>" . ' $_POST' . "</h1>");
    printValues($_POST);
    echo ("<h1>" . ' $_GET' . "</h1>");
    printValues($_GET);
    echo ("<h1>" . ' $_FILES' . " </h1>");
    printValues($_FILES);
    echo ("<h1>" . ' $_ENV' . " </h1>");
    printValues($_ENV);
    echo ("<h1>" . ' $_COOKIE' . " </h1>");
    printValues($_COOKIE);
    echo ("<h1>" . ' $_SESSION' . " </h1>");
    printValues($_SESSION);

    function printValues($input)
    {
        if (is_array($input)) {
            print("<pre>----------------------------------------------------------</pre>");
            foreach ($input as $key => $value) {
                print("<pre>{$key} = {$value}</pre>");
                if (is_array($value)) {
                    printValues($value);
                }
            }
            print("<pre>----------------------------------------------------------</pre>");
        } else {
            print("{$input} \n");
        }
    }


    ?>
</body>

</html>