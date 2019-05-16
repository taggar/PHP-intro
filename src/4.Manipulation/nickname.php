<?php
session_start();

function mb_strrev($string, $encoding = null)
{
    if ($encoding === null) {
        $encoding = mb_detect_encoding($string);
    }

    $length   = mb_strlen($string, $encoding);
    $reversed = '';
    while ($length-- > 0) {
        $reversed .= mb_substr($string, $length, 1, $encoding);
    }

    return $reversed;
}

function randPrefix($counter)
{
    $prefix = '';
    for ($i = 0; $i < $counter; $i++) {
        $letter = chr(rand(97, 122));
        $prefix .= $letter;
    }
    return $prefix;
}

echo ("Prefix: " . randPrefix(4));

function randomCap($str)
{
    $newStr = '';
    $randomPos = rand(0, mb_strlen($str) - 1);
    $randomChar = $str[$randomPos];
    while (!ctype_alpha($randomChar)) {
        $randomPos = rand(0, mb_strlen($str) - 1);
        $randomChar = $str[$randomPos];
    }
    if (ctype_lower($randomChar)) {
        $newStr = substr_replace($str, mb_strtoupper($randomChar), $randomPos, 1);
    } else {
        $newStr = substr_replace($str, mb_strtolower($randomChar), $randomPos, 1);
    }
    return $newStr;
}

function randomColor()
{
    $color = '#';
    for ($i = 0; $i < 3; $i++) {
        $color .= str_pad(dechex(mt_rand(0, 255)), 2, '0', STR_PAD_LEFT);
    }
    return $color;
}

function colorize($input)
{
    $newStr = '';
    $length   = mb_strlen($input);

    for ($i = 0; $i < $length - 1; $i++) {
        $newStr .= "<span style=\"color: " . randomcolor() . "\">" . $input[$i] . "</span>";
    }

    return $newStr;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cool NickName Generator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <header>
        <nav class="navbar bg-dark navbar-dark fixed-top">
            <span class="navbar-brand">PHP Intro: <?php echo $_SERVER['SCRIPT_FILENAME'] ?></span>
        </nav>
    </header>

    <div class="container-fluid mt-3 pt-5">

        <h1>Cool NickName Generator</h1>

        <form method="post">
            <input type="text" name="aName" id="aName" required>
            <button type="submit" class="btn btn-primary" disabled="disabled">Submit</button>
        </form>



        <?php
        if ($_REQUEST['aName'] != null) {
            $name = $_REQUEST['aName'];
            $reversed = mb_strrev($name);
            $reversedCapped = mb_strtoupper($reversed);
            $capped = mb_strrev($reversedCapped);
            $dashPadded = "--" . $capped . "--";
            $xPrefixed = "x" . $dashPadded;
            $randomPrefix = randPrefix(4);
            $randPrefixed = $randomPrefix . $xPrefixed;
            $squareBracketed = "[" . $randomPrefix . "]" . $xPrefixed;
            $randomCapped = randomCap($squareBracketed);
            $colorized = colorize($randomCapped);


            ?>
            <ul>
                <li>Initial input: <?php echo ($name); ?></li>
                <li>Reversed: <?php echo ($reversed); ?></li>
                <li>Capitalized: <?php echo ($reversedCapped); ?></li>
                <li>Re-reversed: <?php echo ($capped); ?></li>
                <li>Dash-padded: <?php echo ($dashPadded); ?></li>
                <li>x-prefixed: <?php echo ($xPrefixed); ?></li>
                <li>Rand-prefixed: <?php echo ($randPrefixed); ?></li>
                <li>Square-bracketed: <?php echo ($squareBracketed); ?></li>
                <li>Random-capped: <?php echo ($randomCapped); ?></li>
                <li>Colorized: <span style="font-size: 2rem;"><?php echo ($colorized); ?></span></li>
            </ul>
        <?php
    }
    ?>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script>
        let button = document.querySelector('button');
        document.querySelector('#aName').addEventListener('keyup', function(e) {
            if (e.target.value.length > 0) {
                button.removeAttribute('disabled');
            } else {
                button.setAttribute('disabled', 'true');
            }
        });
    </script>

</body>

</html>