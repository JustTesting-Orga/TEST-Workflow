<?php
declare(strict_types=1);

namespace Icinga\Test\Tests;

use Icinga\Test\Example;

class ExampleTest extends TestCase
{
    public function testExample(): void
    {
        $example = new Example('World');
        $this->assertEquals('Hello, World!', $example->greet());
    }
}