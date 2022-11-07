<?php

namespace Bodkul\FilamentNavigation\Commands;

use Illuminate\Console\Command;

class FilamentNavigationCommand extends Command
{
    public $signature = 'filament-navigation';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
