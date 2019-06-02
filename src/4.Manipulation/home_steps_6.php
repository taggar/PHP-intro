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