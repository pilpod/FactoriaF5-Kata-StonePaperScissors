<?php 

namespace App\NewTest\Models;

use App\NewTest\Models\Paper;
use App\NewTest\Models\Scissor;

class Stone {

    public function attack(Object $enemy): string
    {
        if($enemy == new Scissor()) {
            return 'Stone Win';
        }

        if($enemy == new Paper()) {
            return 'Paper Win';
        }

    }

}

?>