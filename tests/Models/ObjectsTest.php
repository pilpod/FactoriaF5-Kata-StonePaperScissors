<?php 

namespace Tests\Models;

use PHPUnit\Framework\TestCase;

use App\Models\FactoryModels\ScissorsFactory;
use App\Models\FactoryModels\StoneFactory;
use App\Models\Scissors;
use App\Models\Stone;

class ObjectsTest extends TestCase {
    
    private ScissorsFactory $scissorsFactory;
    private StoneFactory $stoneFactory;

    protected function setUp(): void
    {
        $this->scissorsFactory = new ScissorsFactory();
        $this->stoneFactory = new StoneFactory();
    }

    public function test_ScissorsFactory_return_intance_of_Scissors()
    {
        $scissors = $this->scissorsFactory->createObject();

        $this->assertInstanceOf(Scissors::class, $scissors);
    }

    public function test_StoneFactory_return_intance_of_Stone()
    {
        $stone = $this->stoneFactory->createObject();

        $this->assertInstanceOf(Stone::class, $stone);
    }



}

?>