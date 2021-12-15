<?php

namespace App\Model\User\UseCase\Role;

use Symfony\Component\Validator\Constraints as Assert;

class Command
{
    /**
     * @var string
     */
    public $id;
    /**
     * @var string
     */
    public $role;

    public function __construct(string $id)
    {
        $this->id = $id;
    }
}
