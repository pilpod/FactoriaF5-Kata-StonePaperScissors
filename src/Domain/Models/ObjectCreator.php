<?php 

namespace App\Domain\Models;

class ObjectCreator {

    public function ReturnObject($type)
    {
        if($type === 'Stone') {
            return new Stone();
        }

        if($type === 'Paper') {
            return new Paper();
        }

        if($type === 'Scissors') {
            return new Scissors();
        }
    }

}

?>