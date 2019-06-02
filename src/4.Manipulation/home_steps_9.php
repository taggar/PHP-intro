<?php

$anAssocArray = ["Seed1" => "Seed1", "Seed2" => "Seed2", "Seed3" => "Seed3", "Seed4" => "Seed4"];

foreach ($anAssocArray as $key => $value) {
    $_SESSION["anObject"]->$key = $value;
}

status();

?>
