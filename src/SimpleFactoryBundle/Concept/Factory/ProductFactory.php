<?php

namespace SimpleFactoryBundle\Concept\Factory;

use SimpleFactoryBundle\Concept\Product\ProductInterface;
use SimpleFactoryBundle\Concept\Product\SimpleProduct;
use SimpleFactoryBundle\Concept\Product\VirtualProduct;

class ProductFactory
{
    /**
     * Create product.
     *
     * @param string $type
     * @return ProductInterface
     */
    public function create($type)
    {
        $product = null;
        switch ($type) {
            case 'simple':
                $product = new SimpleProduct();
                break;
            case 'virtual':
                $product = new VirtualProduct();
                break;
        }
        return $product;
    }
}
