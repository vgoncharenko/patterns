<?php

namespace StrategyBundle\Concept\Behavior;

class CriaSample implements CriaBehaviorInterface
{
    /**
     * Cria action.
     *
     * @return void
     */
    public function cria()
    {
        echo 'Cria-cria-cria!<br>';
    }
}
