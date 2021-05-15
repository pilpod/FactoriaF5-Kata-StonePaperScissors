<?php 

namespace Tests\Models;

use PHPUnit\Framework\TestCase;

use App\Models\FactoryModels\ScissorsFactory;
use App\Models\FactoryModels\StoneFactory;
use App\Models\FactoryModels\PaperFactory;
use App\Models\Scissors;
use App\Models\Stone;
use App\Models\Paper;

class ObjectsTest extends TestCase {
    
    private ScissorsFactory $scissorsFactory;
    private StoneFactory $stoneFactory;
    private PaperFactory $paperFactory;

    protected function setUp(): void
    {
        $this->scissorsFactory = new ScissorsFactory();
        $this->stoneFactory = new StoneFactory();
        $this->paperFactory = new PaperFactory();
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

    public function test_PaperFactory_return_intance_of_Paper()
    {
        $paper = $this->paperFactory->createObject();

        $this->assertInstanceOf(Paper::class, $paper);
    }



}

?>