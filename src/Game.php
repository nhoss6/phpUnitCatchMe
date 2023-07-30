<?php
// Mohammed DJABI M1 IW 
class Game
{
    private $player1;
    private $player2;

    public function __construct(Player $player1, Player $player2)
    {
        $this->player1 = $player1;
        $this->player2 = $player2;
    }

    public function getPlayer1()
    {
        return $this->player1;
    }

    public function getPlayer2()
    {
        return $this->player2;
    }

    public function checkForCollision()
    {
        return ($this->player1->getCoordinates() == $this->player2->getCoordinates());
    }

    public function printGameState()
    {
        if ($this->player1->canSee($this->player2)) {
            echo " Le joueur 1 peut voir le joueur 2 à une distance de " . $this->player1->getDistance($this->player2) . " steps.\n";
        }

        if ($this->player2->canSee($this->player1)) {
            echo " Le joueur 2 peut voir le joueur 1 à une distance de " . $this->player2->getDistance($this->player1) . " steps.\n";
        }
    }

    public function canSeeEachOther()
    {
        $p1Coords = $this->player1->getCoordinates();
        $p2Coords = $this->player2->getCoordinates();

        switch ($this->player1->getDirection()) {
            case 0: // Nord
                if ($p1Coords[0] == $p2Coords[0] && $p1Coords[1] > $p2Coords[1])
                    return abs($p1Coords[1] - $p2Coords[1]);
                break;
            case 1: // EST
                if ($p1Coords[1] == $p2Coords[1] && $p1Coords[0] < $p2Coords[0])
                    return abs($p1Coords[0] - $p2Coords[0]);
                break;
            case 2: // SUD
                if ($p1Coords[0] == $p2Coords[0] && $p1Coords[1] < $p2Coords[1])
                    return abs($p1Coords[1] - $p2Coords[1]);
                break;
            case 3: // OUEST
                if ($p1Coords[1] == $p2Coords[1] && $p1Coords[0] > $p2Coords[0])
                    return abs($p1Coords[0] - $p2Coords[0]);
                break;
        }

        return false;
    }
}
