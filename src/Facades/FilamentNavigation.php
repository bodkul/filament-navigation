<?php

namespace Bodkul\FilamentNavigation\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Bodkul\FilamentNavigation\FilamentNavigation
 */
class FilamentNavigation extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Bodkul\FilamentNavigation\FilamentNavigation::class;
    }
}
