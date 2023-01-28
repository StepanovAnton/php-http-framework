<?php

declare(strict_types=1);

namespace Test\App;

use PHPUnit\Framework\TestCase;
use App\Example;

/**
 * @internal
 */
final class ExampleTest extends TestCase
{
    public function testDo(): void
    {
        $example = new Example();

        $result = $example->do();

        self::assertEquals(42, $result);
    }
}
