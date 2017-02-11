<?php
/**
 * Created by PhpStorm.
 * User: vgoncharenko
 * Date: 10/2/16
 * Time: 21:07
 */

namespace ObserverBundle\Concept\Observer;


class FirstObserver implements ObserverInterface
{
    /**
     * Observer update.
     *
     * @param array $data
     */
    public function update(array $data)
    {
        echo "Update data for First observer\n";
    }
}