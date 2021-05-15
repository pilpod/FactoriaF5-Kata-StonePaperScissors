<?php 

namespace App\Applications;

use App\Contracts\ISelectable;
use App\Contracts\ISelectableFactory;
use App\Models\FactoryModels\PaperFactory;
use App\Models\FactoryModels\ScissorsFactory;
use App\Models\FactoryModels\StoneFactory;

class Game {

    private ISelectableFactory $stoneFactory;
    private ISelectableFactory $paperFactory;
    private ISelectableFactory $scissorsFactory;

    private ISelectable $object1;
    private ISelectable $object2;

    public function __construct(ISelectable $object1, ISelectable $object2)
    {
        $this->stoneFactory = new StoneFactory;
        $this->paperFactory = new PaperFactory;
        $this->scissorsFactory = new ScissorsFactory;

        $this->object1 = $object1;
        $this->object2 = $object2;
    }

    public function showResult() : string
    {
        $stone = $this->stoneFactory->createObject();
        $paper = $this->paperFactory->createObject();
        $scissors = $this->scissorsFactory->createObject();

        if($this->object1 == $stone && $this->object2 == $scissors)
        {
            return 'Stone win';
        }

        if($this->object1 == $stone && $this->object2 == $paper)
        {
            return 'Paper win';
        }

        return 'Tie';
    }



}

?>