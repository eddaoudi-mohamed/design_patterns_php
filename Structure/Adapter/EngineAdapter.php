<?php

namespace Structure\Adapter;


class EngineAdapter  implements EngineInterface
{



    private $engine;
    /**
     * Class constructor.
     */
    public function __construct(TuroEngine $engine)
    {
        $this->engine = $engine;
    }


    public function startEngine()
    {
        return  $this->engine->startTurbo();
    }
}
