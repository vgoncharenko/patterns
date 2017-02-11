<?php

namespace FactoryMethodBundle\Concept\Factory;

use FactoryMethodBundle\Concept\Product\KyivCheesPizza;
use FactoryMethodBundle\Concept\Product\PizzaInterface;

class KyivPizzaStore extends PizzaStore
{
    protected function create(string $type) : PizzaInterface
    {
        switch ($type) {
            case 'chees': return new KyivCheesPizza();
        }
    }
}
