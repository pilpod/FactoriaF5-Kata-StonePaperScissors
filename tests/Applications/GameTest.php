<?php 

namespace Tests\Applications;

use PHPUnit\Framework\TestCase;
use App\Applications\Game;

class GameTest extends TestCase {

    private Game $game;

    protected function setUp() : void
    {
        parent::setUp();
        $this->game = new Game(); 
    }
    
    public function test_Game_exit()
    {
        $game = new Game();

        $this->assertInstanceOf(Game::class, $game);
    }

}

?>