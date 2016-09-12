<?php

namespace StrategyBundle\Controller;

use StrategyBundle\Concept\DugInterface;
use StrategyBundle\Concept\LittleDug;
use StrategyBundle\Concept\SampleDug;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        /** @var DugInterface[] $dugs */
        $dugs = [];
        $dugs[] = new LittleDug();
        $dugs[] = new SampleDug();

        foreach ($dugs as $dug) {
            $dug->show();
            $dug->cria();
            $dug->fly();
            echo '<br>===========================<br>';
        }

        return $this->render('StrategyBundle:Default:index.html.twig');
    }
}
