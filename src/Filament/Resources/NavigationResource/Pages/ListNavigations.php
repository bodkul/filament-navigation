<?php

namespace Bodkul\FilamentNavigation\Filament\Resources\NavigationResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Bodkul\FilamentNavigation\Filament\Resources\NavigationResource;

class ListNavigations extends ListRecords
{
    protected static string $resource = NavigationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
