<?php
// Mohammed DJABI M1 IW 
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
            case 0: // Nord
                $this->y = max(0, $this->y - $steps);
                break;
            case 1: // EST
                $this->x = min(9, $this->x + $steps);
                break;
            case 2: // SUD
                $this->y = min(9, $this->y + $steps);
                break;
            case 3: // OUEST
                $this->x = max(0, $this->x - $steps);
                break;
            default:
                // Erreur si la position est invalid
                throw new Exception('direction erroné');
        }
    }

    public function canSee(Player $other)
    {
        $otherCoordinates = $other->getCoordinates();

        switch ($this->direction) {
            case 0: // North
                return $this->x == $otherCoordinates[0] && $this->y > $otherCoordinates[1];
            case 1: // East
                return $this->y == $otherCoordinates[1] && $this->x < $otherCoordinates[0];
            case 2: // South
                return $this->x == $otherCoordinates[0] && $this->y < $otherCoordinates[1];
            case 3: // West
                return $this->y == $otherCoordinates[1] && $this->x > $otherCoordinates[0];
            default:
                throw new Exception(' direction erroné');
        }
    }
    public function getDistance(Player $other)
    {
        $otherCoordinates = $other->getCoordinates();
        return abs($this->x - $otherCoordinates[0]) + abs($this->y - $otherCoordinates[1]);
    }
}
