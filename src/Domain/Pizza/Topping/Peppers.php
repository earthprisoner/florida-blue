<?php

namespace App\Domain\Pizza\Topping;

use Money\Money;

class Peppers extends BaseTopping
{
    protected function giveMeThePrice(): Money
    {
        return Money::EUR(50);
    }

    protected function giveMeTheDescription(): string
    {
        return 'Peppers';
    }
}
