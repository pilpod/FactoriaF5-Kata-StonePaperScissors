<?php 

namespace App\Models\FactoryModels;

use App\Contracts\ISelectable;
use App\Contracts\ISelectableFactory;

use App\Models\Paper;

class PaperFactory implements ISelectableFactory {

    public function createObject(): ISelectable
    {
        return new Paper();
    }

}

?>