<?php 
  class Blackjack {

    private $name;
    private $score;
    private $state;

    public function __construct($theName) {
        $this->name = $theName;
        $this->score = 0; 
        $this->state = "exists";
        // deal 1 card
        $this->hit();
    }
    
    public function Hit() {
        // should add a card between 1-11
        if ($this->score < 21) {
            $hit = rand(1,11);
            $this->score += $hit;
        }
        switch ($this->score) {
            case ($this->score == 21 ):
                $this->state = 'winner';
                break;
            case ($this->score > 21):
                $this->state = 'bust';
                break;
            default:
                return;
        }
    
        return;
    }

    public function Stand() {
        // should end your turn and start the dealer's turn. (Your point total is saved.)
        $this->state = 'stand';
        return;
    }

    public function Surrender() {
        // should make you surrender the game. (Dealer wins.)
        $this->state = 'surrender';
        return;
    }

    public function getScore() {
        return $this->score;
    }

    public function getState() {
        return $this->state;
    }

    public function getName() {
        return $this->name;
    }
 }

?>