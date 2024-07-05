<?php

namespace Riku929hr\UnitTestExample;

class DiscountCalculator
{
    private const MINIMUM_DISCOUNT_PRICE = 100;
    private const DISCOUNT_AMOUNT = 10;

    private function needsDiscount(int $total): bool
    {
        return $total >= self::MINIMUM_DISCOUNT_PRICE;
    }

    public function calculate(int $total): int
    {
        if ($this->needsDiscount($total)) {
            return $total - self::DISCOUNT_AMOUNT;
        }
        return $total;
    }
}
