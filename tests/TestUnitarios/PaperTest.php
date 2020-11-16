<?php 

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Domain\Models\Paper;

class PaperTest extends TestCase
{
    public function test_is_a_Paper()
    {
        $stone = new Paper();
        $result = $stone->ObjectType();
        $espectedResult = 'Paper';
        $this->assertEquals($espectedResult, $result);
    }
}


?>