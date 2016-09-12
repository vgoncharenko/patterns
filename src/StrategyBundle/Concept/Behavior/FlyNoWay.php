<?php

namespace StrategyBundle\Concept\Behavior;

class FlyNoWay implements FlyBehaviorInterface
{
    /**
     * Fly action.
     *
     * @return void
     */
    public function fly()
    {
        echo 'I can\'t fly.';
    }
}
