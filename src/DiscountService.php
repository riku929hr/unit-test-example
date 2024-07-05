<?php

declare(strict_types=1);

namespace Riku929hr\UnitTestExample;

class DiscountService
{
    private const MINIMUM_DISCOUNT_PRICE = 100;
    private const DISCOUNT_AMOUNT = 10;

    public function needsDiscount(int $total): bool
    {
        return $total >= self::MINIMUM_DISCOUNT_PRICE;
    }

    public function discount(int $total): int
    {
        return $total - self::DISCOUNT_AMOUNT;
    }
}
