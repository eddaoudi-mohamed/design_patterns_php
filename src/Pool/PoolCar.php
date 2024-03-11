<?php 

namespace src\Pool  ; 

class PoolCar { 

    /**
     * @var Car []
    */
    public $freeCar =[]  ; 
    /**
     * @var Car []
    */
    public $buysCar = [] ;  


    public function rentCar(){  
        if(count($this->freeCar) ==0){ 
            $car = new Car() ; 
        }else{ 
            $car = array_pop($this->freeCar) ; 
        }
        $this->buysCar[spl_object_hash($car)] = $car ; 

        return $car ; 
    }


    public function carFree(Car $car){ 
        $carId = spl_object_hash($car)  ; 

        if(isset($this->buysCar[$carId])){ 
            unset($this->buysCar[$carId]) ; 
            $this->freeCar[$carId] = $car ; 
        } 

    }
}
 