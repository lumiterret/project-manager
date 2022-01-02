<?php

namespace App\Model;

namespace App\Model;

interface EventDispatcher
{
    public function dispatch(array $events): void;
}
