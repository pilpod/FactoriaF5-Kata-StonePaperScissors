<?php 

namespace Tests\Applications;

use PHPUnit\Framework\TestCase;
use App\Applications\Game;

use App\Models\Stone;
use App\Models\Scissors;
use App\Models\Paper;

class GameTest extends TestCase {

    private Object $stone;
    private Object $paper;
    private Object $scissors;

    protected function setUp() : void
    {
        parent::setUp();
        $this->stone = new Stone;
        $this->paper = new Paper;
        $this->scissors = new Scissors;
    }
    


    public function test_Stone_win_Scissors()
    {
        $game = new Game($this->stone, $this->scissors);

        $gameResult = $game->showResult();

        $this->assertEquals('Stone win', $gameResult);
    }

}

?>