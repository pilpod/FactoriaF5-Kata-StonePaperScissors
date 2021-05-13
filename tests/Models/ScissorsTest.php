<?php 

namespace Tests\Models;

use PHPUnit\Framework\TestCase;

use App\Models\FactoryModels\ScissorsFactory;
use App\Models\Scissors;

class ScissorsTest extends TestCase {
    
    private ScissorsFactory $scissorsFactory;

    protected function setUp(): void
    {
        $this->scissorsFactory = new ScissorsFactory();
    }

    public function test_ScissorsFactory_return_intance_of_Scissors()
    {
        $scissors = $this->scissorsFactory->createObject();

        $this->assertInstanceOf(Scissors::class, $scissors);
    }

}

?>