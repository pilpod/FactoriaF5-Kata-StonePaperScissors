<?php 

namespace App\Domain\Models;
use App\Domain\Contracts\IObject;

class Stone implements IObject
{
    private $type;

    public function ObjectType()
    {
        $this->type = 'Stone';
        return $this->type;
    }
}

?>