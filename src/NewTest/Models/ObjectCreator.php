<?php 

namespace App\NewTest\Models;

class ObjectCreator {

    private Object $object;

    public function __construct($object)
    {
        $this->object = $object;
    }

}

?>