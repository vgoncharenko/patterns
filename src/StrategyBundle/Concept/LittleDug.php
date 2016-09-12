<?php

namespace StrategyBundle\Concept;

class LittleDug extends AbstractDug implements DugInterface
{
    /**
     * SampleDug constructor.
     */
    public function __construct()
    {
        $this->flyBehavior = new Behavior\FlyNoWay();
        $this->criakBehavior = new Behavior\CriaPie();
    }

    /**
     * Show Dug.
     *
     * @return void
     */
    public function show()
    {
        echo 'I\'m Little Dug<br>';
    }
}
