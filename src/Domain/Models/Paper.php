<?php 

namespace App\Domain\Models;
use App\Domain\Contracts\IObject;

class Paper implements IObject
{
    private $type;

    public function ObjectType()
    {
        $this->type = 'Paper';
        return $this->type;
    }
}

?>