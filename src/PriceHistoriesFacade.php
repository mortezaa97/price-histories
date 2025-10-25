<?php

namespace Mortezaa97\PriceHistories;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mortezaa97\PriceHistories\Skeleton\SkeletonClass
 */
class PriceHistoriesFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'price-histories';
    }
}
