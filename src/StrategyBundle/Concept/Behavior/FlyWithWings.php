<?php

namespace StrategyBundle\Concept\Behavior;

class FlyWithWings implements FlyBehaviorInterface
{
    /**
     * Fly action.
     *
     * @return void
     */
    public function fly()
    {
        echo 'I can fly with wings.';
    }
}
