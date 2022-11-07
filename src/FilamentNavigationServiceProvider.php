<?php

namespace Bodkul\FilamentNavigation;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Bodkul\FilamentNavigation\Filament\Resources\NavigationResource;

class FilamentNavigationServiceProvider extends PluginServiceProvider
{
    protected array $resources = [
        NavigationResource::class,
    ];

    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-navigation')
            ->hasMigration('create_navigations_table')
            ->hasInstallCommand(function(InstallCommand $command) {
                $command
                    ->publishMigrations()
                    ->askToStarRepoOnGitHub('bodkul/filament-navigation');
            });
    }
}
