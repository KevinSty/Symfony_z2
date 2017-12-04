<?php

namespace App\Event;

use Symfony\Component\EventDispatcher\Event;

class PlayerEvent extends Event{
    private $player;

    public function getPlayer()
    {
        return $this->player;
    }

    public function setPlayer($player)
    {
        $this->player = $player;
    }
}