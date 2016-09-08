<?php

namespace StrategyBundle\Concept;

interface DugInterface
{
    /**
     * Sey 'cria-cria'
     *
     * @return void
     */
    public function cria();

    /**
     * Fly action.
     *
     * @return void
     */
    public function fly();

    /**
     * Show Dug.
     *
     * @return void
     */
    public function show();
}
