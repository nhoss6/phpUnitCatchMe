<?php
// Mohammed DJABI M1 IW 


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
        $player1 = new Player(5, 5, 1); // Position (5, 5) Direction est
        $player1->moveForward(1); // Move one step
        $this->assertEquals([6, 5], $player1->getCoordinates()); // Vérifier si le jour a fait 2 pas direction est 
    }

    public function testPlayerCanMoveTwoSteps()
    {
        $player1 = new Player(5, 5, 1); // Position (5, 5) Direction est
        $player1->moveForward(2); // avance 2 pas 
        $this->assertEquals([7, 5], $player1->getCoordinates()); // Vérifier si le jour a fait 2 pas direction est 
    }
    public function testCanSeeEachOtherWhenAlignedHorizontally()
    {
        $player1 = new Player(5, 5, 1); // Position (5, 5) Direction est
        $player2 = new Player(7, 5, 3); // Position (7, 5) Direction ouest
        $game = new Game($player1, $player2);

        $this->assertEquals(2, $game->canSeeEachOther());
    }

    public function testCannotSeeEachOtherWhenNotAlignedHorizontally()
    {
        $player1 = new Player(5, 5, 1); // Position (5, 5) Direction est
        $player2 = new Player(5, 7, 3); // Position (5, 7) Direction est
        $game = new Game($player1, $player2);

        $this->assertFalse($game->canSeeEachOther());
    }
}
