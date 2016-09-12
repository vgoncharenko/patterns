<?php

namespace ObserverBundle\Concept\Subject;

use ObserverBundle\Concept\Observer\ObserverInterface;

interface SubjectInterface
{
    /**
     * Add new observer.
     *
     * @param ObserverInterface $observer
     * @return void
     */
    public function registerObserver(ObserverInterface $observer);

    /**
     * Remove observer.
     *
     * @param ObserverInterface $observer
     * @return void
     */
    public function removeObserver(ObserverInterface $observer);

    /**
     * Notify observers.
     *
     * @return void
     */
    public function notifyObserver();
}
