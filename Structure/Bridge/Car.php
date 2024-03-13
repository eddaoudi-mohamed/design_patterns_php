<?php


namespace Structure\Bridge;


abstract class Car
{

    protected $CarColor;
    /**
     * Class constructor.
     */
    public function __construct(CarColorInterface $CarColor)
    {
        $this->CarColor = $CarColor;
    }
    abstract public function getProducte();
}
