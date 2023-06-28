<?php

namespace App\Controller;

use App\Model\ControllerResult;

abstract class AbstractController
{
    abstract public function __invoke(): ControllerResult;
}