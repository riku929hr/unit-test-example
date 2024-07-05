<?php

namespace Riku929hr\UnitTestExample\Tests;

use Riku929hr\UnitTestExample\Checkout;
use Riku929hr\UnitTestExample\DiscountCalculator;

use PHPUnit\Framework\TestCase;

class CheckoutTest extends TestCase
{
    public function test_購入が成功する()
    {
        $discountCalculator = new DiscountCalculator();
        $checkout = new Checkout($discountCalculator);

        $this->assertTrue($checkout->checkout(100));
    }

    // public function test_割引無しで購入が成功する()
    // {
    //   $priceCalculator = $this->createMock(PriceCalculator::class);
    //   $priceCalculator->method('calculate')->willReturn(90);
    //
    //   $checkout = new Checkout($priceCalculator);
    // }
}
