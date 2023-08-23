<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

require_once __DIR__.'/../index.php';

/**
 * @internal
 *
 * @coversNothing
 */
class ListSearchTest extends TestCase
{
    // @test
    public function testSearchSortedList()
    {
        $sortedList = [1, 2, 3, 4, 5, 6, 7, 8];
        foreach ($sortedList as $index => $value) {
            $resultIndex = searchSortedList($sortedList, $value);
            $this->assertEquals($resultIndex, $index);
        }
        // test one item not found in the list
        $this->assertFalse(searchSortedList($sortedList, 100));
    }
}
