<?php

namespace StrategyBundle\Concept\Behavior;

class CriaPie implements CriaBehaviorInterface
{
    /**
     * Cria action.
     *
     * @return void
     */
    public function cria()
    {
        echo 'Pi-pi-pi!<br>';
    }
}
