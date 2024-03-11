<?php 

namespace src\Builder ;

use src\Builder\Models\BMW;
use src\Builder\Models\Car;

class BMWCarBuilder implements CarBuilderInterface {  


    /**
     * @var Car $type
     */
    private $type ; 
    public function creatCar()
    {
        $this->type = new BMW();
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
