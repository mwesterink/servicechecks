<?php
/**
 * Class Calculator
 *
 * @package Mwesterink\ServiceChecks\Classes
 * @author  Michel Westerink <michel.westerink@cmtelecom.com>
 */

namespace Mwesterink\ServiceChecks\Classes;

class Calculator
{
    /**
     * @param int $firstDigit
     * @param int $secondDigit
     *
     * @return int
     * @throws \Exception
     */
    public function sum($firstDigit, $secondDigit)
    {
        if (!is_numeric($firstDigit) || !is_numeric($secondDigit)) {
            throw new \Exception('One of the digits is not numeric');
        }

        return $firstDigit + $secondDigit;
    }
}
