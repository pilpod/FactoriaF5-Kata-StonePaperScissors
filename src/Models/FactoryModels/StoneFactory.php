<?php 

namespace App\Models\FactoryModels;

use App\Contracts\ISelectable;
use App\Contracts\ISelectableFactory;

use App\Models\Stone;

class StoneFactory implements ISelectableFactory {

    public function createObject(): ISelectable
    {
        return new Stone();
    }

}

?>