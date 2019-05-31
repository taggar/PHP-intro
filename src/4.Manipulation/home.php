<?php
session_unset();
require_once('home_steps_1_to_2.php');

function is_assoc2(&$array)
{
    //echo ("\nTesting if associative array ...");
    if (!is_array($array)) {
        return false;
    }

    if (count(array_filter(array_keys($array), 'is_string'))) {
        // echo ("YES");
    }

    return count(array_filter(array_keys($array), 'is_string')) > 0;

    // alternative method of determining array nature:
    // https://blog-en.openalfa.com/how-to-check-if-a-php-array-is-associative-or-sequential
    // return array_keys($arr) !== range(0, count($arr) - 1);
}

function status()
{
    echo (" \n\n<p>Current state of " . '$_SESSION' . ":</p>\n\n<pre>");
    echo ("\n----------------------------------------------------\n");
    var_dump($_SESSION);
    echo ("\n----------------------------------------------------\n");
    echo ("</pre>");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Object Manipulation</title>
    <link href="../css/prism.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <header>
        <nav class="navbar bg-dark navbar-dark fixed-top">
            <span class="navbar-brand">PHP Intro: <?php echo $_SERVER['SCRIPT_FILENAME'] ?></span>
        </nav>
    </header>

    <div class="container-fluid mt-3 pt-5">

        <h1>Object Manipulation</h1>
            <ol>
                <li>Create an array, an associative array and an object in <code>home.php</code>.</li>
                <li>What are the differences between an array, an associative array and an object?
                    <ul>
                        <li>Array: no key, only an index. address items as $array[index].</li>
                        <li>Associative array: every item of the array consists of a key-value pair. Items can be addressed as $array[key].</li>
                        <li>Object: is an instance of a class. It is simply a specimen of a class and has a memory allocated. Elements in the object can be addressed using the property names as keys. </li>
                    </ul>
                </li>
            </ol>

            <h3>Code</h3>
        <pre class="language-php line-numbers"><code>
<?php
    print(htmlspecialchars(file_get_contents('home_steps_1_to_2.php')));
?>
        </code></pre>

        <h3>Result</h3>
<?php
    status();
?>

            <h2>Iteration 1 (Step 3)</h2>
                <ol start="3">
                    <li>Write a for-loop that adds an item to all of the above.</li>
                </ol>

                <h3>Code</h3>
        <pre class="language-php line-numbers"><code>
<?php
    print(htmlspecialchars(file_get_contents('home_steps_3.php')));
?>
        </code></pre>

           <h3>Result</h3>
<?php
    require_once 'home_steps_3.php';
?>

        <h2>Iteration 2 (Steps 4 and 5)</h2>

        <ol start="4">
            <li>Write an if-statement that has a 20% chance to edit a random item of one of the above.</li>
            <li>Put this if statement in a loop so every array/object has a random chance of having a random item changed</li>
        </ol>


        <?php
foreach ($_SESSION as $member => $value) {

    $randomValue = "This value was randomly changed";

    if (is_array($value)) {
        $arrayLength = count($value);
        $randomIndex = rand(0, $arrayLength * 5);

        echo ("\nLength of {$member} is " . $arrayLength . "\nRandom index is {$randomIndex}\n");

        if ($randomIndex < $arrayLength) {
            $keys = array_keys($value);
            $theKey = $keys[$randomIndex];
            echo ("\nRandom key is {$theKey}");
            echo ("\nRandom item is {$value[$theKey]}\n");
            $value[$theKey] = $randomValue;
            $_SESSION[$member] = $value;
        } else {
            echo ("Random index larger than length - no change.\n");
        }
    }

    if (is_object($value)) {
        $objLength = count(get_object_vars($value));
        $randomIndex = rand(0, $objLength * 5);

        echo ("\nLength of {$member} is " . $objLength . "\nRandom index is {$randomIndex}\n");

        if ($randomIndex < $objLength) {
            $keys = array_keys(get_object_vars($value));
            $theKey = $keys[$randomIndex];
            echo ("\nRandom key is {$theKey}");
            echo ("\nRandom item is {$value->$theKey}\n");
            $value->$theKey = $randomValue;
            $_SESSION[$member] = $value;
        } else {
            echo ("Random index larger than length - no change.\n");
        }
    }
}

status();

?>

        <h2>Iteration 3 (Step 6)</h2>
        <ol start="6">
            <li>Divide the array in half (if uneven items half-1, unless half-1 makes it empty)</li>
        </ol>
        <p>Either array_chunk and keep the first chunk, or array_slice. In this exercise the simple array is processed using array_slice, the associative array using array_chunk.</p>


        <?php
foreach ($_SESSION as $member => $value) {

    if (is_array($value)) {
        $arrayLength = count($value);
        $splitPos = floor($arrayLength / 2);
        if (is_assoc2($value)) {
            $value = array_chunk($value, $splitPos, true)[0];
        } else {
            $value = array_slice($value, 0, $splitPos, true);
        }
    }
    $_SESSION[$member] = $value;
}

status();
?>

        <h2>Iteration 4 (Step 7)</h2>
        <ol start="7">
            <li>Remove the last item of the associative array</li>
        </ol>

        <?php
array_pop($_SESSION["assocArray"]);

status();
?>




        <h2>Iteration 5 (Step 8)</h2>
        <ol start="8">
            <li>Add the arrays to the object as <code>arr1</code> and <code>arr2</code></li>
        </ol>

        <?php
$_SESSION["anObject"]->arr1 = $_SESSION["simpleArray"];
$_SESSION["anObject"]->arr2 = $_SESSION["assocArray"];

status();
?>


        <h2>Iteration 6 (Step 9)</h2>
        <ol start="9">
            <li>Loop through the [original] associative array adding all items to the object as <code>key =&gt; value</code></li>
        </ol>

        <?php
foreach ($anAssocArray as $key => $value) {
    $_SESSION["anObject"]->$key = $value;
}

status();
?>

        <h2>Iteration 7 (Steps 10 and 11)</h2>
        <ol start="10">
            <li>Save the object in the <code>$_COOKIE</code> superglobal</li>
            <li>Find a way to print this final object on the homepage, in an easily readable way</li>
        </ol>

        <?php
$_COOKIE["theObject"] = $_SESSION["anObject"];

echo ("<pre>\n----------- START COOKIEDUMP ---------------\n");
var_dump($_COOKIE["theObject"]);
echo ("\n----------- END   COOKIEDUMP ---------------\n</pre>");

status();
?>



    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../js/prism.js"></script>
</body>

</html>