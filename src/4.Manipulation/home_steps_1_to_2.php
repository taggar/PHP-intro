<?php

session_start();

$anArray = ["Seed1", "Seed2", "Seed3", "Seed4"];
$_SESSION['simpleArray'] = $anArray;

$anAssocArray = ["Seed1" => "Seed1", "Seed2" => "Seed2", "Seed3" => "Seed3", "Seed4" => "Seed4"];
$_SESSION['assocArray'] = $anAssocArray;

$anObject = new stdClass();
$anObject->seed1 = "Seed1";
$anObject->seed2 = "Seed2";
$anObject->seed3 = "Seed3";
$anObject->seed4 = "Seed4";
$_SESSION['anObject'] = $anObject;

?>