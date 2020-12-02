<?php 

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Domain\Services\Game;
use App\Domain\Models\ObjectCreator;

class GameTest extends TestCase 
{

    public function test_stone_win_scissors()
    {
        $startGame = new Game();
        $object = new ObjectCreator();
        $stone = $object->ReturnObject('Stone');
        $scissors = $object->ReturnObject('Scissors');
        
        $result = $startGame->Play($stone, $scissors);

        $expected = 'Stone win';
        $this->assertEquals($expected, $result);
    }

    public function test_scissors_win_paper()
    {
        $startGame = new Game();
        $object = new ObjectCreator();
        $scissors = $object->ReturnObject('Scissors');
        $paper = $object->ReturnObject('Paper');
        
        $result = $startGame->Play($scissors, $paper);

        $expected = 'Scissors win';
        $this->assertEquals($expected, $result);
    }
}


?>