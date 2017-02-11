<?php

namespace FactoryMethodBundle\Concept\Factory;

use FactoryMethodBundle\Concept\Product\NYCheesPizza;
use FactoryMethodBundle\Concept\Product\PizzaInterface;

class NYPizzaStore extends PizzaStore
{
    protected function create(string $type) : PizzaInterface
    {
        switch ($type) {
            case 'chees': return new NYCheesPizza();
        }
    }
}
