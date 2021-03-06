<?php

namespace AbstractFactoryBundle\Controller;

use FactoryMethodBundle\Concept\Factory\NYPizzaStore;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $store = new NYPizzaStore();
        $store->order('chees');
        return $this->render('AbstractFactoryBundle:Default:index.html.twig');
    }
}
