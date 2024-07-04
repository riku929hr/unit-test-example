<?php

namespace Riku929hr\UnitTestExample\Tests;

use Riku929hr\UnitTestExample\PriceCalculator;

use PHPUnit\Framework\TestCase;

class PriceCalculatorTest extends TestCase
{
  public function test_100未満では割引されない()
  {
    $priceCalculator = new PriceCalculator();
    $this->assertSame(99, $priceCalculator->calculate(99));
  }

  public function test_100以上で10割引される()
  {
    $priceCalculator = new PriceCalculator();
    $this->assertSame(90, $priceCalculator->calculate(100));
  }
}
