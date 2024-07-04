<?php

namespace Riku929hr\UnitTestExample;

class Checkout
{
  public function __construct(
    private PriceCalculator $priceCalculator
  ) {
  }

  /**
   * @param int[] $items
   */
  public function checkout(array $items): void
  {
    $total = array_sum($items);


    $this->priceCalculator->calculate($total);
    // 何らかの処理
    // ...

  }
}
