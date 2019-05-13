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

        echo "<h1>" . ' $_POST' . "</h1>";
        printValues($_POST);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            print "<table class=\"table\"><thead  class=\"thead-dark\"><tr><th>Key</th><th>Value</th></thead><tbody>";
            foreach ($_POST as $key => $value) {
                print("<tr><td>{$key}</td><td>{$value}</td></tr>");
            }
            print "</tbody></table>";


            foreach ($_POST as $key => $value) {
                print "<tr><td>{$key}</td><td><ul>";
                $parts = explode(",", $value);
                foreach ($parts as $part) {
                    $trimmed = trim($part, "\'");
                    print "<li>{$trimmed}</li>";
                }
                print("</ul>");
            }
        } else {
            print("No POST request received.\n");
        }

        echo "<h1> "  . ' $_GET' . "</h1>";
        printValues($_GET);
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            print "<table class=\"table\"><thead  class=\"thead-dark\"><tr><th>Key</th><th>Value</th></thead><tbody>";
            foreach ($_GET as $key => $value) {
                print("<tr><td>{$key}</td><td>{$value}</td></tr>");
            }
            print "</tbody> </table>";

            foreach ($_GET as $key => $value) {
                print "<tr><td>{$key}</td><td><ul>";
                $parts = explode(",", $value);
                foreach ($parts as $part) {
                    $trimmed = trim($part, "\'");
                    print "<li>{$trimmed}</li>";
                }
                print("</ul>");
            }
        } else {
            print("No GET request received.\n");
        }


        echo "<h1>" . '$_SERVER' . "</h1>";
        printValues($_SERVER);


        echo "<h1>" . '$_REQUEST' . "</h1>";
        printValues($_REQUEST);


        echo "<h1>" . ' $_FILES' . " </h1>";
        printValues($_FILES);


        echo "<h1>" . ' $_ENV' . " </h1>";
        printValues($_ENV);


        echo "<h1>" . ' $_COOKIE' . " </h1>";
        printValues($_COOKIE);


        echo "<h1>" . ' $_SESSION' . " </h1>";
        printValues($_SESSION);

        // $superglobals = array($_SERVER, $_REQUEST, $_POST, $_GET, $_FILES, $_ENV, $_COOKIE, $_SESSION);

        // foreach ($superglobals as $key) {
        // printValues($key);
        // }
        ?>
    </div>
</body>

</html>