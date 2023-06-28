<?php

namespace App;

use App\Services\SingletonTrait;

class Request
{
    use SingletonTrait;

    private array $query = [];

    private function __construct()
    {
        $this->query = $_REQUEST;
    }

    public function all(): array
    {
        return $this->query;
    }

    public function hasSubmit(): bool
    {
        return !empty($this->query['submit']);
    }

    public function hasDeleteSubmit(): bool
    {
        return !empty($this->query['delete_submit']);
    }
}