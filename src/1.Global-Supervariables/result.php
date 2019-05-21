<?php  

session_start();

function asTable($object) {
 print   "<table class=\"table\"><thead  class=\"thead-dark\"><tr><th>Key</th><th>Value</th></thead><tbody>";
            foreach ($object as $key => $value) {
                print("<tr><td>{$key}</td><td>{$value}</td></tr>");
            }
            print "</tbody></table>";   
}

function asList($object) {
    foreach ($object as $key => $value) {
                print "<p>{$key}</p><ul>";
                $parts = explode(",", $value);
                foreach ($parts as &$part) {
                    $trimmed = trim($part, " \'");
                    print "<li>{$trimmed}</li>";
                }
                print("</ul>");
                // unset($value);
            }
}

// FOR DEBUGGING
//$_SERVER['REQUEST_METHOD']='POST';
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
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

        require "printvalues.php";

        $data_object = new stdClass();

        echo   "<h1>" . ' $_POST' .   " </h1>";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            printValues($_POST);
            $data_object->postObject = (object)$_POST;
    
            // output as key value table
            asTable($_POST);

            // output as a list
            asList($_POST);
        } else {
            print("No POST request received.\n");
        }

        echo "<h1> "  . ' $_GET' . "</h1>";
        
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            printValues($_GET);
            $data_object->getObject = (object)$_GET;

            asTable($_GET);
            asList($_GET);
        } else {
            print("No GET request received.\n");
        }


        echo "<h1>" . '$_SERVER' . "</h1>";
        printValues($_SERVER);
        $data_object->serverObject = (object)$_SERVER;


        echo "<h1>" . '$_REQUEST' . "</h1>";
        printValues($_REQUEST);
        $data_object->requestObject = (object)$_REQUEST;


        echo "<h1>" . ' $_FILES' . " </h1>";
        printValues($_FILES);
        $data_object->filesObject = (object)$_FILES;


        echo "<h1>" . ' $_ENV' . " </h1>";
        printValues($_ENV);
        $data_object->envObject = (object)$_ENV;


        echo "<h1>" . ' $_COOKIE' . " </h1>";
        printValues($_COOKIE);
        $data_object->cookieObject = (object)$_COOKIE;

        $_SESSION['data_object'] = $data_object;
        print("<h1><a href=\"superdata.php\">" . '$_SESSION' . "</a></h1>");
        printValues($_SESSION);

        // $superglobals = array('$_SERVER', '$_REQUEST', '$_POST', '$_GET', '$_FILES', '$_ENV', '$_COOKIE', '$_SESSION');

        // foreach ($superglobals as $key) {
        // printValues($key);
        // }
        ?>

    </div>
</body>

</html>