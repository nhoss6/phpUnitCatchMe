<?php

class Player
{
    private $x;
    private $y;
    private $direction;

    public function __construct($x, $y, $direction)
    {
        $this->x = $x;
        $this->y = $y;
        $this->direction = $direction;
    }

    public function getCoordinates()
    {
        return [$this->x, $this->y];
    }

    public function getDirection()
    {
        return $this->direction;
    }

    public function turnLeft()
    {
        $this->direction = ($this->direction + 3) % 4;
    }

    public function turnRight()
    {
        $this->direction = ($this->direction + 1) % 4;
    }

    public function moveForward($steps)
    {
        switch ($this->direction) {
            case 0: // North
                $this->y = max(0, $this->y - $steps);
                break;
            case 1: // East
                $this->x = min(9, $this->x + $steps);
                break;
            case 2: // South
                $this->y = min(9, $this->y + $steps);
                break;
            case 3: // West
                $this->x = max(0, $this->x - $steps);
                break;
            default:
                // Erreur si la position est invalid
                throw new Exception('Invalid direction');
        }
    }
}
