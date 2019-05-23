<?php
// nickname_generate(), ask for the parameter nickname in it, and use this parameter to do what you did in the string manipulation exercise

function nickname_generate($seed)
{
    // echo ("Seeded with {$seed}");
    $reversed = mb_strrev($seed);
    $reversedCapped = mb_strtoupper($reversed);
    $capped = mb_strrev($reversedCapped);
    $dashPadded = "--" . $capped . "--";
    $xPrefixed = "x" . $dashPadded;
    $randomPrefix = randPrefix(4);
    $squareBracketed = "[" . $randomPrefix . "]" . $xPrefixed;
    $randomCapped = randomCap($squareBracketed);
    $colorized = colorize($randomCapped);
    // echo ("Returning {$colorized}");
    return $colorized;
}
// object_generate(), this does not take any parameters, but returns the object

function object_generate()
{
    // Create stuff
    $anArray = ['Seed1", "Seed2", "Seed3", "Seed4'];
    $anAssocArray = ['AASeed1" => "Seed1", "AASeed2" => "Seed2", "AASeed3" => "Seed3", "AASeed4" => "Seed4'];
    $anObject = new stdClass();
    $anObject->seed1 = "Seed1";
    $anObject->seed2 = "Seed2";
    $anObject->seed3 = "Seed3";
    $anObject->seed4 = "Seed4";
    foreach ($anAssocArray as $key => $value) {
        $anObject->$key = $value;
    }
    $anObject->arr1 = $anArray;
    $anObject->arr2 = $anAssocArray;
    $_SESSION['theObject'] = $anObject;
    return $anObject;
}

// object_revert(), this function should either take the object from the previous function (object_generate()) if it's passed to it as a parameter or create the object at the start if it wasn't passed

// You cannot overload PHP functions. Function signatures are based only on their names and do not include argument 
// lists, so you cannot have two functions with the same name. Class method overloading is different in PHP than in 
// many other languages. PHP uses the same word but it describes a different pattern.

// function object_revert() {
//     $object = object_generate();
//     object_revert($object);
// }

function object_revert($object)
{
    if ($object == null) {
        $object = object_generate();

    }
    $revertedArray = [];

    foreach ($object->arr2 as $key => $value) {
        // echo ("{$key}, {$value}");
        $revertedArray[$key] = $value;
    }
    return $revertedArray;
}

function status()
{
    echo (" \n\nCurrent state of " . '$_SESSION' . ": \n\n<pre>");
    echo ("\n----------------------------------------------------\n");
    var_dump($_SESSION);
    echo ("\n----------------------------------------------------\n");
    echo ("</pre>");
}

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
    $strArr = preg_split(" //u", $input);

    foreach ($strArr as $char) {
        $newStr .= "<span style=\"color: " . randomcolor() . "\">" . $char . "</span>";
    }

    return $newStr;
}

function destroy_session()
{
    session_destroy();
    session_start();
    status();
}
