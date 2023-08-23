<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

require_once __DIR__.'/../index.php';

/**
 * @internal
 *
 * @coversNothing
 */
class UniqueTwoDTest extends TestCase
{
    public function testUniqueValuesFromTwoDArray()
    {
        $twoDArray = [
            ['a', 'b', 'c'],
            ['x', 'b', 'a'],
            ['z', 'z', 'v'],
        ];

        $expectedResult = ['a', 'b', 'c', 'x', 'z', 'v'];

        $result = getUniqueOf($twoDArray);

        $this->assertEquals($expectedResult, $result);
    }
}
