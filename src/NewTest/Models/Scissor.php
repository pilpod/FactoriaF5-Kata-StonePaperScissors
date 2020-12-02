<?php 

namespace App\NewTest\Models;

use App\NewTest\Models\Paper;
use App\NewTest\Models\Stone;

class Scissor {

    public function attack(Object $enemy): string
    {
        if($enemy == new Paper()) {
            return 'Scissor Win';
        }

        if($enemy == new Stone()) {
            return 'Stone Win';
        }

    }

}

?>