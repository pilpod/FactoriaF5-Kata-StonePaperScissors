<?php 

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Domain\Models\ObjectCreator;

class ObjectCreatorTest extends TestCase
{
    public function test_create_return_stone()
    {
        $stone = new ObjectCreator();

        $result = $stone->ReturnObject('Stone');

        $expectedResult = 'Stone';
        $this->assertEquals($expectedResult, $result);
    }

    public function test_create_return_paper()
    {
        $paper = new ObjectCreator();

        $result = $paper->ReturnObject('Paper');

        $expectedResult = 'Paper';
        $this->assertEquals($expectedResult, $result);
    }

    public function test_create_return_scissors()
    {
        $paper = new ObjectCreator();

        $result = $paper->ReturnObject('Scissors');

        $expectedResult = 'Scissors';
        $this->assertEquals($expectedResult, $result);
    }

    
}


?>