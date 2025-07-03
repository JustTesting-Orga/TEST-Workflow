<?php

declare(strict_types=1);

namespace YProject\Tests;

use PHPUnit\Framework\TestCase;
use Icinga\Module\TestModule\Example;

class ExampleTest extends TestCase
{
    public function testExample(): void
    {
        $example = new Example('World');
        $this->assertEquals('Hello, World!', $example->greet());
    }
}
