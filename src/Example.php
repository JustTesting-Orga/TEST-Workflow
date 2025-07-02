<?php

declare(strict_types=1);

namespace Icinga\Test;

class Example
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function greet(): string
    {
        return "Hello, {$this->name}!";
    }
}
