<?php

namespace Mwesterink\ServiceChecks\Tests;

/**
 * Class SimpleTest
 *
 * @package Mwesterink\ServiceChecks\Tests
 * @author  Michel Westerink <michel.westerink@cmtelecom.com>
 */
class SimpleTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Just a simple test function
     */
    public function testSimpleTestFunction()
    {
        $varOne = 'Test';
        $varTwo = 'Test';
        $this->assertEquals($varOne, $varTwo);
    }
}
