<?php

namespace Lib;

use Exceptions\NotDivideZeroException;
use Exceptions\NotIntegerException;
use Exceptions\NotScalarException;

class Math
{

    public function mul($a, $b)
    {
        if (!is_scalar($a) || !is_scalar($b)) {
            throw new NotScalarException();
        }

        if (!$this->isInteger($a) || !$this->isInteger($b)) {
            throw new NotIntegerException();
        }

        return (int) $a * (int) $b;
    }

    public function div($a, $b)
    {
        if (!is_scalar($a) || !is_scalar($b)) {
            throw new NotScalarException();
        }

        if (!$this->isInteger($a) || !$this->isInteger($b)) {
            throw new NotIntegerException();
        }

        if (0 === (int) $b) {
            throw new NotDivideZeroException();
        }

        return (int) $a / (int) $b;
    }

    public function sum($a, $b)
    {
        if (!is_scalar($a) || !is_scalar($b)) {
            throw new NotScalarException();
        }

        if (!$this->isInteger($a) || !$this->isInteger($b)) {
            throw new NotIntegerException();
        }

        return (int) $a + (int) $b;
    }

    public function sub($a, $b)
    {
        if (!is_scalar($a) || !is_scalar($b)) {
            throw new NotScalarException();
        }

        if (!$this->isInteger($a) || !$this->isInteger($b)) {
            throw new NotIntegerException();
        }

        return (int)$a - (int)$b;
    }

    public function eq($a, $b)
    {
        if (!is_scalar($a) || !is_scalar($b)) {
            throw new NotScalarException();
        }

        if (!$this->isInteger($a) || !$this->isInteger($b)) {
            throw new NotIntegerException();
        }

        return (int) $a === (int)$b;
    }

    public function greaterThan($a, $b)
    {
        if (!is_scalar($a) || !is_scalar($b)) {
            throw new NotScalarException();
        }

        if (!$this->isInteger($a) || !$this->isInteger($b)) {
            throw new NotIntegerException();
        }

        return (int) $a > (int) $b;
    }

    public function greaterOrEqualThan($a, $b)
    {
        if (!is_scalar($a) || !is_scalar($b)) {
            throw new NotScalarException();
        }

        if (!$this->isInteger($a) || !$this->isInteger($b)) {
            throw new NotIntegerException();
        }

        return (int) $a >= (int) $b;
    }

    public function lessThan($a, $b)
    {
        if (!is_scalar($a) || !is_scalar($b)) {
            throw new NotScalarException();
        }

        if (!$this->isInteger($a) || !$this->isInteger($b)) {
            throw new NotIntegerException();
        }

        return (int) $a < (int) $b;
    }

    public function lessOrEqualThan($a, $b)
    {
        if (!is_scalar($a) || !is_scalar($b)) {
            throw new NotScalarException();
        }

        if (!$this->isInteger($a) || !$this->isInteger($b)) {
            throw new NotIntegerException();
        }

        return (int) $a <= (int) $b;
    }

    public function comp($a, $b)
    {
        if (!is_scalar($a) || !is_scalar($b)) {
            throw new NotScalarException();
        }

        if (!$this->isInteger($a) || !$this->isInteger($b)) {
            throw new NotIntegerException();
        }

        if ((int) $a > (int) $b) {
            return 1;
        }
        if ((int) $a < (int) $b) {
            return -1;
        }

        return 0;
    }

    public function pow($a, $b)
    {
        if (!is_scalar($a) || !is_scalar($b)) {
            throw new NotScalarException();
        }

        if (!$this->isInteger($a) || !$this->isInteger($b)) {
            throw new NotIntegerException();
        }

        return pow((int) $a, (int) $b);
    }

    public function sqrt($a)
    {
        if (!is_scalar($a)) {
            throw new NotScalarException();
        }

        if (!$this->isInteger($a)) {
            throw new NotIntegerException();
        }

        return sqrt((int) $a);
    }

    public function abs($a)
    {
        if (!is_scalar($a)) {
            throw new NotScalarException();
        }

        if (!$this->isInteger($a)) {
            throw new NotIntegerException();
        }

        return abs((int) $a);
    }

    private function isInteger($number)
    {
        $dotArray = explode('.', $number);
        $commaArray = explode(',', $number);

        return count($commaArray) === 1 && count($dotArray) == 1;
    }
}