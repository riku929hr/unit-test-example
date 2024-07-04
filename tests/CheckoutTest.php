<?php

namespace Riku929hr\UnitTestExample\Tests;

use Riku929hr\UnitTestExample\Checkout;
use Riku929hr\UnitTestExample\PriceCalculator;

use PHPUnit\Framework\TestCase;

class CheckoutTest extends TestCase
{
  public function test_割引されて購入が成功する()
  {
    $priceCalculator = $this->createMock(PriceCalculator::class);

    $priceCalculator->expects($this->once())
      ->method('calculate')
      ->with(10); // 1+2+3+4 = 10

    $checkout = new Checkout($priceCalculator);
    $checkout->checkout([1, 2, 3, 4]);
  }

  public function test_割引無しで購入が成功する()
  {
    $priceCalculator = $this->createMock(PriceCalculator::class);
    $priceCalculator->method('calculate')->willReturn(90);

    $checkout = new Checkout($priceCalculator);
  }
}
