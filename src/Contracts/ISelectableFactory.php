<?php 

namespace App\Contracts;

interface ISelectableFactory {

    public function createObject() : ISelectable;

}

?>