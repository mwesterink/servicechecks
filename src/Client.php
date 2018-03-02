<?php
/**
 * Class Client
 *
 * @package Mwesterink\ServiceChecks
 * @author  Michel Westerink <michel.westerink@cmtelecom.com>
 */

namespace Mwesterink\ServiceChecks;

use Mwesterink\ServiceChecks\Classes\Calculator;

class Client
{
    /**
     * Simple sum
     *
     * @param int $firstDigit
     * @param int $secondDigit
     *
     * @return int
     * @throws \Exception
     */
    public function sum($firstDigit, $secondDigit)
    {
        $calculator = new Calculator();

        return $calculator->sum($firstDigit, $secondDigit);
    }
}
