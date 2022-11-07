<?php

namespace Bodkul\FilamentNavigation;

use Bodkul\FilamentNavigation\Models\Navigation;

class FilamentNavigation
{
    public function get(string $name): ?Navigation
    {
        return Navigation::firstWhere('name', $name);
    }
}
