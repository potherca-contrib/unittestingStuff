<?php

namespace WordWrapper;

use PHPUnit\Framework\TestCase;

class WordWrapperTest extends TestCase
{
    function testFrameWorkWorks () {
        $this->assertTrue(true);
    }

    function testBlankInput () {
        $wrapper = New WordWrapper();

        $actual = $wrapper->wrap('');
        $expected = '';

        $this->assertTrue($expected === $actual);
    }

    function testWordWrapper () {
        $wrapper = New WordWrapper(10);

        $actual = $wrapper->wrap('test test test');
        $expected = "test test \n test";

        $this->assertEquals($expected, $actual);
    }

    function testPeriodsAtTheEnd() {
        $wrapper = new WordWrapper(5);

        $actual = $wrapper->wrap("Woord.");
        $expected = null;
    }
}