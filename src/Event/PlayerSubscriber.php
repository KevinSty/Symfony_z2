<?php

namespace App\Event;

use App\Event\AppEvent;
use App\Event\PlayerEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class PlayerSubscriber implements EventSubscriberInterface {

    private $entityManager

    public function __construc(EntityManagerInterface $entityManager) {
        $this->entityManager = $entityManager;
    }

    public static function getSubscribedEvents()
    {
        return array(
            AppEvent::PLAYER_ADD => 'playerAdd'
        );
    }

    public function playerAdd(PlayerEvent $playerEvent){

        echo 'ok ajout player';
    }

}