<?php

namespace Mwesterink\ServiceChecks\Tests;

use Mwesterink\ServiceChecks\Client;
use PHPUnit\Framework\TestCase;

/**
 * Class SimpleTest
 *
 * @package Mwesterink\ServiceChecks\Tests
 * @author  Michel Westerink <michel.westerink@cmtelecom.com>
 */
class SimpleTest extends TestCase
{

    /**
     * Success flow
     */
    public function testSimpleSumSuccessFlowFunction()
    {
        $varOne = 1;
        $varTwo = 2;
        $client = new Client();
        $sum = $client->sum($varOne, $varTwo);
        $this->assertEquals($sum, ($varOne + $varTwo));
    }

    /**
     * Sum with expected exception
     */
    public function testSimpleSumExpectedExceptionFlowFunction()
    {
        $varOne = 1;
        $varTwo = 'blabla';
        $client = new Client();
        $this->expectException(\Exception::class);
        $client->sum($varOne, $varTwo);
    }
}
