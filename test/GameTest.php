<?php



include "./src/Game.php";
include './src/Player.php';


use PHPUnit\Framework\TestCase;



class GameTest extends TestCase
{
    public function testPlayerCannotMoveOffTheGrid()
    {
        $player1 = new Player(0, 0, 0); // Position (0, 0) Nord
        $player1->moveForward(2);
        $this->assertEquals([0, 0], $player1->getCoordinates());
    }

    public function testPlayerCanTurnAndMove()
    {
        $player1 = new Player(5, 5, 0); // Position (5, 5) Nord
        $player1->turnRight();
        $player1->moveForward(1);
        $this->assertEquals([6, 5], $player1->getCoordinates());
    }

    public function testPlayerCollision()
    {
        $player1 = new Player(5, 5, 0); // Position (5, 5) Nord
        $player2 = new Player(5, 5, 1); // Position (5, 5) EST
        $game = new Game($player1, $player2);
        $this->assertTrue($game->checkForCollision());
    }

    public function testPlayerCanMoveOneStep()
    {
        $player1 = new Player(5, 5, 1); // Position (5, 5) facing East
        $player1->moveForward(1); // Move one step
        $this->assertEquals([6, 5], $player1->getCoordinates()); // Check if moved one step to the East
    }

    public function testPlayerCanMoveTwoSteps()
    {
        $player1 = new Player(5, 5, 1); // Position (5, 5) facing East
        $player1->moveForward(2); // Move two steps
        $this->assertEquals([7, 5], $player1->getCoordinates()); // Check if moved two steps to the East
    }
}
