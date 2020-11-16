<?php 

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Domain\Models\ObjectCreator;

class ObjectCreatorTest extends TestCase
{
    public function test_create_return_stone()
    {
        $stone = new ObjectCreator();

        $weapon = $stone->ReturnObject('Stone');
        $result = $weapon->ObjectType();

        $expectedResult = 'Stone';
        $this->assertEquals($expectedResult, $result);
    }

    public function test_create_return_paper()
    {
        $paper = new ObjectCreator();

        $weapon = $paper->ReturnObject('Paper');
        $result = $weapon->ObjectType();

        $expectedResult = 'Paper';
        $this->assertEquals($expectedResult, $result);
    }

    public function test_create_return_scissors()
    {
        $paper = new ObjectCreator();

        $weapon = $paper->ReturnObject('Scissors');
        $result = $weapon->ObjectType();

        $expectedResult = 'Scissors';
        $this->assertEquals($expectedResult, $result);
    }

    
}


?>