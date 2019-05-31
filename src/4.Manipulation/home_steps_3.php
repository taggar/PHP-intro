<?php

    foreach ($_SESSION as $member => $value) {
        print ("\n<pre>Member: {$member}</pre>");

        $valueToAdd = "Added by loop";
        if (is_array($value)) {
            if (is_assoc2($value)) {
                $value["AddedByLoop"] = $valueToAdd;
            } else {
                array_push($value, $valueToAdd);
            }
        } else {
            $value->addedByLoop = $valueToAdd;
        }
        $_SESSION[$member] = $value;
    }

    status();

?>