<?php

namespace Tests;

use App\BonusCalculator;
use Exception;
use PHPUnit\Framework\TestCase;

class BonusCalculatorTest extends TestCase
{
    /**
     * @test
     */
    public function should_throw_an_exception_if_calculate_bonus_receive_invalid_values()
    {
        $this->expectException(Exception::class);

        BonusCalculator::calculate(-1, 0);
        BonusCalculator::calculate(3, -2);
        BonusCalculator::calculate('a', 'b');
    }

    /**
     * @test
     */
    public function should_calculate_bonus()
    {
        $this->assertEquals(0, BonusCalculator::calculate(10000, 5));
        $this->assertEquals(1000, BonusCalculator::calculate(2000, 5));
        $this->assertEquals(1200, BonusCalculator::calculate(3000, 5));
        $this->assertEquals(2000, BonusCalculator::calculate(5000, 5));
        $this->assertEquals(0, BonusCalculator::calculate(15000, 0));
        $this->assertEquals(750, BonusCalculator::calculate(1500, 3));
        $this->assertEquals(1200, BonusCalculator::calculate(8000, 1));
        $this->assertEquals(600, BonusCalculator::calculate(2000, 1));
        $this->assertEquals(400, BonusCalculator::calculate(2000, 0));
    }
}