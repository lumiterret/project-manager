<?php

namespace App\Model\Work\UseCase\Projects\Task\Start;

use Symfony\Component\Validator\Constraints as Assert;

class Command
{
    /**
     * @Assert\NotBlank()
     */
    public $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }
}
