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
    
    public function test_Stone_win_vs_Scissors()
    {
        $game = new Game($this->stone, $this->scissors);

        $gameResult = $game->showResult();

        $this->assertEquals('Stone win', $gameResult);
    }

    public function test_Paper_win_vs_Stone()
    {
        $game = new Game($this->stone, $this->paper);

        $gameResult = $game->showResult();

        $this->assertEquals('Paper win', $gameResult);
    }

    public function test_Scissors_win_vs_paper()
    {
        $game = new Game($this->scissors, $this->paper);

        $gameResult = $game->showResult();

        $this->assertEquals('Scissors win', $gameResult);
    }

}

?>