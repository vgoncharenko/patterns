<?php

namespace SimpleFactoryBundle\Controller;

use SimpleFactoryBundle\Concept\Factory\ProductFactory;
use SimpleFactoryBundle\Concept\Product\ProductInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        /** @var ProductInterface[] $products */
        $products = [];
        $factory = new ProductFactory();
        $products[] = $factory->create('simple');
        $products[] = $factory->create('virtual');
        foreach ($products as $product) {
            echo $product->getName() . "<br>";
            echo "with price=" . $product->getPrice() . '<br>======================<br>';
        }

        return $this->render('SimpleFactoryBundle:Default:index.html.twig');
    }
}
