<?php 

namespace App\Models\FactoryModels;

use App\Contracts\ISelectable;
use App\Contracts\ISelectableFactory;

use App\Models\Scissors;

class ScissorsFactory implements ISelectableFactory {

    public function createObject() : ISelectable
    {
        return new Scissors();
    }

}

?>