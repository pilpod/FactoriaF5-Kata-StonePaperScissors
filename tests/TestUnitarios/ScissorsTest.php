<?php 

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Domain\Models\Scissors;

class ScissorsTest extends TestCase
{
    public function test_is_a_Scissors()
    {
        $stone = new Scissors();
        $result = $stone->ObjectType();
        $espectedResult = 'Scissors';
        $this->assertEquals($espectedResult, $result);
    }
}


?>