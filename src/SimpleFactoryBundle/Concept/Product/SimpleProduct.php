<?php

namespace SimpleFactoryBundle\Concept\Product;

class SimpleProduct implements ProductInterface
{
    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return 'I\'m Simple product.';
    }

    /**
     * Get price.
     *
     * @return string
     */
    public function getPrice()
    {
        return '100$';
    }
}
