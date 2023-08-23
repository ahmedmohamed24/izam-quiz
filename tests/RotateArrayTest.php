<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

require_once __DIR__.'/../index.php';

/**
 * @internal
 *
 * @coversNothing
 */
class RotateArrayTest extends TestCase
{
    // @test
    public function testRotateArrayReturnsExpectedRotatedArray()
    {
        $givingArray = [
            ['a', 'd', 'f'],
            ['k', 'n', 'p'],
            ['r', 's', 'v'],
            ['x', 'y', 'z'],
        ];
        $expectedArray = [
            ['a', 'd', 'f'],
            ['p', 'k', 'n'],
            ['s', 'v', 'r'],
            ['x', 'y', 'z'],
        ];
        $this->assertEquals(rotateArray($givingArray), $expectedArray);
    }
}
