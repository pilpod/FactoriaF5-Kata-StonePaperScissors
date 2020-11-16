<?php 

namespace App\Domain\Models;
use App\Domain\Contracts\IObject;

class Scissors implements IObject
{
    private $type;

    public function ObjectType()
    {
        $this->type = 'Scissors';
        return $this->type;
    }
}

?>