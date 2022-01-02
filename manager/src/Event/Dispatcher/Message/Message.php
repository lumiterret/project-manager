<?php

namespace App\Event\Dispatcher\Message;

class Message
{
    private $event;

    public function __construct(object $event)
    {
        $this->event = $event;
    }

    public function getEvent(): object
    {
        return $this->event;
    }
}
