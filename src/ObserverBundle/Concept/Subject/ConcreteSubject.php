<?php
/**
 * Created by PhpStorm.
 * User: vgoncharenko
 * Date: 10/2/16
 * Time: 21:00
 */

namespace ObserverBundle\Concept\Subject;


use ObserverBundle\Concept\Observer\ObserverInterface;

class ConcreteSubject implements SubjectInterface
{
    /**
     * Array of observers.
     *
     * @var ObserverInterface[]
     */
    private $observers = [];

    /**
     * Data.
     *
     * @var array
     */
    private $data = [];

    /**
     * Add new observer.
     *
     * @param ObserverInterface $observer
     * @return void
     */
    public function registerObserver(ObserverInterface $observer)
    {
        $this->observers[get_class($observer)] = $observer;
    }

    /**
     * Remove observer.
     *
     * @param ObserverInterface $observer
     * @return void
     */
    public function removeObserver(ObserverInterface $observer)
    {
        unset($this->observers[get_class($observer)]);
    }

    /**
     * Notify observers.
     *
     * @return void
     */
    public function notifyObserver()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->data);
        }
    }
}