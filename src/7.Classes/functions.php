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

function checkPositions() {
    echo ("Checking positions:");
        

        // if ($_SESSION)
        
        foreach ($_SESSION as $member) {
            if (is_object($member)) {
                echo ("\n\nName: ".$member->getName());
                echo ("\n\nState: ".$member->getState());
                echo ("\n\nScore: ".$member->getScore());
                
                        if ($member->getState() == 'bust' || $member->getState() == 'surrender') {
                            echo ("\n\n" . $member->getName() . " lost ... ");
                        } 
                    echo ("\n\n");

            }
        } 

        if ($_SESSION['currentplayer'] == "Dealer") {
            echo (" Dealer active");
            $dealerScore = $_SESSION['Dealer']->getScore();
            if ( $dealerScore > 15 && $dealerScore <= 21) {
                echo (" Dealer score over 15");
                if ($_SESSION['Dealer']->getScore() >= $_SESSION['Player']->getScore()) {
                    echo ("Dealer wins!");
                } else {
                    echo ("Player wins!");
                }
            }
        }
    }

 function checkPosition($playerName) {

    $playerState = $_SESSION[$playerName]->getState();
    $playerScore = $_SESSION[$playerName]->getScore();

    if ($playerState == 'bust' || $playerState == 'surrender') {
        return ($playerName . " lost ... ");
    } else {
        if ($_SESSION['currentplayer'] == "Dealer") {
            // echo (" Dealer active");
            $dealerScore = $_SESSION['Dealer']->getScore();
            if ( $dealerScore > 15 && $dealerScore <= 21) {
                // echo (" Dealer score over 15");
                if ($_SESSION['Dealer']->getScore() >= $_SESSION['Player']->getScore()) {
                    if ($playerName == 'Dealer') {
                        return ("Dealer won!");
                    } else {
                        return ("Player lost!");
                    }
                } else {
                    if ($playerName == 'Dealer') {
                        return ("Dealer lost!");
                    } else {
                        return ("Player won!");
                    }
                }
            }
        }
    } 
 }

?>