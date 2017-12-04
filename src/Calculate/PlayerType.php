<?php

namespace App\Calculate;


use Doctrine\ORM\EntityManagerInterface;

class PlayerType
{
    private $em;
    private $player;

    /**
     * Inventory constructor.
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }


}