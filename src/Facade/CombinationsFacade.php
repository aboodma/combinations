<?php

namespace Aboodma\Combinations\Facade;

use Illuminate\Support\Facades\Facade;


class CombinationsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'combinations';
    }
}