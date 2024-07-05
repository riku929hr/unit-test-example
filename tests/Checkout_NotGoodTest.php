<?php

namespace Riku929hr\UnitTestExample\Tests;

use PHPUnit\Framework\TestCase;
use Riku929hr\UnitTestExample\Checkout_NotGood;
use Riku929hr\UnitTestExample\DiscountService;

class Checkout_NotGoodTest extends TestCase
{
    public function test_100未満の場合は割引されない()
    {
        $discountMock = $this->createMock(DiscountService::class);
        $discountMock->expects($this->once())->method('needsDiscount') // needsDiscountメソッドが呼ばれることを確認
            ->with(99)
            ->willReturn(false);
        $discountMock->expects($this->never()) // discountメソッドが呼ばれないことを確認
            ->method('discount');

        $checkout = new Checkout_NotGood($discountMock);
        $checkout->checkout(99);
    }

    public function test_100以上の場合は割引される()
    {
        $discountMock = $this->createMock(DiscountService::class);
        $discountMock->expects($this->once())
            ->method('needsDiscount')
            ->with(100)
            ->willReturn(true);
        $discountMock->expects($this->once())
            ->method('discount')
            ->with(100);
        $checkout = new Checkout_NotGood($discountMock);
        $checkout->checkout(100);
    }
}
