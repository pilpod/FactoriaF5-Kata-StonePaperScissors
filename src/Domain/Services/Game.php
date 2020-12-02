<?php 

namespace App\Domain\Services;

use App\Domain\Models\ObjectCreator;

class Game {

    public function Play($player1, $player2)
    {
        if($player1 === 'Stone' && $player2 === 'Scissors') {
            return 'Stone win';
        }

        if($player1 === 'Scissors' && $player2 === 'Paper') {
            return 'Scissors win';
        }
    }

}

?>