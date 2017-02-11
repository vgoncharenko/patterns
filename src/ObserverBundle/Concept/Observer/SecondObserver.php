<?php
/**
 * Created by PhpStorm.
 * User: vgoncharenko
 * Date: 10/2/16
 * Time: 21:07
 */

namespace ObserverBundle\Concept\Observer;


class SecondObserver implements ObserverInterface
{
    /**
     * Observer update.
     *
     * @param array $data
     */
    public function update(array $data)
    {
        echo "Update data for Second observer\n";
    }
}