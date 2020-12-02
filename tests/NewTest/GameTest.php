<?php 

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Domain\Services\Game;
use App\Domain\Models\ObjectCreator;
use App\NewTest\Models\Paper;
use App\NewTest\Models\Scissor;
use App\NewTest\Models\Stone;

class GameTest extends TestCase {

    public function test_paper_exist()
    {
        $paper = new Paper();

        $this->assertIsObject($paper);
    }

    public function test_stone_exist()
    {
        $stone = new Stone();

        $this->assertIsObject($stone);
    }

    public function test_scissor_exist()
    {
        $scissor = new Scissor();

        $this->assertIsObject($scissor);
    }

    public function test_scissor_attack_paper()
    {
        $scissor = new Scissor();
        $paper = new Paper();
        
        $response = $scissor->attack($paper);

        $this->assertEquals('Scissor Win', $response);
    }

    public function test_scissor_attack_stone()
    {
        $scissor = new Scissor();
        $stone = new Stone();
        
        $response = $scissor->attack($stone);

        $this->assertEquals('Stone Win', $response);
    }

    public function test_stone_attack_scissor()
    {
        $stone = new Stone();
        $scissor = new Scissor();
        
        $response = $stone->attack($scissor);

        $this->assertEquals('Stone Win', $response);
    }

    public function test_stone_attack_paper()
    {
        $stone = new Stone();
        $paper = new Paper();
        
        $response = $stone->attack($paper);

        $this->assertEquals('Paper Win', $response);
    }
    
}

?>