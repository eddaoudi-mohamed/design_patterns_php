<?php 


namespace src\SimpleFactory ; 

class Car {  

    public string $type ; 
    public function __construct($type)
    {       
        $this->type = $type  ; 
    }

    
}
 