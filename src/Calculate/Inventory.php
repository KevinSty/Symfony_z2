<?php

namespace App\Calculate;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;

class Inventory {
    private $em;
    private $person;
    private $inventory;

    /**
     * Inventory constructor.
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function calcul(){
        $maxWeight = $this->person->getMaxWeight();

        $totalWeight = 0.0;

        foreach ($this->person->getInventories() as $inventories){
            $totalWeight = $inventories->getNumberOfItem() * $inventories->getMaterial()->getWeight();
        }

        $totalWeight+= $this->inventory->getNumberOfItem() * $this->inventory->getMaterial()->getWeight();

        if($totalWeight > $maxWeight)
            return false;
        return true;
    }

    /**
     * @param mixed $person
     */
    public function setPerson($person)
    {
        $this->person = $person;
    }

    /**
     * @param mixed $inventory
     */
    public function setInventory($inventory)
    {
        $this->inventory = $inventory;
    }
}