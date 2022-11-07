<?php

namespace Bodkul\FilamentNavigation;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Bodkul\FilamentNavigation\Commands\FilamentNavigationCommand;

class FilamentNavigationServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filament-navigation')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_filament-navigation_table')
            ->hasCommand(FilamentNavigationCommand::class);
    }
}
