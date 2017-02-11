<?php

namespace ObserverBundle\Concept\Observer;

interface ObserverInterface
{
    /**
     * Observer update.
     *
     * @param array $data
     */
    public function update(array $data);
}
