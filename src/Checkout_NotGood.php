<?php

namespace Riku929hr\UnitTestExample;

class Checkout_NotGood
{
    public function __construct(
        private DiscountService $discount
    ) {
    }

    public function checkout(int $total): void
    {
        if ($this->discount->needsDiscount($total)) {
            // 割引処理
            $checkoutPrice = $this->discount->discount($total);
        }

        // 何らかの処理
        // ...
    }
}
