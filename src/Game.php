<?php

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
}
