<?php

namespace ObserverBundle\Controller;

use ObserverBundle\Concept\Observer\FirstObserver;
use ObserverBundle\Concept\Observer\SecondObserver;
use ObserverBundle\Concept\Subject\ConcreteSubject;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use ObserverBundle\Concept\Subject\SubjectInterface;
use ObserverBundle\Concept\Observer\ObserverInterface;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        /** @var SubjectInterface $subject */
        $subject = new ConcreteSubject();
        /** @var ObserverInterface $observers */
        $observers = [];
        $observers[] = new FirstObserver();
        $observers[] = new SecondObserver();

        foreach ($observers as $item) {
            $subject->registerObserver($item);
        }
        $subject->notifyObserver();

        return $this->render('ObserverBundle:Default:index.html.twig');
    }
}
