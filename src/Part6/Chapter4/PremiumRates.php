<?php

declare(strict_types=1);

namespace App\Part6\Chapter4;

class PremiumRates implements HotelRates
{
    public function busySeasonFee(): Money
    {
        return $this->fee()->add(
            other: new Money(amount: 5000),
        );
    }

    public function fee(): Money
    {
        return new Money(amount: 12000);
    }
}
