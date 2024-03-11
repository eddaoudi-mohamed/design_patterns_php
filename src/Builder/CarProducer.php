<?php 

namespace src\Builder ;

use src\Builder\Models\Car;

class CarProducer {  
    /**
     * @var CarBuilderInterface 
     */
    private $builder ;     
    public function __construct(CarBuilderInterface $builder)
    {   
        $this->builder = $builder;
    }


    public function ProduceCar():Car{ 
        $this->builder->creatCar();
        $this->builder->addEngine();
        $this->builder->addDoor();
        return $this->builder->getCar();
    }
}
