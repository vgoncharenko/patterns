<?php

namespace FactoryMethodBundle\Concept\Factory;

use FactoryMethodBundle\Concept\Product\PizzaInterface;

abstract class PizzaStore
{
    public function order(string $type)
    {
        /** @var PizzaInterface $pizza */
        $pizza = $this->create($type);
        $pizza->prepare();
        $pizza->cook();
        $pizza->cut();
        $pizza->shipping();
    }

    abstract protected function create(string $type) : PizzaInterface;
}
