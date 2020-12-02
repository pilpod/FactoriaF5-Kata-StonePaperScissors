<?php 

namespace App\Domain\Models;

class ObjectCreator {

    public function ReturnObject($type)
    {
        if($type === 'Stone') {
            $object = new Stone();
            $stone = $object->ObjectType();
            return $stone;
        }

        if($type === 'Paper') {
            $object = new Paper();
            $paper = $object->ObjectType();
            return $paper;
        }

        if($type === 'Scissors') {
            $object = new Scissors();
            $scissors = $object->ObjectType();
            return $scissors;
        }
    }

}

?>