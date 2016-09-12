<?php

namespace StrategyBundle\Concept;

use StrategyBundle\Concept\Behavior\FlyBehaviorInterface;

abstract class AbstractDug implements DugInterface
{
    /**
     * @var FlyBehaviorInterface
     */
    protected $flyBehavior;

    /**
     * @var FlyBehaviorInterface
     */
    protected $criakBehavior;

    /**
     * Sey 'cria-cria'
     *
     * @return void
     */
    public function cria()
    {
        echo $this->criakBehavior->cria();
    }

    /**
     * Fly action.
     *
     * @return void
     */
    public function fly()
    {
        $this->flyBehavior->fly();
    }

    /**
     * Show Dug.
     *
     * @return void
     */
    public abstract function show();
}
