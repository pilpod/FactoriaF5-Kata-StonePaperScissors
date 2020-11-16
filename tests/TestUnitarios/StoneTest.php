<?php 

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Domain\Models\Stone;

class StoneTest extends TestCase
{
    public function test_is_a_Stone()
    {
        $stone = new Stone();
        $result = $stone->ObjectType();
        $espectedResult = 'Stone';
        $this->assertEquals($espectedResult, $result);
    }
}


?>