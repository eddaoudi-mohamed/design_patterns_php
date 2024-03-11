<?php 

namespace src\Builder ;

use src\Builder\Models\Car;
use src\Builder\Models\Benz;

class BenzCarBuilder implements CarBuilderInterface { 
    /**
     * @var Car $type
     */
    private $type ; 
    public function creatCar()
    {
        $this->type = new Benz();
    } 

    public function addEngine()
    {
         $this->type->setPart("Engine" , "engine");
    }

    public function addDoor()
    {
        $this->type->setPart("Door" , "door");
        
    } 

    public function getCar()
    {
        return $this->type;
    }
}
