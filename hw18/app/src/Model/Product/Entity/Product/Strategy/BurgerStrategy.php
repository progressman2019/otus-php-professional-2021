<?php

declare(strict_types=1);

namespace App\Model\Product\Entity\Product\Strategy;

use App\Model\Product\Entity\Product\Factory\ProductFactoryInterface;
use App\Model\Product\Entity\Product\Factory\BurgerFactory;

class BurgerStrategy implements ProductStrategyInterface
{
    public function getProductFactory(): ProductFactoryInterface
    {
        return new BurgerFactory();
    }
}