<?php
function status()
{
    echo (" <hr />\n\nCurrent state of " . '$_SESSION' . ": \n\n<pre>");
    echo ("\n----------------------------------------------------\n");
    var_dump($_SESSION);
    echo ("\n----------------------------------------------------\n");
    echo ("</pre>");
}

function destroy_session()
{
    session_destroy();
    session_start();
    status();
}

?>