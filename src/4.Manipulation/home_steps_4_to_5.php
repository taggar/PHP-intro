<?php

echo ("<pre>");

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

echo ("</pre>");

status();

?>