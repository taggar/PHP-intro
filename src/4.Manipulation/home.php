<?php
session_start();

// Unset all previously stored $_SESSION members 
$_SESSION = [];

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

function  showIteration($iteration) {
    
    echo ("<h3>Code</h3>");
    echo ("<pre class='language-php line-numbers'><code>");
    
    print(htmlspecialchars(file_get_contents($iteration)));
    
    echo ("</code></pre>");

    echo("<h3>Result</h3>");
    
    require_once($iteration);
    
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

    <!--  

    --------------------------------------------------- Steps 1 and 2 ---------------------------------------------------

    -->

    <div class="container-fluid mt-3 pt-5">

        <h1>Object Manipulation</h1>

            <h2>Initialization</h2>

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

            <?php
                showIteration('home_steps_1_to_2.php');
            ?>
 
 <!--  

    --------------------------------------------------- Step 3 ---------------------------------------------------

    -->

            <h2>Iteration 1 (Step 3)</h2>

            <ol start="3">
                <li>Write a for-loop that adds an item to all of the above.</li>
            </ol>

            <?php
                showIteration('home_steps_3.php');
            ?>

    <!--  

    --------------------------------------------------- Steps 4 and 5 ---------------------------------------------------

    -->

            <h2>Iteration 2 (Steps 4 and 5)</h2>

            <ol start="4">
                <li>Write an if-statement that has a 20% chance to edit a random item of one of the above.</li>
                <li>Put this if statement in a loop so every array/object has a random chance of having a random item changed</li>
            </ol>

            <?php
                showIteration('home_steps_4_to_5.php');
            ?>
                  
    <!--  

    --------------------------------------------------- Step 6 ---------------------------------------------------

    -->

            <h2>Iteration 3 (Step 6)</h2>

            <ol start="6">
                <li>Divide the array in half (if uneven items half-1, unless half-1 makes it empty)</li>
            </ol>

            <p>Either array_chunk and keep the first chunk, or array_slice. In this exercise the simple array is processed using array_slice, the associative array using array_chunk.</p>

            <?php
                showIteration('home_steps_6.php');
            ?>

    <!--  

    --------------------------------------------------- Step 7 ---------------------------------------------------

    -->

            <h2>Iteration 4 (Step 7)</h2>

            <ol start="7">
                <li>Remove the last item of the associative array</li>
            </ol>

            <?php
                showIteration('home_steps_7.php');
            ?>

        <!--  

    --------------------------------------------------- Step 8 ---------------------------------------------------

    -->

            <h2>Iteration 5 (Step 8)</h2>

            <ol start="8">
                <li>Add the arrays to the object as <code>arr1</code> and <code>arr2</code></li>
            </ol>

            <?php
                showIteration('home_steps_8.php');
            ?>

    <!--  

    --------------------------------------------------- Step9 ---------------------------------------------------

    -->

            <h2>Iteration 6 (Step 9)</h2>

            <ol start="9">
                <li>Loop through the [original] associative array adding all items to the object as <code>key =&gt; value</code></li>
            </ol>

            <?php
                showIteration('home_steps_9.php');
            ?>

    <!--  

    --------------------------------------------------- Steps 10 and 11 ---------------------------------------------------

    -->

            <h2>Iteration 7 (Steps 10 and 11)</h2>

            <ol start="10">
                <li>Save the object in the <code>$_COOKIE</code> superglobal</li>
                <li>Find a way to print this final object on the homepage, in an easily readable way</li>
            </ol>

            <?php
                showIteration('home_steps_10_to_11.php');
            ?>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../js/prism.js"></script>
</body>

</html>