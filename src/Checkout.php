<?php

namespace Riku929hr\UnitTestExample;

use Throwable;

class Checkout
{
    public function __construct(
        private DiscountCalculator $priceCalculator
    ) {
    }

    public function checkout(int $total): bool
    {
        try {
            $this->priceCalculator->calculate($total);
            // 何らかの処理
            // ...
            return true;
        } catch (Throwable $e) {
            // 何らかの処理
            return false;
        }
    }
}
