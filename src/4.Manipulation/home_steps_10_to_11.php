<?php

$_COOKIE["theObject"] = $_SESSION["anObject"];

echo ("<pre>\n----------- START COOKIEDUMP ---------------\n");
var_dump($_COOKIE["theObject"]);
echo ("\n----------- END   COOKIEDUMP ---------------\n</pre>");

status();

?>