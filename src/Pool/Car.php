<?php 


namespace src\Pool ; 

class Car {  

    public $rentAt ; 
    public function __construct()
    {
        $this->rentAt = new \DateTime();
    }

    public function moving()
    { 
        echo "this car is moving now" ; 
    }
}
