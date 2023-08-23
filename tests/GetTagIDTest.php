<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

require_once __DIR__.'/../index.php';

/**
 * @internal
 *
 * @coversNothing
 */
class GetTagIDTest extends TestCase
{
    // @test
    public function testGetTagIDReturnsTheExpectedID()
    {
        $examples = [
            '<div id="container"></div>',
            '<div id="container" id="container1"></div>',
            '<div id=container id="container1"></div>',
        ];
        $this->assertEquals(getTagID($examples[0]), 'container');
        $this->assertEquals(getTagID($examples[1]), 'container');
        $this->assertEquals(getTagID($examples[2]), 'container1');
    }
}
