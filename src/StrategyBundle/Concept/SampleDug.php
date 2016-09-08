<?php

namespace StrategyBundle\Concept;


class SampleDug extends AbstractDug implements DugInterface
{
    /**
     * SampleDug constructor.
     */
    public function __construct()
    {
        $this->flyBehavior = new Behavior\FlyWithWings();
        $this->criakBehavior = new Behavior\CriaSample();
    }

    /**
     * Show Dug.
     *
     * @return void
     */
    public function show()
    {
        echo 'I\'m Simple Dug<br>';
    }
}
