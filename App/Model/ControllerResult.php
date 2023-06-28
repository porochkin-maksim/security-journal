<?php

namespace App\Model;

class ControllerResult
{
    public string $success = '';
    public string $error   = '';

    /**  @var array|INC[]  */
    public array $incidents = [];
}