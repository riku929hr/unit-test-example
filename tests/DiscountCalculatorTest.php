<?php

namespace Riku929hr\UnitTestExample\Tests;

use Riku929hr\UnitTestExample\DiscountCalculator;

use PHPUnit\Framework\TestCase;

class DiscountCalculatorTest extends TestCase
{
    public function test_100未満では割引されない()
    {
        $priceCalculator = new DiscountCalculator();
        $this->assertSame(99, $priceCalculator->calculate(99));
    }

    public function test_100以上で10割引される()
    {
        $priceCalculator = new DiscountCalculator();
        $this->assertSame(90, $priceCalculator->calculate(100));
    }
}
